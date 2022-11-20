
const MessageServerError = '<div class="alert alert-sm alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-warning"></i> <strong>Server Connection Error</strong> Oops Something Went Wrong! </div ></div>';
const MessageFieldRequired = '<div class="alert alert-sm alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-warning"></i> <strong>System Error!</strong> Please Enter Missing Fields! </div ></div>';
const MessagePasswordNotMatch = '<div class="alert alert-sm alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-warning"></i> <strong>System Error!</strong> Password Doest Not Match! </div ></div>.';
const ContentLoading = '<section class="content-header"><h1><i class="fa fa-refresh fa-spin fa-fw"></i> Loading Content<small>Please wait...</small> </h1> </section>';

function clearErrors() {
  // Remove all error css
  $('form>.alert-danger').hide();
  $(".is-invalid").removeClass("is-invalid");
}

function errorFields(strings) {
  $.each(strings.split(","), function (i,word) {
    var field = $('[name="'+word+'"]');
      if (!$(field).hasClass("is-invalid")) {
        $(field).addClass("is-invalid");
      }
  });
}

function requireFields(strings) {
  var errors = 0;
  $.each(strings.split(","), function (i,word) {
    var field = $('[name="'+word+'"]');
    if (field.val() == "" || field.val() == null || field.val().length == 0) {
      if (!$(field).hasClass("is-invalid")) {
        $(field).addClass("is-invalid");
        errors++;
      }
    }
  });
  return (errors == 0) ? true : false;
}


$(document).on("click", '.a-view', function () {  
  var page = $(this).attr('name');
  var id = $(this).attr('value');
  window.open(base_url + "?page=" + page + "&id=" + id, '_blank');

});


$(document).on("click", '.btn-edit, .btn-view', function () {
  let ele = $(this);
  let icon = ele.children('i');
  
  let current_icon = icon.attr('class'); // current icon
  
  ele.attr('disabled');
  icon.removeClass();
  icon.addClass('fa fa-spinner fa-pulse fa-fw');
  
  let page = ele.attr('name');
  let id = (ele.attr('value')) ? ele.attr('value') : 0;
  
  $("#result").html('');
  $("#content").html(ContentLoading);
  
  
  $('a.active').removeClass('active');
  // console.log($('.sidebar-menu .tree>li'));
  $(this).addClass('active');
  
  $("#content").load(base_url + 'page.php?page=' + page + '&id=' + id,
     (response, status, xhr) => {
      if (status == "error") {
        $('#result').html(MessageServerError);  
      }
        ele.removeAttr('disabled');
        icon.removeClass();
        icon.addClass(current_icon);
    }
  );
});

$(document).on("submit", 'form', function (e) {
  e.preventDefault();
  clearErrors();
  var form_raw = this;
  var form_name = this.name;
  var type = e.originalEvent.submitter.name;
  var type_value = e.originalEvent.submitter.value;
  if (this.name == 'logout') {
    window.location.href = base_url+'logout.php';
  }
  

  formdata = new FormData(this);
  formdata.append('form', form_name);
  formdata.append(type, type_value);
    
  let submit_btn = $(e.originalEvent.submitter);
  let refresh = $(this).attr('refresh');
  let icon = submit_btn.children('i');
  let current_icon = icon.attr('class'); // current icon
  if (submit_btn.attr("confirmation")) {
    Swal.fire({
      title: 'Confirmation!',
      text: submit_btn.attr("confirmation"),
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#343a40',
      confirmButtonText: 'Proceed'
    }).then((result) => {
      if (result.isConfirmed) {

        return request(submit_btn, form_name, formdata, refresh);
      } 
        submit_btn.removeAttr('disabled');
        icon.removeClass();
        icon.addClass(current_icon);
        return false;
    })
  } else {
    request(submit_btn, form_name, formdata, refresh);
  }

});

function request(submit_btn,form_name,formdata, refresh ='') {
  $.ajax({
    method: "POST",
    url: base_url + "request.php",
    data: formdata,
    processData: false,
    contentType: false,
    success: function (res) {
      var result = JSON.parse(res);
      $('#result').html(result.result);
      if (result.status == true) {
        // $(form_raw).trigger('reset');
      }
      if (result.status == true) {
          $("#content").load(base_url + 'page.php?page='+refresh);        
      }
      if (result.items != '') {
        errorFields(result.items);
      }
      submit_btn.removeAttr('disabled');
      
      let icon = submit_btn.children('i');
      let current_icon = icon.attr('class'); // current icon
      icon.removeClass();
      icon.addClass(current_icon);
            if (result.refresh == true) {
              location.reload();
      }
    }
  });
}

function dropdown_with_default(dropdown_to_populate, table, where, id, display, value, selected = "") {
  $.ajax({
    url: base_url + 'request.php',
    type: 'POST',
    data: { form: 'get_dropdown',table: table, where: where, id: id, display: display, value: value, selected: selected },
    success: function (response) {
      $('#' + dropdown_to_populate + '').html(response);
    }
  });
}



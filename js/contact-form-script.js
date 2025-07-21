//<!-- application form Start -->

$("#applicationForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        applyError();
        if ( $('html').attr('lang') == 'ar' ) {
          submitMSGapply(false, "الرجاء التأكد من المعلومات كاملة !!");
        } else {
          submitMSGapply(false, "Did you fill in the application properly?");
        }
    } else if (document.getElementById('invalidCheck').checked == false) {

      if ( $('html').attr('lang') == 'ar' ) {
        $("#check_text").removeClass().addClass("ar-txt alert alert-danger").text("الرجاء الموافقة على الشروط");
      } else {
        $("#check_text").removeClass().addClass("alert alert-danger").text("Please accept the terms!");
     }
     return false;
    } else {
        // everything looks good!
        event.preventDefault();
        submitApply();
    }
});



function submitApply(){
    // Initiate Variables With Form Content
    var name_apply = $("#name_apply").val();
   // var project_apply = $("#project_apply").val();
    var mobile_apply = $("#mobile_apply").val();
    //var loan_apply = $("#type_apply").val();
   // var cpr_apply = $("#cpr_apply").val();
   // var amount_apply = $("#subcategory").val();
   // var address_apply = $("#address_apply").val();
    //var job_apply = $("#job_apply").val();

  //  var e = document.getElementById("type_apply");
  //  var value = e.options[e.selectedIndex].value;
   // var loan_apply = e.options[e.selectedIndex].text;

   // var bankname1 = $("#bankname1").val();
    //var salaryvalue1 = $("#salaryvalue1").val();
    //var bankname2 = $("#bankname2").val();
    //var others = $("#others").val();

    //var radio = $("input[name='Options']:checked").parent('label').text();

    $.ajax({
        type: "POST",
        url: "php/application-process.php",
        data: "name=" + name_apply + "&mobile=" + mobile_apply ,
        success : function(text){
            if (text == "success"){
                applySuccess();
            } else {
                applyError();
                submitMSGapply(false,text);
            }
        }
    });
}

function applySuccess(){
    $("#applicationForm")[0].reset();
    $("#check_text").removeClass().addClass("hidden").text("")
    if ( $('html').attr('lang') == 'ar' ) {
      submitMSGapply(true, "تم ارسال طلبك");
    } else {
      submitMSGapply(true, "Application Submitted!");
    }

}

function applyError(){
    $("#applicationForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSGapply(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit-apply").removeClass().addClass(msgClasses).text(msg);
}


//<!-- application form end -->

//<!-- contact form Start -->

$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSGform(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name_contact = $("#name_contact").val();
	var mobile_contact = $("#mobile_contact").val();
    var email_contact = $("#email_contact").val();
    var subject_contact = $("#subject_contact").val();
    var message_contact = $("#message_contact").val();


    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "name=" + name_contact + "&mobile=" + mobile_contact + "&email=" + email_contact + "&subject_contact=" + subject_contact + "&message=" + message_contact,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSGform(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    if ( $('html').attr('lang') == 'ar' ) {
      submitMSGform(true, "تم ارسال رسالتك");
    } else {
      submitMSGform(true, "Message Submitted!");
    }
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSGform(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit-form").removeClass().addClass(msgClasses).text(msg);
}
//<!-- contact form end -->

//<!-- Jobs form Start -->


var allowed_file_size 	= "5242880"; //5 MB allowed file size
var uploadField = document.getElementById("cv_job");

//check file size
uploadField.onchange = function() {
    if(this.files[0].size > allowed_file_size){
      if ( $('html').attr('lang') == 'ar' ) {
        alert("لقد تجاوز حجم الملف 5MB");
      } else {
        alert("File is larger than 5 MB!");
      }
       this.value = "";
    }
};

$("#jobsForm").validator().on("submit", function (event) {

  if (event.isDefaultPrevented()) {
    proceed = false;
    $("#jobsForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
  }else{
    event.preventDefault(); //prevent default action
  	proceed = true;

  	//if everything's ok, continue with Ajax form submit
  	if(proceed){
  		var post_url = $(this).attr("action"); //get form action url
  		var request_method = $(this).attr("method"); //get form GET/POST method
  		var form_data = new FormData(this); //Creates new FormData object

  		$.ajax({ //ajax form submit
  			url : post_url,
  			type: request_method,
  			data : form_data,
  			dataType : "json",
  			contentType: false,
  			cache: false,
  			processData:false
  		}).done(function(res){ //fetch server "json" messages when done
  			if(res.type == "error"){
          $("#msgSubmit-job").html('<div class="h3 text-center text-danger">Please check the ' + res.type + '</div>');

          $("#alert").css('display','block');
  			}


  			if(res.type == "done"){
          $("#jobsForm")[0].reset();
          $("#alert").css('display','none');
          if ( $('html').attr('lang') == 'ar' ) {
            $("#msgSubmit-job").html('<div class="h3 text-center tada animated text-success">لقد تم ارسال سيرتك الذاتية</div>');
          } else {
            $("#msgSubmit-job").html('<div class="h3 text-center tada animated text-success">Your CV have been submitted!</div>');
          }
  			}


  		});
  	}

  }

});


//<!-- Jobs form end -->

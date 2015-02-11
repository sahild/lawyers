(function($) {
    "use strict";
	
	 var options1 = { success: showResponse, beforeSubmit: showRequest}; 
    $('#evaluation-form').submit(function() { 
        $(this).ajaxSubmit(options1); 
        return false; 
    });
	})(jQuery);


function showResponse(responseText, statusText)  { 
	if (statusText == 'success') {
		jQuery('#evaluation-form-holder').html('<h5 class="alignc">'+eFobject.msg_sent+'</h5>'); 
		jQuery('#output-evaluation').html('<p>' + eFobject.msg_sent2 +'</p>'); 
	} else {
		alert('status: ' + statusText + '\n\nSomething is wrong here');
	}
}

function showRequest(formData, jqForm, options1) { 
	var form = jqForm[0];
	var validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
		
	if (!form.nameeval.value) { 
		jQuery('#output-evaluation').html('<div class="output2">'+eFobject.name_error+'</div>');
		return false; 
	} else if (!form.emaileval.value) {
		jQuery('#output-evaluation').html('<div class="output2">'+eFobject.email_error+'</div>'); 
		return false; 
	} else if (form.emaileval.value.search(validRegExp) == -1) {
		jQuery('#output-evaluation').html('<div class="output2">'+eFobject.emailvalid_error+'</div>'); 
		return false; 
	}
	else if (!form.subjecteval.value) {
		jQuery('#output-evaluation').html('<div class="output2">'+eFobject.subject_error+'</div>'); 
		return false; 
	}
	else if (!form.messageeval.value) {
		jQuery('#output-evaluation').html('<div class="output2">'+eFobject.message_error+'</div>'); 
		return false; 
	}
	
	else {	   
	 jQuery('#output-evaluation').html(eFobject.send_msg);  		
		return true;
	}
}
(function($) {
    "use strict";
	
	var options2 = { success: showResponseContact, beforeSubmit: showRequestContact}; 
    $('#contact-form').submit(function() { 
        $(this).ajaxSubmit(options2); 
        return false; 
    });
	
	})(jQuery);

function showResponseContact(responseText, statusText)  { 
	if (statusText == 'success') {
		jQuery('#contact-form-holder').html('<h5>'+ cFobject.msg_sent +'</h5>'); 
		jQuery('#output-contact').html('<p>' + cFobject.msg_sent2  + '</p>'); 
	} else {
		alert('status: ' + statusText + '\n\nSomething is wrong here');
	}
}

function showRequestContact(formData, jqForm, options2) { 
	var form = jqForm[0];
	var validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
		
	if (!form.name.value) { 
		jQuery('#output-contact').html('<div class="output2">'+ cFobject.name_error +'</div>'); 
		return false; 
	} else if (!form.email.value) {
		jQuery('#output-contact').html('<div class="output2">'+ cFobject.email_error +'</div>'); 
		return false; 
	} else if (form.email.value.search(validRegExp) == -1) {
		jQuery('#output-contact').html('<div class="output2">'+ cFobject.emailvalid_error +'</div>'); 
		return false; 
	}
	else if (!form.subject.value) {
		jQuery('#output-contact').html('<div class="output2">'+ cFobject.subject_error +'</div>'); 
		return false; 
	}
	else if (!form.message.value) {
		jQuery('#output-contact').html('<div class="output2">'+ cFobject.message_error +'</div>'); 
		return false; 
	}
		
	 else {	   
	 jQuery('#output-contact').html(cFobject.send_msg);  		
		return true;
	}
}

function ValidateForm(frm) {
	sessionStorage.setItem('submitStatus', 'not submitted');
	if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
	if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
	if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
	if (frm.Message.value == "") { alert('Please enter comments or questions.'); frm.Message.focus(); return false; }
	sessionStorage.setItem('submitStatus', 'submitted');
return true; }

$(document).ready(function () {
    if (sessionStorage.getItem('submitStatus') !== null && sessionStorage.getItem('submitStatus') === 'submitted') {
    	$('#feedback').html('Thank you. Your message has been submitted.')
    	sessionStorage.setItem('submitStatus', 'not submitted');
    }
});

function verifConfirmEmail(mail,cmail) {
	var email1 = form.mail.value;
	var email2 = document.form.cmail.value;
	if (email2 != email1) {
		alert ("Les deux adresses mails doivent être identiques.");
		document.form.cmail.value = "";
		document.form.mail.focus();
		return false;
		}
	return true;
}
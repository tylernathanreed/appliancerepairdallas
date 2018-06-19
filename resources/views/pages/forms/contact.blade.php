<form class="margin-clear">
	@include('pages.forms.fields.contact-name')
	@include('pages.forms.fields.contact-email')
	@include('pages.forms.fields.contact-subject')
	@include('pages.forms.fields.contact-message')

	<input type="submit" value="Submit" class="submit-button btn btn-default">
</form>
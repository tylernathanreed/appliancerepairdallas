<form class="margin-clear">
    <div class="form-row">
        <div class="col-md-6">
            @include('pages.forms.fields.contact-name')
        </div>

        <div class="col-md-6">
            @include('pages.forms.fields.contact-email')
        </div>
    </div>

    @include('pages.forms.fields.contact-subject')
    @include('pages.forms.fields.contact-message')

    <input type="submit" value="Submit" class="submit-button btn btn-lg btn-default">
</form>
<form class="margin-clear">
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" id="name" placeholder="Name" required>
                <i class="fa fa-user form-control-feedback"></i>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                <i class="fa fa-envelope form-control-feedback"></i>
            </div>
        </div>
    </div>

    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="subject" placeholder="Subject" required>
        <i class="fa fa-navicon form-control-feedback"></i>
    </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" rows="6" id="message" placeholder="Message" required></textarea>
        <i class="fa fa-pencil form-control-feedback"></i>
    </div>

    <input type="submit" value="Submit" class="submit-button btn btn-lg btn-default">
</form>
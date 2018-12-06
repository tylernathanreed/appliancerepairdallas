@extends('pages.component-pages.layout')

@section('page.main')

    <section>
        <h2 class="mt-5">Basic example</h2>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">
                    Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </section>

    <section>
        <h2 class="mt-5">Inline form</h2>
        <form class="form-inline">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">

            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
            </div>

            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">
                    Remember me
                </label>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </section>

    <section>
        <h2 class="mt-5">Horizontal form</h2>
        <form>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <fieldset class="form-group">
                <legend class="col-form-legend col-sm-2">Radios</legend>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                Option one is this and that be sure to include why it's great
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                Option two can be something else and selecting it will deselect option one
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                Option three is disabled
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>
    </section>

    <section>
        <h2>Text Area</h2>
        <form>
            <div class="form-group">
                <label for="exampleTextarea">Example textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
        </form>
    </section>

    <section>
        <h2 class="mt-5">Checkboxes and radios</h2>
        <form>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="">
                <label class="form-check-label">
                    Option one is this and that be sure to include why it's great
                </label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="checkbox" value="" disabled>
                <label class="form-check-label">
                    Option two is disabled
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label">
                    1
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label">
                    2
                </label>
            </div>
            <div class="form-check form-check-inline disabled">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                <label class="form-check-label">
                    3
                </label>
            </div>
            <br>
            <br>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label">
                    Option one is this and that be sure to include why it's great
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label">
                    Option two can be something else and selecting it will deselect option one
                </label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label">
                    Option three is disabled
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label">
                    1
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label">
                    2
                </label>
            </div>
            <div class="form-check form-check-inline disabled">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                <label class="form-check-label">
                    3
                </label>
            </div>
        </form>
    </section>

    <section>
        <h2 class="mt-5">Selects</h2>
        <form>
            <div class="form-group">
                <label for="exampleSelect1">Example select</label>
                <select class="form-control" id="exampleSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </form>
    </section>

    <section>
        <h2 class="mt-5">Disabled</h2>
        <form>
            <fieldset disabled>
                <div class="form-group">
                    <label for="disabledTextInput">Disabled input</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                </div>
                <div class="form-group">
                    <label for="disabledSelect">Disabled select menu</label>
                    <select id="disabledSelect" class="form-control">
                        <option>Disabled select</option>
                    </select>
                </div>
                <div class="checkbox">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Can't check this
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </fieldset>
        </form>
    </section>

    <section>
        <h2 class="mt-5">Validation states</h2>
        <form>
            <div class="form-group">
                <label for="inputSuccess1">Input with success</label>
                <input type="text" class="form-control is-valid" id="inputSuccess1">
                <div class="valid-feedback">Success! You've done it.</div>
            </div>
            <div class="form-group">
                <label for="inputWarning1">Input with warning</label>
                <input type="text" class="form-control is-warning" id="inputWarning1">
                <div class="warning-feedback">Shucks, check the formatting of that and try again.</div>
            </div>
            <div class="form-group">
                <label for="inputDanger1">Input with danger</label>
                <input type="text" class="form-control is-invalid" id="inputDanger1">
                <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
            </div>
        </form>
    </section>

    <section>
        <h2 class="mt-5">With optional icons</h2>
        <form>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                        <label for="inputSuccess2">Input with success</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess2">
                        <i class="fa fa-check form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                        <label for="inputWarning2">Input with warning</label>
                        <input type="text" class="form-control is-warning" id="inputWarning2">
                        <i class="fa fa-warning form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                        <label for="inputError2">Input with error</label>
                        <input type="text" class="form-control is-invalid" id="inputError2">
                        <i class="fa fa-times form-control-feedback"></i>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                        <label>Username</label>
                        <input type="text" class="form-control">
                        <i class="fa fa-user form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                        <label>Password</label>
                        <input type="password" class="form-control">
                        <i class="fa fa-lock form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                        <label>Email</label>
                        <input type="email" class="form-control">
                        <i class="fa fa-envelope-o form-control-feedback"></i>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection

@section('page.bottom')

    <div class="section light-gray-bg">
        <div class="container">
            <h2>Form elements (Gray Background)</h2>
            <form>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputSuccess3">Input with success</label>
                            <input type="text" class="form-control is-valid" id="inputSuccess3">
                            <i class="fa fa-check form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputWarning3">Input with warning</label>
                            <input type="text" class="form-control is-warning" id="inputWarning3">
                            <i class="fa fa-warning form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputError3">Input with error</label>
                            <input type="text" class="form-control is-invalid" id="inputError3">
                            <i class="fa fa-times form-control-feedback"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Username</label>
                            <input type="text" class="form-control">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Password</label>
                            <input type="password" class="form-control">
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Email</label>
                            <input type="email" class="form-control">
                            <i class="fa fa-envelope-o form-control-feedback"></i>
                        </div>
                    </div>
                </div>
            </form>
            <form>
                <div class="form-group">
                    <label for="disabledTextInput2">Disabled input</label>
                    <input type="text" id="disabledTextInput2" class="form-control" placeholder="Disabled input" disabled="">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                        Option one is this and that be sure to include why it's great
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="checkbox" value="" disabled>
                    <label class="form-check-label">
                        Option two is disabled
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios12" value="option1" checked>
                    <label class="form-check-label">
                        Option one is this and that be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2">
                    <label class="form-check-label">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios32" value="option3" disabled>
                    <label class="form-check-label">
                        Option three is disabled
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

    <div class="section dark-bg text-muted">
        <div class="container">
            <h2>Form elements (Dark Background)</h2>
            <form>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputSuccess4">Input with success</label>
                            <input type="text" class="form-control is-valid" id="inputSuccess4">
                            <i class="fa fa-check form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputWarning4">Input with warning</label>
                            <input type="text" class="form-control is-warning" id="inputWarning4">
                            <i class="fa fa-warning form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputError4">Input with error</label>
                            <input type="text" class="form-control is-invalid" id="inputError4">
                            <i class="fa fa-times form-control-feedback"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Username</label>
                            <input type="text" class="form-control">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Password</label>
                            <input type="password" class="form-control">
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Email</label>
                            <input type="email" class="form-control">
                            <i class="fa fa-envelope-o form-control-feedback"></i>
                        </div>
                    </div>
                </div>
            </form>
            <form>
                <div class="form-group">
                    <label for="disabledTextInput23">Disabled input</label>
                    <input type="text" id="disabledTextInput23" class="form-control" placeholder="Disabled input" disabled="">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                        Option one is this and that be sure to include why it's great
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="checkbox" value="" disabled>
                    <label class="form-check-label">
                        Option two is disabled
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios13" value="option1" checked>
                    <label class="form-check-label">
                        Option one is this and that be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios23" value="option2">
                    <label class="form-check-label">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios33" value="option3" disabled>
                    <label class="form-check-label">
                        Option three is disabled
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            The <strong>Default Background</strong> is defined by the current color scheme.
        </div>
    </div>

    <div class="section default-bg">
        <div class="container">
            <h2>Form elements (Default Background)</h2>
            <form>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputSuccess5">Input with success</label>
                            <input type="text" class="form-control is-valid" id="inputSuccess5">
                            <i class="fa fa-check form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputWarning5">Input with warning</label>
                            <input type="text" class="form-control is-warning" id="inputWarning5">
                            <i class="fa fa-warning form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label for="inputError5">Input with error</label>
                            <input type="text" class="form-control is-invalid" id="inputError5">
                            <i class="fa fa-times form-control-feedback"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Username</label>
                            <input type="text" class="form-control">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Password</label>
                            <input type="password" class="form-control">
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group has-feedback">
                            <label>Email</label>
                            <input type="email" class="form-control">
                            <i class="fa fa-envelope-o form-control-feedback"></i>
                        </div>
                    </div>
                </div>
            </form>
            <form>
                <div class="form-group">
                    <label for="disabledTextInput24">Disabled input</label>
                    <input type="text" id="disabledTextInput24" class="form-control" placeholder="Disabled input" disabled="">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                        Option one is this and that be sure to include why it's great
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="checkbox" value="" disabled>
                    <label class="form-check-label">
                        Option two is disabled
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios14" value="option1" checked>
                    <label class="form-check-label">
                        Option one is this and that be sure to include why it's great
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios24" value="option2">
                    <label class="form-check-label">
                        Option two can be something else and selecting it will deselect option one
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios34" value="option3" disabled>
                    <label class="form-check-label">
                        Option three is disabled
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection
@extends('pages.component-pages.layout')

@section('page.main')

    <!-- Buttons start -->
    <!-- ============================================================================== -->
    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Basic Buttons</h2>
        <h4 class="mt-3">Small</h4>
        <a href="#" class="btn btn-default btn-sm">Default</a>
        <a href="#" class="btn btn-default-transparent btn-sm">White</a>
        <a href="#" class="btn btn-gray-transparent btn-sm">Dark Bordered</a>
        <a href="#" class="btn btn-gray btn-sm">Gray</a>
        <a href="#" class="btn btn-dark btn-sm">Dark</a>
        <h4 class="mt-3">Medium</h4>
        <a href="#" class="btn btn-default">Default</a>
        <a href="#" class="btn btn-default-transparent">White</a>
        <a href="#" class="btn btn-gray-transparent">Dark Bordered</a>
        <a href="#" class="btn btn-gray">Gray</a>
        <a href="#" class="btn btn-dark">Dark</a>
        <h4 class="mt-3">Large</h4>
        <a href="#" class="btn btn-default btn-lg">Default</a>
        <a href="#" class="btn btn-default-transparent btn-lg">White</a>
        <a href="#" class="btn btn-gray-transparent btn-lg">Dark Bordered</a>
        <a href="#" class="btn btn-gray btn-lg">Gray</a>
        <a href="#" class="btn btn-dark btn-lg">Dark</a>
        <h4 class="mt-3"> Extra Large</h4>
        <a href="#" class="btn btn-default btn-xl">Default</a>
        <a href="#" class="btn btn-default-transparent btn-xl">White</a>
        <a href="#" class="btn btn-gray-transparent btn-xl">Dark Bordered</a>
        <a href="#" class="btn btn-gray btn-xl">Gray</a>
        <a href="#" class="btn btn-dark btn-xl">Dark</a>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            The <strong>Default</strong> color is defined by the current color scheme.
        </div>
    </section>

    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Bootstrap Buttons</h2>
        <h4 class="mt-3">Small</h4>
        <a href="#" class="btn btn-primary btn-sm">Primary</a>
        <a href="#" class="btn btn-success btn-sm">Success</a>
        <a href="#" class="btn btn-info btn-sm">Info</a>
        <a href="#" class="btn btn-warning btn-sm">Warning</a>
        <a href="#" class="btn btn-danger btn-sm">Danger</a>
        <a href="#" class="btn btn-outline-primary btn-sm">Primary</a>
        <a href="#" class="btn btn-outline-secondary btn-sm">Secondary</a>
        <a href="#" class="btn btn-outline-success btn-sm">Success</a>
        <a href="#" class="btn btn-outline-info btn-sm">Info</a>
        <a href="#" class="btn btn-outline-warning btn-sm">Warning</a>
        <a href="#" class="btn btn-outline-danger btn-sm">Danger</a>
        <br>
        <h4 class="mt-3">Medium</h4>
        <a href="#" class="btn btn-primary">Primary</a>
        <a href="#" class="btn btn-success">Success</a>
        <a href="#" class="btn btn-info">Info</a>
        <a href="#" class="btn btn-warning">Warning</a>
        <a href="#" class="btn btn-danger">Danger</a>
        <a href="#" class="btn btn-outline-primary">Primary</a>
        <a href="#" class="btn btn-outline-secondary">Secondary</a>
        <a href="#" class="btn btn-outline-success">Success</a>
        <a href="#" class="btn btn-outline-info">Info</a>
        <a href="#" class="btn btn-outline-warning">Warning</a>
        <a href="#" class="btn btn-outline-danger">Danger</a>
        <br>
        <h4 class="mt-3">Large</h4>
        <a href="#" class="btn btn-primary btn-lg">Primary</a>
        <a href="#" class="btn btn-success btn-lg">Success</a>
        <a href="#" class="btn btn-info btn-lg">Info</a>
        <a href="#" class="btn btn-warning btn-lg">Warning</a>
        <a href="#" class="btn btn-danger btn-lg">Danger</a>
        <a href="#" class="btn btn-outline-primary btn-lg">Primary</a>
        <a href="#" class="btn btn-outline-secondary btn-lg">Secondary</a>
        <a href="#" class="btn btn-outline-success btn-lg">Success</a>
        <a href="#" class="btn btn-outline-info btn-lg">Info</a>
        <a href="#" class="btn btn-outline-warning btn-lg">Warning</a>
        <a href="#" class="btn btn-outline-danger btn-lg">Danger</a>
        <br>
        <h4 class="mt-3">Extra Large</h4>
        <a href="#" class="btn btn-primary btn-xl">Primary</a>
        <a href="#" class="btn btn-success btn-xl">Success</a>
        <a href="#" class="btn btn-info btn-xl">Info</a>
        <a href="#" class="btn btn-warning btn-xl">Warning</a>
        <a href="#" class="btn btn-danger btn-xl">Danger</a>
        <a href="#" class="btn btn-outline-primary btn-xl">Primary</a>
        <a href="#" class="btn btn-outline-secondary btn-xl">Secondary</a>
        <a href="#" class="btn btn-outline-success btn-xl">Success</a>
        <a href="#" class="btn btn-outline-info btn-xl">Info</a>
        <a href="#" class="btn btn-outline-warning btn-xl">Warning</a>
        <a href="#" class="btn btn-outline-danger btn-xl">Danger</a>
    </section>

    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Buttons With Animations</h2>
        <h4 class="mt-3">Small</h4>
        <a href="#" class="btn btn-animated btn-default-transparent btn-sm">Download <i class="fa fa-download"></i></a>
        <a href="#" class="btn btn-animated btn-gray-transparent btn-sm">Send <i class="fa fa-send-o"></i></a>
        <a href="#" class="btn btn-animated btn-gray btn-sm">Confirm <i class="fa fa-check"></i></a>
        <a href="#" class="btn btn-animated btn-dark btn-sm">Read More <i class="fa fa-arrow-right"></i></a>
        <a href="#" class="btn btn-animated btn-default btn-sm">Purchase <i class="fa fa-cart-arrow-down"></i></a>
        <a href="#" class="btn btn-animated btn-primary btn-sm">Login <i class="fa fa-lock"></i></a>
        <a href="#" class="btn btn-animated btn-success btn-sm">Send Email <i class="fa fa-envelope-o"></i></a>
        <a href="#" class="btn btn-animated btn-info btn-sm">Get Info <i class="fa fa-info-circle"></i></a>
        <a href="#" class="btn btn-animated btn-warning btn-sm">Upload <i class="fa fa-upload"></i></a>
        <a href="#" class="btn btn-animated btn-danger btn-sm">Cancel <i class="fa fa-times"></i></a>
        <h4 class="mt-3">Medium</h4>
        <a href="#" class="btn btn-animated btn-default-transparent">Download <i class="fa fa-download"></i></a>
        <a href="#" class="btn btn-animated btn-gray-transparent">Send <i class="fa fa-send-o"></i></a>
        <a href="#" class="btn btn-animated btn-gray">Confirm <i class="fa fa-check"></i></a>
        <a href="#" class="btn btn-animated btn-dark">Read More <i class="fa fa-arrow-right"></i></a>
        <a href="#" class="btn btn-animated btn-default">Purchase <i class="fa fa-cart-arrow-down"></i></a>
        <a href="#" class="btn btn-animated btn-primary">Login <i class="fa fa-lock"></i></a>
        <a href="#" class="btn btn-animated btn-success">Send Email <i class="fa fa-envelope-o"></i></a>
        <a href="#" class="btn btn-animated btn-info">Get Info <i class="fa fa-info-circle"></i></a>
        <a href="#" class="btn btn-animated btn-warning">Upload <i class="fa fa-upload"></i></a>
        <a href="#" class="btn btn-animated btn-danger">Cancel <i class="fa fa-times"></i></a>
        <h4 class="mt-3">Large</h4>
        <a href="#" class="btn btn-animated btn-lg btn-default-transparent">Download <i class="fa fa-download"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-gray-transparent">Send <i class="fa fa-send-o"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-gray">Confirm <i class="fa fa-check"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-dark">Read More <i class="fa fa-arrow-right"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-default">Purchase <i class="fa fa-cart-arrow-down"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-primary">Login <i class="fa fa-lock"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-success">Send Email <i class="fa fa-envelope-o"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-info">Get Info <i class="fa fa-info-circle"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-warning">Upload <i class="fa fa-upload"></i></a>
        <a href="#" class="btn btn-animated btn-lg btn-danger">Cancel <i class="fa fa-times"></i></a>
        <h4 class="mt-3">Extra Large</h4>
        <a href="#" class="btn btn-animated btn-xl btn-default-transparent">Download <i class="fa fa-download"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-gray-transparent">Send <i class="fa fa-send-o"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-gray">Confirm <i class="fa fa-check"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-dark">Read More <i class="fa fa-arrow-right"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-default">Purchase <i class="fa fa-cart-arrow-down"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-primary">Login <i class="fa fa-lock"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-success">Send Email <i class="fa fa-envelope-o"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-info">Get Info <i class="fa fa-info-circle"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-warning">Upload <i class="fa fa-upload"></i></a>
        <a href="#" class="btn btn-animated btn-xl btn-danger">Cancel <i class="fa fa-times"></i></a>
    </section>

    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Background Transitions</h2>
        <h4 class="mt-3">Small</h4>
        <a href="#" class="btn btn-default-transparent btn-sm">Fade</a>
        <a href="#" class="btn btn-default-transparent btn-sm btn-animation btn-animation--slide-to-right">Slide To Right</a>
        <a href="#" class="btn btn-default-transparent btn-sm btn-animation btn-animation--slide-to-left">Slide To Left</a>
        <a href="#" class="btn btn-default-transparent btn-sm btn-animation btn-animation--slide-to-bottom">Slide To Bottom</a>
        <a href="#" class="btn btn-default-transparent btn-sm btn-animation btn-animation--slide-to-top">Slide To Top</a>
        <a href="#" class="btn btn-default-transparent btn-sm btn-animation btn-animation--slide-horizontal">Slide Horizontal</a>
        <a href="#" class="btn btn-default-transparent btn-sm btn-animation btn-animation--slide-vertical">Slide Vertical</a>
        <h4 class="mt-3">Medium</h4>
        <a href="#" class="btn btn-default-transparent">Fade</a>
        <a href="#" class="btn btn-default-transparent btn-animation btn-animation--slide-to-right">Slide To Right</a>
        <a href="#" class="btn btn-default-transparent btn-animation btn-animation--slide-to-left">Slide To Left</a>
        <a href="#" class="btn btn-default-transparent btn-animation btn-animation--slide-to-bottom">Slide To Bottom</a>
        <a href="#" class="btn btn-default-transparent btn-animation btn-animation--slide-to-top">Slide To Top</a>
        <a href="#" class="btn btn-default-transparent btn-animation btn-animation--slide-horizontal">Slide Horizontal</a>
        <a href="#" class="btn btn-default-transparent btn-animation btn-animation--slide-vertical">Slide Vertical</a>
        <h4 class="mt-3">Large</h4>
        <a href="#" class="btn btn-default-transparent btn-lg">Fade</a>
        <a href="#" class="btn btn-default-transparent btn-lg btn-animation btn-animation--slide-to-right">Slide To Right</a>
        <a href="#" class="btn btn-default-transparent btn-lg btn-animation btn-animation--slide-to-left">Slide To Left</a>
        <a href="#" class="btn btn-default-transparent btn-lg btn-animation btn-animation--slide-to-bottom">Slide To Bottom</a>
        <a href="#" class="btn btn-default-transparent btn-lg btn-animation btn-animation--slide-to-top">Slide To Top</a>
        <a href="#" class="btn btn-default-transparent btn-lg btn-animation btn-animation--slide-horizontal">Slide Horizontal</a>
        <a href="#" class="btn btn-default-transparent btn-lg btn-animation btn-animation--slide-vertical">Slide Vertical</a>
        <h4 class="mt-3">Extra Large</h4>
        <a href="#" class="btn btn-default-transparent btn-xl">Fade</a>
        <a href="#" class="btn btn-default-transparent btn-xl btn-animation btn-animation--slide-to-right">Slide To Right</a>
        <a href="#" class="btn btn-default-transparent btn-xl btn-animation btn-animation--slide-to-left">Slide To Left</a>
        <a href="#" class="btn btn-default-transparent btn-xl btn-animation btn-animation--slide-to-bottom">Slide To Bottom</a>
        <a href="#" class="btn btn-default-transparent btn-xl btn-animation btn-animation--slide-to-top">Slide To Top</a>
        <a href="#" class="btn btn-default-transparent btn-xl btn-animation btn-animation--slide-horizontal">Slide Horizontal</a>
        <a href="#" class="btn btn-default-transparent btn-xl btn-animation btn-animation--slide-vertical">Slide Vertical</a>
    </section>

    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Button Links</h2>
        <h4 class="mt-3">Small</h4>
        <a href="#" class="btn-sm-link">Default<i class="fa fa-download pl-10"></i></a>
        <a href="#" class="text-primary btn-sm-link">Primary<i class="fa fa-cart-arrow-down pl-10"></i></a>
        <a href="#" class="text-success btn-sm-link">Success<i class="fa fa-check pl-10"></i></a>
        <a href="#" class="text-info btn-sm-link">Info<i class="fa fa-info-circle pl-10"></i></a>
        <a href="#" class="text-warning btn-sm-link">Warning<i class="fa fa-warning pl-10"></i></a>
        <a href="#" class="text-danger btn-sm-link">Danger<i class="fa fa-times pl-10"></i></a>
        <h4 class="mt-3">Medium</h4>
        <a href="#" class="btn-md-link">Default<i class="fa fa-download pl-10"></i></a>
        <a href="#" class="text-primary btn-md-link">Primary<i class="fa fa-cart-arrow-down pl-10"></i></a>
        <a href="#" class="text-success btn-md-link">Success<i class="fa fa-check pl-10"></i></a>
        <a href="#" class="text-info btn-md-link">Info<i class="fa fa-info-circle pl-10"></i></a>
        <a href="#" class="text-warning btn-md-link">Warning<i class="fa fa-warning pl-10"></i></a>
        <a href="#" class="text-danger btn-md-link">Danger<i class="fa fa-times pl-10"></i></a>
        <h4 class="mt-3">Large</h4>
        <a href="#" class="btn-lg-link">Default<i class="fa fa-download pl-10"></i></a>
        <a href="#" class="text-primary btn-lg-link">Primary<i class="fa fa-cart-arrow-down pl-10"></i></a>
        <a href="#" class="text-success btn-lg-link">Success<i class="fa fa-check pl-10"></i></a>
        <a href="#" class="text-info btn-lg-link">Info<i class="fa fa-info-circle pl-10"></i></a>
        <a href="#" class="text-warning btn-lg-link">Warning<i class="fa fa-warning pl-10"></i></a>
        <a href="#" class="text-danger btn-lg-link">Danger<i class="fa fa-times pl-10"></i></a>
    </section>

    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Buttons Square</h2>
        <h4 class="mt-3">Small</h4>
        <a href="#" class="btn square btn-default-transparent btn-sm">White</a>
        <a href="#" class="btn square btn-gray-transparent btn-sm">Dark Bordered</a>
        <a href="#" class="btn square btn-gray btn-sm">Gray</a>
        <a href="#" class="btn square btn-dark btn-sm">Dark</a>
        <a href="#" class="btn square btn-default btn-sm">Default</a>
        <a href="#" class="btn square btn-primary btn-sm">Primary</a>
        <a href="#" class="btn square btn-success btn-sm">Success</a>
        <a href="#" class="btn square btn-info btn-sm">Info</a>
        <a href="#" class="btn square btn-warning btn-sm">Warning</a>
        <a href="#" class="btn square btn-danger btn-sm">Danger</a>
        <h4 class="mt-3">Medium</h4>
        <a href="#" class="btn square btn-default-transparent">White</a>
        <a href="#" class="btn square btn-gray-transparent">Dark Bordered</a>
        <a href="#" class="btn square btn-gray">Gray</a>
        <a href="#" class="btn square btn-dark">Dark</a>
        <a href="#" class="btn square btn-default">Default</a>
        <a href="#" class="btn square btn-primary">Primary</a>
        <a href="#" class="btn square btn-success">Success</a>
        <a href="#" class="btn square btn-info">Info</a>
        <a href="#" class="btn square btn-warning">Warning</a>
        <a href="#" class="btn square btn-danger">Danger</a>
        <h4 class="mt-3">Large</h4>
        <a href="#" class="btn square btn-default-transparent btn-lg">White</a>
        <a href="#" class="btn square btn-gray-transparent btn-lg">Dark Bordered</a>
        <a href="#" class="btn square btn-gray btn-lg">Gray</a>
        <a href="#" class="btn square btn-dark btn-lg">Dark</a>
        <a href="#" class="btn square btn-default btn-lg">Default</a>
        <a href="#" class="btn square btn-primary btn-lg">Primary</a>
        <a href="#" class="btn square btn-success btn-lg">Success</a>
        <a href="#" class="btn square btn-info btn-lg">Info</a>
        <a href="#" class="btn square btn-warning btn-lg">Warning</a>
        <a href="#" class="btn square btn-danger btn-lg">Danger</a>
        <h4 class="mt-3">Extra Large</h4>
        <a href="#" class="btn square btn-default-transparent btn-xl">White</a>
        <a href="#" class="btn square btn-gray-transparent btn-xl">Dark Bordered</a>
        <a href="#" class="btn square btn-gray btn-xl">Gray</a>
        <a href="#" class="btn square btn-dark btn-xl">Dark</a>
        <a href="#" class="btn square btn-default btn-xl">Default</a>
        <a href="#" class="btn square btn-primary btn-xl">Primary</a>
        <a href="#" class="btn square btn-success btn-xl">Success</a>
        <a href="#" class="btn square btn-info btn-xl">Info</a>
        <a href="#" class="btn square btn-warning btn-xl">Warning</a>
        <a href="#" class="btn square btn-danger btn-xl">Danger</a>
    </section>

    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Buttons Semi-circle</h2>
        <h4 class="mt-3">Small</h4>
        <a href="#" class="btn radius-50 btn-default-transparent btn-sm">White</a>
        <a href="#" class="btn radius-50 btn-gray-transparent btn-sm">Dark Bordered</a>
        <a href="#" class="btn radius-50 btn-gray btn-sm">Gray</a>
        <a href="#" class="btn radius-50 btn-dark btn-sm">Dark</a>
        <a href="#" class="btn radius-50 btn-default btn-sm">Default</a>
        <a href="#" class="btn radius-50 btn-primary btn-sm">Primary</a>
        <a href="#" class="btn radius-50 btn-success btn-sm">Success</a>
        <a href="#" class="btn radius-50 btn-info btn-sm">Info</a>
        <a href="#" class="btn radius-50 btn-warning btn-sm">Warning</a>
        <a href="#" class="btn radius-50 btn-danger btn-sm">Danger</a>
        <h4 class="mt-3">Medium</h4>
        <a href="#" class="btn radius-50 btn-default-transparent">White</a>
        <a href="#" class="btn radius-50 btn-gray-transparent">Dark Bordered</a>
        <a href="#" class="btn radius-50 btn-gray">Gray</a>
        <a href="#" class="btn radius-50 btn-dark">Dark</a>
        <a href="#" class="btn radius-50 btn-default">Default</a>
        <a href="#" class="btn radius-50 btn-primary">Primary</a>
        <a href="#" class="btn radius-50 btn-success">Success</a>
        <a href="#" class="btn radius-50 btn-info">Info</a>
        <a href="#" class="btn radius-50 btn-warning">Warning</a>
        <a href="#" class="btn radius-50 btn-danger">Danger</a>
        <h4 class="mt-3">Large</h4>
        <a href="#" class="btn radius-50 btn-default-transparent btn-lg">White</a>
        <a href="#" class="btn radius-50 btn-gray-transparent btn-lg">Dark Bordered</a>
        <a href="#" class="btn radius-50 btn-gray btn-lg">Gray</a>
        <a href="#" class="btn radius-50 btn-dark btn-lg">Dark</a>
        <a href="#" class="btn radius-50 btn-default btn-lg">Default</a>
        <a href="#" class="btn radius-50 btn-primary btn-lg">Primary</a>
        <a href="#" class="btn radius-50 btn-success btn-lg">Success</a>
        <a href="#" class="btn radius-50 btn-info btn-lg">Info</a>
        <a href="#" class="btn radius-50 btn-warning btn-lg">Warning</a>
        <a href="#" class="btn radius-50 btn-danger btn-lg">Danger</a>
        <h4 class="mt-3">Extra Large</h4>
        <a href="#" class="btn radius-50 btn-default-transparent btn-xl">White</a>
        <a href="#" class="btn radius-50 btn-gray-transparent btn-xl">Dark Bordered</a>
        <a href="#" class="btn radius-50 btn-gray btn-xl">Gray</a>
        <a href="#" class="btn radius-50 btn-dark btn-xl">Dark</a>
        <a href="#" class="btn radius-50 btn-default btn-xl">Default</a>
        <a href="#" class="btn radius-50 btn-primary btn-xl">Primary</a>
        <a href="#" class="btn radius-50 btn-success btn-xl">Success</a>
        <a href="#" class="btn radius-50 btn-info btn-xl">Info</a>
        <a href="#" class="btn radius-50 btn-warning btn-xl">Warning</a>
        <a href="#" class="btn radius-50 btn-danger btn-xl">Danger</a>
    </section>

    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Buttons With Icons</h2>
        <h4 class="mt-3">Small</h4>
        <a href="#" class="btn btn-default-transparent btn-sm"><i class="fa fa-chevron-left pr-10"></i> Prev</a>
        <a href="#" class="btn btn-gray-transparent btn-sm">Next <i class="fa fa-chevron-right pl-10"></i></a>
        <a href="#" class="btn btn-gray btn-sm">Send <i class="fa fa-check pl-10"></i></a>
        <a href="#" class="btn btn-dark btn-sm"><i class="fa fa-lock pr-10"></i> login</a>
        <a href="#" class="btn btn-default btn-sm">Settings <i class="fa fa-cog pl-10"></i></a>
        <a href="#" class="btn btn-primary btn-sm">Save <i class="fa fa-floppy-o pl-10"></i></a>
        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-users pr-10"></i> Our Team</a>
        <a href="#" class="btn btn-info btn-sm">Print <i class="fa fa-print pl-10"></i></a>
        <a href="#" class="btn btn-warning btn-sm">Open <i class="fa fa-folder-open-o pl-10"></i></a>
        <a href="#" class="btn btn-danger btn-sm">Danger <i class="fa fa-warning pl-10"></i></a>
        <h4 class="mt-3">Medium</h4>
        <a href="#" class="btn btn-default-transparent"><i class="fa fa-chevron-left pr-10"></i> Prev</a>
        <a href="#" class="btn btn-gray-transparent">Next <i class="fa fa-chevron-right pl-10"></i></a>
        <a href="#" class="btn btn-gray">Send <i class="fa fa-check pl-10"></i></a>
        <a href="#" class="btn btn-dark"><i class="fa fa-lock pr-10"></i> login</a>
        <a href="#" class="btn btn-default">Settings <i class="fa fa-cog pl-10"></i></a>
        <a href="#" class="btn btn-primary">Save <i class="fa fa-floppy-o pl-10"></i></a>
        <a href="#" class="btn btn-success"><i class="fa fa-users pr-10"></i> Our Team</a>
        <a href="#" class="btn btn-info">Print <i class="fa fa-print pl-10"></i></a>
        <a href="#" class="btn btn-warning">Open <i class="fa fa-folder-open-o pl-10"></i></a>
        <a href="#" class="btn btn-danger">Danger <i class="fa fa-warning pl-10"></i></a>
        <h4 class="mt-3">Large</h4>
        <a href="#" class="btn btn-default-transparent btn-lg"><i class="fa fa-chevron-left pr-10"></i> Prev</a>
        <a href="#" class="btn btn-gray-transparent btn-lg">Next <i class="fa fa-chevron-right pl-10"></i></a>
        <a href="#" class="btn btn-gray btn-lg">Send <i class="fa fa-check pl-10"></i></a>
        <a href="#" class="btn btn-dark btn-lg"><i class="fa fa-lock pr-10"></i> login</a>
        <a href="#" class="btn btn-default btn-lg">Settings <i class="fa fa-cog pl-10"></i></a>
        <a href="#" class="btn btn-primary btn-lg">Save <i class="fa fa-floppy-o pl-10"></i></a>
        <a href="#" class="btn btn-success btn-lg"><i class="fa fa-users pr-10"></i> Our Team</a>
        <a href="#" class="btn btn-info btn-lg">Print <i class="fa fa-print pl-10"></i></a>
        <a href="#" class="btn btn-warning btn-lg">Open <i class="fa fa-folder-open-o pl-10"></i></a>
        <a href="#" class="btn btn-danger btn-lg">Danger <i class="fa fa-warning pl-10"></i></a>
        <h4 class="mt-3">Extra Large</h4>
        <a href="#" class="btn btn-default-transparent btn-xl"><i class="fa fa-chevron-left pr-10"></i> Prev</a>
        <a href="#" class="btn btn-gray-transparent btn-xl">Next <i class="fa fa-chevron-right pl-10"></i></a>
        <a href="#" class="btn btn-gray btn-xl">Send <i class="fa fa-check pl-10"></i></a>
        <a href="#" class="btn btn-dark btn-xl"><i class="fa fa-lock pr-10"></i> login</a>
        <a href="#" class="btn btn-default btn-xl">Settings <i class="fa fa-cog pl-10"></i></a>
        <a href="#" class="btn btn-primary btn-xl">Save <i class="fa fa-floppy-o pl-10"></i></a>
        <a href="#" class="btn btn-success btn-xl"><i class="fa fa-users pr-10"></i> Our Team</a>
        <a href="#" class="btn btn-info btn-xl">Print <i class="fa fa-print pl-10"></i></a>
        <a href="#" class="btn btn-warning btn-xl">Open <i class="fa fa-folder-open-o pl-10"></i></a>
        <a href="#" class="btn btn-danger btn-xl">Danger <i class="fa fa-warning pl-10"></i></a>
        <br>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            Check all available Icons: 
            <ul class="">
                <li><a target="_blank" href="features-icons-fontawesome.html" class="alert-link">Font Awesome Icons</a></li>
            </ul>
        </div>
    </section>

    <section>
        <div class="space-bottom"></div>
        <h2 class="mt-3">Split button dropdowns</h2>
        <h4 class="mt-5">Small</h4>
        <!-- Split button White -->
        <div class="btn-group">
            <button type="button" class="btn btn-default-transparent btn-sm">White</button>
            <button type="button" class="btn btn-default-transparent btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Dark Bordered -->
        <div class="btn-group dark">
            <button type="button" class="btn btn-gray-transparent btn-sm">Dark Bordered</button>
            <button type="button" class="btn btn-gray-transparent btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Gray -->
        <div class="btn-group">
            <button type="button" class="btn btn-gray btn-sm">Gray</button>
            <button type="button" class="btn btn-gray btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Dark -->
        <div class="btn-group dark">
            <button type="button" class="btn btn-dark btn-sm">Dark</button>
            <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Default -->
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm">Default</button>
            <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Primary -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary btn-sm">Primary</button>
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Success -->
        <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm">Success</button>
            <button type="button" class="btn btn-success btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Info -->
        <div class="btn-group">
            <button type="button" class="btn btn-info btn-sm">Info</button>
            <button type="button" class="btn btn-info btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Warning -->
        <div class="btn-group">
            <button type="button" class="btn btn-warning btn-sm">Warning</button>
            <button type="button" class="btn btn-warning btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Danger -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger btn-sm">Danger</button>
            <button type="button" class="btn btn-danger btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <h4 class="mt-3">Medium</h4>
        <!-- Split button White -->
        <div class="btn-group">
            <button type="button" class="btn btn-default-transparent">White</button>
            <button type="button" class="btn btn-default-transparent dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Dark Bordered -->
        <div class="btn-group dark">
            <button type="button" class="btn btn-gray-transparent">Dark Bordered</button>
            <button type="button" class="btn btn-gray-transparent dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Gray -->
        <div class="btn-group">
            <button type="button" class="btn btn-gray">Gray</button>
            <button type="button" class="btn btn-gray dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Dark -->
        <div class="btn-group dark">
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Default -->
        <div class="btn-group">
            <button type="button" class="btn btn-default">Default</button>
            <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Primary -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Success -->
        <div class="btn-group">
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Info -->
        <div class="btn-group">
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Warning -->
        <div class="btn-group">
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Danger -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <h4 class="mt-3">Large</h4>
        <!-- Split button White -->
        <div class="btn-group">
            <button type="button" class="btn btn-default-transparent btn-lg">White</button>
            <button type="button" class="btn btn-default-transparent btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Dark Bordered -->
        <div class="btn-group dark">
            <button type="button" class="btn btn-gray-transparent btn-lg">Dark Bordered</button>
            <button type="button" class="btn btn-gray-transparent btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Gray -->
        <div class="btn-group">
            <button type="button" class="btn btn-gray btn-lg">Gray</button>
            <button type="button" class="btn btn-gray btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Dark -->
        <div class="btn-group dark">
            <button type="button" class="btn btn-dark btn-lg">Dark</button>
            <button type="button" class="btn btn-dark btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Default -->
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-lg">Default</button>
            <button type="button" class="btn btn-default btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Primary -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary btn-lg">Primary</button>
            <button type="button" class="btn btn-primary btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Success -->
        <div class="btn-group">
            <button type="button" class="btn btn-success btn-lg">Success</button>
            <button type="button" class="btn btn-success btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Info -->
        <div class="btn-group">
            <button type="button" class="btn btn-info btn-lg">Icno</button>
            <button type="button" class="btn btn-info btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Warning -->
        <div class="btn-group">
            <button type="button" class="btn btn-warning btn-lg">Warning</button>
            <button type="button" class="btn btn-warning btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Danger -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger btn-lg">Danger</button>
            <button type="button" class="btn btn-danger btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <h4 class="mt-3">Extra Large</h4>
        <!-- Split button White -->
        <div class="btn-group">
            <button type="button" class="btn btn-default-transparent btn-xl">White</button>
            <button type="button" class="btn btn-default-transparent btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Dark Bordered -->
        <div class="btn-group dark">
            <button type="button" class="btn btn-gray-transparent btn-xl">Dark Bordered</button>
            <button type="button" class="btn btn-gray-transparent btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Gray -->
        <div class="btn-group">
            <button type="button" class="btn btn-gray btn-xl">Gray</button>
            <button type="button" class="btn btn-gray btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Dark -->
        <div class="btn-group dark">
            <button type="button" class="btn btn-dark btn-xl">Dark</button>
            <button type="button" class="btn btn-dark btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Default -->
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-xl">Default</button>
            <button type="button" class="btn btn-default btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Primary -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary btn-xl">Primary</button>
            <button type="button" class="btn btn-primary btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Success -->
        <div class="btn-group">
            <button type="button" class="btn btn-success btn-xl">Success</button>
            <button type="button" class="btn btn-success btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Info -->
        <div class="btn-group">
            <button type="button" class="btn btn-info btn-xl">Info</button>
            <button type="button" class="btn btn-info btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Warning -->
        <div class="btn-group">
            <button type="button" class="btn btn-warning btn-xl">Warning</button>
            <button type="button" class="btn btn-warning btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
        <!-- Split button Danger -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger btn-xl">Danger</button>
            <button type="button" class="btn btn-danger btn-xl dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-cog pr-20"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-user pr-20"></i> Profile</a>
                <a href="#" class="dropdown-item border-bottom-clear"><i class="fa fa-envelope pr-20"></i> Messages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-sign-out pr-20"></i> Sign Out</a>
            </div>
        </div>
    </section>

@endsection
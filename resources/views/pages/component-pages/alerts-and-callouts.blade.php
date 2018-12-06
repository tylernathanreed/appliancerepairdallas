@extends('pages.component-pages.layout')

@section('page.main')

    <!-- Alerts start -->
    <!-- ============================================================================== -->
    <section>
        <h2 class="mt-4">Alerts</h2>
        <div class="alert alert-success" role="alert">
            Lorem ipsum dolor sit amet, <a href="#" class="alert-link">alert link</a> elit. Neque facere, ab maxime esse assumenda, expedita. Ea asperiores accusantium quia consectetur eum, molestiae aperiam, accusamus illo totam dolore fugit doloribus odit.
        </div>
        <div class="alert alert-info" role="alert">
            Lorem ipsum dolor sit amet, <a href="#" class="alert-link">alert link</a> elit. Neque facere, ab maxime esse assumenda, expedita. Ea asperiores accusantium quia consectetur eum, molestiae aperiam, accusamus illo totam dolore fugit doloribus odit.
        </div>
        <div class="alert alert-warning" role="alert">
            Lorem ipsum dolor sit amet, <a href="#" class="alert-link">alert link</a> elit. Neque facere, ab maxime esse assumenda, expedita. Ea asperiores accusantium quia consectetur eum, molestiae aperiam, accusamus illo totam dolore fugit doloribus odit.
        </div>
        <div class="alert alert-danger" role="alert">
            Lorem ipsum dolor sit amet, <a href="#" class="alert-link">alert link</a> elit. Neque facere, ab maxime esse assumenda, expedita. Ea asperiores accusantium quia consectetur eum, molestiae aperiam, accusamus illo totam dolore fugit doloribus odit.
        </div>
    </section>

    <section>
        <h2 class="mt-4">Alerts with Icons</h2>
        <div class="alert alert-icon alert-success" role="alert">
            <i class="fa fa-check"></i>
            Lorem ipsum dolor sit amet, <a href="#" class="alert-link">alert link</a> elit. Neque facere, ab maxime esse assumenda, expedita. Ea asperiores accusantium quia consectetur eum, molestiae aperiam, accusamus illo totam dolore fugit doloribus odit.
        </div>
        <div class="alert  alert-icon alert-info" role="alert">
            <i class="fa fa-info-circle"></i>
            Lorem ipsum dolor sit amet, <a href="#" class="alert-link">alert link</a> elit. Neque facere, ab maxime esse assumenda, expedita. Ea asperiores accusantium quia consectetur eum, molestiae aperiam, accusamus illo totam dolore fugit doloribus odit.
        </div>
        <div class="alert  alert-icon alert-warning" role="alert">
            <i class="fa fa-warning"></i>
            Lorem ipsum dolor sit amet, <a href="#" class="alert-link">alert link</a> elit. Neque facere, ab maxime esse assumenda, expedita. Ea asperiores accusantium quia consectetur eum, molestiae aperiam, accusamus illo totam dolore fugit doloribus odit.
        </div>
        <div class="alert  alert-icon alert-danger" role="alert">
            <i class="fa fa-times"></i>
            Lorem ipsum dolor sit amet, <a href="#" class="alert-link">alert link</a> elit. Neque facere, ab maxime esse assumenda, expedita. Ea asperiores accusantium quia consectetur eum, molestiae aperiam, accusamus illo totam dolore fugit doloribus odit.
        </div>
    </section>

    <section>
        <h2 class="mt-4">Dismissible alerts</h2>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> Better check yourself, you're not looking too good.
        </div>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Info!</strong> Better check yourself, you're not looking too good.
        </div>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong> Better check yourself, you're not looking too good.
        </div>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Danger!</strong> Better check yourself, you're not looking too good.
        </div>
    </section>

    <section>
        <h2 class="mt-4">Contextual Backgrounds</h2>
        <p class="bg-primary text-white p-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt cum provident, libero corrupti, eaque omnis quas voluptas repellat adipisci molestiae praesentium dolores in modi atque dolore quo sequi! Dignissimos, dolorum!</p>
        <p class="bg-success text-white p-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt cum provident, libero corrupti, eaque omnis quas voluptas repellat adipisci molestiae praesentium dolores in modi atque dolore quo sequi! Dignissimos, dolorum!</p>
        <p class="bg-info text-white p-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt cum provident, libero corrupti, eaque omnis quas voluptas repellat adipisci molestiae praesentium dolores in modi atque dolore quo sequi! Dignissimos, dolorum!</p>
        <p class="bg-warning text-white p-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt cum provident, libero corrupti, eaque omnis quas voluptas repellat adipisci molestiae praesentium dolores in modi atque dolore quo sequi! Dignissimos, dolorum!</p>
        <p class="bg-danger text-white p-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt cum provident, libero corrupti, eaque omnis quas voluptas repellat adipisci molestiae praesentium dolores in modi atque dolore quo sequi! Dignissimos, dolorum!</p>
    </section>

@endsection
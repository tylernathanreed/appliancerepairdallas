@extends('pages.component-pages.layout')

@section('page.main')

	<div class="row justify-content-lg-center">
		<div class="col-lg-8">
			<section class="mb-5">
				<h2 class="mt-4 text-center">Center aligned</h2>
				<div class="separator"></div>

				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum cupiditate neque id ipsam ipsum aliquam, voluptatibus architecto. Rerum recusandae quam ipsum nihil impedit eaque nisi, veniam illum est delectus ipsam.</p>
			</section>

			<section class="mb-5">
				<h2 class="mt-4">Left aligned</h2>
				<div class="separator-2"></div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias ullam esse repellendus velit ab quos, quo unde deleniti nostrum deserunt veritatis nesciunt! Minus inventore laborum ratione qui, velit, harum reprehenderit.</p>
			</section>

			<section class="mb-5">
				<h2 class="mt-4 text-right">Right aligned</h2>
				<div class="separator-3"></div>

				<p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis quaerat possimus mollitia, dolorum officiis, soluta ipsum. Nisi voluptatibus, molestiae facilis exercitationem nostrum quis dolore similique, error accusamus iure explicabo ullam?</p>
			</section>

			<section class="mb-5">
				<h2 class="mt-4 text-center">With Icon</h2>
				<div class="separator with-icon"><i class="fa fa-diamond"></i></div>

				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum cupiditate neque id ipsam ipsum aliquam, voluptatibus architecto. Rerum recusandae quam ipsum nihil impedit eaque nisi, veniam illum est delectus ipsam.</p>
			</section>

			<section>
				<h2 class="mt-4 text-center">With Icon - Style 2</h2>
				<div class="separator with-icon"><i class="fa fa-diamond bordered"></i></div>

				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum cupiditate neque id ipsam ipsum aliquam, voluptatibus architecto. Rerum recusandae quam ipsum nihil impedit eaque nisi, veniam illum est delectus ipsam.</p>
			</section>
		</div>
	</div>

@endsection

@section('page.bottom')

	<?php $sections = [
		'section pv-40 fixed-bg dark-translucent-bg background-img-8',
		'dark-bg pv-40',
		'section pv-40 fixed-bg default-translucent-bg background-img-8',
		'default-bg pv-40'
	]; ?>

	@foreach($sections as $section)

		<section class="{{ $section }}">
			<div class="container">
				<div class="row justify-content-lg-center">
				<div class="col-lg-8">
					<section class="mb-5">
						<h2 class="mt-4 text-center">Center aligned</h2>
						<div class="separator"></div>

						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum cupiditate neque id ipsam ipsum aliquam, voluptatibus architecto. Rerum recusandae quam ipsum nihil impedit eaque nisi, veniam illum est delectus ipsam.</p>
					</section>

					<section class="mb-5">
						<h2 class="mt-4">Left aligned</h2>
						<div class="separator-2"></div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias ullam esse repellendus velit ab quos, quo unde deleniti nostrum deserunt veritatis nesciunt! Minus inventore laborum ratione qui, velit, harum reprehenderit.</p>
					</section>

					<section class="mb-5">
						<h2 class="mt-4 text-right">Right aligned</h2>
						<div class="separator-3"></div>

						<p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis quaerat possimus mollitia, dolorum officiis, soluta ipsum. Nisi voluptatibus, molestiae facilis exercitationem nostrum quis dolore similique, error accusamus iure explicabo ullam?</p>
					</section>

					<section class="mb-5">
						<h2 class="mt-4 text-center">With Icon</h2>
						<div class="separator with-icon"><i class="fa fa-diamond"></i></div>

						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum cupiditate neque id ipsam ipsum aliquam, voluptatibus architecto. Rerum recusandae quam ipsum nihil impedit eaque nisi, veniam illum est delectus ipsam.</p>
					</section>

					<section>
						<h2 class="mt-4 text-center">With Icon - Style 2</h2>
						<div class="separator with-icon"><i class="fa fa-diamond bordered"></i></div>

						<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum cupiditate neque id ipsam ipsum aliquam, voluptatibus architecto. Rerum recusandae quam ipsum nihil impedit eaque nisi, veniam illum est delectus ipsam.</p>
					</section>
				</div>
			</div>
		</section>

	@endforeach

@endsection
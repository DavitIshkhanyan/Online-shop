@extends('layouts.main')

@section('title', 'All Products')

@section('content')
	<!-- Products -->

	<div class="products" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						@foreach($products as $product)
							<!-- Product -->
							@php
								$image = '';
								if(count($product->images) > 0){
									$image = $product->images[0]['img'];
								} else {
									$image = 'no_image.png';
								}
							@endphp

							<div class="product">
								<div class="product_image"><img src="images/{{ $image }}" alt="{{ $product->title }}"></div>
								<div class="product_extra product_new"><a href="categories.html">New</a></div>
								<div class="product_content">
									<div class="product_title"><a href="{{ route('showProduct',['category',$product->id]) }}">{{ $product->title }}</a></div>
									@if($product->new_price != null)
										<div style="text-decoration: line-through">${{ $product->price }}</div>
										<div class="product_price">${{ $product->new_price }}</div>
									@else
										<div class="product_price">${{ $product->price }}</div>
									@endif
								</div>
							</div>
						@endforeach
					</div>
                    {{ $products->links('pagination.index') }}
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

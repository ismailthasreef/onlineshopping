<!DOCTYPE html>
<html lang="en">


@include('usertemplate.includes.head')

<body>
	<!-- Category Model Start-->
	<div id="category_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
        <div class="modal-dialog category-area" role="document">
            <div class="category-area-inner">
                <div class="modal-header">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
						<i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="category-model-content modal-content"> 
					<div class="cate-header">
						<h4>Select Category</h4>
					</div>
                    <ul class="category-by-cat">
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-1.svg')}}" alt="">
								</div>
								<div class="text"> Fruits and Vegetables </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-2.svg')}}" alt="">
								</div>
								<div class="text"> Grocery & Staples </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-3.svg')}}" alt="">
								</div>
								<div class="text"> Dairy & Eggs </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-4.svg')}}" alt="">
								</div>
								<div class="text"> Beverages </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-5.svg')}}" alt="">
								</div>
								<div class="text"> Snacks </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-6.svg')}}" alt="">
								</div>
								<div class="text"> Home Care </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-7.svg')}}" alt="">
								</div>
								<div class="text"> Noodles & Sauces </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-8.svg')}}" alt="">
								</div>
								<div class="text"> Personal Care </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="{{URL::asset('assets/user/images/category/icon-9.svg')}}" alt="">
								</div>
								<div class="text"> Pet Care </div>
							</a>
						</li>
                    </ul>
					<a href="#" class="morecate-btn"><i class="uil uil-apps"></i>More Categories</a>
                </div>
            </div>
        </div>
    </div>
	<!-- Category Model End-->
	<!-- Search Model Start-->
	<div id="search_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
        <div class="modal-dialog search-ground-area" role="document">
            <div class="category-area-inner">
                <div class="modal-header">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
						<i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="category-model-content modal-content"> 
					<div class="search-header">
						<form action="#">
							<input type="search" placeholder="Search for products...">
							<button type="submit"><i class="uil uil-search"></i></button>
						</form>
					</div>
					<div class="search-by-cat">
                        <a href="#" class="single-cat">
                            <div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-1.svg')}}" alt="">
                            </div>
                            <div class="text">
                                Fruits and Vegetables
                            </div>
                        </a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-2.svg')}}" alt="">
							</div>
							<div class="text"> Grocery & Staples </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-3.svg')}}" alt="">
							</div>
							<div class="text"> Dairy & Eggs </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-4.svg')}}" alt="">
							</div>
							<div class="text"> Beverages </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-5.svg')}}" alt="">
							</div>
							<div class="text"> Snacks </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-6.svg')}}" alt="">
							</div>
							<div class="text"> Home Care </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-7.svg')}}" alt="">
							</div>
							<div class="text"> Noodles & Sauces </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-8.svg')}}" alt="">
							</div>
							<div class="text"> Personal Care </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{URL::asset('assets/user/images/category/icon-9.svg')}}" alt="">
							</div>
							<div class="text"> Pet Care </div>
						</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Search Model End-->
	<!-- Cart Sidebar Offset Start-->
	<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
		<div class="bs-canvas-header side-cart-header p-3 ">
			<div class="d-inline-block  main-cart-title">My Cart <span>(2 Items)</span></div>
			<button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
		</div> 
		<div class="bs-canvas-body">
			<div class="cart-top-total">
				<div class="cart-total-dil">
					<h4>Gambo Super Market</h4>
					<span>$34</span>
				</div>
				<div class="cart-total-dil pt-2">
					<h4>Delivery Charges</h4>
					<span>$1</span>
				</div>
			</div>
			<div class="side-cart-items">
				<div class="cart-item">
					<div class="cart-product-img">
						<img src="{{URL::asset('assets/user/images/product/img-1.jpg')}}" alt="">
						<div class="offer-badge">6% OFF</div>
					</div>
					<div class="cart-text">
						<h4>Product Title Here</h4>
						<div class="cart-radio">
							<ul class="kggrm-now">
								<li>
									<input type="radio" id="a1" name="cart1">
									<label for="a1">0.50</label>
								</li>
								<li>
									<input type="radio" id="a2" name="cart1">
									<label for="a2">1kg</label>
								</li>
								<li>
									<input type="radio" id="a3" name="cart1">
									<label for="a3">2kg</label>
								</li>
								<li>
									<input type="radio" id="a4" name="cart1">
									<label for="a4">3kg</label>
								</li>
							</ul>
						</div>
						<div class="qty-group">
							<div class="quantity buttons_added">
								<input type="button" value="-" class="minus minus-btn">
								<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
								<input type="button" value="+" class="plus plus-btn">
							</div>
							<div class="cart-item-price">$10 <span>$15</span></div>
						</div>
						
						<button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
					</div>
				</div>
				<div class="cart-item">
					<div class="cart-product-img">
						<img src="{{URL::asset('assets/user/images/product/img-2.jpg')}}" alt="">
						<div class="offer-badge">6% OFF</div>
					</div>
					<div class="cart-text">
						<h4>Product Title Here</h4>
						<div class="cart-radio">
							<ul class="kggrm-now">
								<li>
									<input type="radio" id="a5" name="cart2">
									<label for="a5">0.50</label>
								</li>
								<li>
									<input type="radio" id="a6" name="cart2">
									<label for="a6">1kg</label>
								</li>
								<li>
									<input type="radio" id="a7" name="cart2">
									<label for="a7">2kg</label>
								</li>
							</ul>
						</div>
						<div class="qty-group">
							<div class="quantity buttons_added">
								<input type="button" value="-" class="minus minus-btn">
								<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
								<input type="button" value="+" class="plus plus-btn">
							</div>
							<div class="cart-item-price">$24 <span>$30</span></div>
						</div>	
						<button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="bs-canvas-footer">
			<div class="cart-total-dil saving-total ">
				<h4>Total Saving</h4>
				<span>$11</span>
			</div>
			<div class="main-total-cart">
				<h2>Total</h2>
				<span>$35</span>
			</div>
			<div class="checkout-cart">
				<a href="#" class="promo-code">Have a promocode?</a>
				<a href="#" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
			</div>
		</div>
	</div>
	<!-- Cart Sidebar Offsetl End-->
	<!-- Header Start -->
	@include('usertemplate.includes.header')
	<!-- Header End -->
	<!-- Body Start -->
	<div class="wrapper">

    @yield('content')
	</div>
	@include('usertemplate.includes.footer')
	<script src="{{URL::asset('assets/user/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{URL::asset('assets/user/vendor/OwlCarousel/owl.carousel.js')}}"></script>
	<script src="{{URL::asset('assets/user/vendor/semantic/semantic.min.js')}}"></script>
	<script src="{{URL::asset('assets/user/js/jquery.countdown.min.js')}}"></script>
	<script src="{{URL::asset('assets/user/js/custom.js')}}"></script>
	<script src="{{URL::asset('assets/user/js/offset_overlay.js')}}"></script>
	<script src="{{URL::asset('assets/user/js/night-mode.js')}}"></script>
</body>

</html>
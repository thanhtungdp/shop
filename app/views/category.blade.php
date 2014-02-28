@extends("main")

@section("content")
<div class="container">
	<div class="group-product-category">
		<div class="row">
			<div class="col-md-3" id="sidebar">
				<div class="list-category widget"/>
					<h4>Mức giá</h4>
					<select class="form-control">
						<option>Chọn mức giá</option>
						<option>
							100k đến 300k
						</option>
						<option>
							300k đến 600k
						</option>
						<option>
							600k đến 900k
						</option>
					</select>
				</div>
				<div class="list-category widget">
					<h4>Category</h4>
					<ul class="nav">
						<li><a href="#">Womans</a></li>
						<li><a href="#">Accesscories</a></li>
						<li><a href="#">Mans</a></li>
					</ul>
				</div>
				<div class="list-category widget">
					<h4>Tags</h4>
					<a href="#" class="tag tag-black">Tung</a>
				</div>
			</div>
			<div class="col-md-9">
				<h4>Woman -> Áo đầm</h4>
				<div class="product col-md-4">
					<div class="box-image">
						<img src="{{Asset('assets/img/thumbnails/3_270x340.jpg')}}" class="thumb-span3"/>
					</div>
					<div class="full-width including">
						<a href="product.html" class="pull-left product-name">Áo thun cực chất</a>
						<button class="pull-right button-shopping-cart"><span class="glyphicon glyphicon-shopping-cart"></span>+</button>
					</div>
					<div class="full-width including">
						<p class="pull-left price"><span class="old-price">560.000VND</span> <span class="product-price">560.000VND</span></p>
						<p class="pull-right product-category">Womans, Áo đầm</span></p>
					</div>
				</div>
				<div class="product col-md-4">
					<div class="box-image">
						<img src="{{Asset('assets/img/thumbnails/4_270x340.jpg')}}" class="thumb-span3"/>
					</div>
					<div class="full-width including">
						<a href="product.html" class="pull-left product-name">Áo thun cực chất</a>
						<button class="pull-right button-shopping-cart"><span class="glyphicon glyphicon-shopping-cart"></span>+</button>
					</div>
					<div class="full-width including">
						<p class="pull-left price"><span class="old-price">560.000VND</span> <span class="product-price">560.000VND</span></p>
						<p class="pull-right product-category">Womans, Áo đầm</span></p>
					</div>
				</div>
				<div class="product col-md-4">
					<div class="box-image">
						<img src="{{Asset('assets/img/thumbnails/2_270x340.jpg')}}" class="thumb-span3"/>
					</div>
					<div class="full-width including">
						<a href="product.html" class="pull-left product-name">Áo thun cực chất</a>
						<button class="pull-right button-shopping-cart"><span class="glyphicon glyphicon-shopping-cart"></span>+</button>
					</div>
					<div class="full-width including">
						<p class="pull-left price"><span class="old-price">560.000VND</span> <span class="product-price">560.000VND</span></p>
						<p class="pull-right product-category">Womans, Áo đầm</span></p>
					</div>
				</div>
					
				<div class="product col-md-4">
					<div class="box-image">
						<img src="{{Asset('assets/img/thumbnails/2_270x340.jpg')}}" class="thumb-span3"/>
					</div>
					<div class="full-width including">
						<a href="product.html" class="pull-left product-name">Áo thun cực chất</a>
						<button class="pull-right button-shopping-cart"><span class="glyphicon glyphicon-shopping-cart"></span>+</button>
					</div>
					<div class="full-width including">
						<p class="pull-left price"><span class="old-price">560.000VND</span> <span class="product-price">560.000VND</span></p>
						<p class="pull-right product-category">Womans, Áo đầm</span></p>
					</div>
				</div>
			</div><!--End col-md-9-->
			
		</div><!--End row-->
	</div><!--End product-best-sell-->
</div><!--End class container-->
@stop


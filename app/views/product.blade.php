@extends("main")
@section("content")
<div class="container">
	<div id="product-best-sell" class="group-product">
		<h4>Woman -> Áo đầm</h4>
		<div class="row">
			<div class="col-md-9" id="product-show">
				<div class="product-description including">
					<div class="col-md-5">
						<ul class="bxslider">
						  <li><img src="{{Asset('assets/img/thumbnails/2_270x340.jpg')}}" class="image-description-full"/></li>
						  <li><img src="{{Asset('assets/img/thumbnails/3_270x340.jpg')}}" class="image-description-full"/></li>
						  <li><img src="{{Asset('assets/img/thumbnails/4_270x340.jpg')}}" class="image-description-full"/></li>
						</ul>

						<div id="bx-pager">
							<div id="owl-demo" class="owl-carousel">
							  <a data-slide-index="0" href="" class="item"><img class="bxs-thumb" src="{{Asset('assets/img/thumbnails/2_270x340.jpg')}}" /></a>
							  <a data-slide-index="1" href="" class="item"><img class="bxs-thumb" src="{{Asset('assets/img/thumbnails/3_270x340.jpg')}}" /></a>
							  <a data-slide-index="2" href="" class="item"><img class="bxs-thumb" src="{{Asset('assets/img/thumbnails/4_270x340.jpg')}}" /></a>
							  <a data-slide-index="2" href="" class="item"><img class="bxs-thumb" src="{{Asset('assets/img/thumbnails/4_270x340.jpg')}}" /></a>
							  <a data-slide-index="2" href="" class="item"><img class="bxs-thumb" src="{{Asset('assets/img/thumbnails/4_270x340.jpg')}}" /></a>
							</div>
						</div>
					</div>

					<div class="col-md-7">
						<h3>Áo đầm cho ngày hè</h3>
						<p class="old-price">500k</p>
						<p class="product-price">300k</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ac vestibulum luctus egestas est quis rutrum. Suspendisse quis nulla ut enim ultricies eget. Mauris congue elementum rutrum proin venenatis eget diam at orci eleifend nec porta diam aliquam. Praesent ac velit sed sem vestibulum ornare. Aliquam blandit nulla.
Donec nec lacus vitae arcu accumsan lorem, porttitor sed malesuada malesuada mauris a lacinia. In id tincidunt felis proin venenatis.
Ut in sem sed ipsum interdum commodo. Proin arcu felis, commodo convallis accumsan et, dictum nec est a nam purus eros, accumsan non leo id, mollis consectetur metus cras vulputate arcu ac turpis ege pulvinar, vitae sollicitudin lorem bibendum. Suspendisse vehicula diam quis sapien sagittis posuere etiam moleste sit amet.
Fusce in est id justo feugiat hendrerit eget a risus. Sed vulputate tincidunt dui eget fermentum. Integer libero nulla, imperdiet ac tincidunt eu, pellentesque et ligula. Vestibulum viverra dapibus eros, vel interdum diam venenatis in. Nullam convallis ipsum sed elit scelerisque, vel feugiat lacus eleifend. Nam eleifend consequat metus et interdum. Etiam vestibulum turpis sed risus lobortis vehicula. Donec libero sem, condimentum in libero nec, blandit semper risus.</p>
						<form action="">
							<div class="qty">
								<button class="btn">-</button>
								<input type="text" placeholder="Số lượng" class="input-qty" value="1">
								<button class="btn">+</button>
								<button class="btn pull-right" >Thêm vào giỏ hàng</button>
							</div>
							
							
						</form>
					</div>
				</div>
				<div id="tab-description">
					<ul class="nav nav-tabs" id="myTab">
					  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					  <li><a href="#profile" data-toggle="tab">Profile</a></li>
					  <li><a href="#messages" data-toggle="tab">Messages</a></li>
					  <li><a href="#settings" data-toggle="tab">Settings</a></li>
					</ul>

					<div class="tab-content">
					  <div class="tab-pane active" id="home">..b.</div>
					  <div class="tab-pane" id="profile">..a.</div>
					  <div class="tab-pane" id="messages">.da..</div>
					  <div class="tab-pane" id="settings">.d..</div>
					</div>
				</div>					
			</div><!--End col-md-9-->
			<div class="col-md-3" id="sidebar">
				<form action="">
					<input class="form-control" name="text"/>
					<button class="btn form-control	btn-search">Tìm kiếm</button>
				</form>
				<div class="list-category widget">
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
		</div><!--End row-->
	</div><!--End product-best-sell-->
</div><!--End class container-->
@endsection
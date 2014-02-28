<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
	<meta charset="utf-8"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/style.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/jquery.bxslider.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/owl.theme.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/owl.transitions.css')}}"/>
	<script type="text/javascript" src="{{Asset('assets/js/jquery-1.8.3.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/jquery.bxslider.min.js')}}"></script>
	<script type="text/javascript">
	$(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        autoPlay: 350000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        itemsTablet: [600,4],
        itemsMobile:[479,4]
      });

    });
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.bxslider').bxSlider({
		  pagerCustom: '#bx-pager'
		});
	});
	</script>
</head>
<body>
<header>
	<div id="top-about">
		<div class="container">
			<div class="pull-left" id="search-form">
				<div class="input-group" >	  
				  <span class="glyphicon glyphicon-search"></span><input type="text" class="form-control" name="search" placeholder="Search..."/>:
				</div>			
			</div>
			<div class="pull-right" id="check-cart">
				<a href="#">Giỏ hàng: 360.000 , 2 sản phẩm <span class="glyphicon glyphicon-shopping-cart"></span></a>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default" role="navigation" id="navbar">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.html">
	      	<h1>Shopper</h1>
	      	<div class="logo-description">mua sắm thoải mái</div>
	      </a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Home</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nam <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	          		<li>
		          		<ul class="pull-left nav">
				          	<li class="group-header"><a href="#">ÁO</a></li>
				            <li><a href="#">Áo thun</a></li>
				            <li><a href="#">Áo sơ mi</a></li>
				            <li><a href="#">Áo khoác len</a></li>
				            <li><a href="#">Áo khoác da</a></li>
				        </ul>
			    	</li>
			    	<li>
		          		<ul class="pull-left nav">
				          	<li class="group-header"><a href="#">Quần</a></li>
				            <li><a href="#">Quần jeans</a></li>
				            <li><a href="#">Quần kaki</a></li>
				            <li><a href="#">Quần lửng</a></li>
				        </ul>
			    	</li>
			        <img src="{{Asset('assets/img/thumbnails/1_180x180.png')}}" class="img-thumb-desciption"/>
	          </ul>
	        </li>
	        <li><a href="#">Nữ</a></li>
	        <li><a href="#">Giới thiệu</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<section id="content">
		@yield("content")
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>Best sell</h4>
					<div class="including">
						<div class="li-product">
							<div class="pull-left ">
							<img src="{{Asset('assets/img/thumbnails/5_270x340.jpg')}}" width="50" height="50"/>
							</div>
							<div class="li-description">
								<a href="#" class="product-name">Áo thun cao cấp</a>
								<p class="price"><span class="product-price">560.000VND</span></p>
							</div>
						</div>
						<div class="li-product">
							<div class="pull-left ">
							<img src="{{Asset('assets/img/thumbnails/3_270x340.jpg')}}" width="50" height="50"/>
							</div>
							<div class="li-description">
								<p class="product-name">Áo thun cao cấp</p>
								<p class="price"><span class="old-price">560.000VND</span> <span class="product-price">560.000VND</span></p>
							</div>
						</div>
						<div class="li-product">
							<div class="pull-left ">
							<img src="{{Asset('assets/img/thumbnails/4_270x340.jpg')}}" width="50" height="50"/>
							</div>
							<div class="li-description">
								<p class="product-name">Áo thun cao cấp</p>
								<p class="price"><span class="product-price">560.000VND</span></p>
							</div>
						</div>
					</div>
				</div><!--End col-md-3-->
				<div class="col-md-3 including">
					<h4>Tags</h4>
					<a href="#" class="tag tag-white">Áo</a><a href="#" class="tag tag-white">Áo</a><a href="#" class="tag tag-white">Áo</a><a href="#" class="tag tag-white">Áo</a><a href="#" class="tag tag-white">Áo</a>
				</div><!--End col-md-3-->
				<div class="col-md-3">
					<h4>New Blog</h4>
					<div class="including">
						<div class="li-product">
							<div class="pull-left ">
							<img src="{{Asset('assets/img/thumbnails/5_270x340.jpg')}}" width="50" height="50"/>
							</div>
							<div class="li-description">
								<p class="title">Áo thun cao cấp</p>
								Praesent aliquet risus ac auctor gravida. Quisque... 
							</div>
						</div>
						<div class="li-product">
							<div class="pull-left ">
							<img src="{{Asset('assets/img/thumbnails/5_270x340.jpg')}}" width="50" height="50"/>
							</div>
							<div class="li-description">
								<p class="title">Áo thun cao cấp</p>
								Praesent aliquet risus ac auctor gravida. Quisque... 
							</div>
						</div>
						<div class="li-product">
							<div class="pull-left ">
							<img src="{{Asset('assets/img/thumbnails/5_270x340.jpg')}}" width="50" height="50"/>
							</div>
							<div class="li-description">
								<p class="title">Áo thun cao cấp</p>
								Praesent aliquet risus ac auctor gravida. Quisque... 
							</div>
						</div>
					</div>
				</div><!--End col-md-3-->
				<div class="col-md-3 subcribers">
					<h4>Subscribers</h4>
					Consectetur adipiscin elit eget at lorem lobortis, laoreet quis, ultricies massa aenean dolor nulla convallis ante, non egestas lore.
Vestibulum adipiscing cras vitae sodales consectetur adipiscing elit maecenas.
					<input class="form-control" type="email"/>
					<button class="btn form-control">Subscribers</button>
				</div><!--End col-md-3-->
			</div>
			<div class="including">
				<div class="pull-left">Copyright &copy Shopper</div>
				<div class="pull-right">Contact: +841652237832</div>
			</div>
		</div>	
	</footer>
</header>
</body>
</html>
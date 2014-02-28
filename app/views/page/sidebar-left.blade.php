<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
	@include("include.head")
</head>
<body>
<header>
	@include("header")
	<section id="content">
		<div class="container">
			<div class="group-product-category">
				<div class="row">
					<div class="col-md-3">
					@include("sidebar")
					</div>
					<div class="col-md-9">
						@yield("content")
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		@include("include.footer")
	</footer>
</header>
</body>
</html>
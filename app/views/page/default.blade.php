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
		@yield("content")
	</section>
	<footer>
		@include("include.footer")
	</footer>
</header>
</body>
</html>
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
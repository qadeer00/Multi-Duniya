

<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>  
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/superfish.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.ui.totop.js')}}"></script>

<script type="text/javascript" src="{{asset('js/camera.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.caroufredsel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.touchSwipe.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script>
$(document).ready(function() {
	//
	$('#camera_wrap').camera({
		//thumbnails: true
		//alignment			: 'centerRight', 
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		//fx					: 'simpleFade',
		height: '48%',
		hover: false,
		loader: 'none',
		navigation: false,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '300px'
	});

	//	carouFredSel
	$('#slider3 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 8000					
		},
		responsive: true,
		prev: '.prev3',
		next: '.next3',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo"
		},			
		items: {
        	width: '330',
			height: 'variable',	//	optionally resize item-height			  
			visible: {
				min: 1,
				max: 4
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			}
	}); 

	


	$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
	function updateSizes_vat(){		
		$('#slider3 .carousel.main ul').trigger("updateSizes");		
	}
	updateSizes_vat();



}); //
$(window).load(function() {
	//

}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->

@extends('layouts.main')
@section('main-container')
{{-- {{asset('')}} --}}
<div id="search">
	
<a href="#" class="searchBtn"></a>

<div class="search-form-wrapper">
<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
	<input type="text" name="s" value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''">
	<a href="#" onClick="document.getElementById('search-form').submit()"></a>
</form>	
</div>

</div>	
</div>

</div>	
</div>

<div id="inner">

<div class="top2_wrapper">
<div class="bg1"><img src="{{asset('images/bg1.jpg')}}" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">
	
<h1>Resources</h1>

</div>	
</div>	
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h2><span>Avout Our Resources</span></h2>

<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/resources01.jpg')}}" alt=""></figure>
		<div class="caption">
			<h3>sum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut </h3>			
			<p>
				Susi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. Suspendisse enim arcu, convallis non, cursus sed, dignissim et, est. Aenean semper aliquet libero. In ante velit, cursus ut, Susi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. Suspendisse enim arcu, convallis non, cursus sed, dignissim et, est. Aenean semper aliquet libero. In ante velit, cursus ut, ultrices vitae, tempor ut, risus. Duis pulvinar. Vestibulum vel pede at sapien sodales mattis. Quisque pretium, lacus nec iaculis vehicula, arcu libero consectetuer massa, auctor aliquet mauris ligula id ipsum. Vestibulum pede. Maecenas sit amet aug
			</p>
			<a href="#" class="button2">Read More</a>			
		</div>
	</div>
</div>

<br>

<h2><span>Our Partners</span></h2>


<div class="row">
<div class="span3">
<div class="thumb2 last">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="{{asset('images/partner01.jpg')}}" alt=""></figure>		
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2 last">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="{{asset('images/partner02.jpg')}}" alt=""></figure>		
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2 last">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="{{asset('images/partner03.jpg')}}" alt=""></figure>		
	</div>
</div>	
</div>	
</div>

<div class="row">
<div class="span3">
<div class="thumb2 last">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="{{asset('images/partner04.jpg')}}" alt=""></figure>		
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2 last">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="{{asset('images/partner05.jpg')}}" alt=""></figure>		
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2 last">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="{{asset('images/partner06.jpg')}}" alt=""></figure>		
	</div>
</div>	
</div>	
</div>


</div>
<div class="span3">
	
<h2><span>Usfull Info</span></h2>

<p>
	<b>
		Erosuere, nulla id lacinia pretium, lorem elit mollis sem, vel iaculis 
	</b>
</p>
<p>
	Curabitur dapibus convallis felis, eget congue lacus gravida vel. Phasellus rhoncus felis lectus, vitae elementum urna cursus quis. Fusce libero tortor, hendrerit quis suscipit quis, suscipit facilisis tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam consequat ligula libero. Nulla facilisi. Nullam nibh magna, mattis ac lacus non, hendrerit suscipit.
</p>
<a href="#" class="button1">Read more</a>

<br><br>

<p>
	<b>
		Erosuere, nulla id lacinia pretium, lorem elit mollis sem, vel iaculis 
	</b>
</p>
<p>
	Curabitur dapibus convallis felis, eget congue lacus gravida vel. Phasellus rhoncus felis lectus, vitae elementum urna cursus quis. Fusce libero tortor, hendrerit quis suscipit quis, suscipit facilisis tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam consequat ligula libero. Nulla facilisi. Nullam nibh magna, mattis ac lacus non, hendrerit suscipit.
</p>
<a href="#" class="button1">Read more</a>

<br><br>

<p>
	<b>
		Erosuere, nulla id lacinia pretium, lorem elit mollis sem, vel iaculis 
	</b>
</p>
<p>
	Curabitur dapibus convallis felis, eget congue lacus gravida vel. Phasellus rhoncus felis lectus, vitae elementum urna cursus quis. Fusce libero tortor, hendrerit quis suscipit quis, suscipit facilisis tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam consequat ligula libero. Nulla facilisi. Nullam nibh magna, mattis ac lacus non, hendrerit suscipit.
</p>
<a href="#" class="button1">Read more</a>








</div>	
</div>







</div>	
</div>
@endsection
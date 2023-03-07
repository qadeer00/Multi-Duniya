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
<div class="bg1"><img src="{{asset('')}}images/bg1.jpg" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">
	
<h1>services</h1>

</div>	
</div>	
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h2><span>best services</span></h2>

<div class="row">
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services01.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin 
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum 
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services02.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin 
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum 
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services03.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin 
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum 
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>	
</div>












</div>
<div class="span3">
	
<h2><span>Services</span></h2>

<ul class="ul1">
	<li><a href="#">Adipisicing</a></li>
	<li><a href="#">Dolore magna aliqua</a></li>
	<li><a href="#">Eiusmod tempor</a></li>
	<li><a href="#">Elit sed do</a></li>
	<li><a href="#">Incididunt ut labore et</a></li>
	<li><a href="#">Lorem ipsum dolor</a></li>
	<li><a href="#">Sit amet conse ctetur</a></li>
	<li><a href="#">Ut enim ad minim</a></li>
</ul>

</div>	
</div>

<div class="row">
<div class="span12">
	
<h2 class="center"><span>services overview</span></h2>

<div class="row">
<div class="span6">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services04.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>
<div class="span6">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services05.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>	
</div>

<div class="row">
<div class="span6">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services06.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>
<div class="span6">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services07.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>	
</div>

<div class="row">
<div class="span6">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services08.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>
<div class="span6">
<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class=""><img src="{{asset('images/services09.jpg')}}" alt=""></figure>
		<div class="caption">
			<p>
				<b>
					Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin
				</b>
			</p>
			<p>
				Wusi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra
			</p>
			<a href="#" class="button1">Read more</a>
		</div>
	</div>
</div>	
</div>	
</div>

</div>	
</div>





</div>	
</div>
@endsection
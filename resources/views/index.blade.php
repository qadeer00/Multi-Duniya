@extends('layouts.main')
@section('main-container')



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

<div class="find_wrapper">

<div class="find_inner">
<div class="find">
	
<div class="txt1">welcome to</div>

<div class="txt2">MULTI</div>

<div class="txt3">PLANET</div>

<div class="line"></div>

<div class="txt4">THE EASIEST WAY TO FIND PROPERTY</div>

<div class="find-form-wrapper clearfix">
  <form id="find-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form clearfix" >
    <input type="text" name="s" value='keyword' onBlur="if(this.value=='') this.value='keyword'" onFocus="if(this.value =='keyword' ) this.value=''">
    <a href="#" onClick="document.getElementById('find-form').submit()"></a>
  </form>
</div>


</div>	
</div>

<div id="slider_wrapper">
	<div id="slider" class="clearfix">
		<div id="camera_wrap">
			<div data-src="{{asset('images/slide01.jpg')}}"></div>
			<div data-src="{{asset('images/slide02.jpg')}}"></div>													
			<div data-src="{{asset('images/slide03.jpg')}}"></div>
			<div data-src="{{asset('images/slide04.jpg')}}"></div>
			<div data-src="{{asset('images/slide05.jpg')}}"></div>
		</div>	
	</div>		
</div>	
</div>	

<div class="banners">
<div class="container">
<div class="row">
<div class="span4 banner banner1">
<div class="banner_inner">
<a href="#">	
<div class="caption">
<div class="txt1">ADVANTAGES</div>
<div class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ...</div>
<div class="txt3">more</div>	
</div>
</a>	
</div>	
</div>
<div class="span4 banner banner2">
<div class="banner_inner">
<a href="#">	
<div class="caption">
<div class="txt1">MISSION</div>
<div class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ...</div>
<div class="txt3">more</div>	
</div>
</a>	
</div>	
</div>
<div class="span4 banner banner3">
<div class="banner_inner">
<a href="#">	
<div class="caption">
<div class="txt1">vision</div>
<div class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ...</div>
<div class="txt3">more</div>	
</div>
</a>	
</div>	
</div>	
</div>	
</div>	
</div>

<div id="slider3_wrapper">
<div class="container">

<div class="slider3_title"><span>LATEST OFFERS</span></div>	

<div id="slider3">
<a class="prev3" href="#"></a>
<a class="next3" href="#"></a>		
<div class="carousel-box row">
	<div class="inner span12">			
		<div class="carousel main">
			<ul>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel01.png')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Al Raha Beach</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									
									<div class="txt4">Read More</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel02.png')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Sadiyat Island</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
						
									<div class="txt4">Read More</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel03.png')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Al Reem Island</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
								
									<div class="txt4">Read More</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel04.png')}} " alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Yas Island</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
						
									<div class="txt4">Read More</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel05.png')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Dubai</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
								
									<div class="txt4">Read More</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel06.png')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Sharjha</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
								
									<div class="txt4">Read More</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>																									
			</ul>
		</div>
	</div>
</div>
</div>

</div>	
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h2><span>How it works</span></h2>

<div class="row">
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">a</div>
	<div class="txt2">Lorem ipsum<br>dolor sit</div>
</div>	

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">b</div>
	<div class="txt2">Vestibulum ante<br>ipsum primis</div>
</div>	

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">c</div>
	<div class="txt2">Cras dictum<br>odio</div>
</div>	

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>	
</div>

</div>
<div class="span3">
	
<h2><span>Our Professional Management</span></h2>

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
</div>	
</div>
	
@endsection


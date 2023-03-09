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
	
<h1>Gallery</h1>

</div>	
</div>	
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span12">
	
<h2><span>Our Photos</span></h2>


<ul class="thumbnails" id="isotope-items">		  
    <li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
					<video style="height:275px">
						<source src="{{asset('1.mp4')}}" type="video/mp4">
						<source src="{{asset('1.mp4')}}" type="video/ogg">
						
					  </video>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
	<li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<video style="height:275px">
							<source src="{{asset('2.mp4')}}" type="video/mp4">
							<source src="{{asset('2.mp4')}}" type="video/ogg">
							
						  </video>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
	<li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<video style="height:275px">
							<source src="{{asset('3.mp4')}}" type="video/mp4">
							<source src="{{asset('3.mp4')}}" type="video/ogg">
							
						  </video>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
	<li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<video style="height:275px">
							<source src="{{asset('4.mp4')}}" type="video/mp4">
							<source src="{{asset('4.mp4')}}" type="video/ogg">
							
						  </video>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
	<li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<video style="height:275px">
							<source src="{{asset('5.mp4')}}" type="video/mp4">
							<source src="{{asset('5.mp4')}}" type="video/ogg">
							
						  </video>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
	<li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<video style="height:275px">
							<source src="{{asset('6.mp4')}}" type="video/mp4">
							<source src="{{asset('6.mp4')}}" type="video/ogg">
							
						  </video>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
	<li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery01.png')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter2">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery02.png')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter3">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery03.png')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery04.jpg')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter2">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery05.jpg')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter3">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery06.jpg')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter1">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery07.jpg')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter2">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery08.jpg')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
					</div>
				</a>				
			</div>
		</div>
    </li>
    <li class="span4 isotope-element isotope-filter3">
		<div class="thumb-isotope">
			<div class="thumbnail clearfix">
				<a href="#">
					<figure>
						<img src="{{asset('images/gallery09.jpg')}}" alt=""><em></em>
					</figure>
					<div class="caption">							
						Lorem ipsum dolor sit amet conse ctetur
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
@endsection
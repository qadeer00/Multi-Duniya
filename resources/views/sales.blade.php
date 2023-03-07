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
	
<h1>Sales</h1>


</div>	
</div>	
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span12">
	
<h2><span>Selling List</span></h2>

<div class="row">
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="{{asset('images/sales01.jpg')}}" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$570.000</div>
			<a href="#" class="button2">Read More</a>
		</div>	
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="{{asset('images/sales02.jpg')}}" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$140.000</div>
			<a href="#" class="button2">Read More</a>
		</div>	
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="{{asset('images/sales03.jpg')}}" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$220.000</div>
			<a href="#" class="button2">Read More</a>
		</div>	
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="{{asset('images/sales04.jpg')}}" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$800.000</div>
			<a href="#" class="button2">Read More</a>
		</div>	
	</div>
</div>	
</div>	
</div>

<div class="row">
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="{{asset('images/sales05.jpg')}}" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$410.000</div>
			<a href="#" class="button2">Read More</a>
		</div>	
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="{{asset('images/sales06.jpg')}}" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$570.000</div>
			<a href="#" class="button2">Read More</a>
		</div>	
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="{{asset('images/sales07.jpg')}}" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$650.000</div>
			<a href="#" class="button2">Read More</a>
		</div>	
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb3">
	<div class="thumbnail clearfix">
		<figure><img src="{{asset('images/sales08.jpg')}}" alt="" class="img"></figure>
		<div class="caption">
			<div class="txt1">LOREM IPSUM DOL AMET</div>
			<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
			<div class="txt3">$290.000</div>
			<a href="#" class="button2">Read More</a>
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
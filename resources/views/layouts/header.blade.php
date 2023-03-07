<!DOCTYPE html>
<html lang="en">
<head>
<title>Multi - Planet</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="{{('images/favicon.ico')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
@include('layouts.javascript')

@include('layouts.style')
</head>
<div class="top1_wrapper">
    <div class="top1 clearfix">
    
      
<header><div class="logo_wrapper"><a href="{{route('index_home')}}" class="logo"><img src="{{asset('images/logo.png')}}" alt="" style="width:60px;height:50px"></a></div></header>

<div class="menu_wrapper clearfix">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix">
<li class="active"><a href="{{route('index_home')}}">home</a></li>
<li class="sub-menu sub-menu-1"><a href="{{route('about_us')}}">about</a>
	<ul>
		
			<ul>
				
			</ul>
		</li>
		<li class="sub-menu sub-menu-2"><ul>
				
			</ul>
		</li>		
							
	</ul>						
</li>
<li><a href="{{route('services')}}">services</a></li>
 <li><a href="{{route('sales')}}">Sales</a></li>
<li><a href="{{route('resources')}}">resources</a></li>											
<li><a href="{{route('gallery')}}">gallery</a></li>											
<li><a href="{{route('contact_us')}}">contact us</a></li>											
    </ul>
		</div>
    </div>
</div>
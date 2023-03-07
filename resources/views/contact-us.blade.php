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
	
<h1>contact us</h1>

</div>	
</div>	
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h2><span>Our Location</span></h2>

<figure class="google_map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.6783298461046!2d54.37156324987162!3d24.49659986570112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e67689c5b6579%3A0xc124e97851d5c4e2!2sMulti%20Planet%20Property%20Management%20LLC!5e0!3m2!1sen!2s!4v1678114846733!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</figure>


<h3>Real estate finder</h3>

<p>
#203 Abdulla Bin Darwish Bldg, Salam Street<br>
6835  Abu Dhabi<br>
Telephone: +971 2 622 3747<br>
E-mail: <a href="#">info@multiplanet.ae</a>
</p>










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
	
<h2 class="center"><span>Contact form</span></h2>

<div id="note"></div>
<div id="fields">
	<form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
		<div class="row">
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputName">Your full name:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputName" name="name" value="Your full name:" onBlur="if(this.value=='') this.value='Your full name:'" onFocus="if(this.value =='Your full name:' ) this.value=''">
				    </div>
				</div>				
			</div>	
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputEmail">Your email:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputEmail" name="email" value="Your email:" onBlur="if(this.value=='') this.value='Your email:'" onFocus="if(this.value =='Your email:' ) this.value=''">
				    </div>
				</div>
			</div>		
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputPhone">Phone number:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputPhone" name="phone" value="Phone number:" onBlur="if(this.value=='') this.value='Phone number:'" onFocus="if(this.value =='Phone number:' ) this.value=''">
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div class="control-group">
				    <label class="control-label" for="inputMessage">Message:</label>
				    <div class="controls">				      				      
				      <textarea class="span12" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message:'" 
                        onFocus="if(this.value =='Message:' ) this.value=''">Message:</textarea>
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div class="control-group capthca">
				    <label class="control-label" for="inputCapthca">Capthca:</label>
				    <div class="controls">				      
				      <input class="" type="text" id="inputCapthca" name="capthca" value="Capthca:" onBlur="if(this.value=='') this.value='Capthca:'" onFocus="if(this.value =='Capthca:' ) this.value=''">
				      <img src="{{asset('captcha/captcha.php')}}">
				    </div>
				</div>
			</div>
		</div>
		<button type="submit" class="submit">Submit</button>
	</form>
</div>	





</div>	
</div>





</div>	
</div>
@endsection
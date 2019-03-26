@extends("template/template")

@section('title','PASJOOM - Landing')

@section('body')
	<div class="filter">
		<div class="subscribe">
			<h1> Subscribe </h1>
			<p>  Submit your e-mail to get latest news and special promotion </p>
			<i class="close-subscribe fas fa-times-circle"></i>
			<div class="email-submit">
				<form method="POST" action="/subscribe" class="form-subscribe">
					@csrf
					<div class="email-data"><input name="email" placeholder="Enter your email address" required id="em"/></div>
					<div class="submit-data"><input type="submit" value="Subscribe"/></div>
				</form>
			</div> 
			<img src="img/icon-cropped.png"/>
		</div>
	</div>
	<img class="landing-img" src="img/landing-image.png"/>
	<div class="landing-caption">
		<img src="img/icon.png" width="50px"/><br>
		A resale marketplace for<br>
		curated men's goods
	</div>
	<a href="#">
		<div class="landing-digging">
			Start Digging
		</div>
	</a>
	@include('assets/copyright')
@endsection

@section('script')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$('.filter').hide()

		$('.landing-digging').click(function(){
			$('.filter').show()
			$('.filter').animate({"opacity":"1"})
		})

		$('.close-subscribe').click(function(){
			$('.filter').animate({"opacity":"0"})
			$('.filter').hide()
		})

		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		$('.form-subscribe').submit(function(e){
			if(!filter.test($('#em').val())){
				e.preventDefault()
				alert("Invalid email format.")
			}
		})

		@if(Input::get('submitted')=="yes")
			$(window).ready(function(){
				alert("Thank you for subscribing to PASJOOM.")
			})
		@endif
	</script>
@endsection
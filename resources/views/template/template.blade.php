<!DOCTYPE HTML>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="css/pasjoom.css" rel="stylesheet" type="text/css"/>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="img/pasjoom_icon.ico" />
</head>
<body>
	@include('assets/nav')
	@yield('body')

	@yield('script')
</body>
</html>
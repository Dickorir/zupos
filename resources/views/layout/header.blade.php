<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

	<link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">

	<link rel="stylesheet" href="{{asset('build/alerts/iao-alert.css')}}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('build/sweetalert/sweetalert.css')}}">
	<link rel="stylesheet" href="{{asset('build/css/custom.css')}}">

	<!-- jQuery 3 -->
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"> </script>
	<script src="{{ asset('build/sweetalert/sweetalert.min.js') }}"> </script>
	<script src="{{ asset('admin_css/js/sweetalert.min.js') }}"> </script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

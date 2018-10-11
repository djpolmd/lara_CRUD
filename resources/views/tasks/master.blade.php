<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<style type="text/css"></style>
	</head>
	<body>
		@section('sidebar')

        This is the master sidebar.
        @show
        
        <div class="container">
        @section('content')
        </div>

        @if(Session::has('flash_message'))
   			 <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
	</body>
</html>
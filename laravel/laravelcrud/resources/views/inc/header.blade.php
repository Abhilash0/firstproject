<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery-3.2.1.slim.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/create') }}">Create</a>
      </li>
    </ul>
  </div>
</nav>
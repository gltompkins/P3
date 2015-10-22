@extends('layouts.master')


@section('title')
    Title - Generate Random Users
@stop



{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}

@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>

    <img src='images/Fotolia_87889978_XS.jpg'
		style='width:300px'
    	alt='generate lorem ipsum text image'>
@stop



@section('content')
    <h1>Generate Random Users</h1>


@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>

    <p>Generate random users ...</a>)
    <br>
    blah blah ....
    </p>


    <form method="post" action="/randomuser" id="randomuserform">
    	<input type='hidden' name='_token' value='{{ csrf_token() }}'>
    	How many users would you like to generate?
  		<input type='number' name='numberUsers' min="1" max="10" step="1" value=3 autofocus >
		(max 10)  	

		<br />
		<input type="submit" name="formSubmit" value='Submit'>
		<br /> <br />
    </form>

	<?php
		print_r($_POST);
		echo "Gregg test";
	?>

@stop

@extends('layouts.master')


@section('title')
    Title - Generate Lorem Ipsum text
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
    <h1>Generate Lorem Ipsum Text</h1>


@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>

    <p>(from <a href="https://en.wikipedia.org/wiki/Lorem_ipsum">en.wikipedia.org/wiki/Lorem_ipsum</a>)
    <br>
    In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum,
    translated as "pain itself") is a filler text commonly used to demonstrate the
    graphic elements of a document or visual presentation...
    </p>


    <form method="post" action="/lorem" id="loremform">
    	<input type='hidden' name='_token' value='{{ csrf_token() }}'>
    	How many paragraphs of text would you like?
  		<input type='number' name='paraNumber' min="1" max="10" step="1" value=3 autofocus >
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

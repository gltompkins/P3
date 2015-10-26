@extends('layouts.master')


@section('title')
    Title - Developer's Best Friend
@stop



{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}

@section('head')
      <link href="/css/books/show.css" type='text/css' rel='stylesheet'>

      <img src='images/form and function logo.jpg'
        style='width:250px'
        alt='form and function logo'>

@stop



@section('content')
    <h1>Developer's Best Friend</h1><br>
    <h4>Tools to make your development tasks easier.  Select the tool you need. <h4>
    <br>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <h4>Lorem Ipsum text generator<h4>
    <form method="get" action="/lorem" id="loremform">
        <input type="submit" name="formGetLorem" class="btn btn-primary"
            value='Lorem Ipsum'>
            <br><br>
    </form>

    <h4>Random Test User generator<h4>
    <form method="get" action="/randomuser" id="loremform">
        <input type="submit" name="formGetRandom" class="btn btn-primary"
            value='Random User'>
            <br><br>
    </form>

@stop

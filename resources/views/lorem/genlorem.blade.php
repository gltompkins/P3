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
      <link href="/p3/p3.css" type='text/css' rel='stylesheet'>

      {{-- image file purchased from Fotolia --}}
      <img src='images/Fotolia_87889978_XS.jpg'
        style='width:250px'
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

    <h6>(from <a href="https://en.wikipedia.org/wiki/Lorem_ipsum">en.wikipedia.org/wiki/Lorem_ipsum</a>)</h6>
    <h4>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum,
    translated as "pain itself") is a filler text commonly used to demonstrate the
    graphic elements of a document or visual presentation...</h4>


    <form method="post" action="/lorem" id="loremform">
    	<input type='hidden' name='_token' value='{{ csrf_token() }}'>
    	Generate how many paragraphs? <input type="number"
    	id="idNumTest"
        name="paraNumber" min="1" max="10" step="1"
        autofocus required > (max 10)

		<br />
		<input type="submit" name="formSubmitLorem" class="btn btn-primary"
               value='Submit'>
		<br /> <br />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["paraNumber"])){
    	       $paraNumError = "Number of paragraphs is required";
        } else {
    	    $numParagraphs = test_input($_POST["paraNumber"]);
        }

        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numParagraphs);
        echo implode('<p>', $paragraphs);
    }

	// this function copied from w3schools.com
	function test_input($data) {
	    $data = trim($data);
		$data = stripslashes($data);
	    $data = htmlspecialchars($data);
		return $data;
	}
	?>

@stop

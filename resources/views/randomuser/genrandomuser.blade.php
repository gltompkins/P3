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
    {{-- image file purchased from Fotolia --}}
    <img src='images/Fotolia_67429894_XS.jpg'
		style='width:250px'
    	alt='generate random user image'>


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

    <h4>Are you tired of using "Mickey Mouse, Minnie Mouse, Donald Duck" as your
        test users? You can generate random users for developing applications
        with test users. Generate test users with realistic names, addresses,
        email, and more!
    </h4>

    <form
        <div class="form-group"
            method="post" action="/randomuser" id="randomuserform" class="form-horizontal">
    	<input type='hidden' name='_token' value='{{ csrf_token() }}'>
    	How many users would you like to generate?
  		<input type='number' name='numberUsers' min="1" max="20" step="1"
         autofocus required >
		(max 20)

		<br>
		<input type="submit" name="formSubmit" class="btn btn-primary" value='Submit'>
		<br>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	//echo("my POST echo:");
        //echo PHP_EOL;
        //echo nl2br("one line \n another line\n and a 3rd\n");
        if (empty($_POST["numberUsers"])){
    	       $numUsersError = "Number of Users is required";
        } else {
    	    $numberUsers = test_input($_POST["numberUsers"]);

        }

    $faker = Faker\Factory::create();
    for ($i=0; $i < $numberUsers; $i++) {
        echo nl2br("\n");
        echo "name: ", $faker->name , "\n";
        echo nl2br("\n");
        echo "address: ", $faker->address, "\n";
        echo nl2br("\n");
        echo "phone: ", $faker->phoneNumber;
        echo nl2br("\n");
        echo "country: ", $faker->country, "\n";
        echo nl2br("\n");
        echo "employer: ", $faker->company;
        echo nl2br("\n");
        echo "email: ", $faker->email;
        echo nl2br("\n");
        echo "username: ", $faker->userName;
        echo nl2br("\n");
    }



    // require the Faker autoloader
    //require_once '/path/to/Faker/src/autoload.php';
    // alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

    // use the factory to create a Faker\Generator instance
    //$faker = Faker\Factory::create();
    //for ($i=0; $i < 4; $i++) {
    //  echo "name: ", $faker->name, "\n";
    //}
    // generate data by accessing properties


    //echo implode('<p>', $paragraphs);
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

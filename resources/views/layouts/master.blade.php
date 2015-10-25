<!doctype html>
<html>
<head>
    <title>
        P3 - gen Lorem gen Test Users
    </title>

    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha256-kBMbBs0vxJSlN7T3a7hOLllj53zib5nbF7rn4NAKy04= sha512-PwtEPLjYjtwEveJNXQTih2qsQhTg4tjgIy0gruouyKN5NLD4G4jh+mMrf7cA2s5PVI71UlS8DBYr1iqrN7ivBg==" crossorigin="anonymous">
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>



    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

    <footer>
        website by Gregg Tompkins
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


</body>
</html>

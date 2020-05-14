<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>HTML5</title>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        article, aside, details, figcaption, figure, footer,header,
        hgroup, menu, nav, section { display: block; }
    </style>
</head>
<body>
<form action="{{ route( 'index' ) }}">
    <button type="submit">Back</button>
</form>
<br><br>
<p>Привет, мир</p>

<div id="app">
    <button type="button" id="toggle" aria-expanded="false">
        Toggle Panel
    </button>
    <p class="hello">hello</p>
</div>

<script>
    $(function() {
        $('#toggle').on('click', function() {
            $('.hello').toggle( "slow" );
        });
    });
</script>
</body>
</html>

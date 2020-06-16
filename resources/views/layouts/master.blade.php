<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
    <script src="js/my.js"></script>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/mystyle.css" rel="stylesheet">
    @stack('additionalCSS')

</head>
<body>

<div class="sidenav">
   <div class="date" style="color: #adb5bd">{{ date('Y-m-d') }}</div>
<a href="{{route('index')}}">Главная</a>
<a href="{{route('reset_db')}}">Сбросить проект в начальное состояние</a>
<a href="{{ route('vova-test') }}">Vova Test</a>
<a href="#services">Services</a>
<a href="#clients">Clients</a>
<a href="#contact">Contact</a>
<button class="dropdown-btn">Бюджетна звітність
    <i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">
    {{--        @foreach($reports as $report)--}}
    {{--            <a href="">{{$report->name}}</a>--}}
    {{--        @endforeach--}}
</div>
<a href="#contact">Search</a>
</div>

@yield('content')

<script>

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
</script>

</body>
</html>

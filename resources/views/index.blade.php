<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/mystyle.css" rel="stylesheet">

</head>
<body>

<div class="sidenav">
    <a href="{{route('reset_db')}}">Сбросить проект в начальное состояние</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a>
    <button class="dropdown-btn">Бюджетна звітність
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">

    </div>
    <a href="#contact">Search</a>
</div>

<div class="main">

	<div class="container_report">
	<form class="form-style-4" action="" method="post">
		<div class="row">
		<label for="name_report" class="name_report">Який це звіт </label>
		<label for="name" class="row_name">за період</label>
		<input type="text" name="Month" autocomplete="off" placeholder="Month">
		<input type="text" name="Years" autocomplete="off" placeholder="Years">
		</div>

		<label>
		<span> </span><input type="submit" value="Записати" />
		</label>
		<label>
		<input type="BUTTON" value="Перевірити" />
		</label>
		<label>
		<input type="BUTTON" value="Створити" />
		</label>
		<label>
		<input type="BUTTON" value="Відкрити" />
		</label>
	</form>
	</div>


	<table class="table-hover" width="100%" border="1" cellpadding="4" cellspacing="0">
        @foreach($reports as $report)
            <tr class ="col_2">
                <td ><a href="{{ route('report', $report->name_form) }}">{{$report->name}}</a></td><td >{{$report->code}}</td>

            </tr>
        @endforeach



  </table>



</div>
















<script>

	/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
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

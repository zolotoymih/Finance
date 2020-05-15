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


    <form action="" method="POST" name="form1">
        <table class="table-hover" width="100%" border="1" cellpadding="4" cellspacing="0">
            <caption>БАЛАНС</caption>
            <tr  class="thead-light" style="font-size: 15px;">
                <th width="400px" >АКТИВ</th><th width="50px">Код рядка</th><th>На початок звітного періоду</th><th>На кінець звітного періоду</th>
            </tr>
            <tr  class="thead-light" style="font-size: 15px;">
                <th width="400px" >1</th><th width="50px">2</th><th>3</th><th>4</th>
            </tr>
            <tr class ="col_1" >
                <td colspan="4" style="text-right">І. НЕФІНАНСОВІ АКТИВИ</td></td>
            </tr>
            <tr class ="col_2">
                <td >Основні засоби:</td><td>1000</td><td class="td_select" id="A1000" ></td>
                <td class="td_select" id="P1000"></td>
            </tr>
            <tr class ="col_3">
                <td >первісна вартість</td><td>1001</td><td class="td_select" id="A1001"><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1001"><div class="div_select" contenteditable></div></td>
            </tr>
            <tr class ="col_3">
                <td >знос</td><td>1002</td><td class="td_select" id="A1002"><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1002"><div class="div_select" contenteditable></div></td>
            </tr>

            <tr class ="col_2">
                <td >Інвестиційна нерухомість:</td><td>1010</td><td class="td_select" id="A1010" ></td>
                <td class="td_select" id="P1010"></td>
            </tr>
            <tr class ="col_3">
                <td >первісна вартість</td><td>1011</td><td class="td_select" id="A1011"><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1011"><div class="div_select" contenteditable></div></td>
            </tr>
            <tr class ="col_3">
                <td >знос</td><td>1012</td><td class="td_select" id="A1012"><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1012"><div class="div_select" contenteditable></div></td>
            </tr>

            <tr class ="col_2">
                <td >Нематеріальні активи:</td><td>1020</td><td class="td_select" id="A1020" ></td>
                <td class="td_select" id="P1020"></td>
            </tr>
            <tr class ="col_3">
                <td >первісна вартість</td><td>1021</td><td class="td_select" id="A1021"><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1021"><div class="div_select" contenteditable></div></td>
            </tr>
            <tr class ="col_3">
                <td >накопичена амортизація</td><td>1022</td><td class="td_select" id="A1022"><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1022"><div class="div_select" contenteditable></div></td>
            </tr>


            <tr class ="col_2">
                <td >Незавершені капітальні інвестиції</td><td>1030</td><td class="td_select" id="A1030" ><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1030"><div class="div_select" contenteditable></div></td>
            </tr>
            <tr class ="col_2">
                <td >Довгострокові біологічні активи</td><td>1040</td><td class="td_select" id="A1040" ></td>
                <td class="td_select" id="P1040"></td>
            </tr>
            <tr class ="col_3">
                <td >первісна вартість</td><td>1041</td><td class="td_select" id="A1041"><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1041"><div class="div_select" contenteditable></div></td>
            </tr>
            <tr class ="col_3">
                <td >накопичена амортизація</td><td>1042</td><td class="td_select" id="A1042"><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1042"><div class="div_select" contenteditable></div></td>
            </tr>

            <tr class ="col_2">
                <td >Запаси</td><td>1050</td><td class="td_select" id="A1050" ><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1050"><div class="div_select" contenteditable></div></td>
            </tr>
            <tr class ="col_2">
                <td >Виробництво</td><td>1060</td><td class="td_select" id="A1060" ><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1060"><div class="div_select" contenteditable></div></td>
            </tr>
            <tr class ="col_2">
                <td >Поточні біологічні активи</td><td>1090</td><td class="td_select" id="A1090" ><div class="div_select" contenteditable></div></td>
                <td class="td_select" id="P1090"><div class="div_select" contenteditable></div></td>
            </tr>
            <tr class ="col_1">
                <td >Усього за розділом І</td><td>1095</td><td class="td_select" id="A1095" ></td>
                <td class="td_select" id="P1095"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-right">Всього</td><td id="A00"></td><td id="P00"></td>
            </tr>

        </table>



</div>


















</body>
</html>

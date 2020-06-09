@extends('layouts.master')

@section('content')

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
                    <span></span><input type="submit" value="Записати" />
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

@endsection

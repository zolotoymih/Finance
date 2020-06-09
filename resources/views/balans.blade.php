@extends('layouts.master')

@section('content')

    <div class="main">

        <form class="" action="" method="post">
            <div class="container_report form-style-4">
                <div class="row">
                    <label for="name_report" class="name_report">Який це звіт </label>
                    <label for="name" class="row_name">за період</label>
                    {{--                <input type="text" name="Month" autocomplete="off" placeholder="Month">--}}
                    {{--                             <input type="text" name="Years" autocomplete="off" placeholder="Years">--}}
                    {{--                @foreach($period as Period::get())--}}
                    {{--                    <input type="text" name="Month" autocomplete="off" placeholder="Month">--}}
                    {{--                <input type="text" name="Years" autocomplete="off" placeholder="Years">--}}
                    {{--                    @endforeach--}}
                    {{--                <div class="dropdown-container">--}}
                    <select>
                        @foreach (App\Period::get() as $period)
                            <option><a href="">{{ $period->name }}</a></option>
                        @endforeach
                    </select>
                    {{--                </div>--}}

                    <label>
                        <input type="submit" value="Записати"/>
                    </label>
                    <label>
                        <input type="BUTTON" value="Перевірити"/>
                    </label>
                    <label>
                        <input type="BUTTON" value="Створити"/>
                    </label>
                    <label>
                        <input type="BUTTON" value="Відкрити"/>
                    </label>
                </div>

            </div>

            <table class="table-hover" width="100%" border="1" cellpadding="4" cellspacing="0">
                <caption>БАЛАНС</caption>
                <tr class="thead-light" style="font-size: 15px;">
                    <th width="400px">АКТИВ</th>
                    <th width="50px">Код рядка</th>
                    <th>На початок звітного періоду</th>
                    <th>На кінець звітного періоду</th>
                </tr>
                <tr class="thead-light" style="font-size: 15px;">
                    <th width="400px">1</th>
                    <th width="50px">2</th>
                    <th>3</th>
                    <th>4</th>
                </tr>
                <tr class="col_1">
                    <td colspan="4" style="text-align: left;">І. НЕФІНАНСОВІ АКТИВИ</td>
                </tr>
                <tr class="col_2">
                    <td>Основні засоби:</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1000" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1000" value=""
                                                       disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1000" value=""
                                                       disabled></td>
                </tr>
                <tr class="col_3">
                    <td>первісна вартість</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1001" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1001" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1001" value="">
                    </td>
                </tr>
                <tr class="col_3">
                    <td>знос</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1002" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1002" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1002" value="">
                    </td>
                </tr>

                <tr class="col_2">
                    <td>Інвестиційна нерухомість (with div only):</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1010" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1010" value=""
                                                       disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1010" value=""
                                                       disabled></td>
                </tr>
                <tr class="col_3">
                    <td>первісна вартість</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1011" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1011" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1011" value="">
                    </td>
                </tr>
                <tr class="col_3">
                    <td>знос</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1012" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1012" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1012" value="">
                    </td>
                </tr>

                <tr class="col_2">
                    <td>Нематеріальні активи:</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1020" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1020" value=""
                                                       disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1020" value=""
                                                       disabled></td>
                </tr>
                <tr class="col_3">
                    <td>первісна вартість</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1021" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1021" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1021" value="">
                    </td>
                </tr>
                <tr class="col_3">
                    <td>накопичена амортизація</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1022" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1022" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1022" value="">
                    </td>
                </tr>

                <tr class="col_2">
                    <td>Незавершені капітальні інвестиції</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1030" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1030" value=""
                                                       disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1030" value=""
                                                       disabled></td>
                </tr>
                <tr class="col_2">
                    <td>Довгострокові біологічні активи</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1040" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1040" value=""
                                                       disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1040" value=""
                                                       disabled></td>
                </tr>
                <tr class="col_3">
                    <td>первісна вартість</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1041" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1041" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1041" value="">
                    </td>
                </tr>
                <tr class="col_3">
                    <td>накопичена амортизація</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1042" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1042" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1042" value="">
                    </td>
                </tr>

                <tr class="col_2">
                    <td>Запаси</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1050" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1050" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1050" value="">
                    </td>
                </tr>
                <tr class="col_2">
                    <td>Виробництво</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1060" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1060" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1060" value="">
                    </td>
                </tr>
                <tr class="col_2">
                    <td>Поточні біологічні активи</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1090" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1090" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1090" value="">
                    </td>
                </tr>
                <tr class="col_1">
                    <td>Усього за розділом І</td>
                    <td><input type="text" class="border-none" name="code" id="code" value="1095" disabled></td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A1" id="A1095" value="">
                    </td>
                    <td class="td_select" id=""><input type="text" class="border-none" name="A2" id="P1095" value="">
                    </td>
                </tr>


                <tr>
                    <td colspan="2" style="text-align: left">Всього</td>
                    <td id="A00"></td>
                    <td id="P00"></td>
                </tr>


            </table>

        </form>

    </div>


@endsection



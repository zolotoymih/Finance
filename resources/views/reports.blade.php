@extends('layouts.master')

@section('content')

    <div class="main container-fluid">

        <div class="container_report">
            <form class="form-style-4" action="" method="post">
                <input type="hidden" id="edrpou" name="organization" value="1">
                <fieldset>
                    <legend>Створення звіту</legend>
                    <label>
                        Вид звітності
                        <select name="kind_reports" required>
                            <option selected disabled style="display: none; color: red; font-style: italic;"><i>Виберіть вид звітності</i></option>
                            @foreach ($kind_reports as $report)
                                <option value="{{$report->id}}" >{{$report->name}}</option>
                            @endforeach
                        </select>
                    </label>
                    <label>
                        Назва звіту
                        <select name="type_reports" disabled required>
                            <option style="display:none;" data-kind-report="Null"><em>Виберіть звітност</em></option>
                            @foreach ($type_reports as $report)
                                <option value="{{$report->id}}" data-kind-report="{{$report->kind_reports_id }}">{{$report->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </fieldset>
                    <input type="BUTTON" value="Створити" />
            </form>
        </div>


        <table class="table-hover" width="100%" border="1" cellpadding="4" cellspacing="0">

            @foreach($reports as $report)
                <tr class ="col_2">
                    <td ><a href="">{{$type_reports[$report->type_report_id]->name}}</a></td>
                    <td >{{$type_reports[$report->type_report_id]->code}}</td>
                    <td>
                        <form action="{{ route('reports.destroy', $report) }}" method="POST">
                            <a class="btn btn-warning" type="button" href="{{ route('reports.edit', $report) }}">Редактировать</a>

                            @csrf
                            @method('DELETE')
                            <input class="btn" type="submit" value="Видалити">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

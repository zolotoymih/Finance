@extends('layouts.master')

@section('content')

    <div class="main container-fluid">

        <div class="container_report">
            <form class="form-style-4" action="{{route('reports.store')}}" method="post">
                <fieldset>
                    <input type="hidden" id="edrpou" name="organization" value="1">
                    <legend>Створення звіту</legend>
                    <label>
                        Вид звітності
                        <select name="kind_reports" required>
                            <option  style="display: none; color: red; font-style: italic;">Виберіть
                                вид звітності
                            </option>
                            @foreach ($kind_reports as $report)
                                <option value="{{$report->id}}">{{$report->name}}</option>
                            @endforeach
                        </select>
                    </label>
                    <label>
                        Період подачі звітності
                        <select name="periods" required>
                            <option  style="display: none; color: red; font-style: italic;">Виберіть
                                період подачі звітності
                            </option>
                            @foreach ($periods as $period)
                                <option value="{{$period->id}}">{{$period->name}}</option>
                            @endforeach
                        </select>
                    </label>

                    <label>
                        Назва звіту
                        <select name="type_reports" disabled required>
                            <option style="display:none;" data-kind-report="Null">Виберіть звіт</option>
                            @foreach ($type_reports as $report)
                                <option value="{{$report->id}}"
                                        data-kind-report="{{$report->kind_reports_id }}">{{$report->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </fieldset>
                <input id="but" class="btn btn-success" type="button" value="Створити">
            </form>
        </div>


        <table class="table table-sm table-hover">

            {{--
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
            --}}
            <tbody id="reports-table">
            @foreach($reports as $report)
                <tr class="d-flex">
                    <td width="75%"><a href="">{{$report->name}}</a></td>
                    <td width="5%">{{$report->code}}</td>
                    <td width="20%">
                        <button class="btn btn-warning button-edit" data-type-report="{{$report->type_report_id }}" value="{{ $report->id }}" type="button">Редагувати
                        </button>
                        <button class="btn btn-danger button-delete" value="{{ $report->id }}" type="button">Видалити
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

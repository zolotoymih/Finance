@extends('layouts.master')

@push('additionalCSS')
    <link href="css/buttonsMain.css" rel="stylesheet">
@endpush

@section('content')

    <div class="main button_container">
        <button onclick="document.location='{{route('reports.index')}}'" class="button_main"><span>Звітніть</span></button>
        <button class="button_main"><span>Грошове</span></button>
    </div>

@endsection

@extends('dashboard.layouts.app')

@section('title')
    Главная страница
@endsection

@section('content')
    @include('dashboard.layouts.alerts')
    <h2>Мои платежи</h2>

    <br/>

    <table class="table table-bordered datatable" id="table-1">
        <thead>

        <tr>
            <th data-hide="phone">дата платежа</th>
            <th>дата активации</th>
            <th data-hide="phone">название</th>
            <th data-hide="phone,tablet">сумма</th>
            <th data-hide="phone,tablet">скидка</th>
            <th data-hide="phone,tablet">срок</th>
            <th data-hide="phone,tablet">платежная система</th>
            <th data-hide="phone,tablet">статус</th>
        </tr>

        </thead>
        <tbody>
        @if(isset($tariff))
            @foreach($tariff as $t)
                <tr class="odd gradeX">
                    <td>{{$t->created_at}}</td>
                    <td>{{$t->updated_at}}</td>
                    <td>{{$t->name}}</td>
                    <td>{{$t->sum}}</td>
                    <td>{{$t->discount}}</td>
                    <td>{{$t->term}}</td>
                    <td>{{$t->payment_system}}</td>
                    <td>{{$t->status}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

@section('css')
@endsection
@section('js')
@endsection

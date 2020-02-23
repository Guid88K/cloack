@extends('dashboard.layouts.app')


@section('title')
    Главная страница
@endsection




@section('content')

    <h2>Кампании</h2>

    <br/>

    <table class="table table-bordered datatable" id="table-1">
        <thead>

        <tr>
            <th data-hide="phone">Название</th>
            <th>Создана</th>
            <th data-hide="phone">white page</th>
            <th data-hide="phone,tablet">black page</th>
            <th data-hide="phone,tablet">статус</th>
            <th data-hide="phone,tablet">
                <div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-arrows-ccw"></i></a>
                </div>
            </th>
            <th data-hide="phone,tablet">
                <div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flash"></i> </a></div>
            </th>
            <th data-hide="phone,tablet">действия</th>
        </tr>

        </thead>
        <tbody>
        @foreach($companies as $c)
            <tr class="odd gradeX">
                <td>{{$c->name}}</td>
                <td>{{$user->name}}</td>
                <td>{{$c->white_page}}</td>
                <td class="center">{{$c->black_page}}</td>
                <td class="center">{{$c->type_active}}</td>
                <td class="center">{{$c->geo}}</td>
                <td class="center">{{$c->ip}}</td>
                <td>
                    <a href="{{route('companies.edit', $c->id)}}" class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        Edit
                    </a>

                    <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                        <i class="entypo-cancel"></i>
                        Delete
                    </a>

                    {{--                <a href="#" class="btn btn-info btn-sm btn-icon icon-left">--}}
                    {{--                    <i class="entypo-info"></i>--}}
                    {{--                    Profile--}}
                    {{--                </a>--}}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('css')
@endsection
@section('js')
@endsection

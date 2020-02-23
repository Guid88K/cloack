@extends('dashboard.layouts.app')
@extends('dashboard.layouts.app')

@section('title')
    Главная страница
@endsection



@section('content')
    <h3>Новая кампания</h3>
    <br/>



    <div class="row">
        <form method="post" action="{{ route('companies.update',$companies->id) }}" enctype="multipart/form-data">
            <div class="col-md-10">

                <div class="tabs-vertical-env">
                    @method('PATCH')
                    @csrf
                    <ul class="nav tabs-vertical"><!-- available classes "right-aligned" -->
                        <li class="active"><a href="#v-home" data-toggle="tab">Основное</a></li>
                        <li><a href="#v-profile" data-toggle="tab">Режим</a></li>
                        <li><a href="#v-messages" data-toggle="tab">Основние фильтры</a></li>
                        <li><a href="#v-geo" data-toggle="tab">Гео фильтр</a></li>
                        <li><a href="#v-ip" data-toggle="tab">IP фильтр</a></li>
                        <li><a href="#v-isp" data-toggle="tab">ISP фильтр</a></li>
                        <li><a href="#v-device" data-toggle="tab">Фильтр по девайсам</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="v-home">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название кампании</label>
                                <input type="text" name="name" value="{{$companies->name}}" class="form-control"
                                       placeholder="Название кампании">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">White page</label>
                                <input type="text" name="white" value="{{$companies->white_page}}" class="form-control"
                                       placeholder="White page">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Black page</label>
                                <input type="text" name="black" value="{{$companies->black_page}}" class="form-control"
                                       placeholder="Black page">
                            </div>

                            <label for="">Статус кампании</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="state" id="inlineRadio1"
                                       value="pause">
                                <label class="form-check-label" for="inlineRadio1">Пауза</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="state" type="radio" id="inlineRadio2"
                                       value="active">
                                <label class="form-check-label" for="inlineRadio2">Активна</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">Активна после N просмотров</label>
                            </div>

                        </div>
                        <div class="tab-pane" id="v-profile">
                            <p>Fulfilled direction use continual set him propriety continued. Saw met applauded
                                favourite
                                deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther
                                related bed and passage comfort civilly. Dashwoods see frankness objection abilities
                                the. As
                                hastened oh produced prospect formerly up am. Placing forming nay looking old married
                                few
                                has. Margaret disposed add screened rendered six say his striking confined. </p>
                        </div>
                        <div class="tab-pane" id="v-messages">
                            <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled
                                court. Sister others marked fat missed did out use. Alteration possession dispatched
                                collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
                        </div>
                        <div class="tab-pane" id="v-settings">
                            <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as
                                to
                                middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six
                                humoured. Whether mr up savings talking an. Active mutual nor father mother exeter
                                change
                                six did all. </p>
                            <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as
                                to
                                middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six
                                humoured. Whether mr up savings talking an. Active mutual nor father mother exeter
                                change
                                six did all. </p>
                        </div>
                        <div class="tab-pane" id="v-geo">
                            <p>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Страна</label>
                                <input type="text" value="{{$companies->geo}}" name="geo" class="form-control"
                                       placeholder="Страна">
                            </div>
                        </div>
                        <div class="tab-pane" id="v-ip">
                            <p>

                            <div class="form-group">
                                <label for="exampleInputEmail1">IP</label>
                                <textarea id="ip" name="ip" rows="5" class="form-control">{{$companies->ip}}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane" id="v-isp">
                            <p>iLuckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour
                                as to
                                middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six
                                humoured. Whether mr up savings talking an. Active mutual nor father mother exeter
                                change
                                six did all. </p>
                            <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as
                                to
                                middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six
                                humoured. Whether mr up savings talking an. Active mutual nor father mother exeter
                                change
                                six did all. </p>
                        </div>
                        <div class="tab-pane" id="v-device">
                            <p>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Пристрій</label>

                                <div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" value="Windows"
                                               name="device[]" id="Windows">
                                        <label class="custom-control-label" for="defaultInline1">Windows</label>
                                    </div>

                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" name="device[]" value="Mac" class="custom-control-input"
                                               id="Mac">
                                        <label class="custom-control-label" for="defaultInline2">Mac</label>
                                    </div>

                                    <!-- Default inline 3-->
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" name="device[]"
                                               value="Linux"
                                               id="Linux">
                                        <label class="custom-control-label" for="defaultInline3">Linux</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" name="device[]"
                                               value="Android" id="Android">
                                        <label class="custom-control-label" for="defaultInline3">Android</label>
                                    </div>
                                </div>

                                <!-- select all boxes -->

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary ">Редактировать</button>
            </div>
        </form>
    </div>



    <!-- Footer -->
    <footer class="main">

        &copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

    </footer>


@endsection


@section('css')
@endsection
@section('js')
@endsection

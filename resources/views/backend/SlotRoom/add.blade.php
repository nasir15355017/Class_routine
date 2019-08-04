@extends('mainlayout.index')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Courses</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="{{route('main')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="">Section All</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Courses</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Basic Information</header>
                            <button id="panel-button"
                                    class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                    data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="panel-button">
                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                    here</li>
                            </ul>
                        </div>
                        <form action="" method="post">
                            @csrf
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{session('message')}}
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>

                                        @foreach($errors->all() as $err)
                                            <li>
                                                {{ $err }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body row">

                                <div class="col-lg-6 p-t-20">
                                    <div
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="list11" value="" readonly
                                               tabIndex="-1" name="room_id" >
                                        <label for="list11" class="pull-right margin-0">
                                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                        </label>
                                        <label for="list11" class="mdl-textfield__label" >Room</label>
                                        <ul data-mdl-for="list11" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                            <li class="mdl-menu__item" data-val="DE">Room 1</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-lg-6 p-t-20">
                                    <div
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="example" value="" readonly
                                               tabIndex="-1" name="section_id" >
                                        <label for="example" class="pull-right margin-0">
                                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                        </label>
                                        <label for="example" class="mdl-textfield__label" >Section </label>
                                        <ul data-mdl-for="example" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                            <li class="mdl-menu__item" data-val="DE">Section 1</li>
                                            <li class="mdl-menu__item" data-val="DE">Section 2</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20">
                                    <div
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="examplee" value="" readonly
                                               tabIndex="-1" name="day_time_id" >
                                        <label for="examplee" class="pull-right margin-0">
                                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                        </label>
                                        <label for="examplee" class="mdl-textfield__label" >Day Time</label>
                                        <ul data-mdl-for="examplee" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                            <li class="mdl-menu__item" data-val="DE">day time 1</li>
                                            <li class="mdl-menu__item" data-val="DE">day time 2</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button type="submit"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" value="submit">Submit</button>
                                    <button type="button"
                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@extends('app')
@section('content')
    <section id="header-service-item" style="background-image: url('../img/agency/backgrounds/bg-mobile-fallback.jpg')">
        <div class="header-service">
            <h1>{{trans('translate.services')}}</h1>
        </div>
    </section>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/', '') }}">{{trans('translate.home')}}</a></li>
            <span> / </span>
            <li class="breadcrumb-item active" aria-current="page">{{trans('translate.services')}}</li>
        </ol>
    </nav>

    <section id="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 custom">
                    <div id="bar"><span>{{trans('translate.choose')}}</span></div>
                    <div class="left-nav">
                        <ul>
                            <li>
                                <div id="services-category"><span>{{trans('translate.services')}}</span></div>
                                <div class="services-nav">
                                    <ul>
                                        <li><a href="{{url('/','info_auto')}}">{{trans('translate.brandingauto')}}</a>
                                        </li>
                                        <li><a href="{{url('/','info_casete')}}">{{trans('translate.reclame')}}</a></li>
                                        <li><a href="{{url('/','info_const')}}">{{trans('translate.tipar')}}</a></li>
                                        <li><a href="{{url('/','info_decor')}}">{{trans('translate.decor')}}</a></li>
                                        <li>
                                            <a href="{{url('/','info_autocolant')}}">{{trans('translate.autocolant')}}</a>
                                        </li>
                                        <li><a href="{{url('/','info_litere')}}">{{trans('translate.litere')}}</a></li>
                                        <li>
                                            <a href="{{url('/','info_suprafete')}}">{{trans('translate.suprPrelate')}}</a>
                                        </li>
                                        <li><a href="{{url('/','info_pos')}}">{{trans('translate.pos')}}</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 custom">
                <!--<div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h3 class="text-center">{{trans('translate.infoTitleServices')}}</h3>
                            <p>{{trans('translate.servicesdesc')}}</p>
                        </div>
                    </div>-->
                    <div class="row second-row">
                        <div class="services-gallery text-center">

                            @include("modals.servicii_ba")

                            @include("modals.servicii_casete")

                            @include("modals.servicii_const")

                            @include("modals.servicii_decor")

                            @include("modals.servicii_autocolant")

                            @include("modals.servicii_litere")

                            @include("modals.servicii_suprafete")

                            @include("modals.servicii_pos")
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <a href="#page-top" id="gototop" class="page-scroll"><i class="fa fa-angle-up" style="font-size:34px;"></i></a>

@endsection

@extends('app')
@section('content')

    <section id="header-service-item" style="background-image: url('../img/agency/backgrounds/bg-mobile-fallback.jpg')">
        <div class="header-service">
            <h1>{{trans('translate.suprPrelate')}}</h1>
        </div>
    </section>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/', '')}}">{{trans('translate.home')}}</a></li>
            <span> / </span>
            <li class="breadcrumb-item"><a href="{{url('/', 'services')}}">{{trans('translate.services')}}</a></li>
            <span> / </span>
            <li class="breadcrumb-item active" aria-current="page">{{trans('translate.suprPrelate')}}</li>
        </ol>
    </nav>

    <section class="info-pos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 custom">
                    <div id="bar"><span class="text-center">{{trans('translate.choose')}}</span></div>
                    <div class="left-nav">
                        <ul>
                        <!-- <li><a href="{{url('/' ,'')}}">{{trans('translate.home')}}</a></li>-->
                            <li>
                                <a href="#">
                                    <div id="services-category"><span>{{trans('translate.services')}}</span></div>
                                    <div class="services-nav">
                                        <ul>
                                            <li><a href="{{url('','info_auto')}}">{{trans('translate.brandingauto')}}</a></li>
                                            <li><a href="{{url('','info_casete')}}">{{trans('translate.reclame')}}</a></li>
                                            <li><a href="{{url('','info_const')}}">{{trans('translate.tipar')}}</a></li>
                                            <li><a href="{{url('','info_decor')}}">{{trans('translate.decor')}}</a></li>
                                            <li><a href="{{url('','info_autocolant')}}">{{trans('translate.autocolant')}}</a></li>
                                            <li><a href="{{url('','info_litere')}}">{{trans('translate.litere')}}</a></li>
                                            <li><a href="#" class="active">{{trans('translate.suprPrelate')}}</a></li>
                                            <li><a href="{{url('','info_pos')}}">{{trans('translate.pos')}}</a></li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 custom">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="imagine">
                                <img class="img-responsive" src="img/agency/services/suprafete/SP-004.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3 class="text-center">{{trans('translate.infoTitle')}}</h3>
                            <p>{{trans('translate.suprPrelatedesc')}}</p>
                            <div class="wrapper-btn">
                                <button data-toggle="modal" data-target="#orderModal"
                                        class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                            </div>
                            <div class="modal" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="posModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="{{trans('translate.close')}}">
                                                <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center"
                                                id="posModal">{{trans('translate.order')}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            @include('modals.orderform')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row second-row">
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <div class="row">
                                @include("slideshows/supimages")
                            </div>
                            <div class="row second-row">
                                <div class="wrapper-btn">
                                    <button data-toggle="modal" data-target="#orderModal"
                                            class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                                </div>
                                <div class="modal" id="orderModal" tabindex="-1" role="dialog"
                                     aria-labelledby="posModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="{{trans('translate.close')}}">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-center"
                                                    id="posModal">{{trans('translate.order')}}</h4>
                                            </div>
                                            <div class="modal-body">
                                                @include('modals.orderform')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#page-top" id="gototop" class="page-scroll"><i class="fa fa-angle-up" style="font-size:34px;"></i></a>

@endsection
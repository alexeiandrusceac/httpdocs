@extends('app')
@section('content')
    <section id="header-service-item" style="background-image: url('../img/agency/backgrounds/bg-header.jpg')">
        <div class="header-service">
            <h1>{{trans('translate.contact')}}</h1>
        </div>
    </section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/', '')}}">{{trans('translate.home')}}</a></li>
            <span> / </span>
            <li class="breadcrumb-item active" aria-current="page">{{trans('translate.contact')}}</li>
        </ol>
    </nav>

    <section id="contact" class="contact">
        <div class="container text-center wow fadeIn">
            <!-- contact info -->
            <div class="col-md-12">
                <div class="row">
                    <div class="info text-center mb-50">
                        <div class="col-md-4  wow fadeIn" data-wow-delay=".2s">
                            <div class="item">
                                <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <h4>{{trans('translate.viz')}}</h4>
                                <p><a class="page-scroll" href="#google">{{trans('translate.street')}} Mihail Frunze
                                        65/b, {{trans('translate.city')}}</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4  wow fadeIn" data-wow-delay=".2s">
                            <div class="item">
                                <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <h4>{{trans('translate.contactEmail')}}</h4>
                                <p><a href="mailto:079665088@mail.ru">079665088@mail.ru</a></p>
                            </div>
                        </div>
                        <div class="col-md-4  wow fadeIn" data-wow-delay=".2s">
                            <div class="item">
                                <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <h4>{{trans('translate.call')}}</h4>
                                <p><a href="tel:+37379665088">079 665 088</a></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="schedule" style="background-image:url('img/agency/backgrounds/schedule-bg.jpg');">
        <div class="container text-center wow fadeIn">
            <div class="row">
                <div class="info-schedule">
                    <h2>{{trans('translate.jobTitle')}}</h2>
                    <h2>{{trans('translate.jobSchedule')}}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container text-center wow fadeIn">
            <!-- contact info -->
            <div class="col-md-12">
                <div class="row">
                    <div class="section-head">
                        <h2>{{trans('translate.contacttitle')}}</h2>
                    </div>
                    @include('modals.contactform')
                </div>

            </div>
        </div>
    </section>

    <a href="#page-top" id="gototop" class="page-scroll"><i class="fa fa-angle-up" style="font-size:34px;"></i></a>

@endsection
@extends('app')
@section('content')
    <section id="header-service-item" style="background-image: url('../img/agency/backgrounds/bg-pricing.jpg')">
        <div class="header-service">
            <h1>{{trans('translate.order')}}</h1>
        </div>
    </section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/', '')}}">{{trans('translate.home')}}</a></li>
            <span> / </span>
            <li class="breadcrumb-item active" aria-current="page">{{trans('translate.order')}}</li>
        </ol>
    </nav>


    <section class="order-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 custom">
                    <div id="bar"><span class="text-center">{{trans('translate.choose')}}</span></div>
                    <div class="left-nav">
                        <ul>
                        <!--<li>
                                <a href="{{url('/' ,'')}}">{{trans('translate.home')}}</a>
                            </li>-->
                            <li>
                                <div id="services-category"><span>{{trans('translate.services')}}</span></div>
                                <div class="services-nav">
                                    <ul>
                                        <li><a href="#branding_auto">{{trans('translate.brandingauto')}}</a></li>
                                        <li><a href="#casete">{{trans('translate.reclame')}}</a></li>
                                        <li><a href="#const">{{trans('translate.tipar')}}</a></li>
                                        <li><a href="#decor">{{trans('translate.decor')}}</a></li>
                                        <li><a href="#autocolant">{{trans('translate.autocolant')}}</a></li>
                                        <li><a href="#litere">{{trans('translate.litere')}}</a></li>
                                        <li><a href="#suprPrelate">{{trans('translate.suprPrelate')}}</a></li>
                                        <li><a href="#pos">{{trans('translate.pos')}}</a></li>
                                    </ul>
                                </div>
                            </li>
                        <!--   <li><a href="{{url('/','about')}}">{{trans('translate.about')}}</a></li>
                            <li>
                                <a href="{{url('/','order')}}">{{trans('translate.order')}}</a>
                            </li>
                            <li>
                                <a href="{{url('/','contacts')}}">{{trans('translate.contact')}}</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 custom">
                    <div class="container wow fadeIn">
                        <div id="branding_auto" class="tab-content">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul id="lightgallery_ba" class="list-unstyled row gallery">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="BA-001"
                                            data-responsive="{{ asset('img/agency/services/branding_auto/BA-001.jpg') }}"
                                            data-src="{{ asset('img/agency/services/branding_auto/BA-001.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/branding_auto/BA-001.jpg') }}"
                                                             alt="BA-001"
                                                             title="BA-001">
                                                    </div>
                                                    <span class="arrow">BA-001</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="BA-002"
                                            data-responsive="{{ asset('img/agency/services/branding_auto/BA-002.jpg') }}"
                                            data-src="{{ asset('img/agency/services/branding_auto/BA-002.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/branding_auto/BA-002.jpg') }}"
                                                             alt="BA-002"
                                                             title="BA-002">
                                                    </div>
                                                    <span class="arrow">BA-002</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="BA-003"
                                            data-responsive="{{ asset('img/agency/services/branding_auto/BA-003.jpg') }}"
                                            data-src="{{ asset('img/agency/services/branding_auto/BA-003.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/branding_auto/BA-003.jpg') }}"
                                                             alt="BA-003"
                                                             title="BA-003">
                                                    </div>
                                                    <span class="arrow">BA-003</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="BA-004"
                                            data-responsive="{{ asset('img/agency/services/branding_auto/BA-004.jpg') }}"
                                            data-src="{{ asset('img/agency/services/branding_auto/BA-004.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/branding_auto/BA-004.jpg') }}"
                                                             alt="BA-004"
                                                             title="BA-004">
                                                    </div>
                                                    <span class="arrow">BA-004</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="BA-005"
                                            data-responsive="{{ asset('img/agency/services/branding_auto/BA-005.jpg') }}"
                                            data-src="{{ asset('img/agency/services/branding_auto/BA-005.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/branding_auto/BA-005.jpg') }}"
                                                             alt="BA-005"
                                                             title="BA-005">
                                                    </div>
                                                    <span class="arrow">BA-005</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="BA-006"
                                            data-responsive="{{ asset('img/agency/services/branding_auto/BA-006.jpg') }}"
                                            data-src="{{ asset('img/agency/services/branding_auto/BA-006.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/branding_auto/BA-006.jpg') }}"
                                                             alt="BA-006"
                                                             title="BA-006">
                                                    </div>
                                                    <span class="arrow">BA-006</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="BA-007"
                                            data-responsive="{{ asset('img/agency/services/branding_auto/BA-007.jpg') }}"
                                            data-src="{{ asset('img/agency/services/branding_auto/BA-007.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/branding_auto/BA-007.jpg') }}"
                                                             alt="BA-007" title="BA-007">
                                                    </div>
                                                    <span class="arrow">BA-007</span>
                                                </div>
                                            </a>
                                        </li>
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-008"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-008.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-008.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-008.jpg') }}"--}}
                                        {{--alt="BA-008" title="BA-008">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-008</span>--}}

                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-009"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-009.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-009.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-009.jpg') }}"--}}
                                        {{--alt="BA-009" title="BA-009">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-009</span>--}}

                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-010"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-010.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-010.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-010.jpg') }}"--}}
                                        {{--alt="BA-010" title="BA-010">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-010</span>--}}

                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-011"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-011.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-011.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-011.jpg') }}"--}}
                                        {{--alt="BA-011" title="BA-011">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-011</span>--}}

                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-012"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-012.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-012.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-012.jpg') }}"--}}
                                        {{--alt="BA-012" title="BA-012">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-012</span>--}}

                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-013"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-013.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-013.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-013.jpg') }}"--}}
                                        {{--alt="BA-013" title="BA-013">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-013</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-014"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-014.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-014.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-014.jpg') }}"--}}
                                        {{--alt="BA-014" title="BA-014">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-014</span>--}}

                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-015"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-015.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-015.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-015.jpg') }}"--}}
                                        {{--alt="BA-015" title="BA-015">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-015</span>--}}

                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-016"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-016.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-016.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-016.jpg') }}"--}}
                                        {{--alt="BA-016" title="BA-016">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-016</span>--}}

                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="BA-017"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-017.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/branding_auto/BA-017.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/branding_auto/BA-017.jpg') }}"--}}
                                        {{--alt="BA-017" title="BA-017">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">BA-017</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="casete" class="tab-content">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul id="lightgallery_casete" class="list-unstyled row gallery">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-001"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-001.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-001.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-001.jpg') }}"
                                                             alt="CL-001" title="CL-001">
                                                    </div>
                                                    <span class="arrow">CL-001</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-002"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-002.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-002.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image"

                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-002.jpg') }}"
                                                             alt="CL-002" title="CL-002">
                                                    </div>
                                                    <span class="arrow">CL-002</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-003"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-003.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-003.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-003.jpg') }}"
                                                             alt="CL-003" title="CL-003">
                                                    </div>
                                                    <span class="arrow">CL-003</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-004"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-004.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-004.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-004.jpg') }}"
                                                             alt="CL-004" title="CL-004">
                                                    </div>
                                                    <span class="arrow">CL-004</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-005"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-005.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-005.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image  img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-005.jpg') }}"
                                                             alt="CL-005" title="CL-005">
                                                    </div>
                                                    <span class="arrow">CL-005</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-006"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-006.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-006.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-006.jpg') }}"
                                                             alt="CL-006" title="CL-006">
                                                    </div>
                                                    <span class="arrow">CL-006</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-007"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-007.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-007.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-007.jpg') }}"
                                                             alt="CL-007" title="CL-007">
                                                    </div>
                                                    <span class="arrow">CL-007</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-008"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-008.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-008.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-008.jpg') }}"
                                                             alt="CL-008" title="CL-008">
                                                    </div>
                                                    <span class="arrow">CL-008</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-009"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-009.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-009.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-009.jpg') }}"
                                                             alt="CL-009" title="CL-009">
                                                    </div>
                                                    <span class="arrow">CL-009</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-010"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-010.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-010.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-010.jpg') }}"
                                                             alt="CL-010" title="CL-010">
                                                    </div>
                                                    <span class="arrow">CL-010</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-011"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-011.jpg') }}"
                                                             alt="CL-011" title="CL-011">
                                                    </div>
                                                    <span class="arrow">CL-011</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-012"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-012.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-012.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-012.jpg') }}"
                                                             alt="CL-012" title="CL-012">
                                                    </div>
                                                    <span class="arrow">CL-012</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="CL-013"
                                            data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-013.jpg') }}"
                                            data-src="{{ asset('img/agency/services/casete_luminoase/CL-013.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/casete_luminoase/CL-013.jpg') }}"
                                                             alt="CL-013" title="CL-013">
                                                    </div>
                                                    <span class="arrow">CL-013</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="const" class="tab-content">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul id="lightgallery_const" class="list-unstyled row gallery">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="B-001"
                                            data-responsive="{{ asset('img/agency/services/banner/B-001.jpg') }}"
                                            data-src="{{ asset('img/agency/services/banner/B-001.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/banner/B-001.jpg') }}"
                                                             alt="B-001" title="B-001">
                                                    </div>
                                                    <span class="arrow">B-001</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="B-002"
                                            data-responsive="{{ asset('img/agency/services/banner/B-002.jpg') }}"
                                            data-src="{{ asset('img/agency/services/banner/B-002.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/banner/B-002.jpg') }}"
                                                             alt="B-002" title="B-002">
                                                    </div>
                                                    <span class="arrow">B-002</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="B-003"
                                            data-responsive="{{ asset('img/agency/services/banner/B-003.jpg') }}"
                                            data-src="{{ asset('img/agency/services/banner/B-003.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/banner/B-003.jpg') }}"
                                                             alt="B-003" title="B-003">
                                                    </div>
                                                    <span class="arrow">B-003</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="B-004"
                                            data-responsive="{{ asset('img/agency/services/banner/B-004.jpg') }}"
                                            data-src="{{ asset('img/agency/services/banner/B-004.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/banner/B-004.jpg') }}"
                                                             alt="B-004" title="B-004">
                                                    </div>
                                                    <span class="arrow">B-004</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="B-005"
                                            data-responsive="{{ asset('img/agency/services/banner/B-005.jpg') }}"
                                            data-src="{{ asset('img/agency/services/banner/B-005.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/banner/B-005.jpg') }}"
                                                             alt="B-005" title="B-005">
                                                    </div>
                                                    <span class="arrow">B-005</span>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="B-006"
                                            data-responsive="{{ asset('img/agency/services/banner/B-006.jpg') }}"
                                            data-src="{{ asset('img/agency/services/banner/B-006.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/banner/B-006.jpg') }}"
                                                             alt="B-006" title="B-006">
                                                    </div>
                                                    <span class="arrow">B-006</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="B-007"
                                            data-responsive="{{ asset('img/agency/services/banner/B-007.jpg') }}"
                                            data-src="{{ asset('img/agency/services/banner/B-007.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/banner/B-007.jpg') }}"
                                                             alt="B-007" title="B-007">
                                                    </div>
                                                    <span class="arrow">B-007</span>

                                                </div>
                                            </a>
                                        </li>
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="B-008"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/banner/B-008.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/banner/B-008.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/banner/B-008.jpg') }}"--}}
                                        {{--alt="B-008" title="B-008">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">B-008</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="B-009"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/banner/B-009.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/banner/B-009.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/banner/B-009.jpg') }}"--}}
                                        {{--alt="B-009" title="B-009">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">B-009</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="B-010"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/banner/B-010.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/banner/B-010.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/banner/B-010.jpg') }}"--}}
                                        {{--alt="B-010" title="B-010">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">B-010</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="B-011"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/banner/B-011.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/banner/B-011.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/banner/B-011.jpg') }}"--}}
                                        {{--alt="B-011" title="B-011">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">B-011</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="B-012"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/banner/B-012.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/banner/B-012.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/banner/B-012.jpg') }}"--}}
                                        {{--src="{{ asset('img/agency/services/banner/B-012.jpg') }}"--}}
                                        {{--alt="B-012" title="B-012">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">B-012</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="B-013"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/banner/B-013.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/banner/B-013.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/banner/B-013.jpg') }}"--}}
                                        {{--src="{{ asset('img/agency/services/banner/B-013.jpg') }}"--}}
                                        {{--alt="B-013" title="B-013">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">B-013</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="decor" class="tab-content">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul id="lightgallery_decor" class="list-unstyled row gallery">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="D-001"
                                            data-responsive="{{ asset('img/agency/services/decorare/D-001.jpg') }}"
                                            data-src="{{ asset('img/agency/services/decorare/D-001.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             data-responsive="{{ asset('img/agency/services/decorare/D-001.jpg') }}"
                                                             src="{{ asset('img/agency/services/decorare/D-001.jpg') }}"
                                                             alt="D-001" title="D-001">
                                                    </div>
                                                    <span class="arrow">D-001</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="D-002"
                                            data-responsive="{{ asset('img/agency/services/decorare/D-002.jpg') }}"
                                            data-src="{{ asset('img/agency/services/decorare/D-002.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             data-responsive="{{ asset('img/agency/services/decorare/D-002.jpg') }}"
                                                             src="{{ asset('img/agency/services/decorare/D-002.jpg') }}"
                                                             alt="D-002" title="D-002">
                                                    </div>
                                                    <span class="arrow">D-002</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="D-003"
                                            data-responsive="{{ asset('img/agency/services/decorare/D-003.jpg') }}"
                                            data-src="{{ asset('img/agency/services/decorare/D-003.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             data-responsive="{{ asset('img/agency/services/decorare/D-003.jpg') }}"
                                                             src="{{ asset('img/agency/services/decorare/D-003.jpg') }}"
                                                             alt="D-003" title="D-003">
                                                    </div>
                                                    <span class="arrow">D-003</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="D-004"
                                            data-responsive="{{ asset('img/agency/services/decorare/D-004.jpg') }}"
                                            data-src="{{ asset('img/agency/services/decorare/D-004.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             data-responsive="{{ asset('img/agency/services/decorare/D-004.jpg') }}"
                                                             src="{{ asset('img/agency/services/decorare/D-004.jpg') }}"
                                                             alt="D-004" title="D-004">
                                                    </div>
                                                    <span class="arrow">D-004</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="D-005"
                                            data-responsive="{{ asset('img/agency/services/decorare/D-005.jpg') }}"
                                            data-src="{{ asset('img/agency/services/decorare/D-005.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             data-responsive="{{ asset('img/agency/services/decorare/D-005.jpg') }}"
                                                             src="{{ asset('img/agency/services/decorare/D-005.jpg') }}"
                                                             alt="D-005" title="D-005">
                                                    </div>
                                                    <span class="arrow">D-005</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="D-006"
                                            data-responsive="{{ asset('img/agency/services/decorare/D-006.jpg') }}"
                                            data-src="{{ asset('img/agency/services/decorare/D-006.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             data-responsive="{{ asset('img/agency/services/decorare/D-006.jpg') }}"
                                                             src="{{ asset('img/agency/services/decorare/D-006.jpg') }}"
                                                             alt="D-006" title="D-006">
                                                    </div>
                                                    <span class="arrow">D-006</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="D-007"
                                            data-responsive="{{ asset('img/agency/services/decorare/D-007.jpg') }}"
                                            data-src="{{ asset('img/agency/services/decorare/D-007.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             data-responsive="{{ asset('img/agency/services/decorare/D-007.jpg') }}"
                                                             src="{{ asset('img/agency/services/decorare/D-007.jpg') }}"
                                                             alt="D-007" title="D-007">
                                                    </div>
                                                    <span class="arrow">D-007</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="D-008"
                                            data-responsive="{{ asset('img/agency/services/decorare/D-008.jpg') }}"
                                            data-src="{{ asset('img/agency/services/decorare/D-008.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image  img-responsive"
                                                             data-responsive="{{ asset('img/agency/services/decorare/D-008.1.jpg') }}"
                                                             src="{{ asset('img/agency/services/decorare/D-008.1.jpg') }}"
                                                             alt="D-008.1" title="D-008">
                                                    </div>
                                                    <span class="arrow">D-008</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="autocolant" class="tab-content">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul id="lightgallery_acol" class="list-unstyled row gallery">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="AC-001"
                                            data-responsive="{{ asset('img/agency/services/autocolant/AC-001.jpg') }}"
                                            data-src="{{ asset('img/agency/services/autocolant/AC-001.jpg') }}">


                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image"
                                                             title="AC-001"
                                                             src="{{ asset('img/agency/services/autocolant/AC-001.jpg') }}"
                                                             alt="AC-001">
                                                    </div>
                                                    <span class="arrow">AC-001</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="AC-002"
                                            data-responsive="{{ asset('img/agency/services/autocolant/AC-002.jpg') }}"
                                            data-src="{{ asset('img/agency/services/autocolant/AC-002.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image"
                                                             alt="AC-002"
                                                             title="AC-002"
                                                             src="{{ asset('img/agency/services/autocolant/AC-002.jpg') }}">
                                                    </div>
                                                    <span class="arrow">AC-002</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="AC-003"
                                            data-responsive="{{ asset('img/agency/services/autocolant/AC-003.jpg') }}"
                                            data-src="{{ asset('img/agency/services/autocolant/AC-003.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image"
                                                             alt="AC-003"
                                                             title="AC-003"
                                                             src="{{ asset('img/agency/services/autocolant/AC-003.jpg') }}">
                                                    </div>
                                                    <span class="arrow">AC-003</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="AC-004"
                                            data-responsive="{{ asset('img/agency/services/autocolant/AC-004.jpg') }}"
                                            data-src="{{ asset('img/agency/services/autocolant/AC-004.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image"
                                                             alt="AC-004"
                                                             title="AC-004"
                                                             src="{{ asset('img/agency/services/autocolant/AC-004.jpg') }}">
                                                    </div>
                                                    <span class="arrow">AC-004</span>
                                                </div>
                                            </a>
                                        </li>
                                        {{--SECOND PART--}}
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="AC-005"
                                            data-responsive="{{ asset('img/agency/services/autocolant/AC-005.jpg') }}"
                                            data-src="{{ asset('img/agency/services/autocolant/AC-005.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image"
                                                             alt="AC-005"
                                                             title="AC-005"
                                                             src="{{ asset('img/agency/services/autocolant/AC-005.jpg') }}">
                                                    </div>
                                                    <span class="arrow">AC-005</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="AC-006"
                                            data-responsive="{{ asset('img/agency/services/autocolant/AC-006.jpg') }}"
                                            data-src="{{ asset('img/agency/services/autocolant/AC-006.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image" alt="AC-006"
                                                             title="AC-006"
                                                             src="{{ asset('img/agency/services/autocolant/AC-006.jpg') }}">
                                                    </div>
                                                    <span class="arrow">AC-006</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            data-responsive="{{ asset('img/agency/services/autocolant/AC-007.jpg') }}"
                                            data-src="{{ asset('img/agency/services/autocolant/AC-007.jpg') }}"
                                            title="AC-007"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="img-responsive gallery-image" alt="AC-007"
                                                             title="AC-007"
                                                             src="{{ asset('img/agency/services/autocolant/AC-007.jpg') }}">
                                                    </div>
                                                    <span class="arrow">AC-007</span>
                                                </div>
                                            </a>
                                        </li>
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="AC-008"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-008.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-008.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image" alt="AC-008" title="AC-008"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-008.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-008</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--THIRD PART--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}

                                        {{--title="AC-009"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-009.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-009.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image"--}}
                                        {{--alt="AC-009"--}}
                                        {{--title="AC-009"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-009.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-009</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}

                                        {{--title="AC-010"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-010.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-010.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image"--}}
                                        {{--alt="AC-010"--}}
                                        {{--title="AC-010"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-010.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-010</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="AC-011"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-011.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-011.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image" alt="AC-011" title="AC-011"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-011.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-011</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="AC-012"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-012.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-012.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image" title="AC-012" alt="AC-012"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-012.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-012</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--FOURTH PART--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="AC-013"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-013.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-013.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image" title="AC-013" alt="AC-013"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-013.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-013</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-014"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-014.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-014.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image" title="AC-014" alt="AC-014"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-014.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-014</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-015"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-015.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-015.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image" title="AC-015" alt="AC-015"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-015.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-015</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-016"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-016.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-016.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image" title="AC-016" alt="AC-016"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-016.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-016</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-017"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-017.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/autocolant/AC-017.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="img-responsive gallery-image" title="AC-017" alt="AC-017"--}}
                                        {{--src="{{ asset('img/agency/services/autocolant/AC-017.jpg') }}">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">AC-017</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="litere" class="tab-content">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul id="lightgallery_litere" class="list-unstyled row gallery">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-001"
                                            data-responsive="{{ asset('img/agency/services/litere/L-001.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-001.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-001.jpg') }}"
                                                             alt="L-001" title="L-001">
                                                    </div>
                                                    <span class="arrow">L-001</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-002"
                                            data-responsive="{{ asset('img/agency/services/litere/L-002.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-002.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/litere/L-002.jpg') }}"
                                                             alt="L-002" title="L-002">
                                                    </div>
                                                    <span class="arrow">L-002</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-003"
                                            data-responsive="{{ asset('img/agency/services/litere/L-003.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-003.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-003.jpg') }}"
                                                             alt="L-003" title="L-003">
                                                    </div>
                                                    <span class="arrow">L-003</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-004"
                                            data-responsive="{{ asset('img/agency/services/litere/L-004.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-004.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-004.jpg') }}"
                                                             alt="L-004" title="L-004">
                                                    </div>
                                                    <span class="arrow">L-004</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-005"
                                            data-responsive="{{ asset('img/agency/services/litere/L-005.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-005.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-005.jpg') }}"
                                                             alt="L-005" title="L-005">
                                                    </div>
                                                    <span class="arrow">L-005</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-006"
                                            data-responsive="{{ asset('img/agency/services/litere/L-006.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-006.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-006.jpg') }}"
                                                             alt="L-006" title="L-006">
                                                    </div>
                                                    <span class="arrow">L-006</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-007"
                                            data-responsive="{{ asset('img/agency/services/litere/L-007.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-007.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-007.jpg') }}"
                                                             alt="L-007" title="L-007">
                                                    </div>
                                                    <span class="arrow">L-007</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-008"
                                            data-responsive="{{ asset('img/agency/services/litere/L-008.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-008.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-008.jpg') }}"
                                                             alt="L-008" title="L-008">
                                                    </div>
                                                    <span class="arrow">L-008</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-009"
                                            data-responsive="{{ asset('img/agency/services/litere/L-009.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-009.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-009.jpg') }}"
                                                             alt="L-009" title="L-009">
                                                    </div>
                                                    <span class="arrow">L-009</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="L-010"
                                            data-responsive="{{ asset('img/agency/services/litere/L-010.jpg') }}"
                                            data-src="{{ asset('img/agency/services/litere/L-010.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/litere/L-010.jpg') }}"
                                                             alt="L-010" title="L-010">
                                                    </div>
                                                    <span class="arrow">L-010</span>
                                                </div>
                                            </a>
                                        </li>
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-011"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-011.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-011.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/litere/L-011.jpg') }}"--}}
                                        {{--alt="L-011" title="L-011">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-011</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-012"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-012.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-012.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/litere/L-012.jpg') }}"--}}
                                        {{--alt="L-012" title="L-012">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-012</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-013"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-013.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-013.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/litere/L-013.jpg') }}"--}}
                                        {{--alt="L-013" title="L-013">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-013</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-014"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-014.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-014.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/litere/L-014.jpg') }}"--}}
                                        {{--alt="L-014" title="L-014">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-014</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-015"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-015.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-015.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/litere/L-015.jpg') }}"--}}
                                        {{--alt="L-015" title="L-015">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-015</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-016"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-016.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-016.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/litere/L-016.jpg') }}"--}}
                                        {{--alt="L-016" title="L-016">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-016</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-017"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-017.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-017.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/litere/L-017.jpg') }}"--}}
                                        {{--alt="L-017" title="L-017">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-017</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-018"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-018.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-018.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/litere/L-018.jpg') }}"--}}
                                        {{--alt="L-018" title="L-018">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-018</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="L-019"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/litere/L-019.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/litere/L-019.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/litere/L-019.jpg') }}"--}}
                                        {{--alt="L-019" title="L-019">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">L-019</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="suprPrelate" class="tab-content">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul id="lightgallery_suprPrelate" class="list-unstyled row gallery">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="SP-001"
                                            data-responsive="{{ asset('img/agency/services/suprafete/SP-001.jpg') }}"
                                            data-src="{{ asset('img/agency/services/suprafete/SP-001.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/suprafete/SP-001.jpg') }}"
                                                             alt="SP-001"
                                                             title="SP-001">
                                                    </div>
                                                    <span class="arrow">SP-001</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="SP-002"
                                            data-responsive="{{ asset('img/agency/services/suprafete/SP-002.jpg') }}"
                                            data-src="{{ asset('img/agency/services/suprafete/SP-002.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/suprafete/SP-002.jpg') }}"
                                                             alt="SP-002"
                                                             title="SP-002">
                                                    </div>
                                                    <span class="arrow">SP-002</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="SP-003"
                                            data-responsive="{{ asset('img/agency/services/suprafete/SP-003.jpg') }}"
                                            data-src="{{ asset('img/agency/services/suprafete/SP-003.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/suprafete/SP-003.jpg') }}"
                                                             alt="SP-003"
                                                             title="SP-003">
                                                    </div>
                                                    <span class="arrow">SP-003</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="SP-004"
                                            data-responsive="{{ asset('img/agency/services/suprafete/SP-004.jpg') }}"
                                            data-src="{{ asset('img/agency/services/suprafete/SP-004.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/suprafete/SP-004.jpg') }}"
                                                             alt="SP-004"
                                                             title="SP-004">
                                                    </div>
                                                    <span class="arrow">SP-004</span>
                                                </div>
                                            </a>
                                        </li>
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="S-005"--}}
                                        {{-->--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/suprafete/SP-005.jpg') }}"--}}
                                        {{--alt="S-005" title="S-005">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">S-005</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="S-006"--}}
                                        {{-->--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/suprafete/SP-006.jpg') }}"--}}
                                        {{--alt="S-006" title="S-006">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">S-006</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="S-007"--}}
                                        {{-->--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/suprafete/SP-007.jpg') }}"--}}
                                        {{--alt="S-007" title="S-007">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">S-007</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="S-008"--}}
                                        {{-->--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/suprafete/SP-008.jpg') }}"--}}
                                        {{--alt="S-008" title="S-008">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">S-008</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="S-009"--}}
                                        {{-->--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}
                                        {{--src="{{ asset('img/agency/services/suprafete/SP-009.jpg') }}"--}}
                                        {{--alt="S-009" title="S-009">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">S-009</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="S-010"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/stand/S-010.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/stand/S-010.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/stand/S-010.jpg') }}"--}}
                                        {{--alt="S-010" title="S-010">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">S-010</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="S-011"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/stand/S-011.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/stand/S-011.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/stand/S-011.jpg') }}"--}}
                                        {{--alt="S-011" title="S-011">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">S-011</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                        {{--title="S-012"--}}
                                        {{--data-responsive="{{ asset('img/agency/services/stand/S-012.jpg') }}"--}}
                                        {{--data-src="{{ asset('img/agency/services/stand/S-012.jpg') }}">--}}
                                        {{--<a href="">--}}
                                        {{--<div class="gallery-content">--}}
                                        {{--<div class="gallery-item">--}}
                                        {{--<img class="gallery-image img-responsive"--}}

                                        {{--src="{{ asset('img/agency/services/stand/S-012.jpg') }}"--}}
                                        {{--alt="S-012" title="S-012">--}}
                                        {{--</div>--}}
                                        {{--<span class="arrow">S-012</span>--}}
                                        {{--</div>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="pos" class="tab-content">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul id="lightgallery_pos" class="list-unstyled row gallery">
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-001"
                                            data-responsive="{{ asset('img/agency/services/stand/S-001.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-001.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/stand/S-001.jpg') }}"
                                                             alt="S-001"
                                                             title="S-001">
                                                    </div>
                                                    <span class="arrow">S-001</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-002"
                                            data-responsive="{{ asset('img/agency/services/stand/S-002.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-002.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-002.jpg') }}"
                                                             alt="S-002"
                                                             title="S-002">
                                                    </div>
                                                    <span class="arrow">S-002</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-003"
                                            data-responsive="{{ asset('img/agency/services/stand/S-003.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-003.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-003.jpg') }}"
                                                             alt="S-003"
                                                             title="S-003">
                                                    </div>
                                                    <span class="arrow">S-003</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-004"
                                            data-responsive="{{ asset('img/agency/services/stand/S-004.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-004.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-004.jpg') }}"
                                                             alt="S-004"
                                                             title="S-004">
                                                    </div>
                                                    <span class="arrow">S-004</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-005"
                                            data-responsive="{{ asset('img/agency/services/stand/S-005.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-005.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-005.jpg') }}"
                                                             alt="S-005" title="S-005">
                                                    </div>
                                                    <span class="arrow">S-005</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-006"
                                            data-responsive="{{ asset('img/agency/services/stand/S-006.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-006.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-006.jpg') }}"
                                                             alt="S-006" title="S-006">
                                                    </div>
                                                    <span class="arrow">S-006</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-007"
                                            data-responsive="{{ asset('img/agency/services/stand/S-007.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-007.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/stand/S-007.jpg') }}"
                                                             alt="S-007" title="S-007">
                                                    </div>
                                                    <span class="arrow">S-007</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-008"
                                            data-responsive="{{ asset('img/agency/services/stand/S-008.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-008.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-008.jpg') }}"
                                                             alt="S-008" title="S-008">
                                                    </div>
                                                    <span class="arrow">S-008</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-009"
                                            data-responsive="{{ asset('img/agency/services/stand/S-009.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-009.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"
                                                             src="{{ asset('img/agency/services/stand/S-009.jpg') }}"
                                                             alt="S-009" title="S-009">
                                                    </div>
                                                    <span class="arrow">S-009</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-010"
                                            data-responsive="{{ asset('img/agency/services/stand/S-010.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-010.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-010.jpg') }}"
                                                             alt="S-010" title="S-010">
                                                    </div>
                                                    <span class="arrow">S-010</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-011"
                                            data-responsive="{{ asset('img/agency/services/stand/S-011.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-011.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-011.jpg') }}"
                                                             alt="S-011" title="S-011">
                                                    </div>
                                                    <span class="arrow">S-011</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-6 col-sm-4 col-md-3"
                                            title="S-012"
                                            data-responsive="{{ asset('img/agency/services/stand/S-012.jpg') }}"
                                            data-src="{{ asset('img/agency/services/stand/S-012.jpg') }}"
                                        >
                                            <a href="">
                                                <div class="gallery-content">
                                                    <div class="gallery-item">
                                                        <img class="gallery-image img-responsive"

                                                             src="{{ asset('img/agency/services/stand/S-012.jpg') }}"
                                                             alt="S-012" title="S-012">
                                                    </div>
                                                    <span class="arrow">S-012</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center wow fadeIn">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <h2>{{trans('translate.helpinfo')}}</h2>
                                @include('modals.orderform')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#page-top" id="gototop" class="page-scroll"><i class="fa fa-angle-up" style="font-size:34px;"></i></a>
@endsection
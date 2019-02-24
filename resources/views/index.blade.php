@extends('app')
@section('content')

    <div id="slideshow" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#slideshow" data-slide-to="0" class="active" data-toggle="tooltip" data-placement="top"
                data-original-title="{{trans('translate.brandingauto')}}"></li>
            <li data-target="#slideshow" data-slide-to="1" data-toggle="tooltip" data-placement="top"
                data-original-title="{{trans('translate.reclame')}}"></li>
            <li data-target="#slideshow" data-slide-to="2" data-toggle="tooltip" data-placement="top"
                data-original-title="{{trans('translate.tipar')}}"></li>
            <li data-target="#slideshow" data-slide-to="3" data-toggle="tooltip" data-placement="top"
                data-original-title="{{trans('translate.decor')}}"></li>
            <li data-target="#slideshow" data-slide-to="4" data-toggle="tooltip" data-placement="top"
                data-original-title="{{trans('translate.autocolant')}}"></li>
            <li data-target="#slideshow" data-slide-to="5" data-toggle="tooltip" data-placement="top"
                data-original-title="{{trans('translate.litere')}}"></li>
            <li data-target="#slideshow" data-slide-to="6" data-toggle="tooltip" data-placement="top"
                data-original-title="{{trans('translate.pos')}}"></li>
            <li data-target="#slideshow" data-slide-to="7" data-toggle="tooltip" data-placement="top"
                data-original-title="{{trans('translate.suprPrelate')}}"></li>


        </ul>

        <div class="carousel-inner" role="listbox">
            <div class="item active"
                 onclick="location.href='{{url('/','info_auto')}}'"
                 style="background-image:url('img/agency/backgrounds/BASlide.jpg');"
                 alt="{{trans('translate.brandingauto')}}"
                 title="{{trans('translate.brandingauto')}}">


            </div>

            <div class="item"
                 onclick="location.href='{{url('/','info_casete')}}'"
                 style="background-image:url('img/agency/backgrounds/RSlide.jpg');"
                 alt="{{trans('translate.reclame')}}"
                 title="{{trans('translate.reclame')}}">

            </div>

            <div class="item"
                 onclick="location.href='{{url('/','info_const')}}'"
                 style="background-image:url('img/agency/backgrounds/BSlide.jpg');"
                 alt="{{trans('translate.tipar')}}"
                 title="{{trans('translate.tipar')}}">


            </div>

            <div class="item"
                 onclick="location.href='{{url('/','info_decor')}}'"
                 style="background-image:url('img/agency/backgrounds/slide01.jpg');"
                 alt="{{trans('translate.decor')}}"
                 title="{{trans('translate.decor')}}">

            </div>

            <div class="item"
                 onclick="location.href='{{url('/','info_autocolant')}}'"
                 style="background-image:url('img/agency/backgrounds/AutoSlide.jpg');"
                 alt="{{trans('translate.autocolant')}}"
                 title="{{trans('translate.autocolant')}}">

            </div>
            <div class="item"
                 onclick="location.href='{{url('/','info_litere')}}'"
                 style="background-image:url('img/agency/backgrounds/slide01.jpg');"
                 alt="{{trans('translate.litere')}}"
                 title="{{trans('translate.litere')}}">

            </div>
            <div class="item"
                 onclick="location.href='{{url('/','info_pos')}}'"
                 style="background-image:url('img/agency/backgrounds/PosSlide.jpg');"
                 alt="{{trans('translate.pos')}}"
                 title="{{trans('translate.pos')}}">

            </div>
            <div class="item"
                 onclick="location.href='{{url('/','info_suprafete')}}'"
                 style="background-image:url('img/agency/backgrounds/slide01.jpg');"
                 alt="{{trans('translate.suprPrelate')}}"
                 title="{{trans('translate.suprPrelate')}}">

            </div>
        </div>


        <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> </span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section id="services">
        <div class="container-fluid text-center wow fadeIn">
            <div class="row">
                <div class="section-head">
                    <h2>{{trans('translate.services')}}</h2>
                </div>
            </div>
            <div class="services-gallery">

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

    </section>

    <section class="about-section" style="background-image: url('../img/agency/backgrounds/about.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{trans('translate.about')}}</h2>
                    <div class="about-company">
                        <p>{{trans('translate.aboutdesc')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="ability bg-gray section-padding text-center pb-70">--}}
    {{--<div class="container wow fadeIn">--}}
    {{--<div class="row">--}}
    {{--<div class="flex-content">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="item">--}}
    {{--<img src="img/agency/icons/talentati.png" width="64"--}}
    {{--title="{{trans('translate.talent')}}"--}}
    {{--alt="{{trans('translate.talent')}}">--}}
    {{--<h6>{{trans('translate.talent')}}</h6>--}}
    {{--<p>{{trans('translate.talentdesc')}}</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="item">--}}
    {{--<img src="img/agency/icons/ambitiosi.png" width="64"--}}
    {{--title="{{trans('translate.ambitious')}}"--}}
    {{--alt="{{trans('translate.ambitious')}}">--}}
    {{--<h6>{{trans('translate.ambitious')}}</h6>--}}
    {{--<p>{{trans('translate.ambitiousdesc')}}</p>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="item">--}}
    {{--<img src="img/agency/icons/flexibili.png" width="64"--}}
    {{--title="{{trans('translate.flexible')}}"--}}
    {{--alt="{{trans('translate.flexible')}}">--}}
    {{--<h6>{{trans('translate.flexible')}}</h6>--}}
    {{--<p>{{trans('translate.flexibledesc')}}</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="row second-row">--}}
    {{--<div class="flex-content">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="item">--}}
    {{--<img src="img/agency/icons/tineri.png" width="64" title="{{trans('translate.young')}}"--}}
    {{--alt="{{trans('translate.young')}}">--}}
    {{--<h6>{{trans('translate.young')}}</h6>--}}
    {{--<p>{{trans('translate.youngdesc')}}</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="item">--}}
    {{--<img src="img/agency/icons/parteneri.png" width="64"--}}
    {{--title="{{trans('translate.partners')}}"--}}
    {{--alt="{{trans('translate.partners')}}">--}}
    {{--<h6>{{trans('translate.partners')}}</h6>--}}
    {{--<p>{{trans('translate.partnersdesc')}}</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="item">--}}
    {{--<img src="img/agency/icons/rapizi.png" width="64" title="{{trans('translate.prompts')}}"--}}
    {{--alt="{{trans('translate.prompts')}}">--}}
    {{--<h6>{{trans('translate.prompts')}}</h6>--}}
    {{--<p>{{trans('translate.promptsdesc')}}</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}



    <section id="contact" class="contact">
        <div class="container text-center wow fadeIn">
            <div class="row">
                <div class="section-head">
                    <h2>{{trans('translate.contact')}}</h2>
                </div>
            </div>
            <div class="info text-center mb-50">
                <div class="col-md-4 wow fadeIn" data-wow-delay=".2s">
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
            @include('modals.contactform')
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
    <a href="#page-top" id="gototop" class="page-scroll"><i class="fa fa-angle-up" style="font-size:34px;"></i></a>
@endsection
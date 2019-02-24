@extends('app')
@section('content')
    <section id="header-service-item" style="background-image: url('../img/agency/backgrounds/bg-header.jpg')">
        <div class="header-service">
            <h1>{{trans('translate.about')}}</h1>
        </div>
    </section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/', '')}}">{{trans('translate.home')}}</a></li>
            <span> / </span>
            <li class="breadcrumb-item active" aria-current="page">{{trans('translate.about')}}</li>
        </ol>
    </nav>
    <section class="about-section" style="background-image: url('../img/agency/backgrounds/about.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{trans('translate.infoAbout')}}</h2>
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
                {{--<div class="col-md-12">--}}
                    {{--<h2>{{trans('translate.titleDesc')}}</h2>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row second-row">--}}
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
    <a href="#page-top" id="gototop" class="page-scroll"><i class="fa fa-angle-up" style="font-size:34px;"></i></a>

@endsection

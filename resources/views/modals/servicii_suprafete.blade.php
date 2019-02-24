<div class="col-md-3 col-sm-6 col-xs-12 items wow fadeIn" data-wow-delay=".2s">
    <div class="card">
        <div class="imagine img-responsive">
            <img class="img-responsive" src="img/agency/services/suprafete/SP-005.jpg" alt="SP-005"/>
            <div class="overlay img-responsive">
                <div class="content-overlay">
                    <div class="linkGallery">
                        <a data-toggle="modal" data-target="#suprServiceModal">
                            <i class="fa fa-picture-o" title="{{trans('translate.gallery')}}"
                               alt="{{trans('translate.gallery')}}"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-card">
            <h6><b>{{trans('translate.suprPrelate')}}</b></h6>
            <div class="wrapper-btn">
                <button class="buton buton-bg"
                        onclick="location.href='{{url('/','info_suprafete')}}'">{{trans('translate.details')}}</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="suprServiceModal" aria-labelledby="suprModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="suprModal">{{trans('translate.suprPrelate')}}</h4>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <!--Modal BODY-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul id="lightgallery_suprPrelate" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="SP-001"
                                    data-responsive="{{ asset('img/agency/services/suprafete/SP-001.jpg') }}"
                                    data-src="{{ asset('img/agency/services/suprafete/SP-001.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="SP-001" alt="SP-001"
                                             src="{{ asset('img/agency/services/suprafete/SP-001.jpg') }}">
                                    </a><span class="lg-arrow">SP-001</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="SP-002"
                                    data-responsive="{{ asset('img/agency/services/suprafete/SP-002.jpg') }}"
                                    data-src="{{ asset('img/agency/services/suprafete/SP-002.jpg') }}"
                                    >
                                    <a href="">
                                        <img class="img-responsive"
                                             title="SP-002" alt="SP-002"
                                             src="{{ asset('img/agency/services/suprafete/SP-002.jpg') }}">
                                    </a><span class="lg-arrow">SP-002</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="SP-003"
                                    data-responsive="{{ asset('img/agency/services/suprafete/SP-003.jpg') }}"
                                    data-src="{{ asset('img/agency/services/suprafete/SP-003.jpg') }}"
                                    >
                                    <a href="">
                                        <img class="img-responsive" title="SP-003" alt="SP-003"
                                             src="{{ asset('img/agency/services/suprafete/SP-003.jpg') }}">
                                    </a><span class="lg-arrow">SP-003</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="SP-004"
                                    data-responsive="{{ asset('img/agency/services/suprafete/SP-004.jpg') }}"
                                    data-src="{{ asset('img/agency/services/suprafete/SP-004.jpg') }}"
                                    >
                                    <a href="">
                                        <img class="img-responsive"
                                             title="SP-004" alt="SP-004"
                                             src="{{ asset('img/agency/services/suprafete/SP-004.jpg') }}">
                                    </a><span class="lg-arrow">SP-004</span>
                                </li>
                                {{--SECOND PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="S-005"--}}
                                    {{-->--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="S-005" alt="S-005"--}}
                                             {{--src="{{ asset('img/agency/services/stand/SP-005.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">S-005</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="S-006"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/stand/S-006.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/stand/S-006.2.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="S-006" alt="S-006"--}}
                                             {{--src="{{ asset('img/agency/services/stand/S-006.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">S-006</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="S-007"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/stand/S-007.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/stand/S-007.2.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="S-007" alt="S-007"--}}
                                             {{--src="{{ asset('img/agency/services/stand/S-007.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">S-007</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="S-008"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/stand/S-008.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/stand/S-008.2.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="S-008" alt="S-008"--}}
                                             {{--src="{{ asset('img/agency/services/stand/S-008.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">S-008</span>--}}
                                {{--</li>--}}
                                {{--THIRD PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="S-009"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/stand/S-009.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/stand/S-009.2.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="S-009" alt="S-009"--}}
                                             {{--src="{{ asset('img/agency/services/stand/S-009.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">S-009</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="S-010"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/stand/S-010.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/stand/S-010.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="S-010"--}}
                                             {{--alt="S-010"--}}
                                             {{--src="{{ asset('img/agency/services/stand/S-010.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">S-010</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="S-011"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/stand/S-011.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/stand/S-011.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="S-011" alt="S-011"--}}
                                             {{--src="{{ asset('img/agency/services/stand/S-011.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">S-011</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="S-012"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/stand/S-012.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/stand/S-012.2.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="S-012" alt="S-012"--}}
                                             {{--src="{{ asset('img/agency/services/stand/S-012.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">S-012</span>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                    </div>
                    <!--MODAL Body END-->
                </div>
                <div class="modal-footer">
                    <div class="wrapper-btn">
                        <a  href="#" data-dismiss="modal" class="btn" >{{trans('translate.close')}}</a>
                        <button data-toggle="modal" data-target="#posOrderModal"
                                class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="posOrderModal" aria-labelledby="posOrderLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="posOrderLabel">{{trans('translate.order')}}</h4>
                </div>
                <div class="modal-body">
                    @include('modals/orderform')
                </div>
            </div>
        </div>
    </div>
</div>
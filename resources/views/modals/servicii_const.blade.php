<div class="col-md-3 col-sm-6 col-xs-12 items wow fadeIn" data-wow-delay=".2s">
    <div class="card">
        <div class="imagine img-responsive">
            <img class="img-responsive" src="img/agency/services/banner/B-004.jpg" alt="B-004"/>
            <div class="overlay img-responsive">
                <div class="content-overlay">
                <!--<p class="title">{{trans('translate.tipar')}}</p>
                    <div class="button"><a data-toggle="modal"
                                           data-target="#constServiceModal">{{trans('translate.gallery')}}</a></div>-->
                    <div class="linkGallery">
                        <a data-toggle="modal" data-target="#constServiceModal">
                            <i class="fa fa-picture-o" title="{{trans('translate.gallery')}}"
                               alt="{{trans('translate.gallery')}}"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-card">
            <h6><b>{{trans('translate.tipar')}}</b></h6>
            <div class="wrapper-btn">
                <button class="buton buton-bg"
                        onclick="location.href='{{url('/','info_const')}}'">{{trans('translate.details')}}</button>
            </div>
        </div>
    </div>
    <!--Modal with details-->

    <!-- Modal -->
    <div class="modal fade" id="constServiceModal" aria-labelledby="constLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="{{trans('translate.close')}}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="constLabel">{{trans('translate.tipar')}}</h4>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <!--Modal BODY-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul id="lightgallery_const" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="B-001"
                                    data-responsive="{{ asset('img/agency/services/banner/B-001.jpg') }}"
                                    data-src="{{ asset('img/agency/services/banner/B-001.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="B-001" alt="B-001"
                                             src="{{ asset('img/agency/services/banner/B-001.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">B-001</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="B-002"
                                    data-responsive="{{ asset('img/agency/services/banner/B-002.jpg') }}"
                                    data-src="{{ asset('img/agency/services/banner/B-002.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="B-002" alt="B-002"
                                             src="{{ asset('img/agency/services/banner/B-002.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">B-002</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="B-003"
                                    data-responsive="{{ asset('img/agency/services/banner/B-003.jpg') }}"
                                    data-src="{{ asset('img/agency/services/banner/B-003.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="B-003" alt="B-003"
                                             src="{{ asset('img/agency/services/banner/B-003.jpg') }}">
                                    </a><span class="lg-arrow">B-003</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="B-004"
                                    data-responsive="{{ asset('img/agency/services/banner/B-004.jpg') }}"
                                    data-src="{{ asset('img/agency/services/banner/B-004.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="B-004" alt="B-004"
                                             src="{{ asset('img/agency/services/banner/B-004.jpg') }}">
                                    </a><span class="lg-arrow">B-004</span>
                                </li>
                                {{--SECOND PART--}}
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="B-005"
                                    data-responsive="{{ asset('img/agency/services/banner/B-005.jpg') }}"
                                    data-src="{{ asset('img/agency/services/banner/B-005.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="B-005" alt="B-005"
                                             src="{{ asset('img/agency/services/banner/B-005.jpg') }}">
                                    </a><span class="lg-arrow">B-005</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="B-006"
                                    data-responsive="{{ asset('img/agency/services/banner/B-006.jpg') }}"
                                    data-src="{{ asset('img/agency/services/banner/B-006.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="B-006" alt="B-006"
                                             src="{{ asset('img/agency/services/banner/B-006.jpg') }}">
                                    </a><span class="lg-arrow">B-006</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="B-007"
                                    data-responsive="{{ asset('img/agency/services/banner/B-007.jpg') }}"
                                    data-src="{{ asset('img/agency/services/banner/B-007.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="B-007" alt="B-007"
                                             src="{{ asset('img/agency/services/banner/B-007.jpg') }}">
                                    </a><span class="lg-arrow">B-007</span>
                                </li>
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="B-008"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/banner/B-008.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/banner/B-008.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="B-008" alt="B-008"--}}
                                             {{--src="{{ asset('img/agency/services/banner/B-008.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">B-008</span>--}}
                                {{--</li>--}}
                                {{--THIRD PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="B-009"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/banner/B-009.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/banner/B-009.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="B-009" alt="B-009"--}}
                                             {{--src="{{ asset('img/agency/services/banner/B-009.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">B-009</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="B-010"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/banner/B-010.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/banner/B-010.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="B-010" alt="B-010"--}}
                                             {{--src="{{ asset('img/agency/services/banner/B-010.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">B-010</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="B-011"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/banner/B-011.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/banner/B-011.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="B-011" alt="B-011"--}}
                                             {{--src="{{ asset('img/agency/services/banner/B-011.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">B-011</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="B-012"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/banner/B-012.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/banner/B-012.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="B-012" alt="B-012"--}}
                                             {{--src="{{ asset('img/agency/services/banner/B-012.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">B-012</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="B-013"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/banner/B-013.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/banner/B-013.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="B-013" alt="B-013"--}}
                                             {{--src="{{ asset('img/agency/services/banner/B-013.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">B-013</span>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                    </div>
                    <!--MODAL Body END-->
                </div>
                <div class="modal-footer">
                    <div class="wrapper-btn">
                        <a  href="#" data-dismiss="modal" class="btn" >{{trans('translate.close')}}</a>
                        <button data-toggle="modal" data-target="#constOrderModal"
                                class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="constOrderModal" aria-labelledby="constOrderLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="constOrderLabel">{{trans('translate.order')}}</h4>
                </div>
                <div class="modal-body">
                    @include('modals/orderform')
                </div>
            </div>
        </div>
    </div>

</div>
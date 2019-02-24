<div class="col-md-3 col-sm-6 col-xs-12 items wow fadeIn" data-wow-delay=".2s">
    <div class="card">
        <div class="imagine img-responsive">
            <img class="img-responsive" src="img/agency/services/branding_auto/BA-006.jpg"  alt="BA-006"/>
            <div class="overlay img-responsive">
                <div class="content-overlay">
                    <div class="linkGallery">
                        <a data-toggle="modal" data-target="#autoServiceModal">
                            <i class="fa fa-picture-o" title="{{trans('translate.gallery')}}"
                               alt="{{trans('translate.gallery')}}"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-card">
            <h6><b>{{trans('translate.brandingauto')}}</b></h6>
            <div class="wrapper-btn">
                <button class="buton buton-bg"
                        onclick="location.href='{{url('/','info_auto')}}'">{{trans('translate.details')}}</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="autoServiceModal" aria-labelledby="autoLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="{{trans('translate.close')}}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="autoLabel">{{trans('translate.brandingauto')}}</h4>
                </div>
                <div class="container"></div>

                <div class="modal-body">
                    <!--Modal Body Start-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul id="lightgallery_ba" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="BA-001"
                                    data-responsive="{{ asset('img/agency/services/branding_auto/BA-001.jpg') }}"
                                    data-src="{{ asset('img/agency/services/branding_auto/BA-001.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="BA-001" alt="BA-001"
                                             src="{{ asset('img/agency/services/branding_auto/BA-001.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">BA-001</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="BA-002"
                                    data-responsive="{{ asset('img/agency/services/branding_auto/BA-002.jpg') }}"
                                    data-src="{{ asset('img/agency/services/branding_auto/BA-002.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="BA-002" alt="BA-002"
                                             src="{{ asset('img/agency/services/branding_auto/BA-002.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">BA-002</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="BA-003"
                                    data-responsive="{{ asset('img/agency/services/branding_auto/BA-003.jpg') }}"
                                    data-src="{{ asset('img/agency/services/branding_auto/BA-003.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="BA-003" alt="BA-003"
                                             src="{{ asset('img/agency/services/branding_auto/BA-003.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">BA-003</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="BA-004"
                                    data-responsive="{{ asset('img/agency/services/branding_auto/BA-004.jpg') }}"
                                    data-src="{{ asset('img/agency/services/branding_auto/BA-004.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="BA-004" alt="BA-004"
                                             src="{{ asset('img/agency/services/branding_auto/BA-004.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">BA-004</span>
                                </li>
                                {{--SECOND PART--}}
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="BA-005"
                                    data-responsive="{{ asset('img/agency/services/branding_auto/BA-005.jpg') }}"
                                    data-src="{{ asset('img/agency/services/branding_auto/BA-005.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="BA-005" alt="BA-005"
                                             src="{{ asset('img/agency/services/branding_auto/BA-005.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">BA-005</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="BA-006"
                                    data-responsive="{{ asset('img/agency/services/branding_auto/BA-006.jpg') }}"
                                    data-src="{{ asset('img/agency/services/branding_auto/BA-006.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="BA-006" alt="BA-006"
                                             src="{{ asset('img/agency/services/branding_auto/BA-006.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">BA-006</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="BA-007"
                                    data-responsive="{{ asset('img/agency/services/branding_auto/BA-007.jpg') }}"
                                    data-src="{{ asset('img/agency/services/branding_auto/BA-007.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="BA-007" alt="BA-007"
                                             src="{{ asset('img/agency/services/branding_auto/BA-007.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">BA-007</span>
                                </li>
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-008"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-008.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-008.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-008" alt="BA-008"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-008.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-008</span>--}}
                                {{--</li>--}}
                                {{--THIRD PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-009"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-009.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-009.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-009" alt="BA-009"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-009.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-009</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-010"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-010.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-010.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-010" alt="BA-010"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-010.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-010</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-011"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-011.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-011.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-011" alt="BA-011"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-011.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-011</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-012"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-012.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-012.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-012" alt="BA-012"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-012.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-012</span>--}}
                                {{--</li>--}}
                                {{--FOURTH PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-013"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-013.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-013.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-013" alt="BA-013"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-013.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-013</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-014"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-014.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-014.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-014" alt="BA-014"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-014.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-014</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-015"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-015.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-015.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-015" alt="BA-015"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-015.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-015</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-016"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-016.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-016.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-016" alt="BA-016"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-016.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-016</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="BA-017"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/branding_auto/BA-017.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/branding_auto/BA-017.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="BA-017" alt="BA-017"--}}
                                             {{--src="{{ asset('img/agency/services/branding_auto/BA-017.jpg') }}">--}}
                                    {{--</a>--}}
                                    {{--<span class="lg-arrow">BA-017</span>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                        <!--End col-md-12(wrapper)-->
                    </div>
                    <!--MODAL Body End-->
                </div>

                <div class="modal-footer">
                    <div class="wrapper-btn">
                        <a  href="#" data-dismiss="modal" class="btn">{{trans('translate.close')}}</a>
                        <button href="#" data-toggle="modal" data-target="#autoOrderModal"
                                class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="autoOrderModal" aria-labelledby="autoOrderLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="autoOrderLabel">{{trans('translate.order')}}</h4>
                </div>
                <div class="modal-body">
                    @include('modals/orderform')
                </div>
            </div>
        </div>
    </div>

</div>

<div class="col-md-3 col-sm-6 col-xs-12 items wow fadeIn" data-wow-delay=".2s">
    <div class="card">
        <div class="imagine img-responsive">
            <img class="img-responsive" src="img/agency/services/autocolant/AC-001.jpg" alt="AC-001"/>
            <div class="overlay img-responsive">
                <div class="content-overlay">
                    <div class="linkGallery">
                        <a data-toggle="modal" data-target="#autocolantServiceModal">
                            <i class="fa fa-picture-o" title="{{trans('translate.gallery')}}"
                               alt="{{trans('translate.gallery')}}"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-card">
            <h6><b>{{trans('translate.autocolant')}}</b></h6>
            <div class="wrapper-btn">
                <button class="buton buton-bg"
                        onclick="location.href='{{url('/','info_autocolant')}}'">{{trans('translate.details')}}</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="autocolantServiceModal" aria-labelledby="autocolModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="autocolModal">{{trans('translate.autocolant')}}</h4>
                </div>

                <div class="container"></div>
                <div class="modal-body">
                    <!--Modal BODY-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul id="lightgallery_acol" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="AC-001"
                                    data-responsive="{{ asset('img/agency/services/autocolant/AC-001.jpg') }}"
                                    data-src="{{ asset('img/agency/services/autocolant/AC-001.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             alt="AC-001"
                                             title="AC-001"
                                             src="{{ asset('img/agency/services/autocolant/AC-001.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">AC-001</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="AC-002"
                                    data-responsive="{{ asset('img/agency/services/autocolant/AC-002.jpg') }}"
                                    data-src="{{ asset('img/agency/services/autocolant/AC-002.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             alt="AC-002"
                                             title="AC-002"
                                             src="{{ asset('img/agency/services/autocolant/AC-002.jpg') }}">
                                    </a><span class="lg-arrow">AC-002</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="AC-003"
                                    data-responsive="{{ asset('img/agency/services/autocolant/AC-003.jpg') }}"
                                    data-src="{{ asset('img/agency/services/autocolant/AC-003.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             alt="AC-003"
                                             title="AC-003"
                                             src="{{ asset('img/agency/services/autocolant/AC-003.jpg') }}">
                                    </a><span class="lg-arrow">AC-003</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="AC-004"
                                    data-responsive="{{ asset('img/agency/services/autocolant/AC-004.jpg') }}"
                                    data-src="{{ asset('img/agency/services/autocolant/AC-004.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             alt="AC-004"
                                             title="AC-004"
                                             src="{{ asset('img/agency/services/autocolant/AC-004.jpg') }}">
                                    </a><span class="lg-arrow">AC-004</span>
                                </li>
                                {{--SECOND PART--}}
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="AC-005"
                                    data-responsive="{{ asset('img/agency/services/autocolant/AC-005.jpg') }}"
                                    data-src="{{ asset('img/agency/services/autocolant/AC-005.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             alt="AC-005"
                                             title="AC-005"
                                             src="{{ asset('img/agency/services/autocolant/AC-005.jpg') }}">
                                    </a><span class="lg-arrow">AC-005</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"

                                    title="AC-006"
                                    data-responsive="{{ asset('img/agency/services/autocolant/AC-006.jpg') }}"
                                    data-src="{{ asset('img/agency/services/autocolant/AC-006.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" alt="AC-006" title="AC-006"
                                             src="{{ asset('img/agency/services/autocolant/AC-006.jpg') }}">
                                    </a><span class="lg-arrow">AC-006</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"

                                    title="AC-007"
                                    data-responsive="{{ asset('img/agency/services/autocolant/AC-007.jpg') }}"
                                    data-src="{{ asset('img/agency/services/autocolant/AC-007.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" alt="AC-007" title="AC-007"
                                             src="{{ asset('img/agency/services/autocolant/AC-007.jpg') }}">
                                    </a><span class="lg-arrow">AC-007</span>
                                </li>
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}

                                    {{--title="AC-008"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-008.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-008.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" alt="AC-008" title="AC-008"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-008.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-008</span>--}}
                                {{--</li>--}}
                                {{--THIRD PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}

                                    {{--title="AC-009"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-009.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-009.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--alt="AC-009"--}}
                                             {{--title="AC-009"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-009.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-009</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}

                                    {{--title="AC-010"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-010.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-010.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--alt="AC-010"--}}
                                             {{--title="AC-010"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-010.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-010</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}

                                    {{--title="AC-011"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-011.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-011.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" alt="AC-011" title="AC-011"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-011.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-011</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="AC-012"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-012.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-012.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="AC-012" alt="AC-012"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-012.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-012</span>--}}
                                {{--</li>--}}
                                {{--FOURTH PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-013"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-013.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-013.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="AC-013" alt="AC-013"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-013.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-013</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-014"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-014.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-014.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="AC-014" alt="AC-014"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-014.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-014</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-015"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-015.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-015.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="AC-015" alt="AC-015"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-015.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-015</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-016"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-016.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-016.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="AC-016" alt="AC-016"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-016.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-016</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3" title="AC-017"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/autocolant/AC-017.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/autocolant/AC-017.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="AC-017" alt="AC-017"--}}
                                             {{--src="{{ asset('img/agency/services/autocolant/AC-017.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">AC-017</span>--}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--MODAL Body END-->
                </div>

                <div class="modal-footer">
                    <div class="wrapper-btn">
                        <a  href="#" data-dismiss="modal" class="btn" >{{trans('translate.close')}}</a>
                        <button data-toggle="modal" data-target="#autocolantOrderModal"
                                class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="autocolantOrderModal" aria-labelledby="autocolOrderLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="autocolOrderLabel">{{trans('translate.order')}}</h4>
                </div>
                <div class="modal-body">
                    @include('modals/orderform')
                </div>
            </div>
        </div>
    </div>

</div>
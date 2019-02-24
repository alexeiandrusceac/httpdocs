<div class="col-md-3 col-sm-6 col-xs-12 items wow fadeIn" data-wow-delay=".2s">
    <div class="card">
        <div class="imagine img-responsive">
            <img class="img-responsive" src="img/agency/services/casete_luminoase/CL-001.jpg" alt="CL-001"/>
            <div class="overlay img-responsive">
                <div class="content-overlay">
                    <div class="linkGallery">
                        <a data-toggle="modal" data-target="#caseteServiceModal">
                            <i class="fa fa-picture-o" title="{{trans('translate.gallery')}}"
                               alt="{{trans('translate.gallery')}}"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-card">
            <h6><b>{{trans('translate.reclame')}}</b></h6>
            <div class="wrapper-btn">
                <button class="buton buton-bg"
                        onclick="location.href='{{url('/','info_casete')}}'">{{trans('translate.details')}}</button>
            </div>
        </div>
    </div>
    <!--Modal with details-->

    <!-- Modal -->
    <div class="modal fade" id="caseteServiceModal" tabindex="-1" role="dialog" aria-labelledby="caseteLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="{{trans('translate.close')}}"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="caseteLabel">{{trans('translate.reclame')}}</h4>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <!--Modal BODY-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul id="lightgallery_casete" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="CL-001"
                                    data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-001.jpg') }}"
                                    data-src="{{ asset('img/agency/services/casete_luminoase/CL-001.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="CL-001" alt="CL-001"
                                             src="{{ asset('img/agency/services/casete_luminoase/CL-001.jpg') }}">
                                    </a>
                                    <span class="lg-arrow">CL-001</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="CL-002"
                                    data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-002.jpg') }}"
                                    data-src="{{ asset('img/agency/services/casete_luminoase/CL-002.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="CL-002" alt="CL-002"
                                             src="{{ asset('img/agency/services/casete_luminoase/CL-002.jpg') }}">
                                    </a><span class="lg-arrow">CL-002</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="CL-003"
                                    data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-003.jpg') }}"
                                    data-src="{{ asset('img/agency/services/casete_luminoase/CL-003.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="CL-003" alt="CL-003"
                                             src="{{ asset('img/agency/services/casete_luminoase/CL-003.jpg') }}">
                                    </a><span class="lg-arrow">CL-003</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="CL-004"
                                    data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-004.jpg') }}"
                                    data-src="{{ asset('img/agency/services/casete_luminoase/CL-004.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="CL-004" alt="CL-004"
                                             src="{{ asset('img/agency/services/casete_luminoase/CL-004.jpg') }}">
                                    </a><span class="lg-arrow">CL-004</span>
                                </li>
                                {{--SECOND PART--}}
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="CL-005"
                                    data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-005.jpg') }}"
                                    data-src="{{ asset('img/agency/services/casete_luminoase/CL-005.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="CL-005" alt="CL-005"
                                             src="{{ asset('img/agency/services/casete_luminoase/CL-005.jpg') }}">
                                    </a><span class="lg-arrow">CL-005</span>
                                </li>
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="CL-006"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-006.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/casete_luminoase/CL-006.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="CL-006" alt="CL-006"--}}
                                             {{--src="{{ asset('img/agency/services/casete_luminoase/CL-006.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">CL-006</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="CL-007"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-007.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/casete_luminoase/CL-007.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="CL-007" alt="CL-007"--}}
                                             {{--src="{{ asset('img/agency/services/casete_luminoase/CL-007.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">CL-007</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="CL-008"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-008.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/casete_luminoase/CL-008.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="CL-008" alt="CL-008"--}}
                                             {{--src="{{ asset('img/agency/services/casete_luminoase/CL-008.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">CL-008</span>--}}
                                {{--</li>--}}
                                {{--THIRD PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="CL-009"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-009.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/casete_luminoase/CL-009.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="CL-009" alt="CL-009"--}}
                                             {{--src="{{ asset('img/agency/services/casete_luminoase/CL-009.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">CL-009</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="CL-010"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-010.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/casete_luminoase/CL-010.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="CL-010" alt="CL-010"--}}
                                             {{--src="{{ asset('img/agency/services/casete_luminoase/CL-010.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">CL-010</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="CL-011"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-011.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/casete_luminoase/CL-011.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="CL-011" alt="CL-011"--}}
                                             {{--src="{{ asset('img/agency/services/casete_luminoase/CL-011.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">CL-011</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="CL-012"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-012.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/casete_luminoase/CL-012.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="CL-012" alt="CL-012"--}}
                                             {{--src="{{ asset('img/agency/services/casete_luminoase/CL-012.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">CL-012</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="CL-013"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/casete_luminoase/CL-013.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/casete_luminoase/CL-013.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive" title="CL-013" alt="CL-013"--}}
                                             {{--src="{{ asset('img/agency/services/casete_luminoase/CL-013.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">CL-013</span>--}}
                                {{--</li>--}}
                            </ul>
                        </div>

                    </div>
                    <!--MODAL Body END-->
                </div>
                <div class="modal-footer">
                    <div class="wrapper-btn">
                        <a  href="#" data-dismiss="modal" class="btn" >{{trans('translate.close')}}</a>
                        <button data-toggle="modal" data-target="#caseteOrderModal"
                                class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="caseteOrderModal" tabindex="1" role="dialog" aria-labelledby="caseteOrderLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="caseteOrderLabel">{{trans('translate.order')}}</h4>
                </div>
                <div class="modal-body">
                    @include('modals/orderform')
                </div>
            </div>
        </div>
    </div>

</div>
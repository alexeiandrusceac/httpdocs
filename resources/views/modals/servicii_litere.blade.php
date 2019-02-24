<div class="col-md-3 col-sm-6 col-xs-12 items wow fadeIn" data-wow-delay=".2s">
    <div class="card">
        <div class="imagine img-responsive">
            <img class="img-responsive" src="img/agency/services/litere/L-001.jpg" alt="L-001" style="width:100%;"/>
            <div class="overlay img-responsive">
                <div class="content-overlay">
                   <!-- <p class="title">{{trans('translate.litere')}}</p>
                    <div class="button"><a data-toggle="modal" data-target="#litereServiceModal">{{trans('translate.gallery')}}</a></div>-->
                       <div class="linkGallery">
                           <a data-toggle="modal" data-target="#litereServiceModal">
                               <i class="fa fa-picture-o" title="{{trans('translate.gallery')}}"
                                  alt="{{trans('translate.gallery')}}"></i>
                           </a>
                       </div>
                </div>
            </div>
        </div>
        <div class="container-card">
            <h6><b>{{trans('translate.litere')}}</b></h6>
            <div class="wrapper-btn">
                <button class="buton buton-bg"
                        onclick="location.href='{{url('/','info_litere')}}'">{{trans('translate.details')}}</button>
            </div>
        </div>
    </div>
    <!--Modal with details-->

    <!-- Modal -->
    <div class="modal fade" id="litereServiceModal" tabindex="-1" role="dialog" aria-labelledby="litereModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="litereModal">{{trans('translate.litere')}}</h4>
                </div>
                <div class="container"></div>
                <div class="modal-body">

                    <!--Modal BODY-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul id="lightgallery_litere" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-001"
                                    data-responsive="{{ asset('img/agency/services/litere/L-001.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-001.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-001"
                                             alt="L-001" src="{{ asset('img/agency/services/litere/L-001.jpg') }}">
                                    </a><span class="lg-arrow">L-001</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-002"
                                    data-responsive="{{ asset('img/agency/services/litere/L-002.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-002.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-002"
                                             alt="L-002"
                                             src="{{ asset('img/agency/services/litere/L-002.jpg') }}">
                                    </a><span class="lg-arrow">L-002</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-003"
                                    data-responsive="{{ asset('img/agency/services/litere/L-003.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-003.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-003"
                                             alt="L-003"
                                             src="{{ asset('img/agency/services/litere/L-003.jpg') }}">
                                    </a><span class="lg-arrow">L-003</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-004"
                                    data-responsive="{{ asset('img/agency/services/litere/L-004.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-004.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-004"
                                             alt="L-004"
                                             src="{{ asset('img/agency/services/litere/L-004.jpg') }}">
                                    </a><span class="lg-arrow">L-004</span>
                                </li>
                                {{--SECOND PART--}}
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-005"
                                    data-responsive="{{ asset('img/agency/services/litere/L-005.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-005.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-005"
                                             alt="L-005"
                                             src="{{ asset('img/agency/services/litere/L-005.jpg') }}">
                                    </a><span class="lg-arrow">L-005</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-006"
                                    data-responsive="{{ asset('img/agency/services/litere/L-006.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-006.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-006"
                                             alt="L-006"
                                             src="{{ asset('img/agency/services/litere/L-006.jpg') }}">
                                    </a><span class="lg-arrow">L-006</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-007"
                                    data-responsive="{{ asset('img/agency/services/litere/L-007.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-007.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-007"
                                             alt="L-007"
                                             src="{{ asset('img/agency/services/litere/L-007.jpg') }}">
                                    </a><span class="lg-arrow">L-007</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-008"
                                    data-responsive="{{ asset('img/agency/services/litere/L-008.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-008.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-008"
                                             alt="L-008"
                                             src="{{ asset('img/agency/services/litere/L-008.jpg') }}">
                                    </a><span class="lg-arrow">L-008</span>
                                </li>
                                {{--THIRD PART--}}
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-009"
                                    data-responsive="{{ asset('img/agency/services/litere/L-009.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-009.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-009"
                                             alt="L-009"
                                             src="{{ asset('img/agency/services/litere/L-009.jpg') }}">
                                    </a><span class="lg-arrow">L-009</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="L-010"
                                    data-responsive="{{ asset('img/agency/services/litere/L-010.jpg') }}"
                                    data-src="{{ asset('img/agency/services/litere/L-010.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive"
                                             title="L-010"
                                             alt="L-010"
                                             src="{{ asset('img/agency/services/litere/L-010.jpg') }}">
                                    </a><span class="lg-arrow">L-010</span>
                                </li>
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-011"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-011.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-011.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-011"--}}
                                             {{--alt="L-011"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-011.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-011</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-012"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-012.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-012.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-012"--}}
                                             {{--alt="L-012"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-012.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-012</span>--}}
                                {{--</li>--}}
                                {{--FOURTH PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-013"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-013.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-013.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-013"--}}
                                             {{--alt="L-013"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-013.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-013</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-014"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-014.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-014.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-014"--}}
                                             {{--alt="L-014"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-014.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-014</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-015"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-015.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-015.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-015"--}}
                                             {{--alt="L-015"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-015.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-015</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-016"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-016.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-016.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-016"--}}
                                             {{--alt="L-016"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-016.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-016</span>--}}
                                {{--</li>--}}
                                {{--FIVE PART--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-017"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-017.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-017.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-017"--}}
                                             {{--alt="L-017"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-017.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-017</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-018"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-018.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-018.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-018"--}}
                                             {{--alt="L-018"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-018.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-018</span>--}}
                                {{--</li>--}}
                                {{--<li class="col-xs-6 col-sm-4 col-md-3"--}}
                                    {{--title="L-019"--}}
                                    {{--data-responsive="{{ asset('img/agency/services/litere/L-019.jpg') }}"--}}
                                    {{--data-src="{{ asset('img/agency/services/litere/L-019.jpg') }}">--}}
                                    {{--<a href="">--}}
                                        {{--<img class="img-responsive"--}}
                                             {{--title="L-019"--}}
                                             {{--alt="L-019"--}}
                                             {{--src="{{ asset('img/agency/services/litere/L-019.jpg') }}">--}}
                                    {{--</a><span class="lg-arrow">L-019</span>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                    </div>
                    <!--MODAL Body END-->
                </div>
                <div class="modal-footer">
                    <div class="wrapper-btn">
                        <a  href="#" data-dismiss="modal" class="btn" >{{trans('translate.close')}}</a>
                        <button data-toggle="modal" data-target="#litereOrderModal"
                                class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="litereOrderModal" tabindex="1" role="dialog" aria-labelledby="litereOrderLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="litereOrderLabel">{{trans('translate.order')}}</h4>
                </div>

                <div class="modal-body">
                    @include('modals/orderform')
                </div>
            </div>
        </div>
    </div>
</div>
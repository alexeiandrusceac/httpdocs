<div class="col-md-3 col-sm-6 col-xs-12 items wow fadeIn" data-wow-delay=".2s">
    <div class="card">
        <div class="imagine img-responsive">
            <img class="img-responsive" src="img/agency/services/decorare/D-010.jpg" alt="D-010"
                 style="width:100%;"/>
            <div class="overlay img-responsive">
                <div class="content-overlay">
                    <div class="linkGallery">
                        <a data-toggle="modal" data-target="#decorServiceModal">
                            <i class="fa fa-picture-o" title="{{trans('translate.gallery')}}"
                               alt="{{trans('translate.gallery')}}"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-card">
            <h6><b>{{trans('translate.decor')}}</b></h6>
            <div class="wrapper-btn">
                <button class="buton buton-bg"
                        onclick="location.href='{{url('/','info_decor')}}'">{{trans('translate.details')}}</button>
            </div>
        </div>
    </div>
    <!--Modal with details-->

    <!-- Modal -->
    <div class="modal fade" id="decorServiceModal" tabindex="-1" role="dialog" aria-labelledby="decorModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="decorModal">{{trans('translate.decor')}}</h4>
                </div>
                <div class="container"></div>
                <div class="modal-body">

                    <!--Modal BODY-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul id="lightgallery_decor" class="list-unstyled row">
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="D-001"
                                    data-responsive="{{ asset('img/agency/services/decorare/D-001.jpg') }}"
                                    data-src="{{ asset('img/agency/services/decorare/D-001.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="D-001" alt="D-001"
                                             src="{{ asset('img/agency/services/decorare/D-001.jpg') }}">
                                    </a><span class="lg-arrow">D-001</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="D-002"
                                    data-responsive="{{ asset('img/agency/services/decorare/D-002.jpg') }}"
                                    data-src="{{ asset('img/agency/services/decorare/D-002.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="D-002" alt="D-002"
                                             src="{{ asset('img/agency/services/decorare/D-002.jpg') }}">
                                    </a><span class="lg-arrow">D-002</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="D-003"
                                    data-responsive="{{ asset('img/agency/services/decorare/D-003.jpg') }}"
                                    data-src="{{ asset('img/agency/services/decorare/D-003.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="D-003" alt="D-003"
                                             src="{{ asset('img/agency/services/decorare/D-003.jpg') }}">
                                    </a><span class="lg-arrow">D-003</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="D-004"
                                    data-responsive="{{ asset('img/agency/services/decorare/D-004.jpg') }}"
                                    data-src="{{ asset('img/agency/services/decorare/D-004.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="D-004" alt="D-004"
                                             src="{{ asset('img/agency/services/decorare/D-004.jpg') }}">
                                    </a><span class="lg-arrow">D-004</span>
                                </li>
                                {{--SECOND PART--}}
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="D-005"
                                    data-responsive="{{ asset('img/agency/services/decorare/D-005.jpg') }}"
                                    data-src="{{ asset('img/agency/services/decorare/D-005.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="D-005" alt="D-005"
                                             src="{{ asset('img/agency/services/decorare/D-005.jpg') }}">
                                    </a><span class="lg-arrow">D-005</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="D-006"
                                    data-responsive="{{ asset('img/agency/services/decorare/D-006.jpg') }}"
                                    data-src="{{ asset('img/agency/services/decorare/D-006.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="D-006" alt="D-006"
                                             src="{{ asset('img/agency/services/decorare/D-006.jpg') }}">
                                    </a><span class="lg-arrow">D-006</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="D-007"
                                    data-responsive="{{ asset('img/agency/services/decorare/D-007.jpg') }}"
                                    data-src="{{ asset('img/agency/services/decorare/D-007.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="D-007" alt="D-007"
                                             src="{{ asset('img/agency/services/decorare/D-007.jpg') }}">
                                    </a><span class="lg-arrow">D-007</span>
                                </li>
                                <li class="col-xs-6 col-sm-4 col-md-3"
                                    title="D-008"
                                    data-responsive="{{ asset('img/agency/services/decorare/D-008.1.jpg') }}"
                                    data-src="{{ asset('img/agency/services/decorare/D-008.1.jpg') }}">
                                    <a href="">
                                        <img class="img-responsive" title="D-008" alt="D-008"
                                             src="{{ asset('img/agency/services/decorare/D-008.1.jpg') }}">
                                    </a><span class="lg-arrow">D-008</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--MODAL Body END-->
                </div>
                <div class="modal-footer">
                    <div class="wrapper-btn">
                        <a href="#" data-dismiss="modal" class="btn">{{trans('translate.close')}}</a>
                        <button data-toggle="modal" data-target="#decorOrderModal"
                                class="buton buton-bg">{{trans('translate.ordernow')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="decorOrderModal" tabindex="1" role="dialog" aria-labelledby="decorOrderLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('translate.close')}}">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="decorOrderLabel">{{trans('translate.order')}}</h4>
                </div>
                <div class="modal-body">
                    @include('modals/orderform')
                </div>
            </div>
        </div>
    </div>
</div>
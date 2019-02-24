<div class="contact">
    <form name="sentMessage" class="form" id="contactForm" novalidate>
        <div class="controls">
            <div class="row">
                <div class="col-md-12 col-sm-12" data-wow-delay=".2s">
                    <div class="row">
                        <div class="col-container">
                            <div class="col">
                                <div class="control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>{{trans('translate.name')}} *</label>
                                        <input id="name" type="text" name="name" class="form-control"
                                               placeholder="{{trans('translate.name')}}" required
                                               data-validation-required-message="{{trans('translate.valname')}}">
                                        <p class="help-block text-danger info-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="control-group">
                                    <div class="form-group  col-xs-12 floating-label-form-group controls">
                                        <label>{{trans('translate.company')}} *</label>
                                        <input id="company" type="text" name="company" class="form-control"
                                               placeholder="{{trans('translate.company')}}" required
                                               data-validation-required-message="{{trans('translate.valcompany')}}">
                                        <p class="help-block text-danger info-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-container">
                            <div class="col">
                                <div class="control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>{{trans('translate.email')}} *</label>
                                        <input id="email" type="email" name="email" class="form-control"
                                               placeholder="{{trans('translate.email')}}" required
                                               data-validation-required-message="{{trans('translate.valemail')}}">
                                        <p class="help-block text-danger info-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>{{trans('translate.phone')}} *</label>
                                        <input id="phone" type="tel" name="phone" class="form-control"
                                               placeholder="{{trans('translate.phone')}}" required
                                               data-validation-required-message="{{trans('translate.valphone')}}">
                                        <p class="help-block text-danger info-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-container">
                            <div class="col">
                                <div class=" control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>{{trans('translate.mesage')}} *</label>
                                        <textarea id="message" type="text" name="message"
                                                  placeholder="{{trans('translate.mesage')}}" rows="5" required
                                                  class="form-control"
                                                  data-validation-required-message="{{trans('translate.valmessage')}}"></textarea>
                                        <p class="help-block text-danger info-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input id="message_error" style="display:none;" value="{{trans('translate.messageerror')}}">
                    <input id="message_success" style="display:none" value="{{trans('translate.messagesucces')}}">
                    <input id="message_sry" style="display: none" value="{{trans('translate.messagesorry')}}">
                    <div class="row">
                        <div id="success" class="form-group col-xs-12"></div>
                        <div class="form-group col-xs-12">
                            <div class="wrapper-btn">
                                <button type="submit" class="buton buton-bg">{{trans('translate.send')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@extends('web.main')
@section('title')
    @lang('words.projects')
@endsection
@section('content')
<div class="block-main"></div>
<section aria-label="map" class="no-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
            <div class="onStep" data-animation="fadeIn" data-time="300" id="map-1"></div>
            </div>
        </div>
    </div> 
</section> 
<section aria-label="contact" class="wrapaddres no-bottom">
    <div class="container-fluid">
        <div class="row p-4-vh ml-mr-30">
        <div class="col-md-6 pr-md-5 mb-5">
            <h3 class="heading-cont">@lang('words.contact_us')
            @if ($message = Session::get('success'))
                <span class="text-success">- {{ $message }}</span>
            @endif
            </h3>
                <form class="autoheight" method="POST" action="{{ route('web.contact.store') }}">
                    @csrf
                    <div class="form-group user-name">
                        <input type="text" class="form-control" required id="name-contact-1" name="name" placeholder="@lang('words.name_surname')">
                    </div>
                    <div class="form-group user-email">
                        <input type="email" class="form-control" required id="email-contact" name="email" placeholder="@lang('words.mail')">
                    </div>
                    <div class="form-group user-message">
                        <textarea class="form-control" required id="message-contact" name="content" placeholder="@lang('words.content')"></textarea>
                    </div>
                    <button type="submit" class="btn-contact">@lang('words.send')</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="autoheight">
                    <h3 class="heading-cont">@lang('words.contact_information')</h3>
                    <address class="cont-1">
                        <span><strong>@lang('words.adress')</strong>: {{ setting('adress') }}</span> 
                        <span><strong>@lang('words.phone')</strong>: <a href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a></span>
                        <span><strong>@lang('words.mail')</strong>: <a href="mailto:{{ setting('mail') }}">{{ setting('mail') }}</a></span>
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
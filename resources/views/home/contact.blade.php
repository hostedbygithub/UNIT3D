@extends('layout.default')

@section('title')
	<title>{{ trans('common.contact') }} - {{ Config::get('other.title') }}</title>
@stop

@section('meta')
	<meta name="description" content="{{ trans('common.contact') }} {{ Config::get('other.title') }}.">
@stop

@section('breadcrumb')
<li>
    <a href="{{ route('contact') }}" itemprop="url" class="l-breadcrumb-item-link">
        <span itemprop="title" class="l-breadcrumb-item-link-title">{{ trans('common.contact') }}</span>
    </a>
</li>
@stop

@section('content')
<div class="container box">
<div class="row">
	<div class="col-md-4 box centered-form">
		{{ Form::open(array('route' => 'contact')) }}
		{{ csrf_field() }}
			<div class="form-group">
				<input type="text" name="contact-name" placeholder="{{ trans('common.name') }}" value="{{ Auth::user()->username }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="email" name="email" placeholder="{{ trans('common.email') }}" value="{{ Auth::user()->email }}" class="form-control" required>
			</div>

			<div class="form-group">
				<textarea name="message" placeholder="{{ trans('common.message') }}" class="form-control" cols="30" rows="10"></textarea>
			</div>

			<button type="submit" class="btn btn-lg btn-primary btn-block">{{ trans('common.submit') }}</button>
		{{ Form::close() }}
	</div>

	<div class="col-sm-8">
	    <div class="well well-sm mt-0">
	      <p class="lead text-green text-center"><i class="fa fa-star"></i> <strong>{{ trans('common.contact-header') }}</strong> <i class="fa fa-star"></i></p>
	      <p class="lead text-orange text-center">{{ trans('common.contact-desc') }}.</p>
	    </div>
	</div>
</div>
</div>
@stop

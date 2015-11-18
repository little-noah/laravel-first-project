@extends('app')

@section('benvenuto')
Welcome
@stop

@if($name == 'Leonardo')
	@section('title')
	Welcome Doc
	@stop
@else
	@section('title')
	Welcome
	@stop
	@section('content')
	{{$name.' '.$surname}}
	@stop
@endif

@section('link')
<div>
	<a href="http://laravel.app/benvenuto">Translate</a>
</div>
@stop

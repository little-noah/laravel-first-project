@extends('app')

@section('benvenuto')
Benvenuto
@stop

@if($name == 'Leonardo')
	@section('title')
	Ciao Docente
	@stop
@else
	@section('title')
	Ciao
	@stop
	@section('content')
	{{$name.' '.$surname}}
	@stop
@endif

@section('link')
<div>
	<a href="http://laravel.app/welcome">Traduci</a>
</div>
@stop

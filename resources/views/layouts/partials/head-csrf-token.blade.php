@extends('layouts.master')

@section('head-title')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
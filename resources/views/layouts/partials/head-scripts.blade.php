@extends('layouts.master')

@section('head-scripts')
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
	</script>
@endsection
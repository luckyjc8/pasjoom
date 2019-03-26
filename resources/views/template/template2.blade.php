@extends('template/template')

@section('body')
	@include('assets/top-mid-logo')

	@yield('content')

	@include('assets/footer')

	@yield('script')
@endsection
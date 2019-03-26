@extends('template/template')

@section('body')
	@include('assets/nav')

	@include('assets/sidebar')

	@yield('content')

	@include('assets/footer')

	@yield('script')
@endsection
@extends('main')

@section('title', '| اطلاعات پست')

@section('content')

	@if ( Session::has('success') )

		<div class="row">
			<div class="alert alert-success col-12 text-right" role="alert">
				{{ Session::get('success') }}
			</div>
		</div>

	@endif

	<div class="text-right mt-3">
		<h1>{{ $post->title }}</h1>
		<p class="mt-4">{{ $post->body }}</p>
	</div>
@endsection
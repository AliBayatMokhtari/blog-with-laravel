
@extends("main")

@section('title', '| درباره من')

@section("content")

<div class="row">
	<div class="col-12 text-right">
		<h1>{{ $data["firstname"] }} + {{ $data["lastname"] }} = {{ $data["fullname"] }}</h1>
		<p></p>
	</div>
</div>

@endsection
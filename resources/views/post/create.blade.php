@extends("main")

@section('title', '| پست جدید')

@section("content")

<div class="row">
	<div class="col-md-12 text-right">

		@if ( count( $errors ) > 0 )

			<div class="row">
				<div class="alert alert-danger col-12 text-right" role="alert">
					<ul>
						@foreach ( $errors->all() as $error )
							@if ( $error === 'title' )
								<li><strong>عنوان:</strong><p>پر کردن این فیلد الزامی است.</p></li>	
							@elseif ( $error === 'body' )
								<li><strong>متن:</strong><p>پر کردن این فیلد الزامی است.</p></li>
							@endif
						@endforeach
					</ul>
				</div>
			</div>

		@endif

		<h1>ایجاد پست جدید</h1>
		<hr>
		<form action="/posts" method="post" class="mt-5">

			{{ csrf_field() }}

			<div class="form-group">
				<label name="title">عنوان:</label>
				<input id="title" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label name="body">متن:</label>
				<textarea 
					style="min-height: 200px;"
					id="body" 
					name="body" 
					class="form-control"
				></textarea>
			</div>

			<input id="send-button" type="submit" value="ایجاد پست" class="btn btn-success btn-block">
		</form>
	</div>
</div>

@section('scripts')

<script type="text/javascript">
	// document.getElementById('send-button').addEventListener('click', event => {
	// 	const title = document.getElementById('title').value;
	// 	const body = document.getElementById('body').value;
	// 	if (title.trim() === '' || body.trim() === '') {
	// 		event.preventDefault();
	// 		alert('عنوان یا متن پست را نمی‌توانید خالی بگذارید.');
	// 	}
	// });
</script>

@endsection

@endsection
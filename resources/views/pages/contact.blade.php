@extends("main")

@section('title', '| تماس با من')

@section('content')

<div class="row">
	<div class="col-md-12 text-right">
		<h1>تماس با من</h1>
		<hr>
		<form class="mt-5">
			<div class="form-group">
				<label name="email">ایمیل:</label>
				<input id="email" name="email" class="form-control">
			</div>

			<div class="form-group">
				<label name="subject">موضوع:</label>
				<input id="subject" name="subject" class="form-control">
			</div>

			<div class="form-group">
				<label name="message">پیام:</label>
				<textarea 
					id="message" 
					name="message" 
					class="form-control"
					placeholder="پیام خود را بنویسید"
				></textarea>
			</div>

			<input id="send-button" type="submit" value="ارسال پیام" class="btn btn-success">
		</form>
	</div>
</div>

<!-- This is the script of this page. -->
<script type="text/javascript">
	document.getElementById("send-button").addEventListener("click", event => {
		event.preventDefault();
		var email = document.getElementById("email").value;
		var subject = document.getElementById("subject").value;
		var message = document.getElementById("message").value;
	})
</script>

@endsection









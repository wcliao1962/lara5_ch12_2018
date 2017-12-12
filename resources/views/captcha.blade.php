<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Captcha</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	{{{ $msg or '' }}}
	<form action="{{ action('CaptchaController@postIndex') }}" method="post" accept-charset="utf-8">
		{{ csrf_field() }}
		{!! Captcha::display('captcha') !!}<br />
		@if ($errors->has('g-recaptcha-response'))
			{{ $errors->first('g-recaptcha-response') }}<br />
		@endif
		<input type="submit" value="送出" />
	</form>
</body>
</html>
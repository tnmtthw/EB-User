<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EBarangay Registration Success</title>
	<style>
		.container {
			margin: 0 auto;
			max-width: 600px;
			padding: 20px;
			background-color: #fff;
			font-family: Arial, sans-serif;
			color: #333;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

		.logo {
			display: block;
			margin: 0 auto;
			width: 150px;
			height: auto;
			margin-bottom: 20px;
		}

		.name {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
		}

		.inner {
			padding: 20px;
			background-color: #f8f8f8;
			border-radius: 5px;
		}

		h1 {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		p {
			font-size: 18px;
			margin-bottom: 20px;
			line-height: 1.5;
		}

		button {
			display: block;
			margin: 0 auto;
			padding: 10px 20px;
			background-color: #1abc9c;
			color: #fff;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
		}

		button:hover {
			background-color: #16a085;
		}

		@media screen and (max-width: 500px) {
			.container {
				max-width: 100%;
				padding: 10px;
			}

			.logo {
				width: 100%;
				height: auto;
				margin-bottom: 10px;
			}

			.name {
				font-size: 20px;
				margin-bottom: 10px;
			}

			h1 {
				font-size: 20px;
				margin-bottom: 10px;
			}

			p {
				font-size: 16px;
				margin-bottom: 10px;
			}

			button {
				font-size: 16px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="{{ $message->embed(public_path('assets/img/erlogo_mail.png')) }}" alt="Logo" class="logo">
		{{-- <h1 class="name">EBarangay</h1> --}}
		<div class="inner">
			<h1>Hello {{ $user->firstname }},</h1>
			<p>Congratulations! Your registration with EBarangay has been successful.</p>
			<p>Please wait for admin approval.</p>
		</div>		
	</div>
</body>
</html>
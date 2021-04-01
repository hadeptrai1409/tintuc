<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<title>Form UI Design</title>
</head>
<body>
	<div class="align">
		<div class="card">
			<div class="head">
				<div></div>
				<a id="login" class="selected" href="#login">Login</a>
				<a id="register" href="#register">Register</a>
				<div></div>
			</div>
			<div class="tabs">
                <form  action="{{route('user-login')}}" method="POST">
                    @csrf
					<div class="inputs">
						<div class="input">

                            <input name="email" @isset($email) value="{{$email}}"
                             @endisset placeholder="email" type="text">
                            <img src="{{asset('login/img/user.svg')}}">

						</div>
						<div class="input">
							<input name="password" placeholder="Password" type="password">
                            <img src="{{asset('login/img/pass.svg')}}">
                        </div>

						<p>or sign up with:</p>
						<ul>
							<li><i class="fab fa-apple"></i></li>
							<li><i class="fab fa-google"></i></li>
							<li><i class="fab fa-dribbble"></i></li>
							<li><i class="fab fa-whatsapp"></i></li>
						</ul>
                    </div>
                    @isset($msg)
    <div>
        <span style="color: red">{{$msg}}</span>
    </div>
    @endisset
					<button type="submit">Login</button>
				</form>
				<form>
					<div class="inputs">
						<div class="input">
							<input placeholder="Email" type="text">
                            <img src="{{asset('login/img/mail.svg')}}">
						</div>
						<div class="input">
							<input placeholder="Username" type="text">
                            <img src="{{asset('login/img/user.svg')}}">
						</div>
						<div class="input">
							<input placeholder="Password" type="password">
                            <img src=" {{asset('login/img/pass.svg')}}">
						</div>
						<p>or sign up with:</p>
						<ul>
							<li><i class="fab fa-apple"></i></li>
							<li><i class="fab fa-google"></i></li>
							<li><i class="fab fa-dribbble"></i></li>
							<li><i class="fab fa-whatsapp"></i></li>
						</ul>

					</div>
					<button>Register</button>
				</form>
			</div>
		</div>
	</div>
    <script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
	<script src=" {{asset('login/js/index.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title>Register | User Page</title>
	</head>
	<style type="text/css">
		.container{
			height: 80%px;
			width: 300px;
			background: #fff;
			padding: 5px;
			border-radius: 4px;
			align-content: center;
			border: 1px solid #d8dee2;
		}
		.container-register{
			height: 50px;
			width: 300px;
			background-color: #f9f9f9;
			border-radius: 4px;
			align-content: center;
			border: 1px solid #d8dee2;
			margin-top: 20px;
		}
		a{
			text-decoration: none;
			color: #0366d6;
		}
		
		h1{
			font-size: 24px;
		    font-weight: 300;
		    letter-spacing: -0.5px;

		}
		body {
		    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
		    font-size: 14px;
		    line-height: 1.5;
		    color: #24292e;
		   	background-color: #f9f9f9;
		}	
		input{
			width: 250px;
			height: 20px;
			border-radius: 5px;
			border:1px solid #d1d5da;
			padding: 5px;
			margin-bottom: 10px;
			box-shadow: inset 0 1px 2px rgba(27,31,35,0.075);

		}
		input:focus{
			 border-color:#333;
		}
		input[type=submit]{
			width: 260px;
			height: 40px;
			border-radius: 5px;
			margin-bottom: 10px;
			color: #fff;
		    background-color: #28a745;
		    background-image: linear-gradient(-180deg, #34d058 0%, #28a745 90%);
		    font-size: 15px;
		    font-weight: 600;
		    line-height: 20px;
		    white-space: nowrap;
		    vertical-align: middle;
		    cursor: pointer;
		}
		input[type=submit]:hover{
			background-color: #28a745;
		    background-image: linear-gradient(-180deg, #34d058 0%, #28a745 40%);
		}
		p{
			margin: 0px;
			color: red;
		}
		img{
			margin-top: 40px;
		}
	</style>
	<body>
		<center>
			<img src="img/menhera.png" height="150px" width="150px">
			<h1>Register To Laravel CRUD</h1>
			<div class="container">
				<form method="post" action="/register">
					<!-- Add csrf token -->
					@csrf
					<table>
						<tr>
							<td><b>Name</b></td>
						</tr>
						<tr>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>
								<p style="margin-top: -14px;">
									<!-- Add error validate name -->
									@if ($errors->has('name'))
										{{ $errors->first('name') }}
									@endif
								</p>
							</td>
						</tr>

						<tr>
							<td><b>Email</b></td>
						</tr>
						<tr>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td>
								<p style="margin-top: -14px;">
									<!-- Add error validate email -->
									@if ($errors->has('email'))
										{{ $errors->first('email') }}
									@endif
								</p>
							</td>
						</tr>

						<tr>
							<td><b>Password</b></td>
						</tr>
						<tr>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td>
								<p style="margin-top: -14px;">
									<!-- Add error validate password -->
									@if ($errors->has('password'))
										{{ $errors->first('password') }}
									@endif
								</p>
							</td>
						</tr>

						<tr>
							<td><b>Password Confirmation</b></td>
						</tr>
						<tr>
							<td><input type="password" name="password_confirmation"></td>
						</tr>
						<tr>
							<td>
								<p style="margin-top: -14px;">
									<!-- Add error validate confirm password -->
									@if ($errors->has('password_confirmation'))
										{{ $errors->first('password_confirmation') }}
									@endif
								</p>
							</td>
						</tr>

						<tr>
							<td><input type="submit" name="proses" value="Register"></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="container-register">
				<p style="margin-top: 14px; color: black;">Already have account ? <a href="/login">Log in</a></p>
			</div>
		</center>
	</body>
</html>
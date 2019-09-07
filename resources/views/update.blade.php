@extends('app-bar')
@section('content')
	<style type="text/css">
		.container{
			height: 80%;
			width: 300px;
			background: #fff;
			padding: 5px;
			border-radius: 4px;
			align-content: center;
			border: 1px solid #d8dee2;
		}
		input{
			width: 250px;
			height: 20px;
			border-radius: 5px;
			border:1px solid #d1d5da;
			padding: 5px;
			margin-bottom: 10px;
			box-shadow: inset 0 1px 2px rgba(27,31,35,0.075);
			padding-left: 10px;

		}
		p{
			color: red;
			font-size: 12px;
			
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
		.alert{
			height: 40px;
			width: 310px;
			border-radius: 4px;
			align-content: center;
			background-color: #48c18f;
   			border-color: rgba(27,31,35,0.15);
			margin-bottom: 10px;
			padding-top: 10px;
			font-size: 14px;
			padding-top: 20px;
			color: white;
		}
		.alert-fail{
			height: 40px;
			width: 310px;
			border-radius: 4px;
			align-content: center;
			background-color: #f75757;
   			border-color: rgba(27,31,35,0.15);
			margin-bottom: 10px;
			padding-top: 20px;
			font-size: 14px;
			color: white;
		}
		.update{
			font-size: 24px;
		    font-weight: 300;
		    letter-spacing: -0.5px;
		    margin-top: -40px;
		    margin-bottom: 20px;
		} 	
	</style>
	<center>
		<h1 class="update">Update Data</h1>

		@if (session('success'))
			<div class="alert">
				<b>{{ session('success') }}</b>
			</div>
		@endif
		@if (session('fail'))
			<div class="alert-fail">
				<b>{{ session('fail') }}</b>
			</div>
		@endif
		<div class="container">
			<form method="post" action="/update/{{ Session::get('id') }}">
					<!-- Add csrf token -->
					@csrf
					<table>
						<tr>
							<td><b>Name</b></td>
						</tr>
						<tr>
							<td><input type="text" name="name" value="{{ $data->name }}"></td>
						</tr>

						<tr>
							<td><b>Email</b></td>
						</tr>
						<tr>
							<td><input type="email" name="email" value="{{ $data->email }}" readonly></td>
						</tr>

						<tr>
							<td><b>New Password</b></td>
						</tr>
						<tr>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td>
								<p style="margin-top: -10px;">
									<!-- Add error validate password -->
									@if ($errors->has('password'))
										<b>{{ $errors->first('password') }}</b>
									@endif
								</p>
							</td>
						</tr>

						<tr>
							<td><b>New Password Confirmation</b></td>
						</tr>
						<tr>
							<td><input type="password" name="password_confirmation"></td>
						</tr>
						<tr>
							<td>
								<p style="margin-top: -10px;width: 265px; ">
									<!-- Add error validate confirm password -->
									@if ($errors->has('password_confirmation'))
										<b>{{ $errors->first('password_confirmation') }}</b>
									@endif
								</p>
							</td>
						</tr>

						<tr>
							<td><input type="submit" name="proses" value="Update"></td>
						</tr>
					</table>
				</form>
		</div>
	</center>
@endsection
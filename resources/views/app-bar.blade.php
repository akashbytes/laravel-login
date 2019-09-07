<!DOCTYPE html>
<html>
	<head>
		 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<title>{{ $title }} | User Page</title>
	</head>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		html, body {
                color: #24292e;
                background-color: #f9f9f9;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
	</style>
	<body>
		<div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="/">Home</a>
                <a href="/logout">Logout</a>
                <a href="/update">Update Account</a>
            </div>
            @yield('content')  
        </div>
	</body>
</html>
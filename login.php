<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		form{
			border: 3px solid #f1f1f1;
			width:40%;
			margin:20% auto;
		}

		input[type=text], input[type=password]{
			width:100%;
			padding:12px,20px;
			margin:8px 0;
			display:inline-block;
			border:1px solid #ccc;
			box-sizing: border-box;

		}

		button{
			background-color:black;
			color:white;
			padding:14px 20px;
			margin:8px 0;
			border:none;
			cursor:pointer;
			width:100%;


		}

		button:hover{

			opacity:0.8;
		}

		.imgcontainer{
			text-align:center;
			margin:24px 0 12px 0;
		}

		img.ironman{
			width: 40%;
			border-radius:50%;
		}

		.formcontainer{
			padding:16px;
		}



		@media screen and (max-width: 300px) {
    		span.psw {
        		display: block;
        		float: none;
    		}
    		.cancelbtn {
        		width: 100%;
    		}
		}


	</style>




	<title>Login Page</title>
</head>
<body>
	<div class="frm">
		<!-- 	<form action="./process.php" method="POST">
				<p>
				<label>Username:</label>
				<input type="text" id="user" name="user"></input>
				</p>

				<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass"></input>
				</p>

				<p>
				<input type="submit" id="btn" value="Login"></input>
				</p>



			</form> -->

			<form action="./process.php" method ="POST">
<!-- 				<div class="imgcontainer">
					<img src="" alt="ironman" class="ironman">
				</div> -->

				<div class="formcontainer">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="user" id="user">

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="pass" id="pass"></input>

					<button class="submit">Login</button>

				</div>
			</form>


	</div>







</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,500&family=Ovo&display=swap" rel="stylesheet">
		<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Mulish', sans-serif;
			/*font-family: 'Ovo', serif;*/
		}
		@media(min-width:411px){
			.left-side img{
				width: 750px!important;
				height: 600px!important;
				margin-top: -400px;
			}
			.right-side{
				width: 400px!important;
				height: 350px!important;
				margin-top: -400px;
			}
			h1{
				font-size: 60px;
			}
			@media(min-width: 768px){
				.left-side img{
				width: 750px!important;
				height: 600px!important;
				margin-top: -50px;
			}
			.right-side{
				width: 400px!important;
				height: 350px!important;
				margin-top: -50px;
			}
			}
		}
		h1{
			text-align: center;
			line-height: 20vh;
			color: whitesmoke;
			background-image: linear-gradient(to left,#dfe6e9,crimson);/* lemonchiffon,gold,cornsilk,crimson */
		}
		.main-div{
			width: 100%;
			height: 80vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		.right-side{
			background-color: #dfe6e9!important;
			border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
		}
		.left-side img{
			width: 310px!important;
			height:270px;

		}
		.right-side{
			width: 350px;
			height:250px;
			flex-direction: column;
			background-color:#dfe6e9;
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
		p{
			margin: 10px 0 0 0;
		}
		.input1{
			width: 220px;
			height: 30px;
			margin-bottom:10px!important;
			margin-left: 10px;
			padding: 5px;
			outline: none;
			border-radius: 5px;
		}
		/* .input3{
			margin-top: 15px;
		} */
		.selection{
			width: 100%;
			margin: 10px 0;
		}
		.btn{
			border-radius: 5px;
			background-color: #6c63ff;
			color: white;
			font-size: 0.9rem;
			padding: 3px 6px;
			outline: none;
			border: 0.5px solid black;

		}
		</style>
	</head>
	<body>
		<header>
			<h1>Temperature Conversion</h1>
			<div class="main-div">
				<div class="left-side">
					<img src="images/girlw.jpg">
				</div>
				<div class="right-side">
					<form method="post">
						<input type="text" name="num" placeholder="enter your number"class="input1">
						<div class="selection">
							<label>celcius</label>
							<input type="radio" name="units" value="cel">
							<label>Fahren</label>
							<input type="radio" name="units"value="feh">
						</div>
						<input type="submit" name="submit"value="convert now" class="btn">
					</form>
					<div>
						<p>
							<?php
								if(isset($_POST['submit']))
								{
									$num =$_POST['num'];
									$temp=$_POST['units'];

									if($temp == "cel")
									{
										$result = $num * 9/5 +32;
										echo "The conversion value of celcius <br>in fahren is ". $result;
									}
									else{
										$result = ($num -32) * 5/9;
										echo "The conversion value of fahren <br> in celcius is ".$result;
									}

								}
							?>
						</p>
					</div>
				</div>
			</div>
		</header>
	</body>
</html>
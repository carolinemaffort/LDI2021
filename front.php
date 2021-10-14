<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Curriculo</title>
		<style type="text/css">
			header{
				width: 100%;
				height: 100px;
				background-color: #420516;
				float: left;
				color: white;
				font-size: 45px;
				text-align: center;
				font-family: arial;
			}
			
			.sct{
				width: 50%;
				height: 400px;
				float: left;
				color: black;
				font-family: arial;
				background-color: #F1E9E5;
			}
			
			.sct2{
	           width: 200px;
	           height: 200px;		
			   color: black;
			   margin-left: 200px;
			   margin-top: -290px;
			}
			
			.im{
			   width: 180px;
			   height: 300px;
			
			}
			
			
			footer{
				width: 100%;
				height: 50px;
				background-color: #420516;
				float: left;	
				color:white;		
			}
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function() {
					$("#header").load("header.php"   );
					$("#sct01" ).load("sec01.php");
					$("#sct02" ).load("sec02.php");
					$("#footer").load("footer.php"   );
				});
		</script>
	</head>
<body>
	<header id="header">innerHTML header</header>
	<section class="sct" id="sct01" >innerHTML sct01</section>
	<section class="sct" id="sct02">innerHTML sct02</section>
	<footer id="footer">innerHTML footer</footer>
</body>
</html>
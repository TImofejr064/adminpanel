<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet"> 
	<title>Админпанель</title>
</head>
<body>
	<div class="header">
		<div class="headeritem">
			<div class="row justify-content-center">
				<div class="col-lg-2">
				<button id="btnnav1" class="btn mt-1 btn-light">Посты</button>
			</div>
			<div class="col-lg-2">
				<button id="btnnav2" class="btn mt-1  btn-light">Заказы</button>
			</div>
			<div class="col-lg-2">
				<button id="btnnav3" class="btn mt-1  btn-light">Конфиг</button>
			</div>
			<div class="col-lg-2">
				<button id="btnnav4" class="btn mt-1  btn-light">Статистика</button>
			</div>

			</div>
		</div>
	</div>
	<div class="posts">
		<div class="row text-center">
			<div class="col">
				<h3 style="font-family: 'M PLUS 1p', sans-serif; margin-top: 40px;">Посты</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col">
				<p style="font-family: 'M PLUS 1p', sans-serif; margin-top: 20px;">Здесь вы можете добавлять и монипулировать с постами</p>
			</div>
		</div>
		<div class="row">
		<div class="col-lg-8">
			<div class="info1">
				<p id="asd"></p>
				<form method="POST" id="mailsend">
					<input type="text" name="inpname" id="name" placeholder="name">
					<button type="submit" id="submit">Touch me</button>
				</form>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="info3"></div>
		</div>
		</div>
	</div>
		<div class="zakazi">
		<div class="row text-center">
			<div class="col">
				<h3 style="font-family: 'M PLUS 1p', sans-serif; margin-top: 40px;">Заказы</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col">
				<p style="font-family: 'M PLUS 1p', sans-serif; margin-top: 20px;">Здесь вы можете отсматривать заказы</p>
			</div>
		</div>
		<div class="row">
		<div class="col-lg-8">
			<div class="info1">
				<p id="asd"></p>
				<form method="POST" id="mailsend">
					<input type="text" name="inpname" id="name" placeholder="name">
					<button type="submit" id="submit">Touch me</button>
				</form>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="info3"></div>
		</div>
		</div>
	</div>
		<div class="konfig">
		<div class="row text-center">
			<div class="col">
				<h3 style="font-family: 'M PLUS 1p', sans-serif; margin-top: 40px;">Конфиг</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col">
				<p style="font-family: 'M PLUS 1p', sans-serif; margin-top: 20px;">Здесь вы можете изменять конфиг сайта</p>
			</div>
		</div>
		<div class="row">
		<div class="col-lg-8">
			<div class="info1">
				<p id="asd"></p>
				<form method="POST" id="mailsend">
					<input type="text" name="inpname" id="name" placeholder="name">
					<button type="submit" id="submit">Touch me</button>
				</form>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="info3"></div>
		</div>
		</div>
	</div>
			<div class="statistik">
		<div class="row text-center">
			<div class="col">

				<h3 style="font-family: 'M PLUS 1p', sans-serif; margin-top: 40px;">Статистика</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col">
				<p style="font-family: 'M PLUS 1p', sans-serif; margin-top: 20px;">Здесь вы можете отслеживать статистику</p>
			</div>
		</div>
		<div class="row">
		<div class="col-lg-8">
			<div class="info1">
				<p id="asd"></p>
				<form method="POST" id="mailsend">
					<input type="text" name="inpname" id="name" placeholder="name">
					<button type="submit" id="submit">Touch me</button>
				</form>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="info3"></div>
		</div>
		</div>
	</div>
</body>
<script>
	$('#mailsend').submit(function() {
		var stroka = $(this).serialize();
			$.ajax({
			url: 'in.php',
			type: 'POST',
			data: stroka,
			success:function valik(data) {
				$('#asd').html(data);
			}
			});
			return false;
	});
	$('#btnnav1').click(function() {
		$(this).addClass('active');
		$('.posts').css('display', 'block');
		$('.zakazi').css('display', 'none');
		$('.konfig').css('display', 'none');	
		$('.statistik').css('display', 'none');
		$('#btnnav2').removeClass('active');
		$('#btnnav3').removeClass('active');
		$('#btnnav4').removeClass('active');
	});
	$('#btnnav2').click(function() {
		$(this).addClass('active');
		$('.posts').css('display', 'none');
		$('.zakazi').css('display', 'block');
		$('.konfig').css('display', 'none');	
		$('.statistik').css('display', 'none');
		$('#btnnav1').removeClass('active');
		$('#btnnav3').removeClass('active');
		$('#btnnav4').removeClass('active');
	});
	$('#btnnav3').click(function() {
		$(this).addClass('active');
		$('.posts').css('display', 'none');
		$('.zakazi').css('display', 'none');
		$('.konfig').css('display', 'block');	
		$('.statistik').css('display', 'none');
		$('#btnnav2').removeClass('active');
		$('#btnnav1').removeClass('active');
		$('#btnnav4').removeClass('active');
	});
	$('#btnnav4').click(function() {
		$(this).addClass('active');
		$('.posts').css('display', 'none');
		$('.zakazi').css('display', 'none');
		$('.konfig').css('display', 'none');	
		$('.statistik').css('display', 'block');
		$('#btnnav2').removeClass('active');
		$('#btnnav3').removeClass('active');
		$('#btnnav1').removeClass('active');
	});

	
</script>
</html>
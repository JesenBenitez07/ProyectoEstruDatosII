<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/CSS/loginform.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/jpg" href="assets/Imagenes/Logo.jpeg">
	<title>Login GD</title>  

	<html lang="en">
<?php 
session_start();
//include('./db_connect.php');
?>
<head>
  <
<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>
</head>
<body>
	<div class="box">
		<form autocomplete="off">
			<h2>Bienvenido</h2>
			<div class="inputBox">
				<input type="text" required="required">
				<span>Usuario</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required">
				<span>Contraseña</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">¿Has olvidado tu contraseña?</a>
				<a href="#">Ingresar</a>
			</div>
			<input type="submit" value="Ingresar">
		</form>
	</div>

	<script>
		$('#login-form').submit(function(e){
			e.preventDefault()
			$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
			if($(this).find('.alert-danger').length > 0 )
				$(this).find('.alert-danger').remove();
			$.ajax({
				url:'ajax.php?action=login',
				method:'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
			$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
	
				},
				success:function(resp){
					if(resp == 1){
						location.href ='index.php?page=home';
					}else{
						$('#login-form').prepend('<div class="alert alert-danger">Nombre de usuario o contraseña incorrecta.</div>')
						$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
					}
				}
			})
		})
		$('.number').on('input',function(){
			var val = $(this).val()
			val = val.replace(/[^0-9 \,]/, '');
			$(this).val(val)
		})
	</script>	
</body>
</html>
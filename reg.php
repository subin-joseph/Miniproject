<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style4.css">
    <title>Create new account</title>
		<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="stylesheet" href="main.css">
<script>
    var check = function() {
  if (document.getElementById('pass').value ==
    document.getElementById('rpass').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Password fields does not match';
  }
}
</script>
    
</head>
<body>
    <div class="imagem-fundo">
        <div class="gradient">
            <div class="conteudo">
                <div class="subconteudo">
                    <form class="formulario" name="sign_up" action="register_action.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm(this);">
					<h1 class="primeiro-texto">Sign Up</h1>
					<div class="dois-campos">
                            <div class="dois-campos-campo">
                                <input type="text" placeholder="First Name" name="first_name" id="first_name" class="input"/ required>
                                <img src="images/account_box_black_24dp.svg" alt="" class="img-input">
								<p id="fn"> </p>
						
                            </div>
                
                            <div class="dois-campos-campo">
                                <input type="text" placeholder="Last Name" name="last_name" class="input"/ required>
                                <img src="images/account_box_black_24dp.svg" alt="" class="img-input">
                            </div>
                        </div>
                        <div class="dois-campos">
                            <div class="dois-campos-campo">
                                <input type="number" placeholder="Age" name="age" class="input"/ required>
                                <img src="images/account_box_black_24dp.svg" alt="" class="img-input">
                            </div>
                
                            <div class="dois-campos-campo">
                                <select type="text" placeholder="Gender" name="gender" class="input">
								<option>Male</option>
                                <option>Female</option>
								</select>
                                <img src="images/account_box_black_24dp.svg" alt="" class="img-input">
                            </div>
                        </div>
						
						
						 <div class="campo-grande">
                            <input type="address" placeholder="Address" name="address" class="input"/ required>
                            <img src="images/email_black_24dp.svg" alt="" class="img-input">
                        </div>
						
						
                         <div class="campo-grande">
                            <input type="email" placeholder="E-mail" name="email" class="input"/ required>
                            <img src="images/email_black_24dp.svg" alt="" class="img-input">
                        </div>
						                         <div class="campo-grande">
                            <input type="text" placeholder="Username" name="username" class="input"/ required>
                            <img src="images/email_black_24dp.svg" alt="" class="img-input">
                        </div>
        
            
                        <div class="campo-grande">
                            <input type="password" placeholder="Password" name="password" id="pass" class="input"/ required>
							  <input type="password" placeholder="Retype password" name="password_repeat" onkeyup='check();'id="rpass" class="input"/ required>
                            <img src="images/lock_black_24dp.svg" alt="" class="img-input">
                        </div>
						<p id=message></p>
					
						 <div class="campo-grande">Photo&nbsp;&nbsp;
                            <input type="file" name="image"/>
                    
                        </div>
						
                        <div class="div-button">
                            <button type="submit" class="button">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
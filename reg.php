<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style4.css">
    <title>Create new account</title>
		<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="stylesheet" href="main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="form-validator.js"></script>
        <script type="text/javascript">
            var validateForm= $('form').serializeArray();

              function get(){
                  $.post('jqtest/test',{name: $('form[name="sign_up"] input[password="password"] input[email="email"]').val()},
                  function (output){
                      $('#errors').html(output).show();          
                  }    
              );
              }
        </script>
</head>
<body>
    <div class="imagem-fundo">
        <div class="gradient">
            <div class="conteudo">
                <div class="subconteudo">
                    <form class="formulario" name="sign_up" action="register_action.php" method="POST" onsubmit="return validateForm(this);">
					<h1 class="primeiro-texto">Sign Up</h1>
					<div class="dois-campos">
                            <div class="dois-campos-campo">
                                <input type="text" placeholder="First Name" name="first_name"class="input"/>
                                <img src="images/account_box_black_24dp.svg" alt="" class="img-input">
                            </div>
                
                            <div class="dois-campos-campo">
                                <input type="text" placeholder="Last Name" name="last_name" class="input"/>
                                <img src="images/account_box_black_24dp.svg" alt="" class="img-input">
                            </div>
                        </div>
                        <div class="dois-campos">
                            <div class="dois-campos-campo">
                                <input type="number" placeholder="Age" name="age" class="input"/>
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
                            <input type="address" placeholder="Address" name="address" class="input"/>
                            <img src="images/email_black_24dp.svg" alt="" class="img-input">
                        </div>
						
						
                         <div class="campo-grande">
                            <input type="email" placeholder="E-mail" name="email" class="input"/>
                            <img src="images/email_black_24dp.svg" alt="" class="img-input">
                        </div>
						                         <div class="campo-grande">
                            <input type="text" placeholder="Username" name="username" class="input"/>
                            <img src="images/email_black_24dp.svg" alt="" class="img-input">
                        </div>
        
            
                        <div class="campo-grande">
                            <input type="password" placeholder="Password" name="password" class="input"/>
                            <img src="images/lock_black_24dp.svg" alt="" class="img-input">
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
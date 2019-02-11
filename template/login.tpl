<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Ejemplo Tema 5: Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id='login'>
        <fieldset>
            <legend>Login</legend>
            <form action='login.php' method='post'>
                <div><span class='error'>{$error}</span></div>
                <div class='campo'>
                    <label>Usuario:</label><br/>
                    <input type='text' name='name' value='admin' maxlength="50" /><br/>
                </div>
                <div class='campo'>
                    <label>Contraseña:</label><br/>
                    <input type='password' name='pass' value='admin' maxlength="50" /><br/>
                </div>
                <hr/>
                <div class='campo'>
                    <input type='submit' name='enviar' value='Enviar' />
                </div>
            </form>
        </fieldset>  
    </div>
</body>
</html>
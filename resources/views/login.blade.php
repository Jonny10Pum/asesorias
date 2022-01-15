<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title >Asesorias</title>
    </head>
    <body>
    <div><h1 center>Seguimiento a los Coordinadores de Tutorias</h1></div>
     <div>
    <h2 center>iniciar sesion</h2>
    </div>
     <div center>
    <label for="nom">Correo electronico</label>
    <input type="text" name="correo_electronico" id="correo_electronico" /><br>
    <label for="nom">Contraseña</label>
    <input type="text" name="contraseña" id="contraseña" /><br>
    <input type="checkbox" name="recordarme" id="recordarme" /> <label
     for="recordarme">Recordarme</label>
    </div>
    </body>

</html>

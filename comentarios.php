<?php
include ("conex.php");
$mensaje ="";
if (isset($_POST['enviar']))
{
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$comentario = $_POST['comentario'];
	mysql_query("INSERT INTO datos(id,nombre,mail,comentario) VALUES(0,'$nombre','$mail','$comentario');");
	$mensaje = "Hecho con exito";
}
?>
<!DOCTYPE html>
<html lang="es"><head><meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>comentarios</title></head><body>Deja tu comentario<br>
<form method="post" name="form1" action="comentarios.php">
  <table border="0" align="center" cellpadding="2" cellspacing="2" style="text-align: left; width: 792px; height: 116px;">
    <tbody>
      <tr>
        <td style="vertical-align: top;">Nombre<br>
        </td>
        <td style="vertical-align: top;"><input type="text" name="nombre" required/><br>
        </td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Correo<br>
        </td>
        <td style="vertical-align: top;"><input type="email" name="mail" required/><br>
        </td>
      </tr>
      <tr>
        <td style="vertical-align: top;">Comentario<br>
        </td>
        <td style="vertical-align: top;"><textarea name="comentario"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="vertical-align: top;"><input name="enviar" value="Enviar" type="submit"></td>        
      </tr>
    </tbody>
  </table>
  <p><br>
  </p>
</form>
<?php echo $mensaje;?>
<p>Comentarios ya ingresados </p>
<table width="400" border="0">
  <tr>
    <td>Nombre</td>
    <td>Comentario</td>
  </tr>
  <?php
  $cons = mysql_query("select nombre,comentario from datos");
  while($cons2 = mysql_fetch_row($cons))
  {	  
  ?>
  <tr>
    <td><?php echo $cons2[0]; ?></td>
    <td><?php echo $cons2[1]; ?></td>
  </tr>
  <?php } ?>
  </table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
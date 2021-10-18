<?php 

include 'head.php';
$usuario="";
$clave="";
if(isset($_REQUEST['entrar']))//si has pulsado entrar
{
    if(isset ($_REQUEST['guardar_clave']))//si has pulsado guardar
    {
    setcookie('usuario', $_REQUEST["usuario"], time() + 60*5);
    setcookie('clave', $_REQUEST["clave"], time() + 60*5);
    }
}

if(isset($_COOKIE['usuario']))
{
    $clave=$_COOKIE['clave'];
    $usuario=$_COOKIE['usuario'];

}

echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="cookies_3.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario" value="'.$usuario.'" required></td>
</tr><tr>
<td>Clave:</td>
<td><input type="password" name="clave" value="'.$clave.'" required></td>
</tr><tr>

<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>
<td><input type="submit" value="Entrar" name="entrar"></td>
</tr>
</table>
</form> ';



include 'pie.php';
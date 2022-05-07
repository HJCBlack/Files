<?php
function edad($f,&$edad)
{
        $fecha= new datetime("now");
        $fecha2= new datetime("$f");
        $edad= $fecha->diff($fecha2);
}
function notmat($notas,&$nota)
{
    if(isset($_POST['enviar']))
{
    $i=0;
        foreach($_POST['materia'] as $l)
    {
        
        $nota[$l]=$notas[$i];
        $i++;
    }
}
}
$nombre=$_POST["nombre"];
$apellido=$_POST["apell"];
$fecha=$_POST["fecha"];
$calle=$_POST["calle"];
$altura=$_POST["altura"];
$sexo=$_POST["sexo"];
$notas[]=$_POST['not1'];
$notas[]=$_POST['not2'];
$notas[]=$_POST['not3'];
$notas[]=$_POST['not4'];
$notas[]=$_POST['not5'];

edad($fecha,$edad);
$año=$edad->y;
notmat($notas,$nota);
echo $apellido.", ".$nombre."<br><br>".$fecha." Edad ".$año."<br><br>".$calle." ".$altura."<br><br>".$sexo."<br><br>MATERIAS: ";
if(isset($_POST['enviar']))
{
        if(!empty($_POST['materia']))
    {
        foreach($_POST['materia'] as $l)
    {
        echo $l.", ";
        $notasf[]=$nota[$l];
    }
    }
}
for($i=0;$i<count($notasf);$i++)
{
    $suma=$suma + $notasf[$i];
}
$promedio=$suma / count($notasf);
echo " PROMEDIO=".$promedio;
?>
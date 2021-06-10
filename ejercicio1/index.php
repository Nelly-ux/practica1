<?php
include('Autoload.php')
//include('Controller/User.Controller.php');
//include('Controller/Inventario.Controller.php');

if (isset($_GET['class'])&&isset($_GET['method']))
{
    $class=$_GET['class'];
    $method=$_GET['methodd'];

}
else 
{
    $class="Home";
    $method="inicio";
}

//echo $class."---".$method."<br/>";

if(class_exists($ckass)&& method_exists(class,method))
{
    $c=new $class();
    $c->$method();
}
else
{
echo "claseo metodo no existe";
}



?>
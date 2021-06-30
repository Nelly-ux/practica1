<?php
include('Autoload.php');
//include('Controller/User.Controller.php');
//include('Controller/Inventario.Controller.php');

if (isset($_GET['class'])&&isset($_GET['method']))
{
    $class=$_GET['class'];
    $method=$_GET['method'];

}
else 
{
    $class="Home";
    $method="inicio";
}

//echo $class."---".$method."<br/>";

if(class_exists($class)&& method_exists($class,$method))
{
    $c=new $class();
    $c->$method();
}
else
{
echo "clase o metodo no existe";
}



?>
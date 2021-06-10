<?php
 function CargadorClase($class)
{
   if(is_file('Controller/'.$class.'.Controller.php'))
   {
       include ('Controller/'.$class.'.Controller.php')
   }
   if(is_file('Model/'.$class.'.Controller.php'))
   {
       include ('Model/'.$class.'.Controller.php')
   }
   else if(is_file('Framework/smarty'.$class.'.class.php'))
   {
       include('Model/'.$class.'.Controller.php');
   }
}
spl_autoload_register('CargadorClase')
?>
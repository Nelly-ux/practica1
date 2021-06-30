<?php
Class Home
{
    public function Inicio()
    {
        

       $smarty= new Smarty();

       $vec=array();
       $vec=[ 
        ['nombre'=>'Carlos', 'pass'=>'123'],
        ['nombre'=>'Andrea', 'pass'=>'456'],
        ['nombre'=>'Silvia', 'pass'=>'789'],
        ['nombre'=>'Marvin', 'pass'=>'321'],
        ['nombre'=>'Roberto', 'pass'=>'654'],
        ['nombre'=>'Samada', 'pass'=>'987']
       ];

      // var_dump($vec);

       $smarty->assign('datos',$vec);
       $smarty->assign('nombre','otra pagina');
       $smarty->display('Home.tpl');
    }
}

?>
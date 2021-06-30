<?php

Class User
{
    public Function Login ()
    {
        $user=$_POST['nombre'];
        $pass=$_POST['pass'];

        echo $user."--".$pass;
    }

    public Function Update ()
    {
        echo "en update";
    }

    public Function Delet ()
    {
        echo "en delet";
    }
}

?>
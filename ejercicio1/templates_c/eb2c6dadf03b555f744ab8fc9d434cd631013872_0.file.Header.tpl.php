<?php
/* Smarty version 3.1.39, created on 2021-06-30 03:40:35
  from 'C:\xampp\htdocs\practica1\ejercicio1\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dbcb93494df1_16172170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2c6dadf03b555f744ab8fc9d434cd631013872' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practica1\\ejercicio1\\templates\\Cabeceras\\Header.tpl',
      1 => 1625017233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dbcb93494df1_16172170 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
   <title>
    <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

    <?php } else { ?>
    Home
    <?php }?>
    </title>
   
    </head>

  
    <body>

    <div class="container">

        <?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-06-30 09:22:46
  from 'C:\xampp\htdocs\practica1\ejercicio1\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dc1bc658d064_30555256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b7dc58592087e2405ee892697c83dc625866f25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\practica1\\ejercicio1\\templates\\Home.tpl',
      1 => 1625037757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60dc1bc658d064_30555256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>hola 5to diver</h1>

<!--
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
<p> <?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
...<?php echo $_smarty_tpl->tpl_vars['d']->value['pass'];?>
 </p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="container">
 <table>
  <tr>
   <td>NOMBRE</td>
   <td>PASS</td>
  </tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
  
  <tr>
   <td><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['d']->value['pass'];?>
</td>
  </tr>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 </table>
</div>
-->


<div class="container">
<form method="post" action="?class=user&method=login">
  <div class="row">
    <div class="input-field col s6">
      <input name="nombre" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Nombre</label>
    </div>

    <div class="input-field col s6">
    <input name="pass" id="first_name3" type="password" class="validate">
      <label class="active" for="first_name3">Pass</label>
      </div>
    </div>

    <div>
     <input type="submit" value="Enviar">
    </div>
</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

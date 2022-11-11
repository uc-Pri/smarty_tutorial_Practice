<?php
/* Smarty version 3.1.45, created on 2022-11-08 13:11:04
  from 'C:\xampp\htdocs\smarty_php\mycode\templates\mytemplates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_636a4758da3ee9_48382466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73795dc811d1462d7c75e0fbd5394471e68f564b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_php\\mycode\\templates\\mytemplates.tpl',
      1 => 1667909461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a4758da3ee9_48382466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty_php\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>
<html>
  <head>
    <title>Info</title>
  </head>

  <style>
    .Name {
      color: red;
      font-size: 1rem;
    }
    .Name:hover {
      margin-top: 0;
      padding: 0;
      scale: 0.9;
      text-align: center;
      color: green;
    }
  </style>

  <body>
    <pre>
        <div class="Name">
User Information:
Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>


<!-- comment -->

<!-- Custom fucntions -->
<?php echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />

<!-- FUNCTIONS, ARRAYS,LOOPS -->
<?php $_smarty_tpl->_assignInScope('foo', array(1,2,3));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
echo $_smarty_tpl->tpl_vars['f']->value;?>
<br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('colors', array('red','blue','green','purple'));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colors']->value, 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
echo $_smarty_tpl->tpl_vars['color']->value;?>
<br>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<!-- ATTRUBUTES -->

<?php $_smarty_tpl->_assignInScope('foo1', substr($_smarty_tpl->tpl_vars['bar']->value,2,5));?>

<?php echo $_smarty_tpl->tpl_vars['foo1']->value;?>




<!-- Math -->
<?php echo $_smarty_tpl->tpl_vars['a']->value->bar-$_smarty_tpl->tpl_vars['b']->value[1]*$_smarty_tpl->tpl_vars['c']->value->a->bar()-3*7;?>
 



</div>
</pre>
  </body>
</html>
<?php }
}

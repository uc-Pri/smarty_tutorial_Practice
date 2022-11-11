<?php
/* Smarty version 3.1.45, created on 2022-11-09 13:13:07
  from 'C:\xampp\htdocs\smarty_php\mycode\templates\child.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_636b99537d5760_45901817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '283abb4eaba2d9a5b0b23bee4f5a02969d355b4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_php\\mycode\\templates\\child.tpl',
      1 => 1667995985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b99537d5760_45901817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1964540473636b99537d4d66_55648582', "title");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates.tpl");
}
/* {block "title"} */
class Block_1964540473636b99537d4d66_55648582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1964540473636b99537d4d66_55648582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Page Title
<?php
}
}
/* {/block "title"} */
}

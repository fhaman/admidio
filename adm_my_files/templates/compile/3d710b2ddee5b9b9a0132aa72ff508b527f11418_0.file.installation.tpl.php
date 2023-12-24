<?php
/* Smarty version 4.3.1, created on 2023-11-29 19:56:48
  from '/var/www/html/admidio/adm_program/installation/templates/installation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6567897050f1b3_69007928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d710b2ddee5b9b9a0132aa72ff508b527f11418' => 
    array (
      0 => '/var/www/html/admidio/adm_program/installation/templates/installation.tpl',
      1 => 1701284071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6567897050f1b3_69007928 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="installation-dialog">
    <h3><?php echo $_smarty_tpl->tpl_vars['subHeadline']->value;?>
</h3>

    <p><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>

    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
</div>
<?php }
}

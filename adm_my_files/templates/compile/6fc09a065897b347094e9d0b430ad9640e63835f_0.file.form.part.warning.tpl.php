<?php
/* Smarty version 4.3.1, created on 2023-11-29 19:56:53
  from '/var/www/html/admidio/adm_program/installation/templates/sys-template-parts/parts/form.part.warning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6567897513ad57_09659922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc09a065897b347094e9d0b430ad9640e63835f' => 
    array (
      0 => '/var/www/html/admidio/adm_program/installation/templates/sys-template-parts/parts/form.part.warning.tpl',
      1 => 1701284071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6567897513ad57_09659922 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['alertWarning']->value) {?>
    <div class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i><?php echo $_smarty_tpl->tpl_vars['alertWarning']->value;?>

    </div>
<?php }
}
}

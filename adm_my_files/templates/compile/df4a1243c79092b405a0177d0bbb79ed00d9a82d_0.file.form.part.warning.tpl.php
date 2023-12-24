<?php
/* Smarty version 4.3.1, created on 2023-11-29 20:49:39
  from '/var/www/html/admidio/adm_themes/kemit/templates/sys-template-parts/parts/form.part.warning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656795d3804b73_24880909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4a1243c79092b405a0177d0bbb79ed00d9a82d' => 
    array (
      0 => '/var/www/html/admidio/adm_themes/kemit/templates/sys-template-parts/parts/form.part.warning.tpl',
      1 => 1701287315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656795d3804b73_24880909 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['alertWarning']->value) {?>
    <div class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i><?php echo $_smarty_tpl->tpl_vars['alertWarning']->value;?>

    </div>
<?php }
}
}

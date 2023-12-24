<?php
/* Smarty version 4.3.1, created on 2023-11-29 19:58:31
  from '/var/www/html/admidio/adm_themes/simple/templates/sys-template-parts/parts/form.part.warning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656789d72d4751_13941345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6748663cdfbcf5b5966b2dcc9e9b7b1fe6285dc6' => 
    array (
      0 => '/var/www/html/admidio/adm_themes/simple/templates/sys-template-parts/parts/form.part.warning.tpl',
      1 => 1701284071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656789d72d4751_13941345 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['alertWarning']->value) {?>
    <div class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i><?php echo $_smarty_tpl->tpl_vars['alertWarning']->value;?>

    </div>
<?php }
}
}

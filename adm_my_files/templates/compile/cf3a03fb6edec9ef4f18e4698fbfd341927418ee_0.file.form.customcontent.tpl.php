<?php
/* Smarty version 4.3.1, created on 2023-11-29 20:32:42
  from '/var/www/html/admidio/adm_themes/simple/templates/sys-template-parts/form.customcontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656791dac2b951_43949358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3a03fb6edec9ef4f18e4698fbfd341927418ee' => 
    array (
      0 => '/var/www/html/admidio/adm_themes/simple/templates/sys-template-parts/form.customcontent.tpl',
      1 => 1701284071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sys-template-parts/parts/form.part.icon.tpl' => 1,
    'file:sys-template-parts/parts/form.part.iconhelp.tpl' => 1,
    'file:sys-template-parts/parts/form.part.helptext.tpl' => 1,
    'file:sys-template-parts/parts/form.part.warning.tpl' => 1,
  ),
),false)) {
function content_656791dac2b951_43949358 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group form-custom-content  row">
    <div class="offset-sm-3 col-sm-9">
        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <b><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</b>
        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.iconhelp.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.helptext.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.warning.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}

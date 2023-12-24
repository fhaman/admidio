<?php
/* Smarty version 4.3.1, created on 2023-12-01 16:20:10
  from '/var/www/html/admidio/adm_themes/kemit/templates/sys-template-parts/form.customcontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6569f9aa3997b9_33450964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea8de7b4f5c91b7379df9c9da7774554cf0e792' => 
    array (
      0 => '/var/www/html/admidio/adm_themes/kemit/templates/sys-template-parts/form.customcontent.tpl',
      1 => 1701287315,
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
function content_6569f9aa3997b9_33450964 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php
/* Smarty version 4.3.1, created on 2023-11-29 19:56:53
  from '/var/www/html/admidio/adm_program/installation/templates/sys-template-parts/parts/form.part.iconhelp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65678975132054_52179046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '921c9967583aad530984a4f59abc38dba26736e0' => 
    array (
      0 => '/var/www/html/admidio/adm_program/installation/templates/sys-template-parts/parts/form.part.iconhelp.tpl',
      1 => 1701284071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65678975132054_52179046 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['helpTextIdLabel']->value) {?>
    <?php if (Language::isTranslationStringId($_smarty_tpl->tpl_vars['helpTextIdLabel']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('helpTextIdLabel', $_smarty_tpl->tpl_vars['l10n']->value->get($_smarty_tpl->tpl_vars['helpTextIdLabel']->value));?>
    <?php }?>
    <i class="fas fa-info-circle admidio-info-icon" data-toggle="popover"
    data-html="true" data-trigger="hover click" data-placement="auto"
    title="<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_NOTE');?>
" data-content="<?php echo SecurityUtils::encodeHTML($_smarty_tpl->tpl_vars['helpTextIdLabel']->value);?>
"></i>
<?php }
}
}

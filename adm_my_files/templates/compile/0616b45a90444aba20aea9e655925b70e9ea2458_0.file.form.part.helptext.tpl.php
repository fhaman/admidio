<?php
/* Smarty version 4.3.1, created on 2023-11-29 19:56:53
  from '/var/www/html/admidio/adm_program/installation/templates/sys-template-parts/parts/form.part.helptext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65678975139c10_05506793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0616b45a90444aba20aea9e655925b70e9ea2458' => 
    array (
      0 => '/var/www/html/admidio/adm_program/installation/templates/sys-template-parts/parts/form.part.helptext.tpl',
      1 => 1701284071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65678975139c10_05506793 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['helpTextIdInline']->value) {?>
    <?php if (is_array($_smarty_tpl->tpl_vars['helpTextIdInline']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('helpTextIdInline', $_smarty_tpl->tpl_vars['l10n']->value->get($_smarty_tpl->tpl_vars['helpTextIdInline']->value[0],$_smarty_tpl->tpl_vars['helpTextIdInline']->value[1]));?>
    <?php } else { ?>
        <?php if (Language::isTranslationStringId($_smarty_tpl->tpl_vars['helpTextIdInline']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('helpTextIdInline', $_smarty_tpl->tpl_vars['l10n']->value->get($_smarty_tpl->tpl_vars['helpTextIdInline']->value));?>
        <?php }?>
    <?php }?>
    <div class="help-block"><?php echo $_smarty_tpl->tpl_vars['helpTextIdInline']->value;?>
</div>
<?php }
}
}

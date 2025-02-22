<?php
/* Smarty version 4.3.1, created on 2023-11-29 19:58:17
  from '/var/www/html/admidio/adm_program/installation/templates/installation_successful.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656789c9e155f3_14479809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b86700e396e4f08b4eda7714d11ed59eea4bea' => 
    array (
      0 => '/var/www/html/admidio/adm_program/installation/templates/installation_successful.tpl',
      1 => 1701284071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656789c9e155f3_14479809 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="installation-message">
    <h3><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_INSTALLATION_SUCCESSFUL");?>
</h3>

    <div class="alert alert-success form-alert">
        <i class="fas fa-check"></i>
        <strong><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_INSTALLATION_SUCCESSFUL_SHORT_DESC');?>
</strong>
    </div>

    <p>
        <?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_INSTALLATION_SUCCESSFUL_DESC');?>
<br /><br />
        <?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('INS_SUPPORT_FURTHER_DEVELOPMENT');?>

    </p>

    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
</div>
<?php }
}

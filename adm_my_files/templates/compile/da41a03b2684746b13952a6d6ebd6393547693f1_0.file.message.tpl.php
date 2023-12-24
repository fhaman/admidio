<?php
/* Smarty version 4.3.1, created on 2023-12-01 21:24:10
  from '/var/www/html/admidio/adm_themes/kemit/templates/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656a40ead016a2_30300397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da41a03b2684746b13952a6d6ebd6393547693f1' => 
    array (
      0 => '/var/www/html/admidio/adm_themes/kemit/templates/message.tpl',
      1 => 1701287315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656a40ead016a2_30300397 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="message">
    <p class="lead"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>

    <?php if ($_smarty_tpl->tpl_vars['forwardUrl']->value != '') {?>
        <?php if ($_smarty_tpl->tpl_vars['showYesNoButtons']->value) {?>
            <button id="admButtonYes" class="btn btn-primary" type="button" onclick="self.location.href='<?php echo $_smarty_tpl->tpl_vars['forwardUrl']->value;?>
'">
                <i class="fas fa-check-circle"></i>
                &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_YES");?>
&nbsp;&nbsp;&nbsp;
            </button>
            <button id="admButtonNo" class="btn btn-secondary" type="button" onclick="history.back()">
                <i class="fas fa-minus-circle"></i>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_NO");?>

            </button>
        <?php } else { ?>
                        <button class="btn btn-primary admidio-margin-bottom" onclick="self.location.href='<?php echo $_smarty_tpl->tpl_vars['forwardUrl']->value;?>
'"><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_NEXT");?>

                <i class="fas fa-arrow-circle-right"></i>
            </button>
        <?php }?>
    <?php } else { ?>
                <button class="btn btn-primary admidio-margin-bottom" onclick="history.back()">
            <i class="fas fa-arrow-circle-left"></i>
            <?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_BACK");?>

        </button>
    <?php }?>
</div>
<?php }
}

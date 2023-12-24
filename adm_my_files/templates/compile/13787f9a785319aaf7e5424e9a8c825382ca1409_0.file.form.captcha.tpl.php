<?php
/* Smarty version 4.3.1, created on 2023-12-04 18:07:34
  from '/var/www/html/admidio/adm_themes/kemit/templates/sys-template-parts/form.captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656e0756a265e5_39178400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13787f9a785319aaf7e5424e9a8c825382ca1409' => 
    array (
      0 => '/var/www/html/admidio/adm_themes/kemit/templates/sys-template-parts/form.captcha.tpl',
      1 => 1701287315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656e0756a265e5_39178400 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="captcha_puzzle_group" class="form-group captcha row">
    <div class="offset-sm-3 col-sm-9">
        <img id="captcha"
            src="<?php echo $_smarty_tpl->tpl_vars['ADMIDIO_URL']->value;
echo $_smarty_tpl->tpl_vars['FOLDER_LIBS_SERVER']->value;?>
/dapphp/securimage/securimage_show.php"
            alt="CAPTCHA Image" />
        <a class="admidio-icon-link" href="javascript:void(0)"
            onclick="document.getElementById('captcha').src='<?php echo $_smarty_tpl->tpl_vars['ADMIDIO_URL']->value;
echo $_smarty_tpl->tpl_vars['FOLDER_LIBS_SERVER']->value;?>
/dapphp/securimage/securimage_show.php?'
            + Math.random(); return false;">
            <i class="fas fa-sync-alt fa-lg" data-toggle="tooltip"
                title="<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_RELOAD');?>
"></i>
        </a>
    </div>
</div><?php }
}

<?php
/* Smarty version 4.3.1, created on 2023-11-29 20:49:20
  from '/var/www/html/admidio/adm_themes/kemit/templates/cookie_note.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656795c0cacb51_09415300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbf2e36c45b3e22edf3a80c379d4f9f814312850' => 
    array (
      0 => '/var/www/html/admidio/adm_themes/kemit/templates/cookie_note.tpl',
      1 => 1701287315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656795c0cacb51_09415300 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['urlAdmidio']->value;?>
/adm_program/libs/client/cookieconsent/cookieconsent.min.css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['urlAdmidio']->value;?>
/adm_program/libs/client/cookieconsent/cookieconsent.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    window.addEventListener("load", function() {
        window.cookieconsent.initialise({
            "cookie": {
                "name": "<?php echo $_smarty_tpl->tpl_vars['cookiePrefix']->value;?>
_cookieconsent_status",
                "domain": "<?php echo $_smarty_tpl->tpl_vars['cookieDomain']->value;?>
",
                "path": "<?php echo $_smarty_tpl->tpl_vars['cookiePath']->value;?>
"
            },
            "content": {
                "message": "<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_COOKIE_DESC');?>
",
                "dismiss": "<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_OK');?>
",
                <?php echo $_smarty_tpl->tpl_vars['cookieDataProtectionUrl']->value;?>

                "link": "<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_FURTHER_INFORMATIONS');?>
"
            },
            "position": "bottom",
            "theme": "classic",
            "palette": {
                "popup": {
                    "background": "#252e39"
                },
                "button": {
                    "background": "#409099"
                }
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}

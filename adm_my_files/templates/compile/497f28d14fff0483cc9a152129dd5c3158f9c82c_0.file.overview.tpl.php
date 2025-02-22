<?php
/* Smarty version 4.3.1, created on 2023-11-29 20:49:20
  from '/var/www/html/admidio/adm_themes/kemit/templates/overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656795c0d2c971_20010830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '497f28d14fff0483cc9a152129dd5c3158f9c82c' => 
    array (
      0 => '/var/www/html/admidio/adm_themes/kemit/templates/overview.tpl',
      1 => 1701287315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656795c0d2c971_20010830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/admidio/adm_program/system/smarty-plugins/function.load_admidio_plugin.php','function'=>'smarty_function_load_admidio_plugin',),));
?>

<div class="row mb-5">
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-login-form">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"login_form",'file'=>"login_form.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-birthday">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"birthday",'file'=>"birthday.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-calendar">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"calendar",'file'=>"calendar.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-random-photo">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"random_photo",'file'=>"random_photo.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-latest-documents-files">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"latest-documents-files",'file'=>"latest-documents-files.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-sidebar-announcements">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"sidebar_announcements",'file'=>"sidebar_announcements.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-sidebar-dates">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"sidebar_dates",'file'=>"sidebar_dates.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="admidio-overview-plugin col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-sidebar-online">
        <div class="card admidio-card">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"sidebar_online",'file'=>"sidebar_online.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
</div>
<?php }
}

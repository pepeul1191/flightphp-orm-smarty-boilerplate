<?php
/* Smarty version 3.1.31, created on 2017-04-24 20:20:14
  from "/home/pepe/Documentos/php/accesos/app/templates/layouts/blank.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fea44e798b15_84642910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45046ab186f0543a14c676e7cbb489144d57cad5' => 
    array (
      0 => '/home/pepe/Documentos/php/accesos/app/templates/layouts/blank.tpl',
      1 => 1490845392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fea44e798b15_84642910 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Ecore Trading SAC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inicio CSS -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
    <link rel="stylesheet" type="text/css" href="<?php echo Configuration::get('base_url');?>
public/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Configuration::get('base_url');?>
public/bower_components/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Configuration::get('base_url');?>
public/assets/site/css/styles.css" />
    <!-- Fin CSS -->
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['partial']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!-- Inicio JS-->
    <?php echo '<script'; ?>
 src="<?php echo Configuration::get('base_url');?>
public/bower_components/jquery/dist/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo Configuration::get('base_url');?>
public/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- Fin JS-->
</body>
</html><?php }
}

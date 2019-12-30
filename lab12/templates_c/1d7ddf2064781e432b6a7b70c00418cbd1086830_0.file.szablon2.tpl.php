<?php
/* Smarty version 3.1.34-dev-7, created on 2019-05-21 12:29:28
  from '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ce3d3088663c1_03930200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d7ddf2064781e432b6a7b70c00418cbd1086830' => 
    array (
      0 => '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon2.tpl',
      1 => 1558434557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce3d3088663c1_03930200 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Owoce</title>
</head>
<body>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dane']->value, 'owoce');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['owoce']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['owoce']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2019-05-21 12:51:12
  from '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ce3d8204664e7_70411154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3060bb9eb6265d9705e8634cd13fa756c3c12d4' => 
    array (
      0 => '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon3.tpl',
      1 => 1558435866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce3d8204664e7_70411154 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Irregular verbs</title>
</head>
<body>
<table>
    <?php
$__section_n_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['irr_verbs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_0_total = $__section_n_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_0_total !== 0) {
for ($__section_n_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_0_iteration <= $__section_n_0_total; $__section_n_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['irr_verbs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][0];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['irr_verbs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][1];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['irr_verbs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][2];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['irr_verbs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][3];?>
</td>
        </tr>

    <?php
}
}
?>
</table>
</body>
</html><?php }
}

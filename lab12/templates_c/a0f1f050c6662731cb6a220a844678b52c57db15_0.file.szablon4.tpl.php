<?php
/* Smarty version 3.1.34-dev-7, created on 2019-05-21 14:03:41
  from '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ce3e91d1e4406_88271113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0f1f050c6662731cb6a220a844678b52c57db15' => 
    array (
      0 => '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon4.tpl',
      1 => 1558440215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce3e91d1e4406_88271113 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Wyniki</title>
    <link rel="stylesheet" type="text/css" href="./templates/style.css">
</head>
<body>

<table>

    <?php
$__section_n_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wyniki']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_0_total = $__section_n_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_0_total !== 0) {
for ($__section_n_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_0_iteration <= $__section_n_0_total; $__section_n_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>

        <?php if ($_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][4] > $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][5]) {?>
            <tr class="wygrana_gospodarza">
                <?php } elseif ($_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][4] < $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][5]) {?>
            <tr class="wygrana_przyjezdną">
                <?php } else { ?>
            <tr class="zremisowane">
        <?php }?>

        <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][0];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][1];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][2];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][3];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][4];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)][5];?>
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

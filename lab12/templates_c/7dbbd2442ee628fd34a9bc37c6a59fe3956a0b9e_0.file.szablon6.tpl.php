<?php
/* Smarty version 3.1.34-dev-7, created on 2019-05-25 08:30:30
  from '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ce8e106731037_43687223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dbbd2442ee628fd34a9bc37c6a59fe3956a0b9e' => 
    array (
      0 => '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon6.tpl',
      1 => 1558765821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce8e106731037_43687223 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Marki</title>
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

        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['marka'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['model'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['rocznik'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['kolor'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['wyniki']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['stan'];?>
</td>
        </tr>

    <?php
}
}
?>

</table>

</body>
</html>
<?php }
}

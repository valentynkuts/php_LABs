<?php
/* Smarty version 3.1.34-dev-7, created on 2019-05-25 08:36:24
  from '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ce8e2686ce083_36723465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a90690ecb570abf82bffb1f02ceb075d47a5822' => 
    array (
      0 => '/home/valentine/PhpstormProjects/untitled/lab12/templates/szablon5.tpl',
      1 => 1558766178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce8e2686ce083_36723465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/valentine/PhpstormProjects/untitled/lab12/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<html>
<head>
    <title>Marki</title>
</head>
<body>
<form action="szablon5.php" method="post">
    <?php echo smarty_function_html_options(array('name'=>'marka','values'=>$_smarty_tpl->tpl_vars['marki_values']->value,'options'=>$_smarty_tpl->tpl_vars['marki_options']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

     <input type="submit" name="submit" value="submit">
</form>

<?php if (isset($_smarty_tpl->tpl_vars['wyniki']->value)) {?>
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
<?php }?>
</body>
</html>
<?php }
}

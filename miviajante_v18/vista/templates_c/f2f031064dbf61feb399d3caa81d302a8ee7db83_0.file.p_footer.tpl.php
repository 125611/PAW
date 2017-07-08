<?php
/* Smarty version 3.1.30, created on 2017-06-22 18:35:52
  from "C:\xampp\htdocs\miviajante_v14\vista\templates\p_footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594c3838b50890_10581388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f031064dbf61feb399d3caa81d302a8ee7db83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miviajante_v14\\vista\\templates\\p_footer.tpl',
      1 => 1498167347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594c3838b50890_10581388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer 
        <?php if (!isset($_smarty_tpl->tpl_vars['isLogueado']->value) || ($_smarty_tpl->tpl_vars['isLogueado']->value != "true")) {?>
            style="display:none"
        <?php }?>>
    <article class="izquierda">
      <p>aca va el formulario de contacto (nombre) (email) (consulta) </p>
    </article>
    <article class="derecha">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104724.61391995888!2d-60.09539424297538!3d-34.89028021397612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bea530dce5dd93%3A0x5ae63a20a06f4b77!2sChivilcoy%2C+Buenos+Aires%2C+Argentina!5e0!3m2!1ses!2ses!4v1497999786131"  frameborder="0" style="border:0" allowfullscreen></iframe>
    </article>
</footer><?php }
}

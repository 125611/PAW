<?php
/* Smarty version 3.1.30, created on 2017-08-31 15:28:18
  from "C:\xampp\htdocs\PAW\miviajante_v24\vista\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a85542aeee80_12211469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277d06bef985eb2c0294290eb640a5dbaa579189' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\miviajante_v24\\vista\\templates\\contacto.tpl',
      1 => 1503886834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:p_layout.tpl' => 1,
  ),
),false)) {
function content_59a85542aeee80_12211469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925659a85542aebf82_26934897', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:p_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_1925659a85542aebf82_26934897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
<section class="cuerpo contactoBody" <?php if (!isset($_smarty_tpl->tpl_vars['isLogueado']->value) || ($_smarty_tpl->tpl_vars['isLogueado']->value != "true")) {?>
            style="display:none"
        <?php }?>>
    <article class="izquierda">
     <h2><span>Contactanos:</span></h2>
      <form class="formulario" action="#" method="post">
                <ul>                                    
                    <li>
                        <label for="nombre">Ingrese su Nombre: (*)</label>
                        <input class="in" type="text" name="nombre" placeholder="Nombre" required>
                    </li>
                    <li>
                        <label for="email">Ingrese su Email: (*)</label>
                        <input class="in" type="email" name="email" placeholder="Email" required>
                    </li>
                    <li>
                        <label for="detalle">Ingrese su Consulta: (*)</label>
                        <textarea class="in" id="area_texto"  name="detalle" placeholder="Consulta" required></textarea>
                    </li>
                    <li>
                        <input class="boton" type="submit" value="Enviar">
                        <p id="aclaracion">(*) Campo requerido.<p>
                    </li>
                </ul>
            </form>
    </article>
    <article class="derecha">
       <h2><span>Nuestra ubicación:</span></h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104724.61391995888!2d-60.09539424297538!3d-34.89028021397612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bea530dce5dd93%3A0x5ae63a20a06f4b77!2sChivilcoy%2C+Buenos+Aires%2C+Argentina!5e0!3m2!1ses!2ses!4v1497999786131"  frameborder="0" style="border:0" allowfullscreen></iframe>
    </article>
</section>
<?php
}
}
/* {/block 'body'} */
}

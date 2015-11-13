<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 16:24:09
         compiled from "C:/wamp/www/glight/templates\registrar_parque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912656460099534b30-08746360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b27dccabdfbace29689a9017f953b37f1504520' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\registrar_parque.tpl',
      1 => 1447428245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912656460099534b30-08746360',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrar_parque.php?option=registrar" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
                <td>
                    <center><b>Registrar parque</b></center><br/><br/>
                    <b>Ingrese el codigo:</b> <input type="text" name="codigo"/> <br/>

                    <b>Ingrese el nombre:</b> <input type="text" name="nombre"/> <br/>
                
                    <b>Ingrese el municipio:</b> 
                    <select name="municipio">
                        <option value=""></option>
                        <option value="medellin">Medellin</option> 
                        <option value="rionegro">Rionegro</option> 
                        <option value="laestrella">La Estrella</option> 
                        <option value="copacabana">Copacabana</option> 
                        <option value="guatape">Guatape</option> 
                    </select><br/>
                    <b>Ingrese el nivel:</b> 
                    <select name="nivel">
                        <option value=""></option>
                        <option value="alto">alto</option> 
                        <option value="bajo">bajo</option> 
                    </select><br/>

                    <input class="btn btn-primary" type="submit" value="Registrar"/>
                </td>
            </tr>
        </table>
    </form>
</div>
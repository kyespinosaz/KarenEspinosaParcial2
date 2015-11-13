<div class="square">
    <form action="{$gvar.l_global}registrar_parque.php?option=registrar" method="post">
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
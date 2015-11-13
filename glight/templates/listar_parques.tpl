<table border="0" width="100%" cellpadding="0" cellspacing="10">
	<tr><td><b>LISTA DE PARQUES</b></td></tr>
	{section loop=$parque name=i}
		<tr>
			<td><b>Codigo:</b> {$parque[i]->get('codigo')}<br/>
				<b>Nombre:</b> {$parque[i]->get('nombre')}<br/>
				<b>Municipio:</b> {$parque[i]->get('municipio')}
    		</td>
    	</tr>
	{/section}
</table>
<html>
<head>
	<title>PERSONAL</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('templates/css/style_campos.css');?>">
	<link href="<?= base_url('templates/css/cssbotones.css');?>" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="<?= base_url('templates/css/ico_menu.css');?>"/>
</head>
<body>
<!--poner titulo del registro-->
<form name="frmpersonal" action="" method="post" style="margin-bottom:30px;">
	<fieldset class="fldcuerpo" align="left" >
		<legend>Datos Personales</legend>
		<center>
		<table width="540px">
			<tr>
				<td width="180px"><label class="lblname">Carnet de Identidad</label></td>
				<td width="180px"><label class="lblname">Expedido en</label></td>
				<td width="180px"><label class="lblname">Fecha de Nacimiento</label></td>
			</tr>
			<tr>
				<td width="180px"><input type="text" name="ci" class="txtfields" placeholder="Nro. de Documento" focus></td>
				<td width="180px">
					<select name="expedido" class="txtfields">
						<option value="LP">LP</option>
						<option value="OR">OR</option>
						<option value="CBBA">CBBA</option>
						<option value="PT">PT</option>				
						<option value="TJ">TJ</option>
						<option value="BN">BN</option>
						<option value="CH">CH</option>
						<option value="SCZ">SCZ</option>
						<option value="PA">PA</option>
					</select>
				</td>
				<td width="180px"><input type="date" name="nacimiento" class="txtfields" placeholder="dd/mm/aaaa"></td>
			</tr>
			<tr>
				<td width="180px"><label class="lblname">Nombre(s)</label></td>
				<td width="180px"><label class="lblname">Apellido Paterno</label></td>
				<td width="180px"><label class="lblname">Apellido Materno</label></td>
			</tr>
			<tr>
				<td width="180px"><input type="text" name="nombre" class="txtfields" placeholder="Nombre(s)"></td>
				<td width="180px"><input type="text" name="paterno" class="txtfields" placeholder="Ap. Paterno"></td>
				<td width="180px"><input type="text" name="materno" class="txtfields" placeholder="Ap. Materno"></td>
			</tr>
			<tr>
				<td width="180px"><label class="lblname">Apellido Casada</label></td>
				<td width="180px"><label class="lblname">Género</label></td>
				<td width="180px"><label class="lblname">Estado Civil</label></td>
			</tr>
			<tr>
				<td width="180px"><input type="text" name="casada" class="txtfields" placeholder="Ap. Casada"></td>
				<td width="180px">
					<select name="genero" class="txtfields">
						<option value="MASCULINO">MASCULINO</option>
						<option value="FEMENINO">FEMENINO</option>
						<option value="OTRO">OTRO</option>
					</select>
				</td>
				<td width="180px">
					<select name="ecivil" class="txtfields">
						<option value="CASADO(A)">CASADO(A)</option>
						<option value="SOLTERO(A)">SOLTERO(A)</option>
						<option value="CONCUBINO(A)">CONCUBINO(A)</option>
						<option value="DIVORCIADOs(A)">DIVORCIADO(A)</option>
						<option value="VIUDO(A)">VIUDO(A)</option>
					</select>
				</td>
			</tr>
		</table>
		</center>
	</fieldset>
	<fieldset class="fldcuerpo" align="left">
		<legend align="left">Datos Generales</legend>
		<center>
		<table>
			<tr>
				<td><label width="180px" class="lblname">Profesión</label></td>
				<td><label width="180px" class="lblname">Cargo</label></td>
				<td><label width="180px" class="lblname">Estado</label></td>
			</tr>
			<tr>
				<td width="180px">
				<select name="profesion" class="txtfields">
					<option value="Abogado" style="text-size: 12px;">ABOGADO</option>
					<option value="Auditor"style="text-size: 12px;">ARQUITECTO</option>
					<option value="Doctor" style="text-size: 12px;">DOCTOR</option>
					<option value="Contador" style="text-size: 12px;">CONTADOR</option>
					<option value="IngSistemas" style="text-size: 12px;">INGENIERO EN SISTEMAS</option>
					<option value="Informatico" style="text-size: 12px;">INFORMATICO</option>
					<option value="IngComercial" style="text-size: 12px;">INGENIERO COMERCIAL</option>
					<option value="Licenciado" style="text-size: 12px;">LICENCIADO</option>
					<option value="Tecnico" style="text-size: 12px;">TECNICO</option>										
				</select>
				</td>
				<td width="180px">
					<select name="cargo" class="txtfields">
						<option value="abogadoadm">ABOGADO ADMINISTRATIVO</option>
						<option value="admfinanciero">ADMINISTRADOR(A) FINANCIERO</option>
						<option value="encargadoaportes">ENCARGADO(A) DE APORTES</option>
						<option value="encenlace">ENCARGADO(A) ENLACE JURIDICO</option>
						<option value="encGeneral">ENCARGADO(A) GENERAL</option>
						<option value="encMinutacion">ENCARGADO(A) MINUTACION</option>
						<option value="encSistemas">ENCARGADO(A) DE SISTEMAS</option>
						<option value="tecAdm">TECNICO ADMINISTRATIVO</option>
						<option value="tecApo">TECNICO APORTES</option>
						<option value="tecJur">TECNICO JURIDICO</option>
						<option value="tecMinuta">TECNICO MINUTACION</option>
						<option value="tecPlataforma">TECNICO PLATAFORMA</option>
						<option value="tecReg">TECNICO REGISTRO</option>
						<option value="secretari">SECRETARIA</option>
						<option value="Otros">OTROS</option>
					</select>
				</td>
				<td width="180px">
					<select name="Estado" class="txtfields">
						<option value="Activo">Activo</option>
						<option value="Inactivo">Inactivo</option>
					</select>
				</td>
			</tr>
			<tr >
				<td width="180px"><label class="lblname">Correo&nbsp;</label></td>
				<td width="180px"><label class="lblname">Telefono&nbsp;</label></td>
				<td width="180px"><label class="lblname">Celular&nbsp;</label></td>
			</tr>
			<tr>
				<td width="180px"><input type="text" name="correo" class="txtfields" placeholder="Correo electronico" ></td>
				<td width="180px"><input type="text" name="telefono" class="txtfields"placeholder="Numero telefonico"></td>
				<td width="180px"><input type="text" name="celular" class="txtfields" placeholder="Numero de celular"></td>
			</tr>
			<tr>
				<td width="180px"><label class="lblname">Direccion&nbsp;</label></td>

			</tr>
			<table>
			<tr>
				<td width="540px"><input type="text" name="direccion" class="txtfields large" placeholder="Escriba su direccion: Ej. ZONA, CALLE, NRO."/></td>
			</tr>
			<tr>
				<td width="180px"><label class="lblname">Observaciones&nbsp;</label></td>

			</tr>
			<tr>
				<td width="540px"><TEXTAREA NAME="OBS" placeholder="Ingrese las observaciones" rows="6" cols="74" class="txtfields large2"></TEXTAREA></td>
			</tr>
			</table>
		</table>
		</center>
		</fieldset>
		<table style="margin-top:10px;">
		<center>
			<tr>
				<td> <input type="submit" class="btn btn-default" value="GUARDAR"/>
                 <input type="reset" class="btn btn-default" value="LIMPIAR"/></td>
				
			</tr>
		</center>
		</table>
		
	
<tr>

	</tr>
</form>
</body>
</html>
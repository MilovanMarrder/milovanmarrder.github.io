<?php
if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$titulo = $_POST['titulo'];
	$area = $_POST['area'];
	$tel =	$_POST['tel'];
	$mail = $_POST['mail'];
	$ext = $_POST['ext'];
	$logo = $_POST['logo'];
	$web_empresa = $_POST['web'];
	$cel = $_POST['cel'];
}

?>
<div class="firma2caja">
	<table>
		<tbody>
			<tr>
				<!-- En el siguiente td está el logo -->
				<td><a href="
				<?php
				echo "$web_empresa";

				?>
				"><img class="logofirma" src="
				<?php
				echo "$logo"; ?>
				" width="150" height="92" style="
  box-shadow: 0 0 10px rgba(244, 189, 60, 0.3);
  border-radius: 5px 5px 5px 5px;
  border-width: 0.05px;" /></a></td>
				<!-- Aquí termina el td del logo -->
				<!-- Estas td (Columna) conforman el separador vertical de color -->
				<td style="width: 13px;"></td>
				<td style="width: 1px; background-color: #f79d00;"></td>
				<td style="width: 13px;"></td>
				<!-- Hasta aquí el separador vertical (Verificar si se puede agregar sombra) -->
				<!-- Aqui inicia la tablita de el texto -->
				<td>
					<table class="firma1texto">
						<tbody>
							<tr>
								<td style=" font-size:16px; color:#000; font-weight:bold;">
									<?php echo "$titulo $nombre"; ?>
								</td>
							</tr>
							<tr>

								<td style="color:#4c4b4c;font-weight: bold;">
									<?php
									echo $area;
									?>
								</td>
							</tr>
							<tr>

								<td style="height: 12px;">
									<!-- espacio entre area y telefonos -->
								</td>
							</tr>
							<tr>
								<td style="height: 14px;color:#333333;">
									<?php
									if ($cel != null) {
										echo "Cel: $cel";
									}
									?>
								</td>
							</tr>

							<tr>

								<td style="color:#333333;">
									<?php
									if ($tel != null) {
										echo "Tel: $tel";
									}
									if ($ext != null) {
										echo " Ext: $ext";
									} ?>
								</td>
							</tr>
							<tr>
								<td><a style="color: #333333; text-decoration:none;" href="mailto:$mail">
										<?php
										if ($mail != null) {
											echo $mail;
										} ?>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</div>
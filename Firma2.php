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
				"><img src="
				<?php
				echo "$logo"; ?>
				" width="150" height="92" /></a></td>
				<!-- Aquí termina el td del logo -->
				<!-- Estas td (Columna) conforman el separador vertical de color -->
				<td style="width: 13px;"></td>
				<td style="width: 2px; background-color: var(--naranja);"></td>
				<td style="width: 13px;"></td>
				<!-- Hasta aquí el separador vertical (Verificar si se puede agregar sombra) -->
				<!-- Aqui inicia la tablita de el texto -->
				<td>
					<table class="firma1texto">
						<tbody>
							<tr>
								<td style=" font-size:15px; color:#4c4b4c; font-weight:bold;">
									<?php echo "$titulo $nombre"; ?>
								</td>
							</tr>
							<tr>

								<td class="celdaarea">
									<?php
									echo $area;
									?>
								</td>
							</tr>
							<tr>
								<td style="height: 14px;">
								<?php
								if ($cel != null) {
									echo "Cel: $cel";
								}
								?>
							</td>
							</tr>

							<tr>

								<td>
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
								<td><a href="mailto:$mail">
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
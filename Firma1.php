<?php
if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$titulo = $_POST['titulo'];
	$area = $_POST['area'];
	$tel =	$_POST['tel'];
	$mail = $_POST['mail'];
	$ext =	$_POST['ext'];
	$logo = $_POST['logo'];
	$web_empresa = $_POST['web'];
}

?>
<div>
	<table class="firma1">
		<tbody>
			<tr>
				<td><a href="
				<?php
					echo "$web_empresa";

				?>
				"><img 
				src="
				<?php
				echo "$logo";?>
				" width="150" height="92" /></a></td>
				<td style="width: 13px;"></td>
				<td style="width: 2px; background-color: rgb(20, 109, 186);"></td>
				<td style="width: 13px;"></td>
				<td>
					<table border="0" cellpadding="0" cellspacing="0" style="
					color:#4c4b4c;
					font-size:13px;
					font-family:arial,helvetica neue,helvetica,sans-serif;">
						<tbody>
							<tr>
								<td style=" font-size:15px; color:#4c4b4c; font-weight:bold;">
									<?php echo "$titulo $nombre"; ?>
								</td>
							</tr>
							<tr>
								<td style="color:#146dba;">
									<?php
									echo $area;
									?>
								</td>
							</tr>
							<tr>
								<td style="height: 8px;"></td>
							</tr>
							<tr>
								<td>
									<?php
										if(isset($_POST['ext'])){
											$extension= " Ext: ".$ext;

										}else{
											$extension="";
										}

									echo $tel.$extension;
									?>
								</td>
							</tr>
							<tr>
								<td><a href="mailto:$mail">
										<?php
										echo $mail;
										?>
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
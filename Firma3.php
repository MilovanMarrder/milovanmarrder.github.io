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
<div class="firma3caja">
<table
  style="
    line-height: 1;
    font-family: BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen,
      Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Helvetica, Arial,
      sans-serif;
  "
>
  <tbody>
    <tr>
      <td style="padding: 0px 15px 0px 0px; text-align: center; width: 114px">
        <img
          src="<?php echo "$logo";?>"
          alt="Logo de la empresa"
          width="150"
          height="92"
          border="0"
        />
      </td>
      <td
        style="
          width: 456px;
          border-left: 1px solid;
          border-color: #cccccc;
          padding: 0px 0px 0px 15px;
        "
      >
        <p style="font-size: 18px; font-weight: bold; color: #0b486b">
		<?php echo "$titulo $nombre"; ?>
        </p>
        <p
          style="
            margin-top: -10px;
            font-size: 16px;
            font-weight: normal;
            color: #4a4a4a;
          "
        ><?php	echo $area;?>
        </p>
        <p style="font-size: 14px; font-weight: normal; color: #4a4a4a">
		<?php if ($mail != null) { echo $mail;} ?> | 
		<?php	if ($cel != null) {	echo "Cel: $cel";}?>
        </p>
        <table style="border-collapse: collapse; width: 27.2702%" border="0">
          <tbody>
            <tr>
              <td style="width: 7.73521%"></td>
              <td style="width: 10.606%">
                <a
                  style="padding: 10px"
                  href="https://www.linkedin.com/company/segara-environmental-consulting/"
                  target="_blank"
                  rel="noopener noreferrer"
                  ><img
                    src="https://nextcloud.segara.io/index.php/s/BAAPzo4NLdkaaWB/preview"
                    alt="Icono de LinkedIn"
                    width="25"
                    height="25"
                /></a>
              </td>
              <td style="width: 8.93143%">
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td
        style="padding: 20px 20px 0px 0px; width: 571px"
        colspan="2"
        valign="middle"
      >
      </td>
    </tr>
    <tr>
      <td
        style="padding: 20px 20px 0px 0px; vertical-align: top; width: 571px"
        colspan="2"
        valign="middle"
      ></td>
    </tr>
  </tbody>
</table>

</div>
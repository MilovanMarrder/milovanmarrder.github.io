<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Previsualización de formulario en "vivo"</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <style type="text/css">
            body { margin: 10px; text-align: center; width: 100%; }
            #contenedor { margin: 0 auto; width: 900px; text-align: left; }
            .flotando { float: left; width: 445px;  }
            p{ margin: 2px 0 10px 0; }
            .margen-derecho { margin-right: 10px; }
            input, textarea { width: 99%; margin-bottom: 10px; float: none; clear: both; }
            textarea { height: 300px; }
            label { float: none; clear: both; display: inline; }
            .titulo { font-size: 14pt; }
            .negrita { font-weight: bold; }
        </style>
  
        <script type="text/javascript">
            function liveComment_name(texto)
            {
                if( texto == '' ) texto = 'Anónimo';
                document.getElementById('preview_name').innerHTML = texto;
            }
  
            function liveComment_email(texto)
            {
                document.getElementById('preview_email').innerHTML = texto;
            }
  
            function liveComment_text(texto)
            {
                texto = texto.replace(/n/gi,'<br />');
                document.getElementById('preview_text').innerHTML = texto;
            }
        </script>
    </head>
    <body>
        <div id="contenedor">
            <div id="formulario" class="flotando margen-derecho">
                <form action="#" enctype="multipart/form-data">
                    <label for="nombre">Su nombre</label>
                    <input type="text" name="nombre" id="nombre" onkeyup="liveComment_name(this.value)" />
  
                    <label for="email">Su correo electrónico</label>
                    <input type="text" name="email" id="email" onkeyup="liveComment_email(this.value)" />
  
                    <label for="mensaje">Su mensaje</label>
                    <textarea id="mensaje" onkeyup="liveComment_text(this.value)"></textarea>
                </form>
            </div>
            <div id="previsualizacion" class="flotando">
                <fieldset>
                    <legend>Previsualización de mensaje:</legend>
                    <p class="titulo">Mensaje de <span id="preview_name" class="negrita">Anónimo</span> (<span id="preview_email"></span>)</p>
                    <span id="preview_text"></span>
                </fieldset>
            </div>
        </div>
    </body>
</html>
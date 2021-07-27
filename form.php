<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" class="formulario">
    <h2 style="color:rgb(35, 35, 35);">GENERANDO TU FIRMA DE CORREO</h2>
    <div>
        <label for="Nombre">Nombre</label>
        <Input type="text" name="nombre" id="Nombre1" placeholder="Juan Francisco" ></Input>
        <!-- Los agrego como botones pero lo podemos dejar con la lista que sugeriste -->
        <br>
        <input type="radio" name="titulo" <?php if (isset($titulo) && $titulo == "lic") echo "checked"; ?> value="Lic.">Lic.
        <input type="radio" name="titulo" <?php if (isset($titulo) && $titulo == "lida") echo "checked"; ?> value="Licda.">Licda.
        <input type="radio" name="titulo" <?php if (isset($titulo) && $titulo == "ing") echo "checked"; ?> value="Ing">Ing.
        <input type="radio" name="titulo" <?php if (isset($titulo) && $titulo == "dr") echo "checked"; ?> value="Dr.">Dr.
        <input type="radio" name="titulo" <?php if (isset($titulo) && $titulo == "dra") echo "checked"; ?> value="Dra.">Dra.
        <input type="radio" name="titulo" <?php if (isset($titulo) && $titulo == "oficial") echo "checked"; ?> value="Oficial">Oficial
        <input type="radio" name="titulo" <?php if (isset($titulo) && $titulo == "ninguno") echo "checked"; ?> value="">Ninguno
        <input type="radio" name="titulo" <?php if (empty($titulo)) echo "checked"; ?> value="">Ninguno
        <br>
        <label for="area">Departamento</label>
        <Input type="text" id="area" name="area" placeholder="Departamento o área"></Input>
        <label for="cel">Teléfono movil</label>
        <Input type="text" id="cel" name="cel" placeholder=" +504 32772517"></Input>
        <label for="tel">Teléfono de la empresa</label>
        <Input type="text" id="tel" name="tel" placeholder="22360900">
        <label for="ext">Extensión</label>
        <Input type="text" id="ext" name="ext" placeholder="13110"></Inpuut>
        <label for="mail">Correo electrónico</label>
        <Input type="text" id="mail" name="mail" placeholder="correo@hospitalmaria.org" ></Input>
        <label for="ubicacion">Ubicación</label>
        <Input type="text" id="ubicacion" name="ubicacion" placeholder="Tegucigalpa, Honduras" cols="10" row="5"></Input>
        <br>
        <br>
        <hr>
        <label for="foto">URL de fotografía (Opcional)</label>
        <Input type="text" id="foto" name="foto" placeholder="Pega aquí el URL de tu foto" ></Inpuut>
        <label for="logo">URL de logotipo de la empresa</label>
        <Input type="text" id="logo" name="logo" placeholder="Pega aquí el URL del logo de tu empresa" ></Inpuut>
        <label for="web">Página web de la empresa</label>
        <Input type="text" id="web" name="web" placeholder="Página web de la empresa" ></Inpuut>
        <br>
        <hr><br>
    </div>
    <div class="botones">
        <input type="submit" class="botones" name="submit" value="Guardar">
        <input type="reset" class="botones" value="Limpiar campos">
    </div>
    <br>
    <b> Tipo de firma: </b><br>
    Fima tipo A<input type="checkbox" ng-model="myVar">
</form>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" class="formulario">
    <h2 style="color:rgb(35, 35, 35);">GENERANDO TU FIRMA DE CORREO</h2>
    <div>
        <div class="row">
            <div class="col">
                <select name="titulo" id="titulo">
                    <option value="">Ninguno</option>
                    <option value="Lic.">Lic.</option>
                    <option value="Licda.">Licda.</option>
                    <option value="Ing.">Ing.</option>
                    <option value="Dr.">Dr.</option>
                    <option value="Dra.">Dra.</option>
                    <option value="Oficial">Oficial</option>
                </select>
                <Input type="text" name="nombre" id="Nombre1" placeholder="Ingresa el nombre a mostrar"></Input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <Input type="text" id="area" name="area" placeholder="Puesto de trabajo"></Input>
                <Input type="text" id="empresa" name="empresa" placeholder="Empresa"></Input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <Input type="text" id="cel" name="cel" placeholder="Teléfono movil"></Input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <Input type="text" id="tel" name="tel" placeholder="Teléfono de la empresa">
                <Input class="inputext" type="text" id="ext" name="ext" placeholder="Extesión"></Inpuut>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <Input type="text" id="mail" name="mail" placeholder="correo@outlook.com"></Input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <Input type="text" id="ubicacion" name="ubicacion" placeholder="Tegucigalpa, Honduras" cols="10" row="5"></Input>
            </div>
        </div><br>

        <!--  
        <label for="foto">URL de fotografía (Opcional)</label>
        <Input type="text" id="foto" name="foto" placeholder="Pega aquí el URL de tu foto"></Inpuut>
        -->
        <div class="row">
            <div class="col">
                <Input type="text" id="logo" name="logo" placeholder="Pega aquí el URL del logo de tu empresa"></Inpuut>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <Input type="text" id="web" name="web" placeholder="Enlace al hacer clic en el logo"></Inpuut>
            </div>
        </div>
        
    </div>
        <br>
    <div class="botones">
        <input type="submit" class="BotonDeFormulario" name="submit" value="Guardar">
        <input type="reset" class="BotonDeFormulario" value="Limpiar campos">
    </div>   
</form>
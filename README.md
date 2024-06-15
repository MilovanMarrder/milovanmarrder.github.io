# Generador de Firmas de Correo Electrónico - Hospital María Especialidades Pediátricas (HMEP)

Este proyecto es un generador de firmas de correo electrónico diseñado para el personal del Hospital María Especialidades Pediátricas (HMEP). Permite a los usuarios crear y copiar firmas institucionales personalizadas mediante un formulario interactivo.

## Archivos del Proyecto

- **HTML**: Contiene la estructura HTML del generador de firmas. Incluye un formulario para ingresar datos del colaborador y una vista previa de la firma generada.
- **CSS**: Contiene los estilos CSS para el diseño y formato del generador de firmas y la firma generada.
- **JS**: Contiene el JavaScript para la funcionalidad del generador, incluyendo la actualización de la vista previa en tiempo real y la función de copiado.
- **HELPER**: Proporciona una descripción de las clases y elementos utilizados en el proyecto para facilitar la comprensión del código.

## Funcionalidades

1. **Generación de Firmas**: Los usuarios pueden ingresar su nombre, puesto, departamento, correo electrónico y extensión en el formulario para generar una firma personalizada.
2. **Vista Previa en Tiempo Real**: A medida que los usuarios ingresan sus datos, la firma se actualiza en tiempo real en la vista previa.
3. **Copiado de Firma**: Los usuarios pueden copiar la firma generada al portapapeles para pegarla en su cliente de correo electrónico.

## Estructura del Proyecto

### HTML 

- Define la estructura del generador de firmas.
- Incluye un formulario con campos para nombre, puesto, departamento, correo electrónico y extensión.
- La vista previa de la firma se muestra en una tabla dentro de un contenedor `div`.

### CSS

- Utiliza variables CSS para definir colores y estilos consistentes.
- Estiliza el formulario, los botones y la vista previa de la firma.
- Incluye animaciones para mejorar la apariencia visual.

### JavaScript 

- Funciones para actualizar la vista previa de la firma en tiempo real (`V_nombre`, `V_Puesto`, `V_dept`, `V_mail`, `V_Ext`, `V_cel`).
- Función `ejecutar` para copiar la firma generada al portapapeles.

### Archivo de Ayuda

- Descripción de las clases y elementos utilizados en el proyecto.
- Ayuda a entender la organización del código y el propósito de cada clase y elemento.

## Instrucciones de Uso

ingresar a https://milovanmarrder.github.io/
## Contribución

Si desea contribuir a este proyecto, puede clonar el repositorio, realizar cambios y enviar un pull request. Asegúrese de seguir las mejores prácticas de codificación y de comentar adecuadamente su código.

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](LICENSE).

## Contacto

Para cualquier pregunta o sugerencia, por favor contacte a [Milovan Marrder](mmarrder@hospitalmaria.org).


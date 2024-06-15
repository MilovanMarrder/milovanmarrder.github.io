document.getElementById('signatureForm').addEventListener('input', updatePreview);
document.getElementById('signatureForm').addEventListener('submit', function(e) {
    e.preventDefault();
    copySignature();
});

function updatePreview() {
    document.getElementById('previewNombre').innerText = document.getElementById('nombre').value || 'Nombre del colaborador';
    document.getElementById('previewPuesto').innerText = document.getElementById('puesto').value || 'Puesto de trabajo';
    document.getElementById('previewDept').innerText = document.getElementById('departamento').value || 'Departamento';
    document.getElementById('previewCorreo').innerText = document.getElementById('correo').value || 'correo@hospitalmaria.com';
    document.getElementById('previewCorreo').href = 'mailto:' + (document.getElementById('correo').value || 'correo@hospitalmaria.com');
    const extension = document.getElementById('extension').value;
    document.getElementById('previewExt').innerText = extension ? `Ext: ${extension}` : '';
}

function copySignature() {
    const signature = document.getElementById('signaturePreview').innerHTML;
    const tempInput = document.createElement('div');
    tempInput.contentEditable = true;
    tempInput.innerHTML = signature;
    document.body.appendChild(tempInput);
    tempInput.focus();
    document.execCommand('selectAll');
    document.execCommand('copy');
    document.body.removeChild(tempInput);
    alert('Firma copiada al portapapeles!');
}

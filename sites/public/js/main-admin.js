function edithRegisterService(param) {
    let arrayParam = param.split('._.');

    document.querySelector('#action').value = 'editarReg';
    document.querySelector('#id').value = arrayParam[0];
    document.querySelector('#title').value = arrayParam[1];
    document.querySelector('#description').value = arrayParam[3];
    document.querySelector('#category').value = arrayParam[6];
};

function editarRegisterImagen(params1, params2) {
    console.log(params1, params2);
}

function edithRegisterUser(param) {
    let arrayParam = param.split('._.');

    document.querySelector('#action').value = 'editar';
    document.querySelector('#id').value = arrayParam[0];
    document.querySelector('#nombres').value = arrayParam[1];
    document.querySelector('#user').value = arrayParam[2];
    document.querySelector('#correo').value = arrayParam[3];
    document.querySelector('#estado').value = arrayParam[4];
    document.querySelector('#rol').value = arrayParam[5] === '1' ? 'estandar' : 'admin';
};

function desactivarUser(a, b) {
    confirm("¿Desea desactivar este usuario?") && post("validate.php", {
            action: "desactivar",
            id: a,
            estado: b
        },
        function() {
            location.reload();
        });
}
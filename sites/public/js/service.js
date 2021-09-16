function edithRegister(param) {
    let arrayParam = param.split('._.');

    document.querySelector('#action').value = 'editarReg';
    document.querySelector('#id').value = arrayParam[0];
    document.querySelector('#title').value = arrayParam[1];
    document.querySelector('#description').value = arrayParam[3];
    document.querySelector('#category').value = arrayParam[6];
    console.log(document.querySelector('#action').value);
};


/* function editarReg(a) {
    let b = a.split("&");
    $("#modal").modal("show"),
        $("#action").val("editarReg"),
        $("#id").val(b[0]),
        $("#titulo").val(b[1]),
        $("#descripcion").val(b[2]),
        $("#estado").val(b[3]),
        $("#dvImg").hide(),
        $("#imagen").prop("disabled", "true")
}

function editarImg(a, b) { $("#modalImagen").modal("show"), $("#imgActual").prop("src", b), $("#action2").val("editarImg"), $("#id2").val(a) }

function eliminarReg(a) { confirm("\xBFEsta seguro de eliminar el slider?") && $.post("./logic.php", { action: "eliminar", id: a }, function() { location.reload(!0) }) } */
/****** */
// Añadir un objeto de atributos a un elemento
const addAtributes = (element, attrObj) => {
    for (let attr in attrObj) {
        if (attrObj.hasOwnProperty(attr)) element.setAttribute(attr, attrObj[attr]);
    }
};

const createCustomElement = (element, attributes, children) => {
    let customElement = document.createElement(element);

    if (children !== undefined)
        children.forEach((el) => {
            if (el.nodeType) {
                if (el.nodeType === 1 || el.nodeType === 11)
                    customElement.appendChild(el);
            } else {
                customElement.innerHTML += el;
            }
        });
    addAtributes(customElement, attributes);
    return customElement;
};

// imprimir modal
const printModal = (content) => {
    // crear contenedor interno
    const modalContentEl = createCustomElement(
        "div", {
            id: "ed-modal-content",
            class: "ed-modal-content",
        }, [content]
    );

    //crear contenedor principal
    const modalContainerEl = createCustomElement(
        "div", {
            id: "ed-modal-container",
            class: "ed-modal-container",
        }, [modalContentEl]
    );

    // Imprimir el modal
    document.body.appendChild(modalContainerEl);

    //Remover el modal
    const removeModal = () => document.body.removeChild(modalContainerEl);

    modalContainerEl.addEventListener("click", (e) => {
        //console.log(e.target);
        if (e.target === modalContainerEl) removeModal();
    });
};

const modalShow = (src) => {
    const saludoVentana = `<h5 class="text-center my-lg-3 my-md-3 my-sm-1 text-white">Imagen Ampliada</h5>
	 <a href="#"><img class="img-fluid rounded" src="${src}" alt="imagen"></a>`;
    printModal(saludoVentana);
}

/*
document.getElementById('modalImg').addEventListener('click', () => {

	const saludoVentana = `<h3 class="text-center my-lg-3 my-md-3 my-sm-1">Comunidad AUNAR</h3>
	 <a href="#"><img class="img-fluid" src="https://virtual.aunar.edu.co/contenido/archivos/POPBIENVENIDA.jpg" alt="imagen"></a>`;
 	*/

/* // El selector deseado
    let brandImg = document.querySelectorAll("#modalImg img");

    for (let i = 0; i < brandImg.length; i++) {
        let ckEdiloop = brandImg[i];
        ckEdiloop.addEventListener("click", function(el) {
            let thisSrc = this.src;
            let ckEdImg = '<p><img src="' + thisSrc + '" /></p>'; // La forma como las imágenes son envueltas en ckEditor
            alert('img src es = ' + thisSrc);
            // CKEDITOR.instances['mi_textarea'].insertHtml(ckEdImg) // Añade img al editor
        });
    }
    printModal(saludoVentana);
});
*/

/* 
if (sessionStorage.getItem("story") == null) {
    const saludoVentana = `<h3 class="text-center my-lg-3 my-md-3 my-sm-1">Comunidad AUNAR</h3>
	 <a href="#"><img class="img-fluid" src="https://virtual.aunar.edu.co/contenido/archivos/POPBIENVENIDA.jpg" alt="imagen"></a>`;
    printModal(saludoVentana);

    sessionStorage.setItem("story", "true");
} */
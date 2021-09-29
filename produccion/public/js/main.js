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
	 <img class="img-fluid rounded" src="${src}" alt="imagen">`;
    printModal(saludoVentana);
}
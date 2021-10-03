const redirectPost = (param) => {
    let url = getAbsolutePath() + 'services.php#servicios';
    let arrayParam = param.split('._.');
    let arrayInput = ['title', 'image', 'description', 'category'];
    let form = document.createElement('form');
    let input1 = document.createElement('input');
    let input2 = document.createElement('input');
    let input3 = document.createElement('input');
    let input4 = document.createElement('input');

    document.body.appendChild(form);
    form.method = 'post';
    form.action = url;

    input1.type = 'hidden';
    input1.name = arrayInput[0];
    input1.id = arrayInput[0];
    input1.value = arrayParam[0];

    input2.type = 'hidden';
    input2.name = arrayInput[1];
    input2.id = arrayInput[1];
    input2.value = arrayParam[1];

    input3.type = 'hidden';
    input3.name = arrayInput[2];
    input3.id = arrayInput[2];
    input3.value = arrayParam[2];

    input4.type = 'hidden';
    input4.name = arrayInput[3];
    input4.id = arrayInput[3];
    input4.value = arrayParam[3];

    form.appendChild(input1);
    form.appendChild(input2);
    form.appendChild(input3);
    form.appendChild(input4);
    form.submit();
}

const getAbsolutePath = () => {
    let loc = window.location;
    let pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}
let typeSel = "";
let modeSel = "";
let shapeSel = "";

function deselectShape () {

    let shape       = document.getElementsByName("shape");

    shape.forEach((element) => {
        element.classList.remove('active');
    });
}

function hideOm () {

    let om       = document.getElementsByName("om");

    om.forEach((element) => {
        element.setAttribute("hidden", true);
    });

}

function selectType ( id ) {

    let types    = document.getElementsByName("type");
    let mode    = document.getElementsByName("opening_mode");
    let priceElem   = document.getElementById('price');

    priceElem.innerHTML = "";

    types.forEach((element) => {

        element.classList.remove('active');

        if ( parseInt(element.id) === id ) {
            element.classList.add('active');
        }
    });

    mode.forEach((element) => {

        element.style.display = "none";

        if ( parseInt(element.id) === id ) {
            element.style.display = "block";
            typeSel = element.id;
        }
    });

    deselectShape();

}

function selectMode ( id ) {

    let mode    = document.getElementsByName("opening_mode");
    let priceElem   = document.getElementById('price');

    priceElem.innerHTML = "";

    mode.forEach((element) => {

        element.classList.remove('active');

        let ids = element.id.split("_");

        if ( parseInt(ids[1]) === id ) {
            element.classList.add('active');
            modeSel = element.id;
        }
    });

    if ( shapeSel ) {
        selectShape ( parseInt(shapeSel) );
    } else {
        deselectShape();
    }


}

function selectShape ( id ) {

    let shape       = document.getElementsByName("shape");
    let priceElem   = document.getElementById('price');

    hideOm();

    shape.forEach((element) => {

        element.classList.remove('active');

        if ( parseInt(element.id) === id ) {

            element.classList.add('active');
            shapeSel = element.id;
            priceElem.innerHTML = "";

            // let's try to find
            for ( i = 0; i < price.length; i++) {

                let ids = modeSel.split("_");
                let omImg = document.getElementById('om_' + parseInt(ids[1]));

                if ( parseInt(price[i].type) ===  parseInt(ids[0]) ) {

                    if ( parseInt(price[i].om) === parseInt(ids[1]) ) {
                        priceElem.innerHTML = "Цена: " + price[i].price;
                        omImg.removeAttribute("hidden");
                    }
                }
            }
        }

        console.log(element);

    });
}
let catalogProductsEL = document.querySelector('.catalog-products');
let catalogPaginationEL = document.querySelector('.catalog-pagination');

let renderCatalog = (data)=> {
    catalogProductsEL.innerHTML = '';
    catalogPaginationEL.innerHTML = '';
    for (let i = 1; i <= data.paginationInfo.countPage; i++ ){
        let div = document.createElement('div');
        div.classList.add('catalog-pagination-item');

        if (i == data.paginationInfo.page ){
            div.classList.add('active');
        }

        div.innerHTML = i;
        div.setAttribute('data-page', i);
        div.addEventListener('click', function() {
            updateCatalogFromAjax(this.getAttribute('data-page'));
        });

        catalogPaginationEL.append(div);
    }

    // отрисовка карточек 
    data.products.forEach((productItem)=>{
        let divProduct = document.createElement('div');
        divProduct.classList.add('catalog-products-item');

        //отрисовка картинки заглушки
        let defaultImage = 'images/empty-logo.jpg';
        if ( productItem.photo != '' ){
            defaultImage = productItem.photo;
        }

        divProduct.innerHTML = `
            <img class='products_photo'src='${defaultImage}'>
            <div class='name'>${productItem.name}</div>
            <div class='price'>${productItem.price} руб.</div>
            <button  data-id='${productItem.id}'>Добавить в корзину</button>
        `;

        divProduct.querySelector('button').addEventListener('click', function(){
            addToBasket(this.getAttribute('data-id'));
        });

        catalogProductsEL.append(divProduct);
    });
}
let updateCatalogFromAjax = (page = 1)=> {
    let xhr = new XMLHttpRequest();
    xhr.open('get', `handlers/catalog_handler.php?page=${page}`);
    xhr.send();

    xhr.onreadystatechange = ()=> {
        if(xhr.readyState == 4 && xhr.status == 200){
            renderCatalog( JSON.parse(xhr.responseText) );
        }
    }
}

updateCatalogFromAjax(1);
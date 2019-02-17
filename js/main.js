$(document).ready(function($) {  

    //  preloader 
    $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });  

})


// Открытие всплывающих окон


function popUp(showBlock, thisEl) {
    // отображаем форму
    $(showBlock).css("display", "flex");
};


// Закрытие окошка при клике на любое место кроме этого блока для PopUp


$(document).mouseup(function (e){ 
    var div = $('.pop-up-center'); 
    var popup = $('.popup-start'); 
    if (!div.is(e.target) && div.has(e.target).length === 0) { 
        popup.hide(200); 
    }
});

$(".popup-center-cross").click(function () {
    $(".popup-start").hide(200);
});


// логика обновления корзины в header - сайта 


let headerBasketEl = document.querySelector('.header .basket');
let addToBasket = (productId = null)=>{
    let xhr = new XMLHttpRequest();
    let href = 'handlers/basket_handler.php';

    if (productId != null){
        href += `?productId=${productId}`;
    }

    xhr.open('get', href);
    xhr.send();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200 ){
            updateHeaderBasket(JSON.parse( xhr.responseText ));
        }
    }
}
let updateBasketInfo = ()=> {
    addToBasket();
}

let updateHeaderBasket = (data)=> {
    headerBasketEl.innerHTML = `
        (${data.basketInfo.count}) ${data.basketInfo.fullPrice} руб.
    `;
}

updateBasketInfo();






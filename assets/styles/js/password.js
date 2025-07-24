import $ from 'jquery';
import alertify from 'alertifyjs';
$(document).on('click', function (e) {

    e.preventDefault();
    let productId = $(this).data('product-id');
    let productPrice = $(this).data('product-price');
    let productName = $(this).data('product-name');

    $.ajax({
        type: "POST",
        url: `/user/add-to-cart/${productId}`,
        data: {
            productId: productId,
            productPrice: productPrice,
            productName: productName,
        },
        success: function (response) {
            if(!response.status){
                alertify.error(response.msg);
                if(response.redirect){
                    window.location = response.redirect;
                }
            }
        }
    })
})

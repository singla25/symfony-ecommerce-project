import $ from 'jquery';
import alertify from 'alertifyjs';

$(document).on('click', '[data-type="addToCart"], [data-type="buyNow"]', function (e) {
    e.preventDefault();

    let button = $(this);
    let badgeValue = $(this).data('badge-value')+1;
    let buttonType = $(this).data('type');
    let productId = $(this).data('product-id');
    let productImage = $(this).data('product-photo');
    let productName = $(this).data('product-name');
    let productPrice = $(this).data('product-price');
    let selectedSize = $('#productSize').val();
    let quantity = parseInt($('#productQuantity').val()) || 1;
    let subTotal = productPrice * quantity;

    $.ajax({
        type: "POST",
        url: `/user/add-to-cart/${productId}`,
        data: {
            productId: productId,
            productImage: productImage,
            productName: productName,
            productPrice: productPrice,
            quantity: quantity,
            size: selectedSize,
            subTotal: subTotal,
        },
        success: function (response) {
            if (response.status) {
                if (buttonType === 'buyNow') {
                    window.location.href = '/user/cart';
                } else {
                    alertify.success(response.msg);
                    $('#badge').text(badgeValue);
                    button.attr('data-badge-value', badgeValue);
                }
            } else {
                alertify.error(response.msg);
                if (response.redirect) {
                    window.location.href = response.redirect;
                }
            }
        }
    });
});

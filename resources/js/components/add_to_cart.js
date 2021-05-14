const ADD_TO_CART = {
    init () {
        this.addToCart();
        this.deleteFromCart();
    },

    addToCart()
    {
        $('.content').on('click', '.js-add-to-cart', function () {
            var id = $(this).data('item');
            var route = $(this).data('route');
            $.ajax({
                url: route,
                type: 'GET',
                dataType: 'html',
                data: {
                    id: id,
                }
            }).done(function(res) {
                alert('Thêm vào giỏ hàng thành công!');
                $('#cart').html(res);
            });
        })
    },

    deleteFromCart() {
        $('.header').on('click', '.js-delete-from-cart', function () {
            $(this).parents('.cart_item').remove();
            let route = $(this).data('route');
            $.ajax({
                url: route,
                type: 'GET',
                dataType: 'html',
            }).done(function(res) {
                alert('Đã xóa khỏi giỏ hàng!');
                $('#cart').html(res);
            });
        })
    }
}

export default ADD_TO_CART;
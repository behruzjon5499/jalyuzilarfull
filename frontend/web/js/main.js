jQuery(function ($) {
    $('button.cart').click(function () {
        $('.carts').toggleClass('show');
    });
    $('.carts button.carts_close').click(function () {
        $('.carts').removeClass('show');
    });
    $('nav button.mn').click(function () {
        $('.mobilemenu').toggleClass('active');
    });
    $('.mobilemenu button.mobilemenu_close').click(function () {
        $('.mobilemenu').removeClass('active');
    });
    //  $('.slide_gal').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: true,
    //     fade: true,
    //     asNavFor: '.slide_nav'
    //   });
    //   $('.slide_nav').slick({
    //     slidesToShow: 5,
    //     slidesToScroll: 1,
    //     asNavFor: '.slide_gal',
    //     dots: false,
    //     nav:false,
    //     arrows:false,
    //     centerMode: true,
    //     focusOnSelect: true,
    //   });

});
$(window).on('scroll', function (event) {
    var scrollValue = $(window).scrollTop();
    if (scrollValue > 90) {
        $('nav.navbar').addClass('affix');
    } else {
        $('nav.navbar').removeClass('affix');
    }
});
//
// jQuery(function($){
//   $(".product_view_modal").click(function(){
//     var product_id = $(this).data("product_id");
//     var title = $(this).data("title");
//     var price = $(this).data("price");
//     var description = $(this).data("description");
//     var image = $(this).data("image");
//     $(".proshow_title").text(title);
//     $(".proshow_desc").text(description);
//     $(".price b").text(price);
//     $("#product_image_view").attr("src",image)
//     $(".product_add_button").data("product_id", product_id);
//   });
//
// });

$(document).on('click', '.qt-plus', function (e) {

    var product_id = $(this).data("product_id");
    var count = $(this).parent().children(".qt").text();
    var url = "/ru/products/add-to-cart?product_id=" + product_id;

    if (count && count !== 0) {

        url = url + '&count=' + count;
        console.log(url);
    }

    $.ajax({
        url: url,
        type: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data);
                    if (data.status === 1) {
                        $('.cart_count').text(data.count);
                        count.text(data.card_count);
                    }
                }
    })
});

$(document).on('click', '.qt-minus', function (e) {
    var product_id = $(this).data("product_id");
    var count = $(this).parent().children(".qt").text();
    console.log(product_id);
    console.log(count);
    var url = "/ru/products/add-to-cart?product_id=" + product_id;

    if (count && count !== 0) {
        url = url + '&count=' + count;
    }
    console.log(product_id);
    console.log(count);
    console.log(url);
    $.ajax({
        url: url,
        type: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data.status === 1) {
                $('.cart_count').text(data.count ? data.count : "0");
                count.text(data.card_count);
            }
        }
    })
});

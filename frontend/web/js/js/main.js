jQuery(function($){
$('button.cart').click(function(){
  $('.carts').toggleClass('show');
});
$('.carts button.carts_close').click(function(){
  $('.carts').removeClass('show');
});
$('nav button.mn').click(function(){
  $('.mobilemenu').toggleClass('active');
});
$('.mobilemenu button.mobilemenu_close').click(function(){
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
    $('.partner_list').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows:false,
      dots:false,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
      {
        breakpoint: 790,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }
    ]
    });     
    $('.pro_list').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows:true,
      dots:false,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }
    ]
    }); 
  
    $('.quote_list').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      dots:false,
      autoplay: true,
      autoplaySpeed: 2000,
      fade:false,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
    $('.diler_list').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
    });
    $('.doma_list').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
    });
    $('.mag_list').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
    });
});
$(window).on('scroll', function (event) {
    var scrollValue = $(window).scrollTop();
    if (scrollValue > 90) {
        $('nav.navbar').addClass('affix');
    } else{
        $('nav.navbar').removeClass('affix');
    }
});

jQuery(function($){
  $(".product_view_modal").click(function(){
    var product_id = $(this).data("product_id");
    var title = $(this).data("title");
    var price = $(this).data("price");
    var description = $(this).data("description");
    var image = $(this).data("image");
    $(".proshow_title").text(title);
    $(".proshow_desc").text(description);
    $(".price b").text(price);
    $("#product_image_view").attr("src",image)
    $(".product_add_button").data("product_id", product_id);
  });




});


$(document).on('click', '.add-plus', function (e) {
  var product_id = $(this).data("product_id");
  var quantity = Number.parseInt($(this).parent().find('input.card-quantity').val());
  var url = "/product/add-to-cart?product_id="+product_id;

  if (quantity && quantity !== 0) {
    url = url + '&quantity=' + quantity;
  }

  $.ajax({
    url: url,
    type: 'get',
    dataType: 'json',
    success: function (data) {
      if (data.status == 1) {
        $('.cart_count').text(data.count);
      }
    }
  })
});

$(document).on('click', '.add-min', function (e) {
  var product_id = $(this).data("product_id");
  var quantity = Number.parseInt($(this).parent().find('input.card-quantity').val());

  var url = "/product/add-to-cart?product_id="+product_id;

  if (quantity && quantity !== 0) {
    url = url + '&quantity=' + quantity;
  }
  $.ajax({
    url: url,
    type: 'get',
    dataType: 'json',
    success: function (data) {
      if (data.status == 1) {
        $('.cart_count').text(data.count ? data.count : "0");
      }
    }
  })
});

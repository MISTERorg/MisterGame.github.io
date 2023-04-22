//logged in stuff dont really know how i can call it
$(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "action.php",
        method: "post",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
      });
    } else {
      $("#show-list").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", ".list-group-item", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
  });
});

//For the product quantity
$(document).ready(function(){
  $(".itemQty").on('change', function(){
    var $el = $(this).closest(".cart-items");

    var pid = $el.find(".pid").val();
    var pprice = $el.find(".pprice").val();
    var qty = $el.find(".itemQty").val();
    
    if(qty <=0){
      alert('Enter Only Number Valid Quantity')
    }
    
    else{
      //alert(pprice);
    }
    
    $.ajax({
      url: "cart.php",
      method:'post',
      cache: false,
      data: {qty:qty,pid:pid,pprice:pprice},
      success: function(response){
        console.log(response);
      }
    });
  });
});

$('.Nin-container').slick({


  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow: $('.next'),
  prevArrow: $('.prev'),
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 550,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


/*--$('input').css('width', (( 
  input.getAttribute('placeholder').length + 1) * 8) + 'px'); 
$("input").focusout(function() { 
    if (this.value.length > 0) { 
        this.style.width =  
          ((this.value.length + 1) * 8) + 'px'; 
    } else { 
        this.style.width =  
          ((this.getAttribute('placeholder').length + 1) * 8) 
        + 'px'; 
    } 
});---*/ 

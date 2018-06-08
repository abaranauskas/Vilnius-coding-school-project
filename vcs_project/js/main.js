

  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 54.68, lng: 25.257},
      zoom: 14
    });
  }



$(document).ready(function(){
    $('.burger-menu').click(function(){
      $('nav').toggleClass('show');
      
    });


    $('.hero-section').slick({
      dots: true,
      arrows: false,
      autoplay:true,
      speed: 1500
  });

 });

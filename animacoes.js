$(".single-item").slick({
    infinite: true,
    dots: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true
});

$('.galeriaCarro').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
	

$(".depoimentoCarro").slick({
  infinite: true,
  dots: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true
});

$('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 2000,    
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
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
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

  // Menu mobile

  document.querySelector ('.abrir-menu').onclick = function () {
    document.documentElement.classList.add('menu-ativo');
  }

  document.querySelector ('.fechar-menu').onclick = function () {
    document.documentElement.classList.remove('menu-ativo');
  }

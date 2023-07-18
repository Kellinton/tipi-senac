
AOS.init();

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

  // var guarda informacao
  //quando o scroll for ativado, ira executar uma função (on)
  //tecla || significa "ou" na programação
  // operadores lógicos || que significa "ou" e "and"
  window.onscroll = function(){

    var topo = window.scrollY || document.documentElement.scrollTop;

    if(topo > 800){
      console.log("Adicionar menu fixo" + topo);
      document.getElementById("topoFixo").classList.add("menu-fixo");
      document.getElementById("topoFixo").classList.remove("site");
    }
    else{
      console.log ("Remover menu fixo");
      document.getElementById("topoFixo").classList.remove("menu-fixo");
      document.getElementById("topoFixo").classList.add("site");
    }
}

//formulário

function formWhats(){

    var form = document.getElementById('formContato');

    var nome =  '*Nome: *' + document.getElementById('nome').value;
    var email = '*Email: *' + document.getElementById('email').value;
    var tel = document.getElementById('tel').value;
    var mens =  '*Mensagem: *' + document.getElementById('mens').value;

    var agencia = '*Agência TIPI*';
    var assunto = 'Mensagem do site!';

    var numFone = '5511968360158';
    var quebraDeLinha = '%0A';

    if(tel == ''){
      alert ("O campo do celular é obrigatório");
      return;
    }else{
      tel = '*Fone: *' + document.getElementById('tel').value;
    }

    window.open('https://api.whatsapp.com/send?php=' + numFone + '&text=' +
    numFone + '&text=' +
    assunto + ' - ' + agencia + quebraDeLinha + quebraDeLinha +
    nome + quebraDeLinha +
    email + quebraDeLinha +
    tel + quebraDeLinha +
    mens, '_blank');

    form.reset();
    
}
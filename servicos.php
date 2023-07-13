<!DOCTYPE html> <!--a declaração "doctype", serve para informar ao navegador qual é a versão HTML-->
<html lang="pt-BR">
  <head> <!--Dentro do Head ficam informações sobre o documento e metadados, título da página, a codificação de caracteres, 
    e a adição do CSS e de scripts JS-->
    <meta charset="UTF-8" /> <!--A tag "meta charset" define qual conjunto de caracteres está sendo usado no documento-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!--este meta informa ao Internet Explorer a utilizar a versão mais recente do mecanismo de renderização disponível.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><!--Controla o comportamento de exibição e o dimensionamento da página em dispositivos móveis.-->
    <title>Agência TIPI</title> <!--Título da página-->

    <!-- CDNs são servidores que servem para carregar arquivos de biblioetecas. Logo abaixo, foi utilizado alguns CDN's para importar
    o carousel-->

    <!-- slick.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- css -->
    <link rel="stylesheet" href="css/reset.css" /> <!--para fazer o reset do site, 
      padronizando e eliminando as diferenças de estilo padrão entre navegadores-->
       <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo.css" /> <!-- Um link que chama o arquivo
      de estilo CSS dentro da pasta CSS-->
  <link rel="stylesheet" href="css/media.css"><!-- Um link que chama o arquivo
    de Media dentro da pasta CSS-->
  </head>

  <body> <!--No body, temos todo o conteúdo visível de uma página 
    Web,exibido no navegador-->
    <!-- Corpo da página -->
    <header>
    <?php require_once('conteudo/conteudo-topo.php');?>
    </header>
    <main> <!--No main, fica o conteúdo principal do site-->

    
    <?php require_once('conteudo/conteudo-servico.php');?>
    <?php require_once('conteudo/conteudo-galeria.php');?>
  
    </main>
    <footer>
    <?php require_once('conteudo/conteudo-rodape.php');?>
    </footer>      
    
      
 <!-- AOS -->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script src="./script/animacoes.js"></script>
  </body>
</html>


<!--
  Reflexão

  Aprendi bastante durante o desenvolvimento do site. Foi uma experiência enriquecedora
na qual adquiri conhecimentos e habilidades importantes.

Um dos desafios que enfrentei foi relacionado ao responsivo, de forma mais específica
em relação a um slick.button do carrosseul que estava quebrando a estrutura do layout
em tamanhos de tela diferentes, deixando o layout desalinhado. Depois que identifiquei o problema,
coloquei o display:none no media query para ocultar o button, e o layout foi ajustado.

No geral, estou satisfeito com o resultado. Aprendi muito sobre as
 ferramentas e códigos utilizados. Foi enriquecedora tanto a implantação
 de um carroussel no site, quanto a experiência 
 de criar o menu hambúrguer que se encaixa em telas diferentes.







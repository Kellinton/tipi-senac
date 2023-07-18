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
    <?php require_once('includes/topo.php');?>
    </header>

    <main> <!--No main, fica o conteúdo principal do site-->

    <section>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7318.157867934854!2d-46.45001965413907!3d-23.493666215385414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616491b50329%3A0xbf9ea041248320ba!2sS%C3%A3o%20Miguel%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1687884228187!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="form">
      <div class="site">
        <h2>Formulário de contato</h2>

          <form action="#" method="POST">
            <div>
              <input type="text" id="nome" name="nome" placeholder="Informe seu nome:">
              <input type="email" id="email" name="email" required placeholder="Informe seu e-mail:">
              <input type="tel" id="tel" name="tel" placeholder="Informe seu telefone:">
              <h3>Mensagem enviada com sucesso!!!</h3>
            </div>
            <div>
              <textarea name="mens" id="mens" cols="30" rows="10" placeholder="Informe sua mensagem:"></textarea>
              <div class="botoes">
                <input type="submit" value="Enviar via e-mail">
                <button onclick="formWhats()">Enviar via WhatsApp</button>
              </div>
            </div>
          </form>

      </div>
    </section>

    <?php require_once('includes/depoimento.php');?>
    <?php require_once('includes/blog.php');?>
    
    </main>
    <footer>
    <?php require_once('includes/rodape.php');?>
    </footer>
      
    
      

 <!-- AOS -->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script src="./script/animacoes.js"></script>
  </body>
</html>



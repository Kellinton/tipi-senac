<?php
// Definir a página atual
$current_page = basename($_SERVER['PHP_SELF']);

// Função para adicionar a classe "ativo" se a página atual for correspondente
function echoActiveClass($page_name)
{
  global $current_page;
  if ($current_page == $page_name) {
    echo 'class="ativo"';
  }
}
?>



<header class="site topo" id="topoFixo"> <!--O header é uma das principais tags semanticas
      do HTML, ele é o cabeçalho do site-->
  <h1>Agência TIPI</h1><!--logotipo do site sendo representada pela tag h1-->
  <div>
    <button class="abrir-menu"></button>

    <nav class="menu"> <!--A nav é uma tag de navegação, dentro dele temos links que te levam
      para outras páginas-->
      <button class="fechar-menu"></button>
      <ul>
        <li><a href="index.php" <?php echoActiveClass('index.php'); ?>>Home</a></li> <!--A tag <a> em HTML é usada para
            criar um link ou âncora em um documento web.-->
        <li><a href="about.php" <?php echoActiveClass('about.php'); ?>>Sobre</a></li>
        <li><a href="services.php" <?php echoActiveClass('services.php'); ?>>Serviços</a></li>
        <li><a href="contact.php" <?php echoActiveClass('contact.php'); ?>>Contato</a></li>
      </ul>
      <div class="redeSocialTodo">
        <button>Login</button>
        <ul> <!--UL é uma lista não ordenada-->
          <li><a href="#">Facebook</a></li> <!--as LI serv para criar um item dentro da UL-->
          <li><a href="#">Instagram</a></li>
          <li><a href="#">WhatsApp</a></li>
        </ul>
      </div>
    </nav>
  </div>

</header>
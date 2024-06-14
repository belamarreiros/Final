<!DOCTYPE html>
<html lang="pt-BR">
<!------------------------------------------------- Chamando Head ------------------------------------------------->
<?php require "includes/head.php"; ?>

<title>CONTATO</title>

<body>
  <div class="container text-center">
    <!------------------------------------------------- Chamando Header ------------------------------------------------->
    <?php require "includes/header_nav.php"; ?>
    <article>
      <hr>

      <div class="row mt-3 justify-content-center">

        <div class="col-lg-4 col-md-4 col-sm-12">
          <h1>Fale com a gente!</h1>
          <hr>
          <form action="sucesso.php" method="post">
            <p><input type="text" placeholder="Nome"></p>
            <p><input type="text" placeholder="Celular ou Telefone"></p>
            <p><input type="text" placeholder="E-mail"></p>
            <p><textarea placeholder="Mensagem:" name="mensagem" cols="30" rows="5"></textarea></p>
            <button type="submit">Enviar</button>
          </form>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
          <img src="imagens/fatecon_logo.webp" alt="Mascote do evento FateconHQs, um garoto com traços de desenho, cabelo, manga longa, luvas, calças e óculos redondo azuis, camisa peitoral laranja escuro com claro, rosto amarelado e jetpack de foguete nas costas. Ele está impressionado com as informações ao redor e diz 'uau... que DEMAIS!'. O fundo tem cores vibrantes e animadas com estrelas, cores rosa, roxo e detalhes verdes." class="img-fluid">
        </div>

      </div>
      <hr>
    </article>
    <!------------------------------------------------- Chamando Footer ------------------------------------------------->
    <?php require "includes/footer.php"; ?>

    <!------------------------------------------------- Chamando Java ------------------------------------------------->
    <?php require "includes/java.php"; ?>
  </div>
</body>

</html>
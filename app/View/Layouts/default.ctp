<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Otimizador de Pesquisa -->
        <meta name="author" content="Ingrid Medeiros | Desenvolvimento Web">
        <meta name="keywords" content="desenvolvedor web, desenvolvedor front-end, currículo front-end, front-end praia grande, front-end santos, programador currículo, são Paulo">
        <meta name="google-site-verification" content="teHmL-u0PihUIOhNsgWgvYAWqIGNCcqulCn1hJb7OVU" />
        <meta name="robots" content="index,follow" />
        <!-- Fim do otimizador -->
        <title>Ingrid Medeiros | Desenvolvendo e acontecendo</title>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:500' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:700' rel='stylesheet' type='text/css'>

        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('uikit');
        echo $this->Html->css('estilo');

        echo $this->Html->css('owl.carousel');
        echo $this->Html->css('owl.theme');
        echo $this->Html->css('owl.transitions');

        echo $this->Html->script('jquery');
        echo $this->Html->script('uikit');
        echo $this->Html->script('components/sticky');
        echo $this->Html->script('owl.carousel.min');
        echo $this->Html->script('components/lightbox');
        echo $this->Html->script('core/offcanvas');
        ?>
        
        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <?php
    $usuario = $this->Session->read('nome');
    echo $this->Session->flash();
    echo $this->fetch('content');
    ?>
</html>
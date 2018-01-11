<div class="sessao">
    <h1 class="sub-titulo">
        <span class="laranja">P</span>r<span class="laranja">o</span>j<span class="laranja">e</span>t<span class="laranja">o</span>s
    </h1>
</div>
<div class="uk-grid texto">
    <div class="uk-width-1-1" class="laranja-fundo" style="background-color: #FF6E44">
        <div class="padding_15"></div>
        <div id="owl-demo">
            <?php foreach ($projetos as $p): ?>
                <center>
                    <div class="item">
                        <?php $image = $this->Html->image('projeto/' . $p['Projeto']['id'] . '-' . $p['Projeto']['imagem']) ?>
                        <?php //echo $this->Html->image('projeto/' . $p['Projeto']['id'] . '-' . $p['Projeto']['imagem']) ?>
                        <?php $url = $this->Html->url('/app/webroot/img/projeto/' . $p['Projeto']['id'] . '-' . $p['Projeto']['imagem']); ?>
                        <a href="<?php echo $url ?>" data-uk-lightbox="{group:'my-group'}"><?php echo $image ?></a>
                    </div>
                    <div class="item desc"><?php echo $p['Projeto']['descricao'] ?></div>
                </center>
            <?php endforeach; ?>
        </div>
        <div class="padding_15"></div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            autoPlay: 4000, //Set AutoPlay to 3 seconds
            items: 2,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]

        });

    });
</script>

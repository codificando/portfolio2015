<div class="sessao">
    <h1 class="sub-titulo">
        <span class="laranja">C</span>o<span class="laranja">n</span>t<span class="laranja">a</span>t<span class="laranja">o</span>
    </h1>
    <h4 class="font">Se interessou pelo meu trabalho? Entre em contato :)</h4>
</div>
<br>
<div class="uk-grid">
   <div class="uk-width-medium-5-10">
        <div class="uk-grid">
            <div class="uk-width-medium-1-2"></div>
            <div class="uk-width-medium-1-2">
                 <div class="margin_bottom_10"></div>
                <i class="uk-icon-file-pdf-o uk-icon-large icone"></i><span class="titulo font"> Currículo</span>
                <div class="margin_bottom_20"></div>
                <a class="uk-button rede_social" href="files/Curriculo_Ingrid_Medeiros.pdf" title="Currículo Ingrid Medeiros" target="_blank">Visualize Meu Currículo!</a>
                <div class="margin_bottom_20"></div>
                <i class="uk-icon-map-marker uk-icon-large icone"></i><span class="titulo font"> Como Me Encontrar</span>
                <div class="margin_bottom_20"></div>
                <b class="font2" style="font-size: 20px;">Celular</b><span class="como_encontrar"> (13)98215-7912</span>
                <div class="margin_bottom_10"></div>
                <b class="font2" style="font-size: 20px;">Cidade</b><span class="como_encontrar"> Praia Grande, SP</span>
               	<div class="margin_bottom_20"></div>
                <i class="uk-icon-info-circle uk-icon-large icone"></i> <span class="titulo font"> Redes Sociais</span>
                <div class="margin_bottom_20"></div>
                <a href="https://br.linkedin.com/in/ingridmedeiros" title="Linkedin Ingrid Medeiros" target="_blank"><i class="uk-icon-linkedin-square uk-icon-large rede_social"></i> </a>                              
                <a href="http://www.facebook.com/ingridmedeiros2" title="Facebook Ingrid Medeiros" target="_blank"><i class="uk-icon-facebook-square uk-icon-large rede_social"></i> </a>                   
                <a href="https://www.flickr.com/photos/ism_s2/" title="Flickr Ingrid Medeiros" target="_blank"><i class="uk-icon-flickr uk-icon-large rede_social"></i> </a>              
                 <div class="margin_bottom_10"></div>
            </div>
        </div>
    </div>
    <div class="uk-width-medium-4-10 sessao">
        <br/>
        <?php echo $this->Form->create('Contato', array('url' => array('controller' => 'contatos', 'action' => 'enviar'), 'class' => 'uk-form')); ?>
        <?php echo $this->Form->input('Contato.nome', array('placeholder' => 'Nome Completo', 'label' => '', 'class' => 'uk-form-width-large')); ?><br/>
        <?php echo $this->Form->input('Contato.email', array('placeholder' => 'Email', 'label' => '', 'class' => 'uk-form-width-large')); ?><br/>
        <?php echo $this->Form->input('Contato.assunto_email', array('placeholder' => 'Assunto', 'label' => '', 'class' => 'uk-form-width-large')); ?><br/>
        <?php echo $this->Form->input('Contato.menssagem', array('placeholder' => 'Mensagem', 'label' => '', 'rows' => 9, 'class' => 'uk-form-width-large')); ?><br/>
         <?php echo $this->Form->submit('Enviar', array('class' => 'uk-button rede_social')); 
         	echo $this->Form->end();
         ?>
     
   <?php //echo $this->Html->image("/contatos/captcha", array('class' => 'captcha')); ?>
        <?php //echo $this->Html->image(array('controller' => 'contatos', 'action' => 'captcha'), ["class" => "captcha"]);?>
        <!--<a href="#" class="reload_captcha"> <i class="uk-icon-undo icone"></i></a>
            <?php
            /*echo $this->Html->link("Ver outro captcha", "#", array('class' => 'reload_captcha'));
            echo /*$this->Form->input("captcha", array(
                'label' => false,
                'placeholder' => 'Digite o que está na imagem'
            ));*/
            ?>
            <?php echo $this->Form->submit('Enviar', array('class' => 'uk-button rede_social')); ?>
            <?php echo $this->Form->end(); ?>
    </div>-->
</div>
<script>
    $(function() {
        $(".reload_captcha").click(function(e) {
            e.preventDefault();
            $(".captcha").attr("src", $(".captcha").attr("src"));
        });
    });
</script>
<body>
    <header id="home">
        <div style="z-index: 2" class="sticky" data-uk-sticky>
           <div class="padding_15"></div>
            <div class="uk-grid sessao">
                <div class="uk-width-medium-1-2">              
                    <a href="#home" class="uk-animation-hover uk-animation-scale-up"><span class="name uk-visible-large"><b>Ingrid Medeiros</b></span></a>
                </div>
                <div class="uk-width-medium-1-2">                           
                    <ul class="uk-breadcrumb uk-visible-large">
                        <li class="uk-animation-hover uk-animation-scale-down"><a href="#home" title="Home" class="navegacao" data-uk-smooth-scroll>Home </a></li>
                        <li class="uk-animation-hover uk-animation-scale-down"><a href="#sobre_mim" title="Sobre Mim" class="navegacao" data-uk-smooth-scroll>Sobre </a></li>
                        <li class="uk-animation-hover uk-animation-scale-down"><a href="#projetos" title="Projetos" class="navegacao" data-uk-smooth-scroll>Projetos </a></li>
                        <li class="uk-animation-hover uk-animation-scale-down"><a href="#contato" title="Contato" class="navegacao" data-uk-smooth-scroll>Contato </a></li>
                    </ul>
                    <a href="#home" title="Ingrid Medeiros"><span class="name uk-hidden-large">Ingrid Medeiros</span></a>
                    <a href="#offcanvas" class="uk-navbar-toggle uk-hidden-large" data-uk-offcanvas></a>
                </div>
            </div>
        </div> 
        <div id="offcanvas" class="uk-offcanvas" >
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li><a href="#home" title="Home" class="navegacao">Home </a></li>
                    <li><a href="#sobre_mim" title="Sobre Mim" class="navegacao">Sobre </a></li>
                    <li><a href="#projetos" title="Projetos" class="navegacao" >Projetos </a></li>
                    <li><a href="#contato" title="Contato" class="navegacao">Contato </a></li>
                </ul>
            </div>
        </div>
        <figure class="uk-width-1-1 uk-overlay">                   
            <img src="img/home_page/12122_2000x1000.jpg"  alt="Ingrid Medeiros | Desenvolvendo e Acontecendo">                    
            <figcaption class="uk-overlay-panel uk-overlay-background  uk-flex uk-flex-center uk-flex-middle" >
                <div class="sessao">
                    <h1 class="uk-animation-scale-down nome_foto uk-hidden-small">Ingrid Medeiros</h1>
                    <h2 class="uk-animation-scale-up nome_foto frase"><span style="color:#FF6E44;">Desenvolvendo e Acontecendo</span></h2>
                </div>
            </figcaption>
        </figure>    
	<span>
            <a href="http://ingridmedeiros.com.br/usuarios/login" target="_blank" style="color: #fff">l</a>
        </span>
    </header>
    <div id="sobre_mim">
        <br class=" uk-hidden-small">
        <br class=" uk-hidden-small">
        <div class="padding_15"></div>
        <?php echo $this->element('sobre_mim') ?>
    </div>
    <div id="projetos">
        <br class=" uk-hidden-small">
        <br class=" uk-hidden-small">
        <br class=" uk-hidden-small">
        <div class="margin_bottom_10"></div>
        <?php echo $this->element('projeto') ?>
    </div>
    <div id="contato">
        <br class=" uk-hidden-small">
        <br class=" uk-hidden-small">
        <div class="padding_15"></div>
        <?php echo $this->element('contato') ?>
    </div>
    <div class="margin_bottom_20"></div>
   <footer>
        <div id="rodape">   
            Ingrid Medeiros<br>Copyright
            <i class="uk-icon-copyright"></i> 2015
        </div>
    </footer>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-68255191-1', 'auto');
	  ga('send', 'pageview');
	
    </script>
</body>


<?php echo $this->Form->create('Usuario', array('url' => array('controller' => 'usuarios', 'action' => 'login'))); ?>
<div class="row">
    <div class="small-12 large-4 columns end">
        <?php echo $this->Form->input('Usuario.nome', array('label' => 'Login', 'placeholder' => 'Nome')); ?>
    </div>
</div>
<div class="row">
    <div class="small-12 large-4 columns end">
        <?php echo $this->Form->input('Usuario.senha', array('label' => 'Senha', 'placeholder' => 'Senha','type'=>'password')); ?>
        <?php echo '<br>' . $this->Form->submit('Entrar', array('class' => 'button small radius success')); ?>
        <?php echo $this->Form->end();?>
    </div>
</div>

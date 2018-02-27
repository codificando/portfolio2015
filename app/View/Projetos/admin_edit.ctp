
<?php 
echo $this->element('admin_menu') ;
echo $this->Form->create('Projeto', array('type' => 'file', 'url' => array('controller' => 'projetos', 'action' => 'edit')));
?>
<div class="row">
    <div class="small-12 medium-6 large-12 columns">
        <?php 
        echo '<center>'.$this->Html->image('projeto/'.$leitura['Projeto']['id'].'-'.$leitura['Projeto']['imagem'], array('width' => '500px')).'<center>';
        echo $this->Form->input('Projeto.imagem', array('type' => 'file', 'label' => false));
        ?>
    </div>
</div>
<?php
echo $this->Form->input('Projeto.descricao',array('label'=>'<b>Descrição</b>','rows'=>5)).'<br/>';
echo $this->Form->submit('Salvar',array('class'=>'button success radius'));
?>


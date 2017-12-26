<?php echo $this->element('admin_menu') ?>

<center><div class="row"><div class="xxlarge-12 columns" style="background: #AECDD0"><h3>Adicionar Tag</h3></div></div></center>
<br/>
<?php
echo $this->Form->create('Tag');
echo $this->Form->input('Tag.nome',array('label'=>'<b>Tags</b>'));
echo '<br/>'.$this->Form->submit('Salvar',array('class'=>'button small radius success','style'=>'float:left'));
echo $this->Html->link('Voltar',array('controller' => 'posts', 'action' => 'admin_index'),array('class'=>'button small radius info','style'=>'margin-left: 20px'));
echo $this->Form->end();
?>

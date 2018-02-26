<?php 
echo $this->element('admin_menu') ;
echo $this->Form->create('Projeto', array('type' => 'file', 'url' => array('controller' => 'projetos', 'action' => 'add')));
echo $this->Form->input('Projeto.imagem', array('type' => 'file','label'=>''));
echo $this->Form->input('Projeto.descricao',array('label'=>'<b>Descrição</b>','rows'=>3)).'<br/>';
//echo $this->Form->input('Projeto.tipo', array('options' => array('Desktop'=>'Desktop','Web'=>'Web','Mobile' => 'Mobile'), '' => '')).'<br />';
echo $this->Form->submit('Salvar',array('class'=>'button success radius'));
?>

<?php echo $this->element('admin_menu') ?>
<h1>Editar Post</h1>
<?php debug($categorias);
echo $this->Form->create('Post', array('type' => 'file', 'url' => array('admin'=>true,'controller' => 'posts', 'action' => 'edit')));
?>
<div class="row">
    <div class="small-12 medium-6 large-6 columns">
        <center><?php echo $this->Html->image('blog/'.$post['Post']['id'].'-'.$post['Post']['imagem'], array('width' => '200px')); ?></center>
    </div>
    <div class="small-12 medium-6 large-6 columns">
        <?php echo $this->Form->input('Post.imagem', array('type' => 'file', 'label' => false)); ?>
    </div>
</div>
<?php
echo $this->Form->input('Post.title', array('label' => '<b>Título</b>'));
echo $this->Ck->input('Post.body', array('rows' => '3','label'=>' '));
echo $this->Form->hidden('Post.id');
echo $this->Form->input('Post.Tag', array('multiple'=>'checkbox','options'=>$tags,'label'=>'<b>Tags</b>'));
echo $this->Form->input('Post.categoria_id', array('type'=>'select','options'=>$categorias,'label'=>'<b>Categorias</b><br/>'));
echo $this->Form->submit('Salvar', array('class' => 'button small radius success', 'style' => 'float:left'));
echo $this->Html->link('Voltar', array('admin'=>true,'controller' => 'posts', 'action' => 'index'), array('class' => 'button small radius info', 'style' => 'margin-left: 20px'));
echo $this->Form->end();
?>

<?php echo $this->element('admin_menu') ?>
<center>
    <div class="row">
        <div class="xxlarge-12 columns" style="background: #AECDD0">
            <h3>Adicionar Post</h3>
        </div>
    </div>
</center>
<br/>
<?php
echo $this->Form->create('Post', array('type' => 'file', 'url' => array('controller' => 'posts', 'action' => 'add')));
echo $this->Form->input('Post.imagem', array('type' => 'file','label'=>''));
echo $this->Form->input('Post.title',array('label'=>'<b>Título</b>',/*'style' => 'width: 500px;'*/));
echo $this->Ck->input('Post.body', array('rows' => '3','label'=>' '));
echo $this->Form->input('Post.Tag', array('multiple'=>'checkbox','options'=>$tags,'label'=>'<b>Tags</b>'));
echo $this->Form->input('Post.categoria_id', array('type'=>'select','options'=>$categorias,'label'=>'<b>Categorias</b>'));
echo '<br/>'.$this->Form->submit('Salvar',array('class'=>'button small radius success','style'=>'float:left'));
echo $this->Html->link('Voltar',array('controller' => 'posts', 'action' => 'admin_index'),array('class'=>'button small radius info','style'=>'margin-left: 20px'));
echo $this->Form->end();
?>
<script src="//cdn.ckeditor.com/4.4.7/basic/ckeditor.js">

</script>
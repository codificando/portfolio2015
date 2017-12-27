<!--Visualização do conteúdo do post-->
<br/>
<center>
    <div class="row">
        <div class="xxlarge-12 columns">
            <?php //debug($post);?>
            <h3><?php echo '<i>' . $post['Post']['title'] . '</i>' ?></h3>
        </div>
    </div>
</center>
<br/>

<?php echo '<center>' . $this->Html->image('blog/' . $post['Post']['id'] . '-' . $post['Post']['imagem'], array('style' => 'width: 300px')) . '</center>'; ?>
<p><?php echo '<center>' . $post['Post']['body'] . '</center>' ?></p>
<p><small>Criado em: <?php echo $this->Time->format('d-m-Y', $post['Post']['created']); ?></p>
<b>Tags: </b>
<?php
echo implode(', ', Set::extract('Tag.{n}.nome', $post));
?>
<br/>
<?php echo '<b>Categorias: </b>' . $post['Categoria']['categoria'] ?>
<h3>Comentários</h3>
<table role="grid" width="100%">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Comentário</th>
        <th>Comentado em:</th>
        <th>Ação</th>
    </tr>
<?php foreach ($post['Comentario'] as $comentario): ?>
        <tr>
            <td><?php echo $comentario['id'] . '<br/>'; ?></td>
            <td><?php echo $comentario['nome'] . '<br/>'; ?></td>
            <td><?php echo $comentario['comentario'] . '<br/>'; ?></td>
            <td><?php echo $comentario['created'] . '<br/>'; ?></td>
            <td><?php echo $this->Form->postLink('Excluir', array('admin' => true, 'controller' => 'comentarios', 'action' => 'delete', $comentario['id'], $this->params['pass']['0']), array('confirm' => 'Você tem certeza?', 'class' => 'button small  radius alert')); ?></td>
<?php endforeach; ?></p>
</table>
<?php echo $this->Html->link('Voltar', array('controller' => 'posts', 'action' => 'admin_index'), array('class' => 'button small radius info')); ?>
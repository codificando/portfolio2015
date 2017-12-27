<br/>
<center><div class="row"><div class="xxlarge-12 columns" style="background: #AECDD0"><h3><?php echo $post['Post']['title'] ?></h3></div></div></center>
<br/>
<p><small><center>Created: <?php echo $this->Time->format('d-m-Y', $post['Post']['created']) . '</center>'; ?></p>
            <?php
            echo '<center>' . $this->Html->image('blog/' . $post['Post']['id'] . '-' . $post['Post']['imagem'], array('width' => '200px')) . '</center>';
            ?>
            <p><?php echo $post['Post']['body']; ?>
                <b>Tags: </b>
<?php
echo implode(', ', Set::extract('Tag.{n}.nome', $post));
?>
<br/>
<?php echo '<b>Categorias: </b>' . $post['Categoria']['categoria'] ?>

            <h3>Comentários</h3>
            <?php
            foreach ($post['Comentario'] as $comentario):
                echo $comentario['nome'] . '<br/>';
                //echo $comentario['email'].'<br/>';
                echo $comentario['comentario'] . '<br/>';
                echo $comentario['created'] . '<br/>';
            endforeach;
            ?></p>
            <h3>O que achou do post?!</h3>
            <?php echo $this->Form->create('Comentario', array('controller' => 'comentarios', 'action' => 'add')) ?>
            <div class="row">
                <div class="small-12 medium-6 large-4 columns">
                    <?php echo $this->Form->input('Comentario.nome'); ?>
                </div>
                <div class="row">
                    <div class="small-12 medium-6 large-4 columns">
                        <?php echo $this->Form->input('Comentario.email'); ?>
                    </div>
                </div>

                <div class="small-12 medium-6 large-8 columns">
                    <?php
                    echo $this->Form->input('Comentario.comentario');
                    echo $this->Form->hidden('Comentario.post_id', array('value' => $post['Post']['id'])) . '<br/>';
                    echo $this->Form->submit('Enviar', array('class' => 'button small radius success'));
                    echo $this->Form->end();
                    ?>
                </div>
            </div>
            <?php echo $this->Html->link('Voltar', array('controller' => 'posts', 'action' => 'index'), array('class' => 'button right small radius info')); ?>
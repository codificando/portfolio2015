<?php echo $this->element('admin_menu') ?>

<center>
    <ul class="button-group round">
        <?php //echo '<li>'.$this->Html->link('Contato', array('controller' => 'contatos', 'action' => 'enviar'),array('class'=>'button ')).'</li>'; ?>
        <?php //echo '<li>' . $this->Html->link('Adicionar Post', array('admin' => true, 'controller' => 'posts', 'action' => 'add'), array('class' => 'button')) . '</li>'; ?>
        <?php //echo '<li>' . $this->Html->link('Adicionar Tag', array('admin' => true, 'controller' => 'tags', 'action' => 'add'), array('class' => 'button')) . '</li>'; ?>
        <?php //echo '<li>' . $this->Html->link('Adicionar Categoria', array('admin' => true, 'controller' => 'categorias', 'action' => 'add'), array('class' => 'button')) . '</li>'; ?>
    </ul>
</center>

<?php echo $this->Form->create('Post', array('class' => 'form', 'url' => array('admin' => true, 'controller' => 'posts', 'action' => 'search'))); ?>
<div class="row">
    <div class="large-5 columns">
        <div class="row collapse postfix-round">
            <div class="small-9 columns">
                <?php echo $this->Form->input('Post.buscar', array('label' => '', 'placeholder' => 'Buscar por título')); ?>
            </div>
            <div class="small-3 columns">
                <?php echo $this->Form->submit('Ok', array('class' => 'button postfix')); ?>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
    <div class="large-6 columns">
         <ul class="button-group round">
        <?php echo '<li>' . $this->Html->link('Adicionar Post', array('admin' => true, 'controller' => 'posts', 'action' => 'add'), array('class' => 'button small')) . '</li>'; ?>
        <?php echo '<li>' . $this->Html->link('Adicionar Tag', array('admin' => true, 'controller' => 'tags', 'action' => 'add'), array('class' => 'button small')) . '</li>'; ?>
        <?php echo '<li>' . $this->Html->link('Adicionar Categoria', array('admin' => true, 'controller' => 'categorias', 'action' => 'add'), array('class' => 'button small')) . '</li>'; ?>
    </ul>
    </div>
</div>

<table role="grid" width="100%">
    <tr>
        <th>#</th>
        <th><?php echo $this->Paginator->sort('title', 'Título') ?></th>
        <th><?php echo $this->Paginator->sort('created', 'Data de criação') ?></th>
        <!--<th>Imagem</th>-->
        <th>Ações</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($posts as $p): ?>
        <tr>
            <td><?php echo $p['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($p['Post']['title'], array('admin' => true, 'controller' => 'posts', 'action' => 'view', $p['Post']['id']));
                ?>
            </td>
            <!--DATA FORMATADA-->
            <td><?php echo $this->Time->format('d-m-Y', $p['Post']['created']); ?></td>
            <td> <?php echo $this->Html->link('Editar', array('admin' => true, 'controller' => 'posts', 'action' => 'admin_edit', $p['Post']['id']), array('class' => 'button small radius default')) ?>
                <?php
                echo $this->Form->postLink('Excluir', array('admin' => true, 'controller' => 'posts', 'action' => 'delete', $p['Post']['id']), array('confirm' => 'Você tem certeza?', 'class' => 'button small  radius alert'));
                ?>
            </td>
                <!--<td><?php //echo $this->Html->image($p['Post']['imagem'],array('height'=>'100px'));                ?></td>-->
        </tr>
    <?php endforeach; ?>
            
</table>
<?php echo $this->element('paginacao') ?>


<?php echo $this->element('admin_menu') ?>

<center><ul class="button-group round">
        <?php //echo '<li>'.$this->Html->link('Contato', array('controller' => 'contatos', 'action' => 'enviar'),array('class'=>'button ')).'</li>'; ?>
        <?php echo '<li>' . $this->Html->link('Adicionar Post', array('admin'=>true,'controller' => 'posts', 'action' => 'add'), array('class' => 'button')) . '</li>'; ?>
        <?php echo '<li>' . $this->Html->link('Adicionar Tag', array('admin'=>true,'controller' => 'tags', 'action' => 'add'), array('class' => 'button')) . '</li>'; ?>
        <?php echo '<li>' . $this->Html->link('Adicionar Categoria', array('admin'=>true,'controller' => 'categorias', 'action' => 'add'), array('class' => 'button')) . '</li>'; ?>
 </ul></center>
<table role="grid" width="100%">
    <tr>
        <th>#</th>
        <th><?php echo $this->Paginator->sort('title','Título')?></th>
        <th><?php echo $this->Paginator->sort('created','Data de criação')?></th>
        <!--<th>Imagem</th>-->
        <th>Ações</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($result as $r): ?>
        <tr>
            <td><?php echo $r['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($r['Post']['title'], array('admin'=>true,'controller' => 'posts', 'action' => 'view', $r['Post']['id']));
                ?>
            </td>
            <!--DATA FORMATADA-->
            <td><?php echo $this->Time->format('d-m-Y', $r['Post']['created']); ?></td>
            <td> <?php echo $this->Html->link('Editar', array('admin'=>true,'controller' => 'posts', 'action' => 'admin_edit', $r['Post']['id']), array('class' => 'button small radius default')) ?>

                <?php
                echo $this->Form->postLink('Excluir', array('admin'=>true,'controller' => 'posts','action' => 'delete', $r['Post']['id']),  array('confirm' => 'Você tem certeza?','class' => 'button small  radius alert'));
                ?>
            </td>
                <!--<td><?php //echo $this->Html->image($p['Post']['imagem'],array('height'=>'100px'));           ?></td>-->
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->element('paginacao') /*<-Perguntar */?>
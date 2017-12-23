<?php echo $this->element('admin_menu') ;
 //debug($contatos);
        ?>
<table role="grid" width="100%">
    <tr>
        <th>#</th>
        <th><?php echo $this->Paginator->sort('nome', 'Título') ?></th>
        <th><?php echo $this->Paginator->sort('email', 'Email') ?></th>
        <th><?php echo $this->Paginator->sort('assunto_email', 'Assunto') ?></th>
        <th>Ação</th>
    </tr>
    <?php foreach ($contatos as $c): ?>
        <tr>
            <td><?php echo $c['Contato']['id']; ?></td>
            <td>
               <?php echo $this->Html->link($c['Contato']['nome'], array('admin' => true, 'controller' => 'contatos', 'action' => 'view', $c['Contato']['id']));
                ?>
            </td>
            <td>
                <?php echo $c['Contato']['email']; ?> 
            </td>
            <td>
                <?php echo $c['Contato']['assunto_email']; ?> 
            </td>
            <td>
                <a href="http://outlook.com" target="_blank">Entrar no Outlook</a>
            </td>
            <?php
            //echo $this->Form->postLink('Excluir', array('admin' => true, 'controller' => 'posts', 'action' => 'delete', $c['Post']['id']), array('confirm' => 'Você tem certeza?', 'class' => 'button small  radius alert'));
            ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php echo $this->element('admin_menu') ?>
<br/>
<div class="row">
    <div class="small-12 medium-12 large-12 xlarge-12 columns pizza">
        <ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 xlarge-block-grid-2" >
            <?php foreach ($projetos as $p): ?>
                <li>
                <center>
                    <?php echo '<center>'.$this->Html->image('projeto/'.$p['Projeto']['id'].'-'.$p['Projeto']['imagem']); ?>
                    <?php echo $p['Projeto']['descricao'] ?><br/><br/>

                   <ul class="button-group round">
                        <?php echo '<li>'.$this->Html->link('Editar', array('admin' => true, 'controller' => 'projetos', 'action' => 'edit', $p['Projeto']['id']), array('class' => 'button tiny radius default')).'</li>' ?>
                        <?php echo '<li>'.$this->Form->postLink('Excluir', array('admin' => true, 'controller' => 'projetos', 'action' => 'delete', $p['Projeto']['id']), array('confirm' => 'Você tem certeza?', 'class' => 'button tiny radius info')).'</li>' ?>
                    </ul>
                </center>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</div>
<?php echo $this->element('paginacao') ?>

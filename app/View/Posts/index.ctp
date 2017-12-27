<center><div class="row"><div class="xxlarge-12 columns" style="background: #AECDD0"><h3>Posts do Blog</h3></div></div></center>
<br/>
<table role="grid" width="100%">
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Data de Criação</th>
        <!--<th>Imagem</th>-->
       
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php 
    foreach ($posts as $p): ?>
        <tr>
            <td><?php echo $p['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($p['Post']['title'], array('controller' => 'posts', 'action' => 'view', $p['Post']['id']));
                ?>
            </td>
            <td><?php echo $this->Time->format('d-m-Y', $p['Post']['created']); ?></td>
            <!--DATA FORMATADA-->
            
                <!--<td><?php   //echo '<center>' . $this->Html->image('blog/' . $p['Post']['id'] . '-' . $p['Post']['imagem'], array('width' => '200px')) . '</center>'?>;</td>-->
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->element('paginacao') ?>

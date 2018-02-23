<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        //echo $this->Html->css('cake.generic');
        echo $this->Html->css('foundation.min');
        echo $this->Html->css('foundation-icons');
        echo $this->Html->css('normalize');


        echo $this->Html->script('vendor/jquery');
        echo $this->Html->script('foundation.min');
        echo $this->Html->script('vendor/modernizr');
        echo $this->Html->script('ckeditor/ckeditor.js');
        
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>

    <body style="background:#C3CFD1">
        <div class="row">
            <div class="xxlarge-12 columns" <!--style="background-color: #CCD6F1"-->
                 <div class="container">
                    <div id="header">
                      <!--  <h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org');        ?></h1>-->
                    </div>
                </div>

                <div id="content" style="padding-bottom: 20px">
                    <?php $usuario = $this->Session->read('nome'); ?>

                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>
                </div>
                <div id="footer">
                    <?php //echo $this->Html->link($this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered'));?>
                    <p>
                        <?php //echo $cakeVersion; ?>
                    </p>

                    <?php echo $this->element('sql_dump'); ?>

                    </body>
                </div>
            </div>
</html>

<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>BelezinhaFut</title>
        <?php 
            echo $this->Html->css('bootstrap.min.css');
            echo $this->Html->css('starter-template.css');
        ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <?php 
                echo $this->Html->link('BelezinhaFut', '/', array('escape' => false, 'class' => 'navbar-brand')); 
            ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <?php echo $this->Html->link('Jogadores', '/jogadors', array('class' => 'nav-link')); ?>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="container" id="content"> 
            <?php 
                echo $this->Flash->render(); 
                echo $this->fetch('content');
            ?>
        </main>
        <?php
            echo $this->Html->script('jquery-3.4.1.min.js');
            echo $this->Html->script('bootstrap.bundle.min.js');
            echo $this->Js->writeBuffer();
        ?>
    </body>
</html>
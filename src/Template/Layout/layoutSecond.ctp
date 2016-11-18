<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('headSecond') ?>

</head>
<body class="row">
    <div class="col-md-12 col-xs-12">
        <?= $this->element('layoutSecondHeader') ?>
             
    </div>
    <!-- Page Content -->
    <div id="content" class="container col-md-11 col-md-push-1 col-xs-12  ">
       
        <?php
        if (!empty($this->request->session()->read('Auth.User.role')) && $this->request->session()->read('Auth.User.role') === 'author'):
        ?>

        <div class="row col-md-9" id="MainDiv">
         <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
        <div class="col-md-3" id="rightDiv"> 
            <?= $this->element('sidepanel') ;?>  
        </div>
        <?php
        else :
        ?>
        <div class="row" id="MainDiv">
         <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
        </div>
        <?php
        endif;
        ?>
    </div>
    <?= $this->element('layoutFirstFooter') ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('headFirst') ?>


</head>
<body>
    <div class="row">
            <div class=" col-md-12 col-xs-12">
                <?= $this->element('layoutFirstHeader') ?>
                   
            </div>
        <!-- Page Content -->
            <?= $this->Flash->render() ?>
           
            <?php
       /* if (!empty($this->request->session()->read('Auth.User.role')) && $this->request->session()->read('Auth.User.role') === 'author'):
        ?>

        <div class="col-md-9 col-xs-12 ">
                <?= $this->fetch('content') ?> 
         
            </div> 
        <div class="col-md-3" id="rightDiv"> 
            <?= $this->element('sidepanel') ;?>  
        </div>
        <?php
        else :*/
        ?>
        <div class="col-md-push-1 col-md-11 col-xs-12 col-xs-push-0">
                <?= $this->fetch('content') ?> 
         
            </div> 
        <?php
      //  endif;
        ?>   
        
        <div class="col-md-12 col-xs-12">
            <?= $this->element('layoutFirstFooter') ?>    
        </div>
            
    </div>
    
</body>
</html>
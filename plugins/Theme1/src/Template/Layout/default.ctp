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
            <div class="col-md-9 col-xs-12 ">
                <?= $this->fetch('content') ?> 
         
            </div> 
        <div class="col-md-3" id="rightDiv"> 
            <?= $this->element('sidepanel') ;?>  
        </div>       
        <div class="col-md-12 col-xs-12">
            <?= $this->element('layoutFirstFooter') ?>    
        </div>
            
    </div>
    
</body>
</html>
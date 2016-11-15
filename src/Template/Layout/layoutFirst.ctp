
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('head') ?>

    <?php echo $this->Html->css('layout1.css'); ?>
    <?php echo $this->Html->css('responsive1.css'); ?>

</head>
<body>
    <div class="row">
            <div class=" col-md-12 col-xs-12">
                <?= $this->element('layoutFirstHeader') ?>
                   
            </div>
        <!-- Page Content -->
            <?= $this->Flash->render() ?>
           <div class="col-md-push-1 col-md-11 col-xs-12 col-xs-push-0">
                <?= $this->fetch('content') ?> 
         
            </div> 
               
        
        <div class="col-md-12 col-xs-12">
            <?= $this->element('layoutFirstFooter') ?>    
        </div>
            
    </div>
    
</body>
</html>
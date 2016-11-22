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
       

        <div class="row col-md-9" id="MainDiv">
         <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
        <div class="col-md-3" id="rightDiv"> 
            <?= $this->element('sidepanel') ;?>  
        </div>       
    </div>
    <?= $this->element('layoutFirstFooter') ?>
</body>
</html>
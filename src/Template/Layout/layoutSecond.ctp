
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('head') ?>
</head>
<body class="row">
    <div class="col-md-12 col-xs-12">
        <?= $this->element('layoutSecondHeader') ?>
             
    </div>
    <!-- Page Content -->
    <div id="content" class="container col-md-10 col-md-push-1 col-xs-12  ">
        <?= $this->Flash->render() ?>
        <div class="row" id="MainDiv">
            <?= $this->fetch('content') ?>

        </div>
    </div>
    <?= $this->element('layoutFirstFooter') ?>
</body>
</html>
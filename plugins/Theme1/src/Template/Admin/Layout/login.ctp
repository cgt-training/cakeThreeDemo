<!DOCTYPE html>
<html >
  <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Admin Login</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Example snippet for a Bootstrap login form modal" />
              
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
       <?php echo $this->Html->css('frontbootstrap.min.css');?>
       
        <style type="text/css">
            .modal-footer {   border-top: 0px; }
            
            .alert-danger, .alert-error {
                background-color: #f2dede;
                border-color: #eed3d7;
                color: #b94a48;
            }
            .alert, .alert h4 {
                color: #c09853;
            }
        </style>
    </head>
  <body>
  
<?= $this->Form->create() ?>
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">

  <div class="modal-dialog">

  <div class="modal-content">

      <div class="modal-header">    
          <h4 class="text-center"><?= $this->Flash->render() ?></h4>      
          <h1 class="text-center"><?=__("Login")?></h1>
      </div>
      <div class="modal-body">
      <?php echo $this->fetch('content');?>
      </div>
      <div class="modal-footer" style="border: none;">
          <div class="col-md-12">          
      </div>  
      </div>
  </div>
  </div>
</div>
 <?= $this->Form->end() ?>
  </body>
</html>

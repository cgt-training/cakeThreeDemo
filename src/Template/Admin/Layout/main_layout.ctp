<!DOCTYPE html>
<html class="no-js">    
 <head>
  <?php echo $this->element('main_head');?>     
 </head>
<body>
<?php echo $this->element('main_header');?>
        <div class="container-fluid" >
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                <?php echo $this->element('main_sidebar');?>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                <?=$this->fetch('content');?>
                </div>
            </div>
         </div> 
            <hr>
        <footer class="container-fluid" style="position: fixed;bottom: 0;text-align: center;">
            <p>&copy; Technosoft 2016</p>
        </footer>
              
    </body>

</html>
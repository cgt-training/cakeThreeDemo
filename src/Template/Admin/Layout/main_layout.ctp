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
                <div class="row-fluid">
                <div class="navbar">
                    <div class="navbar-inner">
                        <ul class="breadcrumb">
                            <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                            <li>
                                <?php echo $this->Html->getCrumbs(' <span class="divider">/</span> ',  [ 'text' => __('<i class="icon-home"></i> '.__('Dashboard')), 'url' => ['controller'=>'dashboards','action' => 'display'],  'escape' => false,'class'=>'AjaxLink']);?>   
                            </li>
                        </ul>
                    </div>
                </div>
</div>
                
               <div id="MainContent"><?=$this->fetch('content');?></div>
                
                </div>
            </div>
         </div> 
            <hr>
        <footer class="container-fluid" style="position: fixed;bottom: 0;text-align: center;">
            <p>&copy; Technosoft 2016</p>
        </footer>
              
    </body>

</html>
<?php
    echo $this->Html->css(['bootstrap.min.css',
        'bootstrap-responsive.min.css',       
        'styles.css','DT_bootstrap.css','datepicker.css','chosen.min.css','uniform.default.css']);
     echo $this->Html->script([
            'vendor/modernizr-2.6.2-respond-1.1.0.min.js',
            'vendor/jquery-1.9.1.min.js',
            'vendor/jquery.uniform.min.js',
            'vendor/chosen.jquery.min.js',
            'vendor/bootstrap-datepicker.js',
            'bootstrap.min.js',
            'jquery.dataTables.min.js',
            'jquery.validate.min.js',
            'form-validation.js',
            'scripts.js',
            'DT_bootstrap.js']);
    
    ?>
        <title>Admin Home Page</title>        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->  

            <script>
jQuery(document).ready(function() {   
       FormValidation.init();
    });
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();           
        });
        </script>
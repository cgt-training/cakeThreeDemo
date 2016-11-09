<?php
    echo $this->Html->css(['bootstrap.min.css',
        'bootstrap-responsive.min.css',       
        'styles.css','DT_bootstrap.css']);
     echo $this->Html->script([
            'vendor/modernizr-2.6.2-respond-1.1.0.min.js',
            'vendor/jquery-1.9.1.min.js',
            'bootstrap.min.js',
            'jquery.dataTables.min.js',
            'scripts.js',
            'DT_bootstrap.js']);
    
    ?>
        <title>Admin Home Page</title>        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->  
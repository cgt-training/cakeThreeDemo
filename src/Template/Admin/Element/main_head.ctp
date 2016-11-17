<?php
$RequestAction = $this->request->params['action'];
$RequestController = $this->request->params['controller'];

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
    <style type="text/css">
.search{
    width: 100px;
}

    </style>
        <title>Admin Home Page</title>        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->  

            <script>
            var RequestAction = '<?=$RequestAction?>';
           // alert(RequestAction);
            function DatatableLoad()
            {
                        // Setup - add a text input to each footer cell
            $('.TableDataClass tfoot th').each( function () {
                var title = $(this).text();
                if(title!='#' && title!='Actions')
                $(this).html( '<input type="text" class="search" placeholder="Search '+title+'" />' );
            } );
         
            // DataTable
            var table = $('.TableDataClass').DataTable();
         
            // Apply the search
            table.columns().every( function () {
                var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
            }
        $(document).on('click', '.ajaxRefresh', function(){
        $.ajax({
        url: this.href,
        type: 'ajax',
        success: function(data) {
           // alert(data);
            $('#MainContent').html(data);
            DatatableLoad();
        }
            }); 

                return false;
            });     
    $(document).ready(function() {   
       FormValidation.init();
       DatatableLoad();
    });
    $(function() {
        $(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();           
    });

    $(function(){
         if(RequestAction=='index'){
                  (function worker() {
                  //   alert("hello");
                   $.ajax({
                     url : window.location.href,
                      type: 'ajax',
                     success: function(data) {
                       $('#MainContent').html(data);
                       DatatableLoad();
                     },
                     complete: function() {
                       setTimeout(function(){ // use this way
                          worker();
                       }, 50000);
                     }
                   });
                 })();
             }
             else
             {
                //alert("not index");
             }
    });
    
</script>
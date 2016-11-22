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
            var table = $('.TableDataClass').DataTable({
                     "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url": "<?php echo $this->Url->build(["action" => "indexAjax"]);?>"
                        //"dataSrc": "jsonData"
                    },
                      "columnDefs": [
                            {
                                "targets": 0,
                                 "searchable": false,
                                "orderable": false
                               
                            },
                            {
                                "targets": -1,
                                "searchable": false,
                                "orderable": false,
                               
                            } ],
                    "order": [[ 1, 'asc' ]],
                    "fnDrawCallback":function(){
                        table_rows = this.fnGetNodes();
                        $.each(table_rows, function(index){
                        PKeyId   = $("td:first", this).html();
                        HtmltoLoad = '<?= $this->Html->link(__('<i class="icon-eye-open"></i>'), ['action' => 'view','---KeyId---'],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?><?= $this->Html->link(__('<i class="icon-edit"></i>'), ['action' => 'edit','---KeyId---'],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?><?= $this->Form->postLink(__('<i class="icon-remove"></i>'), ['action' => 'delete','---KeyId---'], 
                                   ['confirm' => __('Are you sure you want to delete # {0}?','---KeyId---'),'escape'=>false,'title'=>'Delete','class'=>'DeleteAjaxLink']) ?>'.replace(/\---KeyId---/g, PKeyId);
                        $("td:last", this).html(HtmltoLoad); 
                        $("td:first", this).html(index+1);                       
                        });
                    }
                });
         
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
       $('.DeleteAjaxLink').removeAttr('onclick');
    });
    $(function() {
        $(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();           
    });
    $(function(){

    

    $(document).on('click', '.DeleteAjaxLink', function(e){
//alert("fgdfg0");
        e.preventDefault();
        var form = $(this).prev();
        var url = $(form).attr("action");
        $(form).submit();      
        return false;
    });

});

   /** $(function(){
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
    });**/  
    
</script>
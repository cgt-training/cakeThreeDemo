	<div class="row back">
		
		<nav class="navbar navbar-inverse  ">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
			      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			   	    </button>
		     <a class="navbar-brand" href="#">WebSiteName</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav">
								   

				</ul>
				    <ul class="nav navbar-nav navbar-right">
				      	<li>
				 			<?php 
				 				echo $this->Html->link('Blog',
				 					['controller' => 'BlogPosts', 
				 					'action' =>'index']
				 				); 
				 			?>
				 		</li>
				 		<li>
				 			<?php 
				 				echo $this->Html->link('Articles',
				 					['controller' => 'Articles', 
				 					'action' =>'index']
				 				); 
				 			?>
				 		</li>
				 		<li>
				 			<?php 
				 				echo $this->Html->link('Enquiry',
				 					['controller' => 'Enquiry', 
				 					'action' =>'index']
				 				); 
				 			?>
				 		</li>		   
				 		<li>
				 			<?php 
				 				echo $this->Html->link('Products',
				 					['controller' => 'Products', 
				 					'action' =>'index']
				 				); 
				 			?>
				 		</li>
				 		<li>
				 			<?php 
				 				echo $this->Html->link('Users',
				 					['controller' => 'Users', 
				 					'action' =>'index']
				 				); 
				 			?>
				 		</li>
				 		<li>
				 			<?php 
				 				echo $this->Html->link('Comments',
				 					['controller' => 'Comment', 
				 					'action' =>'index']
				 				); 
				 			?>
				 		</li>
				 		<li>
				 			<?php 
				 				if(!$this->request->session()->read('Auth.User.username'))
				 				{
				 					// $this->Html->link(__('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>'), ['action' => 'view'],['escape'=>false,'title'=>'View','class'=>'AjaxLink']);

					 					echo $this->Html->link('Register',
				 						['controller' => 'Users', 
				 						'action' =>'add']
				 					); 
				 				}
				 			?>
				 		</li>
				 		<li>
				 			<?php 
				 				if($this->request->session()->read('Auth.User.username'))
				 				{
				 					echo $this->Html->link('Logout',
				 						['controller' => 'Users', 
				 						'action' =>'logout']
				 					); 
				 				}

				 				else
				 				{							
				 					echo $this->Html->link('Login',
				 						['controller' => 'Users', 
				 						'action' =>'Login']
				 					); 
				 				}
				 			?>
				 		</li>
				    </ul>
			    
		    </div>
		  </div>
		</nav>

		<div class="row">
			<div class="col-md-12">
				<h1 style="color:white; font-size: 5.9vw" align="center">Necesitas Clases</h1>
				<h3 style="color:white; font-size:3vw" align="center">Busta.Contata.Aprnde</h3>
			</div>
		</div>

		<div class="row" style="margin-top: 2%;">
			<div class="col-md-4 col-xs-4">
				<div class="circle" id="div"></div>
				<h3 style="color:white; font-size:3vw" align="center">Tutor Academy</h3>

			</div>
			<div class="col-md-4 col-xs-4 ">

							<div class="circle" style="text-align: center;" id="div1"></div>
	
				<h3 style="color:white; font-size:3vw" align="center">Tutor Academy</h3>
			</div>
			<div class="col-md-4 col-xs-4">
					<div class="circle" id="div2"></div>
			
				<h3 style="color:white; font-size:3vw" align="center">Tutor Academy</h3>
			</div>
		</div>

		<div class="row" id="h1">
			
			<div class="col-md-push-1 col-md-3 col-xs-5 col-xs-push-1">
			<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Keyword   Menu">

			</div>

			<div class="col-md-2 col-md-push-1 col-xs-5 col-xs-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="State">

				 </div>
			</div>
			<div class="col-md-2 col-md-push-1 col-xs-5 col-xs-push-1 txtbox">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="Location">

				 </div>
			</div>

			<div class="col-md-2 col-md-push-1 col-xs-5 col-xs-push-1 txtbox">
				<div class="dropdown">
<button type="button" class="btn btn-warning" style="width: 100%;">Submit</button>

				 </div>
			</div>
		</div>


		<div class="row" id="h2">
			
			<div class="col-md-push-1 col-md-3 col-xs-5 col-xs-push-1">
			<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Keyword  Menu 1">

			</div>

			<div class="col-md-push-1 col-md-2 col-xs-5 col-xs-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="State">

				 </div>
			</div>
			<div class="col-md-push-1 col-md-2 col-xs-5 col-xs-push-1 txtbox">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="Location">

				 </div>
			</div>

			<div class="col-md-push-1 col-md-2 col-xs-5 col-xs-push-1 txtbox">
				<div class="dropdown">
<button type="button" class="btn btn-warning" style="width: 100%;">Submit</button>

				 </div>
			</div>
		</div>

		<div class="row" id="h3">
			
			<div class="col-md-push-1 col-md-3 col-xs-5 col-xs-push-1">
			<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Keyword   Menu 2">

			</div>

			<div class="col-md-push-1 col-md-2 col-xs-5 col-xs-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="State">

				 </div>
			</div>
			<div class="col-md-push-1 col-md-2 col-xs-5 col-xs-push-1 txtbox">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="Location">

				 </div>
			</div>

			<div class="col-md-push-1 col-md-3 col-xs-5 col-xs-push-1 txtbox">
				<div class="dropdown">
<button type="button" class="btn btn-warning" style="width: 100%;">Submit</button>

				 </div>
			</div>
		</div>

	</div>
	<script type="text/javascript">
		$(function(){
		    $("#h3").hide();
		    $("#h2").hide();
		    debugger;
			    $(document).ready( function(){
						 debugger;
						 $("#h1").show();
						$("#h3").hide();
						$("#h2").hide();
						$('#div').css('background-color', 'red');

						$('#div1').css('background-color', 'yellow');
						$('#div2').css('background-color', 'yellow');

			    });
		    $("#div").on("click", function(){
					 debugger;
					 $("#h1").show();
					$("#h3").hide();
					$("#h2").hide();
					$('#div').css('background-color', 'red');

					$('#div1').css('background-color', 'yellow');
					$('#div2').css('background-color', 'yellow');

		    });
		    $("#div1").on("click", function(){
		   		 $("#h3").hide();
		  		  $("#h1").hide();
		        
					$("#h2").show();
					$('#div1').css('background-color', 'red');
					$('#div2').css('background-color', 'yellow');

							$('#div').css('background-color', 'yellow');
		    });
		    $("#div2").on("click", function(){
		    	$("#h1").hide();
			    $("#h2").hide();
		        
				$("#h3").show();
					$('#div').css('background-color', 'yellow');
					$('#div1').css('background-color', 'yellow');

				$('#div2').css('background-color', 'red');
		    });
		    $("#tg1").on("click", function(){
		    		$('#tg1').css('background-color', 'orange');
		    		$('#tg1').css('color', 'white');
					$('#tg2').css('background-color', 'black');
					$('#tg2').css('color', 'black');
					

		    });

		     $("#tg2").on("click", function(){
		    		$('#tg2').css('background-color', 'orange');
		    		$('#tg2').css('color', 'white');
					$('#tg1').css('background-color', 'black');
					$('#tg1').css('color', 'white');
					

		    });
		});
	</script>
<!-- 	<script type="text/javascript">
    $(document).ready(function() {
    $('.aja').click(function() {
       // alert(this.href);//return false;
       // UrlToSend = this.href;
       /* $.post(UrlToSend,
        function(result) {
            alert(result);
            $('body').html(result);
        });*/
        $.ajax({
        url: this.href,
        type: 'ajax',
        success: function(data) {
           // alert(data);
            $('#MainDiv').html(data);
        }
        });  
            return false;
        });
        //.change();
    });
      </script> -->
<div>
		

	<nav class="navbar navbar-inverse">
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
			 				if(!$this->request->session()->read('Auth.User.username'))
			 				{
			 					$this->Html->link(__('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>'), ['action' => 'view'],['escape'=>false,'title'=>'View','class'=>'AjaxLink']);

				 				// 	echo $this->Html->link('Register',
			 					// 	['controller' => 'Users', 
			 					// 	'action' =>'add']
			 					// ); 
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
		    <
	    </div>
	  </div>
	</nav>

		
	</div>

	<div class="container-fluid back">

	</div>
<?php

  	echo $this->Html->charset();


    echo $this->Html->css('frontbootstrap.min.css');
    // echo $this->Html->css('base.css');
    // echo $this->Html->css('cake.css');
    if(empty($this->request->session()->read('Auth.User'))):
    	 echo $this->Html->css('layout1.css'); 
    else :
    	 echo $this->Html->css('layout1_afterlogin.css'); 
    endif;
   
    echo $this->Html->css('responsive1.css');
    echo $this->Html->script('frontjquery-2.2.3.min.js');
    echo $this->Html->script('frontbootstrap.min.js');

?>
<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * BlogPosts Controller
 *
 * @property \App\Model\Table\BlogPostsTable $BlogPosts
 */
class DashboardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
        // var_dump($this->request->isAjax());
        if($this->request->isAjax())
        {
            $this->viewBuilder()->layout('ajax');
        }
        else
        {
            $this->viewBuilder()->layout('main_layout');
        }
    }
        
    public function display() {
          //   echo $this->TimeDiff->doComplexOperation(10,20);
        $this->set('PostsCount', TableRegistry::get('BlogPosts')->find('all')->count());
        $this->set('Posts', TableRegistry::get('BlogPosts')->find('all')->order(['created' => 'DESC'])->limit('5'));
        $this->set('ArticlesCount', TableRegistry::get('articles')->find('all')->count());
        $this->set('Articles', TableRegistry::get('articles')->find('all')->order(['created' => 'DESC'])->limit('5'));
        $this->set('EnquiryCount', TableRegistry::get('enquiry')->find('all')->count());
        $this->set('Enquiry', TableRegistry::get('enquiry')->find('all')->order(['id' => 'DESC'])->limit('5'));
        $this->set('Users', TableRegistry::get('Users')->find('all')->order(['created' => 'DESC'])->limit('5'));
        $this->set('ProductsCount', TableRegistry::get('Products')->find('all')->count()); 
        $this->set('Products', TableRegistry::get('Products')->find('all')->order(['created' => 'DESC'])->limit('5')); 
        $this->set('UsersCount',TableRegistry::get('Users')->find('all')->count());
    }

    
}

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie');

         if(isset($this->request->prefix) && ($this->request->prefix == 'admin')){
   
        $this->loadComponent('Auth', [   

            'authorize' => 'Controller',  

            'loginRedirect' => [
            'controller' => 'Dashboards',
            'action' => 'display',
            'prefix' => 'admin',
            // 'prefix' => false,
            ],

            'logoutRedirect' => [
            'controller' => 'users',
            'action' => 'login',
            'prefix' => false,
                
            ],

            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'username', 'password' => 'password']
                ]

            ],
            'storage' => [
                'className' => 'Session',
                'key' => 'Auth.Admin',              
            ],
            
            'authorize' => ['Controller'],
            
        ]);
        }
        else {
            $this->loadComponent('Auth', [
                    'loginRedirect' => [
                        'controller' => 'Articles',
                        'action' => 'index'
                    ],
                    'logoutRedirect' => [
                        'controller' => 'BlogPosts',
                        'action' => 'index'
                    ],
                       'authenticate'=>[
                    'Form'=>[
                        'fields'=>['username'=>'username','password'=>'password']
                    ],
                ],
             'storage' => [
                 'className' => 'Session',
                'key' => 'Auth.User',              
             ],
            
            'authorize' => ['Controller'],
            ]);

        }
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function isAuthorized($user = null)
    {

      // echo pr($_SESSION) ;exit;
        if (isset($this->request->params['prefix']) && $this->request->params['prefix'] === 'admin') 
        {
          // echo "test".$user['role'];exit;
            if($user['role'] != 'admin'){
                $this->Flash->error("Unauthorized access");     
               // $this->redirect(['controller' => 'Users','action' => 'logout']);
                return false;
            }
               return true;
        }  
        else
        {
            // Admin can access every action
            if (isset($user['role']) && $user['role'] === 'admin') {
                return true;
            }

            // Default deny
            //$this->Flash->error("Unauthorized access"); 
            //   $this->redirect(['action' => 'index']);
            return false;
        }
    }
    public function beforeFilter(Event $event)
    {
      $Settings = TableRegistry::get('Settings')->find()->first();
     //pr($Settings);
      $DefaultLang = $Settings['language'];
      if(!empty($Settings['layout_name'])){
            $DefaultLayout = $Settings['layout_name'];
      }
    else {
        $DefaultLayout = "layoutFirst";
      }
      I18n::locale($DefaultLang);
      if(isset($this->request->prefix) && ($this->request->prefix == 'admin')){
       // echo "hello";exit;
          if($this->request->isAjax()) {
              $this->viewBuilder()->layout('ajax');
          }
          else{
              $this->viewBuilder()->layout('main_layout'); 
          }
        }

         if(empty($this->request->prefix) && ($this->request->prefix !== 'admin'))
         {
            //$this->Auth->allow('index','view');
        
          $user=$this->request->session()->read('Auth.User');
          if($user)
          {
          $this->Auth->allow(['index','view','edit','delete','add']);
          }
          else
          {
            $this->Auth->allow(['index','view']);

          }
            $this->viewBuilder()->Layout($DefaultLayout);
           // $this->Auth->deny(); 
         }  
          $this->set('PostsCount', TableRegistry::get('BlogPosts')->find('all')->count());   
          $this->set('UsersCount', TableRegistry::get('Users')->find('all')->count());   
          $this->set('ArticlesCount', TableRegistry::get('articles')->find('all')->count());   
          $this->set('EnquiryCount', TableRegistry::get('enquiry')->find('all')->count());   
          $this->set('ProductsCount', TableRegistry::get('products')->find('all')->count());   
       
    }

    public function beforeRender(Event $event)
    {
       
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

       

    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ApiController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->Auth->allow(['test']);
    }

    public function index()
    {
        $BlogPosts = TableRegistry::get('BlogPosts')->find('all');
        $Articles = TableRegistry::get('Articles')->find('all');
        $jsonData = [

            "success"=>"1",
            "success_msg"=>"Data fetched!",
            "error"=>"0",
            "error_msg"=>"",
            "data"=>["BlogPosts"=>$BlogPosts,"Articles"=>$Articles] 

        ];
        echo json_encode($jsonData);

       // $this->set([
       //     'recipes' => $BlogPosts,
        //    '_serialize' => ['recipes']
        //]);
        exit;
    }
    public function test()
    {
       /* $Posts = TableRegistry::get('Posts')->
        find('all')
        ->select(['id','title',"user"=>'Users.username'])
        ->contain(['Users']);*/
         $Posts =   TableRegistry::get('Posts')->find('all')
        ->select(['id','title',"user"=>'Users.username'])
        ->select(TableRegistry::get('Posts')->Users)
        
        ->join([
          'Users' => [
              'table' => 'users',
              'type' => 'INNER',
              'conditions' => 'Users.id = Posts.user_id'
          ]
      ]);
        $Posts->hydrate(false);
        pr($Posts->toArray());
        
        $jsonData = [

            "success"=>"1",
            "success_msg"=>"Data fetched!",
            "error"=>"0",
            "error_msg"=>"",
            "data"=>["BlogPosts"=>$Posts] 

        ];
        echo json_encode($jsonData);

       // $this->set([
       //     'recipes' => $BlogPosts,
        //    '_serialize' => ['recipes']
        //]);
        exit;
    }

    public function view($id)
    {
        $recipe = $this->Recipes->get($id);
        $this->set([
            'recipe' => $recipe,
            '_serialize' => ['recipe']
        ]);
    }

    public function add()
    {
        $recipe = $this->Recipes->newEntity($this->request->data);
        if ($this->Recipes->save($recipe)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'recipe' => $recipe,
            '_serialize' => ['message', 'recipe']
        ]);
    }

    public function edit($id)
    {
        $recipe = $this->Recipes->get($id);
        if ($this->request->is(['post', 'put'])) {
            $recipe = $this->Recipes->patchEntity($recipe, $this->request->data);
            if ($this->Recipes->save($recipe)) {
                $message = 'Saved';
            } else {
                $message = 'Error';
            }
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $recipe = $this->Recipes->get($id);
        $message = 'Deleted';
        if (!$this->Recipes->delete($recipe)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}
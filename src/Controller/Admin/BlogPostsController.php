<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BlogPosts Controller
 *
 * @property \App\Model\Table\BlogPostsTable $BlogPosts
 */
class BlogPostsController extends AppController
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
        $this->loadComponent('DataTable'); // Include the FlashComponent       
        $this->viewBuilder()->layout('main_layout');
        

    }
    public function index()
    {
        $blogPosts = $this->paginate($this->BlogPosts); 
   
        $this->set(compact('blogPosts'));
        $this->set('_serialize', ['blogPosts']);
    }
      public function indexAjax()
    {
        $this->autoRender = false;
        $columns = [
          ['db'=>'id','dt'=>0],
          ['db'=>'name','dt'=>1],        
          ['db'=>'post_no','dt'=>2],
          ['db'=>'created','dt'=>3,
              'formatter' => function( $d, $row ) 
              {
                return date( 'd-m-Y H:m:s', strtotime($d));
              }],
          ['db'=>'modified','dt'=>4,
              'formatter' => function( $d, $row ) 
              {
                return date( 'd-m-Y H:m:s', strtotime($d));
              }],
          ['db'=>'flag','dt'=>5],
          ['db'=>'id','dt'=>6]
        ];
        $limit = array();
        //pr($this->request->query);
        $request = $this->request->query;
        $limit = $this->DataTable->limit( $request, $columns );
        $order = $this->DataTable->order( $request, $columns );
        $where = $this->DataTable->filter( $request, $columns);
        $Select = ($this->DataTable->pluck($columns, 'db'));
        $blogPosts = $this->BlogPosts->find()
        ->select($Select)
        ->Where($where)
        ->order($order)
        ->limit(@$limit[1])
        ->offset(@$limit[0])
        ;
        
        $recordsFiltered = $this->BlogPosts->find()->where($where)->count();
        $recordsTotal = $this->BlogPosts->find()->count();    
        $draw1 = isset ( $request['draw'] ) ?   intval( $request['draw'] ) : 0;
        $draw2 = $recordsTotal;
        $draw3 = $recordsFiltered;     
        $posts = $this->DataTable->data_output( $columns, $blogPosts->toArray() );
        echo json_encode([
                "draw"=>$draw1,
                "recordsTotal"=>$draw2,
                "recordsFiltered"=>$draw3,                
                "data"=>$posts 
            ]);
         exit;

    }

    /**
     * View method
     *
     * @param string|null $id Blog Post id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blogPost = $this->BlogPosts->get($id, [
            'contain' => []
        ]);

        $this->set('blogPost', $blogPost);
        $this->set('_serialize', ['blogPost']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blogPost = $this->BlogPosts->newEntity();
        if ($this->request->is('post')) {
            $blogPost = $this->BlogPosts->patchEntity($blogPost, $this->request->data);
            if ($this->BlogPosts->save($blogPost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('blogPost'));
        $this->set('_serialize', ['blogPost']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog Post id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blogPost = $this->BlogPosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogPost = $this->BlogPosts->patchEntity($blogPost, $this->request->data);
            if ($this->BlogPosts->save($blogPost)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('blogPost'));
        $this->set('_serialize', ['blogPost']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog Post id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogPost = $this->BlogPosts->get($id);
        if ($this->BlogPosts->delete($blogPost)) {
            $this->Flash->success(__('The blog post has been deleted.'));
        } else {
            $this->Flash->error(__('The blog post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



}

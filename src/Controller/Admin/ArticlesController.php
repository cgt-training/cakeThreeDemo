<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 */
class ArticlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
     public function initialize()
    {
        parent::initialize();
        $this->loadComponent('DataTable');
        $this->loadComponent('Flash'); // Include the FlashComponent       
        $this->viewBuilder()->layout('main_layout');
        

    }
    public function index()
    {
        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
    }
    public function indexAjax()
    {
        $this->autoRender = false;
        $columns = array(
          array('db'=>'id','dt'=>0),
          array('db'=>'title','dt'=>1),        
          array('db'=>'created','dt'=>2),
          array('db'=>'modified','dt'=>3),
          array('db'=>'id','dt'=>4)          
        );
        $limit = array();
        //pr($this->request->query);
        $request = $this->request->query;
        $limit = $this->DataTable->limit( $request, $columns );
        $order = $this->DataTable->order( $request, $columns );
        $where = $this->DataTable->filter( $request, $columns);
        $Select = ($this->DataTable->pluck($columns, 'db'));
        $Articles = $this->Articles->find()
        ->select($Select)
        ->Where($where)
        ->order($order)
        ->limit(@$limit[1])
        ->offset(@$limit[0])
        ;
        
        $recordsFiltered = $this->Articles->find()->where($where)->count();
        $recordsTotal = $this->Articles->find()->count();    
        $draw1 = isset ( $request['draw'] ) ?
                intval( $request['draw'] ) :
                0;

        $draw2 = $recordsTotal;
        $draw3 = $recordsFiltered;     
        $posts = $this->DataTable->data_output( $columns, $Articles->toArray() );
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
     * @param string|null $id Article id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The article could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('article'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The article could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('article'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function initialize()
    {
        parent::initialize();       
        $this->loadComponent('DataTable'); // Include the FlashComponent     
    }
    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }
    public function indexAjax()
    {
        $this->autoRender = false;
        $columns = [
          ['db'=>'id','dt'=>0],
          ['db'=>'name','dt'=>1],
          ['db'=>'created','dt'=>2,
              'formatter' => function( $d, $row ) 
              {
                return date( 'd-m-Y H:m:s', strtotime($d));
              }],
          ['db'=>'modified','dt'=>3,
              'formatter' => function( $d, $row ) 
              {
                return date( 'd-m-Y H:m:s', strtotime($d));
              }],
          ['db'=>'id','dt'=>4]
        ];
        $limit = array();
        //pr($this->request->query);
        $request = $this->request->query;
        $limit = $this->DataTable->limit( $request, $columns );
        $order = $this->DataTable->order( $request, $columns );
        $where = $this->DataTable->filter( $request, $columns);
        $Select = ($this->DataTable->pluck($columns, 'db'));
        $products = $this->Products->find()
        ->select($Select)
        ->Where($where)
        ->order($order)
        ->limit(@$limit[1])
        ->offset(@$limit[0])
        ;
        //debug($products);
        $recordsFiltered = $this->Products->find()->where($where)->count();
        $recordsTotal = $this->Products->find()->count();    
        $draw1 = isset ( $request['draw'] ) ?
                intval( $request['draw'] ) :
                0;

        $draw2 = $recordsTotal;
        $draw3 = $recordsFiltered;     
        $posts = $this->DataTable->data_output( $columns, $products->toArray() );
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
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);

        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if(!empty($this->request->data['dp']['name']))
        {
            $file = $this->request->data['dp']; //put the data into a var for easy use
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999).".".$ext;
            if(in_array($ext, $arr_ext))
            {
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/uploads/' . $setNewFileName);
                $this->request->data['file'] = 'uploads/' . $setNewFileName;
            }
        }
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('product'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if(!empty($this->request->data['dp']['name']) && $this->request->data['dp']['error']==0)
        {
            $file = $this->request->data['dp']; //put the data into a var for easy use

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999).".".$ext;
            //only process if the extension is valid
            if(in_array($ext, $arr_ext))
            {
                //do the actual uploading of the file. First arg is the tmp name, second arg is
                //where we are putting it
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/uploads/' . $setNewFileName);

                //prepare the filename for database entry
                $this->request->data['file'] = 'uploads/' . $setNewFileName;
            }
        }
        else
        {
            unset($this->request->data['file']);
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
             //pr($this->request->data);exit;
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('product'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Enquiry Controller
 *
 * @property \App\Model\Table\EnquiryTable $Enquiry
 */
class EnquiryController extends AppController
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
        $enquiry = $this->paginate($this->Enquiry);
        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);
    }
         public function indexAjax()
    {
        $this->autoRender = false;
        $columns =[
          ['db'=>'id','dt'=>0],
          ['db'=>'name','dt'=>1],        
          ['db'=>'phone_no','dt'=>2],
          ['db'=>'email','dt'=>3],
          ['db'=>'id','dt'=>4]
        ];
        $limit = array();
        //pr($this->request->query);
        $request = $this->request->query;
        $limit = $this->DataTable->limit( $request, $columns );
        $order = $this->DataTable->order( $request, $columns );
        $where = $this->DataTable->filter( $request, $columns);
        $Select = ($this->DataTable->pluck($columns, 'db'));
        $enquiry = $this->Enquiry->find()
        ->select($Select)
        ->Where($where)
        ->order($order)
        ->limit(@$limit[1])
        ->offset(@$limit[0])
        ;
        //debug($enquiry);
        $recordsFiltered = $this->Enquiry->find()->where($where)->count();
        $recordsTotal = $this->Enquiry->find()->count();    
        $draw1 = isset ( $request['draw'] ) ?
                intval( $request['draw'] ) :
                0;

        $draw2 = $recordsTotal;
        $draw3 = $recordsFiltered;     
        $posts = $this->DataTable->data_output( $columns, $enquiry->toArray() );
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
     * @param string|null $id Enquiry id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enquiry = $this->Enquiry->get($id, [
            'contain' => []
        ]);

        $this->set('enquiry', $enquiry);
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enquiry = $this->Enquiry->newEntity();
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiry->patchEntity($enquiry, $this->request->data);
            if ($this->Enquiry->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enquiry = $this->Enquiry->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enquiry = $this->Enquiry->patchEntity($enquiry, $this->request->data);
            if ($this->Enquiry->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enquiry = $this->Enquiry->get($id);
        if ($this->Enquiry->delete($enquiry)) {
            $this->Flash->success(__('The enquiry has been deleted.'));
        } else {
            $this->Flash->error(__('The enquiry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

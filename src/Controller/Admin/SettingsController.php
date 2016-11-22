<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\Table;
/**
 * Settings Controller
 *
 * @property \App\Model\Table\SettingsTable $Settings
 */
class SettingsController extends AppController
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
        $settings = $this->Settings->find('all')->first();
        //pr($settings[0]->id);
        $this->set(compact('settings'));
        $this->set('_serialize', ['settings']);
    }
    public function indexAjax()
    {
        $this->autoRender = false;
        $columns = [
          ['db'=>'id','dt'=>0],
          ['db'=>'layout_name','dt'=>1],
          ['db'=>'language','dt'=>2],
          ['db'=>'id','dt'=>3]
        ];
        $limit = array();
        //pr($this->request->query);
        $request = $this->request->query;
        $limit = $this->DataTable->limit( $request, $columns );
        $order = $this->DataTable->order( $request, $columns );
        $where = $this->DataTable->filter( $request, $columns);
        $Select = ($this->DataTable->pluck($columns, 'db'));
        $settings = $this->Settings->find()
        ->select($Select)
        ->Where($where)
        ->order($order)
        ->limit(@$limit[1])
        ->offset(@$limit[0])
        ;
        //debug($settings);
        $recordsFiltered = $this->Settings->find()->where($where)->count();
        $recordsTotal = $this->Settings->find()->count();    
        $draw1 = isset ( $request['draw'] ) ?
                intval( $request['draw'] ) :
                0;

        $draw2 = $recordsTotal;
        $draw3 = $recordsFiltered;     
        $posts = $this->DataTable->data_output( $columns, $settings->toArray() );
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
     * @param string|null $id Setting id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $setting = $this->Settings->get($id, [
            'contain' => []
        ]);

        $this->set('setting', $setting);
        $this->set('_serialize', ['setting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $setting = $this->Settings->newEntity();
        if ($this->request->is('post')) {
            $setting = $this->Settings->patchEntity($setting, $this->request->data);
            if ($this->Settings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The setting could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('setting'));
        $this->set('_serialize', ['setting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $setting = $this->Settings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setting = $this->Settings->patchEntity($setting, $this->request->data);
            if ($this->Settings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The setting could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('setting'));
        $this->set('_serialize', ['setting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $setting = $this->Settings->get($id);
        if ($this->Settings->delete($setting)) {
            $this->Flash->success(__('The setting has been deleted.'));
        } else {
            $this->Flash->error(__('The setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

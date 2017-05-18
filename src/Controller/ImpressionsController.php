<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Impressions Controller
 *
 * @property \App\Model\Table\ImpressionsTable $Impressions
 *
 * @method \App\Model\Entity\Impression[] paginate($object = null, array $settings = [])
 */
class ImpressionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $impressions = $this->paginate($this->Impressions);

        $this->set(compact('impressions'));
        $this->set('_serialize', ['impressions']);
    }

    /**
     * View method
     *
     * @param string|null $id Impression id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $impression = $this->Impressions->get($id, [
            'contain' => []
        ]);

        $this->set('impression', $impression);
        $this->set('_serialize', ['impression']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $impression = $this->Impressions->newEntity();
        if ($this->request->is('post')) {
            $impression = $this->Impressions->patchEntity($impression, $this->request->getData());
            $impression['status']='pendente';
            $impression->solicitante =$this->Auth->user('id');
            if ($this->Impressions->save($impression)) {
                $this->Flash->success(__('The impression has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impression could not be saved. Please, try again.'));
        }
        $this->set(compact('impression'));
        $this->set('_serialize', ['impression']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Impression id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $impression = $this->Impressions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $impression = $this->Impressions->patchEntity($impression, $this->request->getData());
            if ($this->Impressions->save($impression)) {
                $this->Flash->success(__('The impression has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The impression could not be saved. Please, try again.'));
        }
        $this->set(compact('impression'));
        $this->set('_serialize', ['impression']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Impression id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $impression = $this->Impressions->get($id);
        if ($this->Impressions->delete($impression)) {
            $this->Flash->success(__('The impression has been deleted.'));
        } else {
            $this->Flash->error(__('The impression could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

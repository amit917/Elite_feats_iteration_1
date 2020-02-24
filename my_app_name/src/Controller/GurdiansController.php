<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Gurdians Controller
 *
 * @property \App\Model\Table\GurdiansTable $Gurdians
 *
 * @method \App\Model\Entity\Gurdian[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GurdiansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Children'],
        ];
        $gurdians = $this->paginate($this->Gurdians);

        $this->set(compact('gurdians'));
    }

    /**
     * View method
     *
     * @param string|null $id Gurdian id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gurdian = $this->Gurdians->get($id, [
            'contain' => ['Children', 'ChildGurdians'],
        ]);

        $this->set('gurdian', $gurdian);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gurdian = $this->Gurdians->newEmptyEntity();
        if ($this->request->is('post')) {
            $gurdian = $this->Gurdians->patchEntity($gurdian, $this->request->getData());
            if ($this->Gurdians->save($gurdian)) {
                $this->Flash->success(__('The gurdian has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gurdian could not be saved. Please, try again.'));
        }
        $children = $this->Gurdians->Children->find('list', ['limit' => 200]);
        $this->set(compact('gurdian', 'children'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gurdian id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gurdian = $this->Gurdians->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gurdian = $this->Gurdians->patchEntity($gurdian, $this->request->getData());
            if ($this->Gurdians->save($gurdian)) {
                $this->Flash->success(__('The gurdian has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gurdian could not be saved. Please, try again.'));
        }
        $children = $this->Gurdians->Children->find('list', ['limit' => 200]);
        $this->set(compact('gurdian', 'children'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gurdian id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gurdian = $this->Gurdians->get($id);
        if ($this->Gurdians->delete($gurdian)) {
            $this->Flash->success(__('The gurdian has been deleted.'));
        } else {
            $this->Flash->error(__('The gurdian could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

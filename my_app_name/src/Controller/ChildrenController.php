<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Children Controller
 *
 * @property \App\Model\Table\ChildrenTable $Children
 *
 * @method \App\Model\Entity\Child[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChildrenController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Modules'],
        ];
        $children = $this->paginate($this->Children);

        $this->set(compact('children'));
    }

    /**
     * View method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $child = $this->Children->get($id, [
            'contain' => ['Modules', 'Gurdians'],
        ]);

        $this->set('child', $child);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $child = $this->Children->newEmptyEntity();
        if ($this->request->is('post')) {
            $child = $this->Children->patchEntity($child, $this->request->getData());
            if ($this->Children->save($child)) {
                $this->Flash->success(__('The child has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The child could not be saved. Please, try again.'));
        }
        $modules = $this->Children->Modules->find('list', ['limit' => 200]);
        $this->set(compact('child', 'modules'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $child = $this->Children->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $child = $this->Children->patchEntity($child, $this->request->getData());
            if ($this->Children->save($child)) {
                $this->Flash->success(__('The child has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The child could not be saved. Please, try again.'));
        }
        $modules = $this->Children->Modules->find('list', ['limit' => 200]);
        $this->set(compact('child', 'modules'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $child = $this->Children->get($id);
        if ($this->Children->delete($child)) {
            $this->Flash->success(__('The child has been deleted.'));
        } else {
            $this->Flash->error(__('The child could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

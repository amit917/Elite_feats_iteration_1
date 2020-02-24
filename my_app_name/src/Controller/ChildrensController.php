<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Childrens Controller
 *
 * @property \App\Model\Table\ChildrensTable $Childrens
 *
 * @method \App\Model\Entity\Children[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChildrensController extends AppController
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
        $childrens = $this->paginate($this->Childrens);

        $this->set(compact('childrens'));
    }

    /**
     * View method
     *
     * @param string|null $id Children id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $children = $this->Childrens->get($id, [
            'contain' => ['Modules'],
        ]);

        $this->set('children', $children);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $children = $this->Childrens->newEmptyEntity();
        if ($this->request->is('post')) {
            $children = $this->Childrens->patchEntity($children, $this->request->getData());
            if ($this->Childrens->save($children)) {
                $this->Flash->success(__('The children has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The children could not be saved. Please, try again.'));
        }
        $modules = $this->Childrens->Modules->find('list', ['limit' => 200]);
        $this->set(compact('children', 'modules'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Children id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $children = $this->Childrens->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $children = $this->Childrens->patchEntity($children, $this->request->getData());
            if ($this->Childrens->save($children)) {
                $this->Flash->success(__('The children has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The children could not be saved. Please, try again.'));
        }
        $modules = $this->Childrens->Modules->find('list', ['limit' => 200]);
        $this->set(compact('children', 'modules'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Children id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $children = $this->Childrens->get($id);
        if ($this->Childrens->delete($children)) {
            $this->Flash->success(__('The children has been deleted.'));
        } else {
            $this->Flash->error(__('The children could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

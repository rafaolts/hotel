<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ganhos Controller
 *
 * @property \App\Model\Table\GanhosTable $Ganhos
 */
class GanhosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Ganhos->find()
            ->contain(['Hospedagem']);
        $ganhos = $this->paginate($query);

        $this->set(compact('ganhos'));
    }

    /**
     * View method
     *
     * @param string|null $id Ganho id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ganho = $this->Ganhos->get($id, contain: ['Hospedagem', 'Financeiro']);
        $this->set(compact('ganho'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ganho = $this->Ganhos->newEmptyEntity();
        if ($this->request->is('post')) {
            $ganho = $this->Ganhos->patchEntity($ganho, $this->request->getData());
            if ($this->Ganhos->save($ganho)) {
                $this->Flash->success(__('The ganho has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ganho could not be saved. Please, try again.'));
        }
        $hospedagem = $this->Ganhos->Hospedagem->find('list', limit: 200)->all();
        $this->set(compact('ganho', 'hospedagem'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ganho id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ganho = $this->Ganhos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ganho = $this->Ganhos->patchEntity($ganho, $this->request->getData());
            if ($this->Ganhos->save($ganho)) {
                $this->Flash->success(__('The ganho has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ganho could not be saved. Please, try again.'));
        }
        $hospedagem = $this->Ganhos->Hospedagem->find('list', limit: 200)->all();
        $this->set(compact('ganho', 'hospedagem'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ganho id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ganho = $this->Ganhos->get($id);
        if ($this->Ganhos->delete($ganho)) {
            $this->Flash->success(__('The ganho has been deleted.'));
        } else {
            $this->Flash->error(__('The ganho could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

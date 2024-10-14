<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Hospedagem Controller
 *
 * @property \App\Model\Table\HospedagemTable $Hospedagem
 */
class HospedagemController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Hospedagem->find()
            ->contain(['Funcionario', 'Reserva']);
        $hospedagem = $this->paginate($query);

        $this->set(compact('hospedagem'));
    }

    /**
     * View method
     *
     * @param string|null $id Hospedagem id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hospedagem = $this->Hospedagem->get($id, contain: ['Funcionario', 'Reserva', 'Produto', 'Servico', 'Ganhos']);
        $this->set(compact('hospedagem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hospedagem = $this->Hospedagem->newEmptyEntity();
        if ($this->request->is('post')) {
            $hospedagem = $this->Hospedagem->patchEntity($hospedagem, $this->request->getData());
            if ($this->Hospedagem->save($hospedagem)) {
                $this->Flash->success(__('The hospedagem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospedagem could not be saved. Please, try again.'));
        }
        $funcionario = $this->Hospedagem->Funcionario->find('list', limit: 200)->all();
        $reserva = $this->Hospedagem->Reserva->find('list', limit: 200)->all();
        $produto = $this->Hospedagem->Produto->find('list', limit: 200)->all();
        $servico = $this->Hospedagem->Servico->find('list', limit: 200)->all();
        $this->set(compact('hospedagem', 'funcionario', 'reserva', 'produto', 'servico'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hospedagem id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hospedagem = $this->Hospedagem->get($id, contain: ['Produto', 'Servico']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hospedagem = $this->Hospedagem->patchEntity($hospedagem, $this->request->getData());
            if ($this->Hospedagem->save($hospedagem)) {
                $this->Flash->success(__('The hospedagem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospedagem could not be saved. Please, try again.'));
        }
        $funcionario = $this->Hospedagem->Funcionario->find('list', limit: 200)->all();
        $reserva = $this->Hospedagem->Reserva->find('list', limit: 200)->all();
        $produto = $this->Hospedagem->Produto->find('list', limit: 200)->all();
        $servico = $this->Hospedagem->Servico->find('list', limit: 200)->all();
        $this->set(compact('hospedagem', 'funcionario', 'reserva', 'produto', 'servico'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hospedagem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hospedagem = $this->Hospedagem->get($id);
        if ($this->Hospedagem->delete($hospedagem)) {
            $this->Flash->success(__('The hospedagem has been deleted.'));
        } else {
            $this->Flash->error(__('The hospedagem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

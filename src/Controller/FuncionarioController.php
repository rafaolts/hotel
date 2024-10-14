<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Funcionario Controller
 *
 * @property \App\Model\Table\FuncionarioTable $Funcionario
 */
class FuncionarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Funcionario->find();
        $funcionario = $this->paginate($query);

        $this->set(compact('funcionario'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionario = $this->Funcionario->get($id, contain: ['Estoque', 'Financeiro', 'Gastos', 'Hospedagem', 'Reserva', 'Telefone']);
        $this->set(compact('funcionario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionario = $this->Funcionario->newEmptyEntity();
        if ($this->request->is('post')) {
            $funcionario = $this->Funcionario->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionario->save($funcionario)) {
                $this->Flash->success(__('The funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionario could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionario = $this->Funcionario->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionario = $this->Funcionario->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionario->save($funcionario)) {
                $this->Flash->success(__('The funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionario could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionario = $this->Funcionario->get($id);
        if ($this->Funcionario->delete($funcionario)) {
            $this->Flash->success(__('The funcionario has been deleted.'));
        } else {
            $this->Flash->error(__('The funcionario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

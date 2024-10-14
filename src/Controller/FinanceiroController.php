<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Financeiro Controller
 *
 * @property \App\Model\Table\FinanceiroTable $Financeiro
 */
class FinanceiroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Financeiro->find()
            ->contain(['Funcionario', 'Ganhos', 'Gastos']);
        $financeiro = $this->paginate($query);

        $this->set(compact('financeiro'));
    }

    /**
     * View method
     *
     * @param string|null $id Financeiro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $financeiro = $this->Financeiro->get($id, contain: ['Funcionario', 'Ganhos', 'Gastos']);
        $this->set(compact('financeiro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $financeiro = $this->Financeiro->newEmptyEntity();
        if ($this->request->is('post')) {
            $financeiro = $this->Financeiro->patchEntity($financeiro, $this->request->getData());
            if ($this->Financeiro->save($financeiro)) {
                $this->Flash->success(__('The financeiro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The financeiro could not be saved. Please, try again.'));
        }
        $funcionario = $this->Financeiro->Funcionario->find('list', limit: 200)->all();
        $ganhos = $this->Financeiro->Ganhos->find('list', limit: 200)->all();
        $gastos = $this->Financeiro->Gastos->find('list', limit: 200)->all();
        $this->set(compact('financeiro', 'funcionario', 'ganhos', 'gastos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Financeiro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $financeiro = $this->Financeiro->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $financeiro = $this->Financeiro->patchEntity($financeiro, $this->request->getData());
            if ($this->Financeiro->save($financeiro)) {
                $this->Flash->success(__('The financeiro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The financeiro could not be saved. Please, try again.'));
        }
        $funcionario = $this->Financeiro->Funcionario->find('list', limit: 200)->all();
        $ganhos = $this->Financeiro->Ganhos->find('list', limit: 200)->all();
        $gastos = $this->Financeiro->Gastos->find('list', limit: 200)->all();
        $this->set(compact('financeiro', 'funcionario', 'ganhos', 'gastos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Financeiro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $financeiro = $this->Financeiro->get($id);
        if ($this->Financeiro->delete($financeiro)) {
            $this->Flash->success(__('The financeiro has been deleted.'));
        } else {
            $this->Flash->error(__('The financeiro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

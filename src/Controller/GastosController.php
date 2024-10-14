<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Gastos Controller
 *
 * @property \App\Model\Table\GastosTable $Gastos
 */
class GastosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Gastos->find()
            ->contain(['Funcionario', 'Produto']);
        $gastos = $this->paginate($query);

        $this->set(compact('gastos'));
    }

    /**
     * View method
     *
     * @param string|null $id Gasto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gasto = $this->Gastos->get($id, contain: ['Funcionario', 'Produto']);
        $this->set(compact('gasto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gasto = $this->Gastos->newEmptyEntity();
        if ($this->request->is('post')) {
            $gasto = $this->Gastos->patchEntity($gasto, $this->request->getData());
            if ($this->Gastos->save($gasto)) {
                $this->Flash->success(__('The gasto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gasto could not be saved. Please, try again.'));
        }
        $funcionario = $this->Gastos->Funcionario->find('list', limit: 200)->all();
        $produto = $this->Gastos->Produto->find('list', limit: 200)->all();
        $this->set(compact('gasto', 'funcionario', 'produto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gasto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gasto = $this->Gastos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gasto = $this->Gastos->patchEntity($gasto, $this->request->getData());
            if ($this->Gastos->save($gasto)) {
                $this->Flash->success(__('The gasto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gasto could not be saved. Please, try again.'));
        }
        $funcionario = $this->Gastos->Funcionario->find('list', limit: 200)->all();
        $produto = $this->Gastos->Produto->find('list', limit: 200)->all();
        $this->set(compact('gasto', 'funcionario', 'produto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gasto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gasto = $this->Gastos->get($id);
        if ($this->Gastos->delete($gasto)) {
            $this->Flash->success(__('The gasto has been deleted.'));
        } else {
            $this->Flash->error(__('The gasto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

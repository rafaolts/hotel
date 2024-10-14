<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Estoque Controller
 *
 * @property \App\Model\Table\EstoqueTable $Estoque
 */
class EstoqueController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Estoque->find()
            ->contain(['Produto', 'Funcionario']);
        $estoque = $this->paginate($query);

        $this->set(compact('estoque'));
    }

    /**
     * View method
     *
     * @param string|null $id Estoque id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estoque = $this->Estoque->get($id, contain: ['Produto', 'Funcionario']);
        $this->set(compact('estoque'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estoque = $this->Estoque->newEmptyEntity();
        if ($this->request->is('post')) {
            $estoque = $this->Estoque->patchEntity($estoque, $this->request->getData());
            if ($this->Estoque->save($estoque)) {
                $this->Flash->success(__('The estoque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estoque could not be saved. Please, try again.'));
        }
        $produto = $this->Estoque->Produto->find('list', limit: 200)->all();
        $funcionario = $this->Estoque->Funcionario->find('list', limit: 200)->all();
        $this->set(compact('estoque', 'produto', 'funcionario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estoque id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estoque = $this->Estoque->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estoque = $this->Estoque->patchEntity($estoque, $this->request->getData());
            if ($this->Estoque->save($estoque)) {
                $this->Flash->success(__('The estoque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estoque could not be saved. Please, try again.'));
        }
        $produto = $this->Estoque->Produto->find('list', limit: 200)->all();
        $funcionario = $this->Estoque->Funcionario->find('list', limit: 200)->all();
        $this->set(compact('estoque', 'produto', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estoque id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estoque = $this->Estoque->get($id);
        if ($this->Estoque->delete($estoque)) {
            $this->Flash->success(__('The estoque has been deleted.'));
        } else {
            $this->Flash->error(__('The estoque could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Telefone Controller
 *
 * @property \App\Model\Table\TelefoneTable $Telefone
 */
class TelefoneController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Telefone->find()
            ->contain(['Cliente', 'Funcionario']);
        $telefone = $this->paginate($query);

        $this->set(compact('telefone'));
    }

    /**
     * View method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telefone = $this->Telefone->get($id, contain: ['Cliente', 'Funcionario']);
        $this->set(compact('telefone'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telefone = $this->Telefone->newEmptyEntity();
        if ($this->request->is('post')) {
            $telefone = $this->Telefone->patchEntity($telefone, $this->request->getData());
            if ($this->Telefone->save($telefone)) {
                $this->Flash->success(__('The telefone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefone could not be saved. Please, try again.'));
        }
        $cliente = $this->Telefone->Cliente->find('list', limit: 200)->all();
        $funcionario = $this->Telefone->Funcionario->find('list', limit: 200)->all();
        $this->set(compact('telefone', 'cliente', 'funcionario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telefone = $this->Telefone->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefone = $this->Telefone->patchEntity($telefone, $this->request->getData());
            if ($this->Telefone->save($telefone)) {
                $this->Flash->success(__('The telefone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefone could not be saved. Please, try again.'));
        }
        $cliente = $this->Telefone->Cliente->find('list', limit: 200)->all();
        $funcionario = $this->Telefone->Funcionario->find('list', limit: 200)->all();
        $this->set(compact('telefone', 'cliente', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telefone = $this->Telefone->get($id);
        if ($this->Telefone->delete($telefone)) {
            $this->Flash->success(__('The telefone has been deleted.'));
        } else {
            $this->Flash->error(__('The telefone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

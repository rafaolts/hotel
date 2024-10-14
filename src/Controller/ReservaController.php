<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reserva Controller
 *
 * @property \App\Model\Table\ReservaTable $Reserva
 */
class ReservaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Reserva->find()
            ->contain(['Cliente', 'Quarto', 'Funcionario']);
        $reserva = $this->paginate($query);

        $this->set(compact('reserva'));
    }

    /**
     * View method
     *
     * @param string|null $id Reserva id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reserva = $this->Reserva->get($id, contain: ['Cliente', 'Quarto', 'Funcionario', 'Hospedagem']);
        $this->set(compact('reserva'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reserva = $this->Reserva->newEmptyEntity();
        if ($this->request->is('post')) {
            $reserva = $this->Reserva->patchEntity($reserva, $this->request->getData());
            if ($this->Reserva->save($reserva)) {
                $this->Flash->success(__('The reserva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reserva could not be saved. Please, try again.'));
        }
        $cliente = $this->Reserva->Cliente->find('list', limit: 200)->all();
        $quarto = $this->Reserva->Quarto->find('list', limit: 200)->all();
        $funcionario = $this->Reserva->Funcionario->find('list', limit: 200)->all();
        $this->set(compact('reserva', 'cliente', 'quarto', 'funcionario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reserva id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reserva = $this->Reserva->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reserva = $this->Reserva->patchEntity($reserva, $this->request->getData());
            if ($this->Reserva->save($reserva)) {
                $this->Flash->success(__('The reserva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reserva could not be saved. Please, try again.'));
        }
        $cliente = $this->Reserva->Cliente->find('list', limit: 200)->all();
        $quarto = $this->Reserva->Quarto->find('list', limit: 200)->all();
        $funcionario = $this->Reserva->Funcionario->find('list', limit: 200)->all();
        $this->set(compact('reserva', 'cliente', 'quarto', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reserva id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reserva = $this->Reserva->get($id);
        if ($this->Reserva->delete($reserva)) {
            $this->Flash->success(__('The reserva has been deleted.'));
        } else {
            $this->Flash->error(__('The reserva could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

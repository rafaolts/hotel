<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Quarto Controller
 *
 * @property \App\Model\Table\QuartoTable $Quarto
 */
class QuartoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Quarto->find();
        $quarto = $this->paginate($query);

        $this->set(compact('quarto'));
    }

    /**
     * View method
     *
     * @param string|null $id Quarto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quarto = $this->Quarto->get($id, contain: ['Reserva']);
        $this->set(compact('quarto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quarto = $this->Quarto->newEmptyEntity();
        if ($this->request->is('post')) {
            $quarto = $this->Quarto->patchEntity($quarto, $this->request->getData());
            if ($this->Quarto->save($quarto)) {
                $this->Flash->success(__('The quarto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quarto could not be saved. Please, try again.'));
        }
        $this->set(compact('quarto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quarto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quarto = $this->Quarto->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quarto = $this->Quarto->patchEntity($quarto, $this->request->getData());
            if ($this->Quarto->save($quarto)) {
                $this->Flash->success(__('The quarto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quarto could not be saved. Please, try again.'));
        }
        $this->set(compact('quarto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quarto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quarto = $this->Quarto->get($id);
        if ($this->Quarto->delete($quarto)) {
            $this->Flash->success(__('The quarto has been deleted.'));
        } else {
            $this->Flash->error(__('The quarto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;

/**
 * Presentations Controller
 *
 * @property \App\Model\Table\PresentationsTable $Presentations
 *
 * @method \App\Model\Entity\Presentation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PresentationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $presentations = $this->paginate($this->Presentations);

        $this->set(compact('presentations'));
    }

    /**
     * View method
     *
     * @param string|null $id Presentation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $presentation = $this->Presentations->get($id, [
            'contain' => ['Slides']
        ]);

        $this->set('presentation', $presentation);
    }

    /**
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function display($id = null)
    {
        $presentation = $this->Presentations->find()
            ->where(['Presentations.id' => $id ])
            ->contain([
                'Slides'
            ])
            ->cache('presentation_' . $id)
            ->firstOrFail();

        if(!empty($presentation->slides)) {
            return $this->redirect([
                'controller' => 'Slides',
                'action' => 'display',
                'id' => $presentation->slides[0]->id
            ]);
        };


        throw new NotFoundException('Slide can not be found');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $presentation = $this->Presentations->newEntity();
        if ($this->request->is('post')) {
            $presentation = $this->Presentations->patchEntity($presentation, $this->request->getData());
            if ($this->Presentations->save($presentation)) {
                $this->Flash->success(__('The presentation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presentation could not be saved. Please, try again.'));
        }
        $this->set(compact('presentation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Presentation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $presentation = $this->Presentations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $presentation = $this->Presentations->patchEntity($presentation, $this->request->getData());
            if ($this->Presentations->save($presentation)) {
                $this->Flash->success(__('The presentation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presentation could not be saved. Please, try again.'));
        }
        $this->set(compact('presentation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Presentation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $presentation = $this->Presentations->get($id);
        if ($this->Presentations->delete($presentation)) {
            $this->Flash->success(__('The presentation has been deleted.'));
        } else {
            $this->Flash->error(__('The presentation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

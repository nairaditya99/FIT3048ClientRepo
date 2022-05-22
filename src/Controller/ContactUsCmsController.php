<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContactUsCms Controller
 *
 * @property \App\Model\Table\ContactUsCmsTable $ContactUsCms
 * @method \App\Model\Entity\ContactUsCm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactUsCmsController extends AppController
{
    private $default_image;

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $contactUsCms = $this->paginate($this->ContactUsCms);

        $this->set(compact('contactUsCms'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Us Cm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contactUsCm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactUsCm = $this->ContactUsCms->newEmptyEntity();
        if ($this->request->is('post')) {
            $contactUsCm = $this->ContactUsCms->patchEntity($contactUsCm, $this->request->getData());
            if ($this->ContactUsCms->save($contactUsCm)) {
                $this->Flash->success(__('The contact us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('contactUsCm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Us Cm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->ContactUsCms->find()->where(['id' => 1]);
            $ContactUsCms_info = $result->first();
            $default_image = $ContactUsCms_info['Banner_photo_1'];

            $contactUsCm = $this->ContactUsCms->patchEntity($contactUsCm, $this->request->getData());
            $image = $this->request->getData('Banner_photo_1');
            $image_name = $image->getClientFilename();
            $targetPath = WWW_ROOT . 'img' . DS . $image_name;
            if ($image_name) {
                $image->moveTo($targetPath);
                $contactUsCm->Banner_photo_1 = $image_name;
            } else {
                $contactUsCm->Banner_photo_1 = $default_image;
            }
            if ($this->ContactUsCms->save($contactUsCm)) {
                $this->Flash->success(__('The contact us page changes has been saved.'));

                return $this->redirect(['action' => 'view/1']);
            }
            $this->Flash->error(__('The contact us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('contactUsCm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Us Cm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactUsCm = $this->ContactUsCms->get($id);
        if ($this->ContactUsCms->delete($contactUsCm)) {
            $this->Flash->success(__('The contact us cm has been deleted.'));
        } else {
            $this->Flash->error(__('The contact us cm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function contactus()
    {
        $this->loadModel('ContactUsCms');
        $result = $this->ContactUsCms->find()->where(['id' => 1]);
        $ContactUsCms_info = $result->first();
        $this->set(compact('ContactUsCms_info'));
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['contactus']);
    }
}

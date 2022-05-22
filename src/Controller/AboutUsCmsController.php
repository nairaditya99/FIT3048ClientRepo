<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AboutUsCms Controller
 *
 * @property \App\Model\Table\AboutUsCmsTable $AboutUsCms
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AboutUsCmsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aboutUsCms = $this->paginate($this->AboutUsCms);

        $this->set(compact('aboutUsCms'));
    }

    /**
     * View method
     *
     * @param string|null $id About Us Cm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aboutUsCm = $this->AboutUsCms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aboutUsCm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aboutUsCm = $this->AboutUsCms->newEmptyEntity();
        if ($this->request->is('post')) {
            $aboutUsCm = $this->AboutUsCms->patchEntity($aboutUsCm, $this->request->getData());
            if ($this->AboutUsCms->save($aboutUsCm)) {
                $this->Flash->success(__('The about us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutUsCm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id About Us Cm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aboutUsCm = $this->AboutUsCms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->AboutUsCms->find()->where(['id' => 1]);
            $AboutUsCms_info = $result->first();
            $default_image1 = $AboutUsCms_info['S2_Sub_Photo'];
            $default_image2 = $AboutUsCms_info['S3_Photo'];

            $aboutUsCm = $this->AboutUsCms->patchEntity($aboutUsCm, $this->request->getData());

            $image1 = $this->request->getData('S2_Sub_Photo');
            $image_name1 = $image1->getClientFilename();

            $image2 = $this->request->getData('S3_Photo');
            $image_name2 = $image2->getClientFilename();

            $targetPath1 = WWW_ROOT . 'img' . DS . $image_name1;
            $targetPath2 = WWW_ROOT . 'img' . DS . $image_name2;

            if ($image_name1) {
                $image1->moveTo($targetPath1);
                $aboutUsCm->S2_Sub_Photo = $image_name1;
            } else {
                $aboutUsCm->S2_Sub_Photo = $default_image1;
            }

            if ($image_name2) {
                $image2->moveTo($targetPath2);
                $aboutUsCm->S3_Photo = $image_name2;
            } else {
                $aboutUsCm->S3_Photo = $default_image2;
            }

            $image = $this->request->getData('S3_Photo');
            $image_name = $image->getClientFilename();
            $targetPath = WWW_ROOT . 'img' . DS . $image_name;
            if ($image_name) {
                $image->moveTo($targetPath);
                //$this->default_image = $image_name;
                $aboutUsCm->S3_Photo = $image_name;
            }

            if ($this->AboutUsCms->save($aboutUsCm)) {
                $this->Flash->success(__('The about us cm has been saved.'));

                return $this->redirect(['action' => 'view/1']);
            }
            $this->Flash->error(__('The about us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutUsCm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id About Us Cm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aboutUsCm = $this->AboutUsCms->get($id);
        if ($this->AboutUsCms->delete($aboutUsCm)) {
            $this->Flash->success(__('The about us cm has been deleted.'));
        } else {
            $this->Flash->error(__('The about us cm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function aboutus()
    {
        $this->loadModel('AboutUsCms');
        $result = $this->AboutUsCms->find()->where(['id' => 1]);
        $AboutUsCms_info = $result->first();
        $this->set(compact('AboutUsCms_info'));
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['aboutus']);
    }
}

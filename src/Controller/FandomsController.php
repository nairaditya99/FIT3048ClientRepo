<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Fandoms Controller
 *
 * @property \App\Model\Table\FandomsTable $Fandoms
 * @method \App\Model\Entity\Fandom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FandomsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $fandoms = $this->paginate($this->Fandoms);

        $this->set(compact('fandoms'));
    }

    /**
     * View method
     *
     * @param string|null $id Fandom id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewhome($id = null)
    {
        $fandom = $this->Fandoms->get($id, [
        ]);

        $this->set(compact('fandom'));
    }

    public function viewintro($id = null)
    {
        $fandom = $this->Fandoms->get($id, [
        ]);

        $this->set(compact('fandom'));
    }

    public function viewvideo($id = null)
    {
        $fandom = $this->Fandoms->get($id, [
        ]);

        $this->set(compact('fandom'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fandom = $this->Fandoms->newEmptyEntity();
        if ($this->request->is('post')) {
            $fandom = $this->Fandoms->patchEntity($fandom, $this->request->getData());
            if ($this->Fandoms->save($fandom)) {
                $this->Flash->success(__('The fandom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fandom could not be saved. Please, try again.'));
        }
        $this->set(compact('fandom'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fandom id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edithome($id = null)
    {
        $fandom = $this->Fandoms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fandom = $this->Fandoms->patchEntity($fandom, $this->request->getData());

            if ($this->Fandoms->save($fandom)) {
                $this->Flash->success(__('Fandom Home page changes have been saved.'));

                return $this->redirect(['action' => 'viewhome/1']);
            }
            $this->Flash->error(__('Fandom Home page changes. Please, try again.'));
        }
        $this->set(compact('fandom'));
    }

    public function editintro($id = null)
    {
        $fandom = $this->Fandoms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->Fandoms->find()->where(['id' => 1]);
            $Fandoms_info = $result->first();
            $default_image = $Fandoms_info['Section_Four_Video_URL'];

            $fandom = $this->Fandoms->patchEntity($fandom, $this->request->getData());

            $image = $this->request->getData('Section_Four_Video_URL');
            $image_name = $image->getClientFilename();
            $targetPath = WWW_ROOT . 'img' . DS . $image_name;
            if ($image_name) {
                $image->moveTo($targetPath);
                //$this->default_image = $image_name;
                $fandom->Section_Four_Video_URL = $image_name;
            } else {
                $fandom->Section_Four_Video_URL = $default_image;
            }

            if ($this->Fandoms->save($fandom)) {
                $this->Flash->success(__('Fandom Introduction page changes have been saved.'));

                return $this->redirect(['action' => 'viewintro/1']);
            }
            $this->Flash->error(__('Fandom Introduction page changes could not be saved. Please, try again.'));
        }
        $this->set(compact('fandom'));
    }

    public function editvideo($id = null)
    {
        $fandom = $this->Fandoms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->Fandoms->find()->where(['id' => 1]);
            $Fandoms_info = $result->first();
            $default_image1 = $Fandoms_info['Section_Twelve_Photo'];
            $default_image2 = $Fandoms_info['Section_Ten_Video_Two_URL'];
            $default_image3 = $Fandoms_info['Section_Ten_Photo'];
            $default_image4 = $Fandoms_info['Section_Fourteen_Photo'];
            $default_image5 = $Fandoms_info['Section_Fifteen_Photo'];
            $default_image6 = $Fandoms_info['Section_Three_Video_URL'];

            $fandom = $this->Fandoms->patchEntity($fandom, $this->request->getData());

            $image1 = $this->request->getData('Section_Twelve_Photo');
            $image2 = $this->request->getData('Section_Ten_Video_Two_URL');
            $image3 = $this->request->getData('Section_Ten_Photo');
            $image4 = $this->request->getData('Section_Fourteen_Photo');
            $image5 = $this->request->getData('Section_Fifteen_Photo');
            $image6 = $this->request->getData('Section_Three_Video_URL');

            $image_name1 = $image1->getClientFilename();
            $image_name2 = $image2->getClientFilename();
            $image_name3 = $image3->getClientFilename();
            $image_name4 = $image4->getClientFilename();
            $image_name5 = $image5->getClientFilename();
            $image_name6 = $image6->getClientFilename();

            $targetPath1 = WWW_ROOT . 'img' . DS . $image_name1;
            $targetPath2 = WWW_ROOT . 'img' . DS . $image_name2;
            $targetPath3 = WWW_ROOT . 'img' . DS . $image_name3;
            $targetPath4 = WWW_ROOT . 'img' . DS . $image_name4;
            $targetPath5 = WWW_ROOT . 'img' . DS . $image_name5;
            $targetPath6 = WWW_ROOT . 'img' . DS . $image_name6;

            if ($image_name1) {
                $image1->moveTo($targetPath1);
                //$this->default_image = $image_name;
                $fandom->Section_Twelve_Photo = $image_name1;
            } else {
                $fandom->Section_Twelve_Photo = $default_image1;
            }

            if ($image_name2) {
                $image1->moveTo($targetPath2);
                //$this->default_image = $image_name;
                $fandom->Section_Ten_Video_Two_URL = $image_name2;
            } else {
                $fandom->Section_Ten_Video_Two_URL = $default_image2;
            }

            if ($image_name3) {
                $image3->moveTo($targetPath3);
                //$this->default_image = $image_name;
                $fandom->Section_Ten_Photo = $image_name3;
            } else {
                $fandom->Section_Ten_Photo = $default_image3;
            }

            if ($image_name4) {
                $image4->moveTo($targetPath4);
                //$this->default_image = $image_name;
                $fandom->Section_Fourteen_Photo = $image_name4;
            } else {
                $fandom->Section_Fourteen_Photo = $default_image4;
            }

            if ($image_name5) {
                $image5->moveTo($targetPath5);
                //$this->default_image = $image_name;
                $fandom->Section_Fifteen_Photo = $image_name5;
            } else {
                $fandom->Section_Fifteen_Photo = $default_image5;
            }

            if ($image_name6) {
                $image6->moveTo($targetPath6);
                //$this->default_image = $image_name;
                $fandom->Section_Three_Video_URL = $image_name6;
            } else {
                $fandom->Section_Three_Video_URL = $default_image6;
            }

            if ($this->Fandoms->save($fandom)) {
                $this->Flash->success(__('Fandom Videos page changes have been saved.'));

                return $this->redirect(['action' => 'viewvideo/1']);
            }
            $this->Flash->error(__('Fandom Video page changes could not be saved. Please, try again.'));
        }
        $this->set(compact('fandom'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fandom id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fandom = $this->Fandoms->get($id);
        if ($this->Fandoms->delete($fandom)) {
            $this->Flash->success(__('The fandom has been deleted.'));
        } else {
            $this->Flash->error(__('The fandom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function fandomHome()
    {
        $result = $this->Fandoms->find()->where(['id' => 1]);
        $fandom_info = $result->first();
        $this->set(compact('fandom_info'));
    }

    public function fandomIntro()
    {
        $result = $this->Fandoms->find()->where(['id' => 1]);
        $fandom_info = $result->first();
        $this->set(compact('fandom_info'));
    }

    public function fandomVideos()
    {
        $result = $this->Fandoms->find()->where(['id' => 1]);
        $fandom_info = $result->first();
        $this->set(compact('fandom_info'));
    }

    public function forum()
    {
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authsentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['fandomHome','fandomIntro','fandomVideos']);
    }
}

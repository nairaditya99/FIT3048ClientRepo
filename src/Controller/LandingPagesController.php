<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LandingPages Controller
 *
 * @property \App\Model\Table\LandingPagesTable $LandingPages
 *  @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\LandingPage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LandingPagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $landingPages = $this->paginate($this->LandingPages);

        $this->set(compact('landingPages'));
    }

    /**
     * View method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('landingPage'));
    }

    /**
     * View method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewLandingPage($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('landingPage'));
    }

    /**
     * View method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewLandingPage1($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('landingPage'));
    }

    /**
     * View method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewLandingPage2($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('landingPage'));
    }

    /**
     * View method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewLandingPage3($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('landingPage'));
    }

    /**
     * View method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewLandingPage4($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('landingPage'));
    }

    /**
     * View method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewLandingPage5($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('landingPage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $landingPage = $this->LandingPages->newEmptyEntity();
        if ($this->request->is('post')) {
            $landingPage = $this->LandingPages->patchEntity($landingPage, $this->request->getData());
            if ($this->LandingPages->save($landingPage)) {
                $this->Flash->success(__('The landing page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The landing page could not be saved. Please, try again.'));
        }
        $this->set(compact('landingPage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $landingPage = $this->LandingPages->patchEntity($landingPage, $this->request->getData());
            if ($this->LandingPages->save($landingPage)) {
                $this->Flash->success(__('The landing page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The landing page could not be saved. Please, try again.'));
        }
        $this->set(compact('landingPage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editLandingPage($id = null)
    {
        $landingPage = $this->LandingPages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $landingPage = $this->LandingPages->patchEntity($landingPage, $this->request->getData());
            if ($this->LandingPages->save($landingPage)) {
                $this->Flash->success(__('The landing page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The landing page could not be saved. Please, try again.'));
        }
        $this->set(compact('landingPage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Landing Page id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $landingPage = $this->LandingPages->get($id);
        if ($this->LandingPages->delete($landingPage)) {
            $this->Flash->success(__('The landing page has been deleted.'));
        } else {
            $this->Flash->error(__('The landing page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['home']);
    }

    /**
     * LandingPage method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function home()
    {
        if ($this->Authentication->getResult()->isValid()) {
            $u = $this->request->getAttribute('identity');
            $this->loadModel('Users');
            $usersTable = $this->getTableLocator()->get('Users');
            $user = $usersTable->get($u['id']); // Return article with id 12

            $user->prefered_homepage = 'home';
            $usersTable->save($user);
            $this->Authentication->setIdentity($user);
        }
    }

    public function chooseLayout()
    {

    }

    public function home1()
    {

        if ($this->Authentication->getResult()->isValid()) {
            $u = $this->request->getAttribute('identity');
            $this->loadModel('Users');
            $usersTable = $this->getTableLocator()->get('Users');
            $user = $usersTable->get($u['id']); // Return article with id 12

            $user->prefered_homepage = 'home1';
            $usersTable->save($user);
            $this->Authentication->setIdentity($user);
        }

        $landingPages = $this->paginate($this->LandingPages);

        $this->set(compact('landingPages'));
    }
    public function home2()
    {
        if ($this->Authentication->getResult()->isValid()) {
            $u = $this->request->getAttribute('identity');
            $this->loadModel('Users');
            $usersTable = $this->getTableLocator()->get('Users');
            $user = $usersTable->get($u['id']); // Return article with id 12

            $user->prefered_homepage = 'home2';
            $usersTable->save($user);
            $this->Authentication->setIdentity($user);
        }
        /*
        $this->loadModel('Users');
        $usersTable = $this->getTableLocator()->get('Users');
        $user = $usersTable->get(12); // Return article with id 12

        $article->title = 'CakePHP is THE best PHP framework!';
        $articlesTable->save($article);
        */


        $landingPages = $this->paginate($this->LandingPages);

        $this->set(compact('landingPages'));
    }
    public function home3()
    {
        if ($this->Authentication->getResult()->isValid()) {
            $u = $this->request->getAttribute('identity');
            $this->loadModel('Users');
            $usersTable = $this->getTableLocator()->get('Users');
            $user = $usersTable->get($u['id']); // Return article with id 12

            $user->prefered_homepage = 'home3';
            $usersTable->save($user);
            $this->Authentication->setIdentity($user);
        }

        $landingPages = $this->paginate($this->LandingPages);

        $this->set(compact('landingPages'));
    }
    public function home4()
    {
        if ($this->Authentication->getResult()->isValid()) {
            $u = $this->request->getAttribute('identity');
            $this->loadModel('Users');
            $usersTable = $this->getTableLocator()->get('Users');
            $user = $usersTable->get($u['id']); // Return article with id 12

            $user->prefered_homepage = 'home4';
            $usersTable->save($user);
            $this->Authentication->setIdentity($user);
        }

        $landingPages = $this->paginate($this->LandingPages);

        $this->set(compact('landingPages'));
    }
    public function home5()
    {
        if ($this->Authentication->getResult()->isValid()) {
            $u = $this->request->getAttribute('identity');
            $this->loadModel('Users');
            $usersTable = $this->getTableLocator()->get('Users');
            $user = $usersTable->get($u['id']); // Return article with id 12

            $user->prefered_homepage = 'home5';
            $usersTable->save($user);
            $this->Authentication->setIdentity($user);
        }

        $landingPages = $this->paginate($this->LandingPages);

        $this->set(compact('landingPages'));
    }
}

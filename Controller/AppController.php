<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $layout = 'bootstrap';
    public function index() {
        $this->setPaginateConditions();
        try {
            $this->set($this->getControllerName(), $this->paginate());        
        } catch (NotFoundException $e) {
            $this->redirect('/' . $this->getControllerName());
        }        
    }

    public function add() {
        if (!empty($this->request->data)) {
            $this->{$this->getModelName()}->create();
            if ($this->{$this->getModelName()}->save($this->request->data)) {
                $this->redirect('/' . $this->getControllerName());
            }
        }
    }

    public function edit($id = null) {
        if (!empty($this->request->data)) {
            if ($this->{$this->getModelName()}->save($this->request->data)) {
                $this->redirect('/' . $this->getControllerName());
            }
        } else {
            $this->request->data = $this->getEditData($id);
        }
    }

    public function view($id = null) {
        $this->request->data = $this->getEditData($id);
    }

    public function delete($id) {
        $this->{$this->getModelName()}->delete($id);
        $this->redirect('/' . $this->getControllerName());
    }

    public function getControllerName() {
        return $this->request->params['controller'];
    }

    public function getModelName() {
        return $this->modelClass;
    }
}
?>

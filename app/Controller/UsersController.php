<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	/* Método para filtrar los accesos generales */
	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('login', 'logout');
	}

	/* Método para iniciar session */
	public function login() {
		if ($this->request->is('post')) {
				if ($this->Auth->login()) {
						return $this->redirect($this->Auth->redirectUrl());
				}
				$this->Flash->error(__('Los datos ingresado son incorrectos'));
		}

		$this->layout = 'login';
	}

	/* Método para salir del sistema */
	public function logout() {
			return $this->redirect($this->Auth->logout());
	}

	/* Método para listar los usuarios */
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());

    }

	/* Método para ver los datos del usuario */
    public function view($id = null) {

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
		$user = $this->User->findById($id);

        $this->set(compact('user'));
    }

	/* Método para registrar un usuario */
    public function add() {
		if($this->Auth->user('role') != 'admin'){
			$this->Flash->error(
                __('No tienes accesos para agregar Personas, comunicate con administración')
            );
			return $this->redirect(array('action' => 'index'));
		}
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('usuario registrado correctamente'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('Ha ocurrido un error, intentelo nuevamente.')
            );
        }
    }

	/* Método para editar datos de un usuario un usuario */
    public function edit($id = null) {
		if($this->Auth->user('role') != 'admin'){
			$this->Flash->error(
                __('No tienes accesos para editar Personas, comunicate con administración')
            );
			return $this->redirect(array('action' => 'index'));
		}
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Datos actualizados correctamente'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                 __('Ha ocurrido un error, intentelo nuevamente.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

	/* Método para cambiar la contraseña */
	public function change_password($id = null) {
		if($this->Auth->user('role') != 'admin'){
			$this->Flash->error(
                __('No tienes accesos para cambiar la contraseña de Personas, comunicate con administración')
            );
			return $this->redirect(array('action' => 'index'));
		}
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Contraseña cambiada correctamente'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                 __('Ha ocurrido un error, intentelo nuevamente.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

	/* Método para desactivar o activar una persona */
	public function desactivar($id = null , $status = null) {

		if($this->Auth->user('role') != 'admin'){
			$this->Flash->error(
                __('No tienes accesos para desactivar o habilitar Personas, comunicate con administración')
            );
			return $this->redirect(array('action' => 'index'));
		}

        //$this->request->allowMethod('post');

        $this->request->data['User']['id'] = $id;
		if($status == 'A'){
			$this->request->data['User']['status'] = 'I';
		}
		if($status == 'I'){
			$this->request->data['User']['status'] = 'A';
		}


        if ($this->User->save($this->request->data)) {
            $this->Flash->success(__('Cambios Guardados correctamente'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('No se pudo desactivar a la persona'));
        return $this->redirect(array('action' => 'index'));
    }

	/* Método para eliminar una persona */
    public function delete($id = null) {

		if($this->Auth->user('role') != 'admin'){
			$this->Flash->error(
                __('No tienes accesos para eliminar Personas, comunicate con administración')
            );
			return $this->redirect(array('action' => 'index'));
		}

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

}

<?php
class FileImageController extends AppController {

	var $name = 'FileImages';
	var $layout = 'admin';
	var $components = array('Upload.Upload');

	function index() {
	  $this->set('title_for_layout', 'MDX | Admin');
		$this->FileImage->recursive = 0;
		$this->set('FileImages', $this->paginate());
	}

	function view($id = null) {

		if (!$id) {
			$this->Session->setFlash(__('Invalid FileImage', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('FileImage', $this->FileImage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
		  $url = $this->Upload->put($this->data['FileImage']['name'], 'mindynamics.com');
		  $this->data['FileImage']['s3_url'] = $url;
		  $file_name = $this->data['FileImage']['name']['name'];
		  $this->data['FileImage']['name'] = $file_name; // remove my array
  //	  debug($this->data);
			$this->FileImage->create();
			if ($this->FileImage->save($this->data)) {
				$this->Session->setFlash(__('The FileImage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The FileImage could not be saved. Please, try again.', true));
			}
		}
		$users = $this->FileImage->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid FileImage', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FileImage->save($this->data)) {
				$this->Session->setFlash(__('The FileImage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The FileImage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FileImage->read(null, $id);
		}
		$users = $this->FileImage->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for FileImage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FileImage->delete($id)) {
			$this->Session->setFlash(__('FileImage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('FileImage was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>

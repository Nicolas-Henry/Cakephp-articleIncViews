<?php

App::uses('Model', 'Model');

class AppModel extends Model {
	
	public function articleIncViews($id) {	

		// define new views value
		$this->id = $id;
		$nb_views = $this->field('views');
		$nb_views ++;

		// set datas (field views) for update
		$data = array(
						'id' => $id,
						'views' => $nb_views,
						'modified' => false
					);

		// save datas
		$this->save($data);
	}
	
}

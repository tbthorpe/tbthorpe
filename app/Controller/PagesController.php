<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 */
class PagesController extends AppController {
	public $uses = array('Pages','News');
	
	function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this -> redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		
		if (method_exists($this, $page)) { 
	    	$this->$page(); 
	  	} 
		
		$this -> set(compact('page', 'subpage', 'title_for_layout'));
		$this -> render(implode('/', $path));
	}
	
	function home(){

	}
    function gyc_countdown(){
        $this->layout = 'Empty';
    }
	function test(){
		$this->layout=null;
	}
}

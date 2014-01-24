<?php 
class InvestigatorController extends BaseController {
	public function getList(){
		$investigator = new Investigator();
		var_dump($investigator->getAllColumnsNames());
		exit();
		return View::make('investigators');
		
	}
}
?>
<?php 
class InvestigatorController extends BaseController {
	public function getIndex(){
		$investigator = Investigator::find(1);
		var_dump($investigator);
		
	}
	
}
?>
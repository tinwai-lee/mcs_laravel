<?php 
class InvestigatorController extends BaseController {
	public function getList(){
		$table = array();
		$investigator = new Investigator();
		//set table title
		$table['title'] = 'Investigators';
		//set columns titles
		$columns_titles = $investigator->getAllColumnsTitles();
		$table['columns_titles'] = $columns_titles;
		//set table data
		$columns = $investigator->getAllColumns();
		$investigator = Investigator::all();
		$table_data = array();
		foreach($investigator as $i){
			$row = array();
			foreach ($columns as $column){
				$c = $i->lists($column);
				$row[$column] = $c[0];
			}
			array_push($table_data, $row);
		}
		$table['data'] = $table_data;
		return View::make('investigators')->nest('child', 'child.table', array('table' => $table));
	}
	
	public function addInvestigator (){
		//$columns = $investigator->getAllColumns();
		//$columns_titles = $investigator->getAllColumnsTitles();
		$c = DB::getDoctrineConnection();
		var_dump($c);
		exit();
		$m = $c->getColumMeta(0);
		
	}
}
?>
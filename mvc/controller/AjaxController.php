<?php 
	include_once 'model/AjaxModel.php';
	include_once 'config/config.php';
	class AjaxController extends AjaxModel {
		public function __construct() {
			parent::__construct();
			if (isset($_SERVER['PATH_INFO'])) {

				switch($_SERVER['PATH_INFO']) {

					case '/ajax':
						$categories = $this->getAllCategories('categories');
						$table = '';
						$srNo = 0;

						if(count($categories)>0) {
							foreach ($categories as $key => $value) {
								$table .= '<tr>';
									$table .= '<td>'.++$srNo.'</td>';
									$table .= '<td>'.$value->name.'</td>';
									$table .= '<td>'.$value->slug.'</td>';
									$table .= '<td>'.date("Y-m-d", strtotime($value->created_by)).'</td>';
									$table .= '<td>'.date("Y-m-d", strtotime($value->updated_at)).'</td>';
									$table .= '<td><button class="btn btn-primary">View Deatils</button> <button class="btn btn-secondary">Edit</button> <button class="btn btn-danger">Delete</button></td>';
								$table .= '</tr>'; 
							}
						} else {
							$table .= '<tr>';
								$table .= '<td colspan="6" class="text-center text-danger">No Record Found</td>';
							$table .= '</tr>';
						}
						echo json_encode(['table' => $table, 'totalRecords' => $srNo]);

						break;

					default:
						include_once "view/simple/not_found.php";
						break;
				}
			} else {
				include_once "view/ajax/index.php";
			}

		}
	}

	$object = new AjaxController();
?>
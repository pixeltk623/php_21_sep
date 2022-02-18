<?php
include_once 'model/AjaxModel.php';
include_once 'config/config.php';
class AjaxController extends AjaxModel
{
	public function __construct()
	{
		parent::__construct();
		if (isset($_SERVER['PATH_INFO'])) {

			switch ($_SERVER['PATH_INFO']) {

				case '/ajax':
					$categories = $this->getAllCategories('categories');
					$table = '';
					$srNo = 0;

					if (count($categories) > 0) {
						foreach ($categories as $key => $value) {
							$table .= '<tr>';
							$table .= '<td>' . ++$srNo . '</td>';
							$table .= '<td>' . $value->name . '</td>';
							$table .= '<td>' . $value->slug . '</td>';
							$table .= '<td>' . date("Y-m-d", strtotime($value->created_by)) . '</td>';
							$table .= '<td>' . date("Y-m-d", strtotime($value->updated_at)) . '</td>';
							$table .= '<td><button class="btn btn-primary">View Deatils</button>';
							$table .= '<form method="POST" action="http://localhost/php_21_sep/mvc/edit" id="editform" style="display: inline-block;">';
							$table .= '<input type="hidden" id="editidval" name="editid" value="' . $value->id . '">';
							$table .= '<a href="javascript:void(0)" class="btn btn-info edit-button" data-toggle="modal" data-target="#exampleModalEdit">Edit</a>';
							$table .= '</form>';
							$table .= '<form method="POST" action="delete" style="display: inline-block;">';
							$table .= '<input type="hidden" name="id" value="' . $value->id . '">';
							$table .=  '<button type="button" class="btn btn-danger delete-button">Delete</button>';
							$table .= '</form>';

							$table .= '</td>';
							$table .= '</tr>';
						}
					} else {
						$table .= '<tr>';
						$table .= '<td colspan="6" class="text-center text-danger">No Record Found</td>';
						$table .= '</tr>';
					}
					echo json_encode(['table' => $table, 'totalRecords' => $srNo]);

					break;

				case '/save':

					if (isset($_POST)) {
						$catName = $_POST['cat_name'];
						$slug = $_POST['slug'];

						if ($catName == '') {
							$addClassCatName = "is-invalid";
						}

						if ($slug == '') {
							$addClassCatSlug = "is-invalid";
						}

						if (($catName && $slug) != '') {

							$data = array(
								'name' => $catName,
								'slug' => $slug,
								'created_by' => 1
							);

							$result = $this->insertData($data, 'categories');

							if ($result) {
								$dataResult = array('status' => 1, 'message' => 'New Category Added', 'className' => 'alert-success');
							} else {
								$dataResult = array('status' => 2, 'message' => 'Something Error', 'className' => 'alert-danger');
							}
						}

						echo json_encode($dataResult);
					}
					break;

				case '/modal-edit':
					if (isset($_POST)) {
						echo "string";
						$catName = $_POST['cat_nameE'];
						$slug = $_POST['slugE'];

						if ($catName == '') {
							$addClassCatName = "is-invalid";
						}

						if ($slug == '') {
							$addClassCatSlug = "is-invalid";
						}

						if (($catName && $slug) != '') {
							$id = $_POST['editid1'];
							$data = array(
								'name' => $catName,
								'slug' => $slug
							);

							$result = $this->updateData($data, $id, 'categories');

							if ($result) {
								$dataResult = array('message' => 'value Updated', 'className' => 'alert-success');
							} else {
								$dataResult = array('message' => 'Something Error', 'className' => 'alert-danger');
							}
						}
						echo json_encode($dataResult);
					}
					break;

				case '/edit':
					
					if (isset($_POST['editid'])) {
						$editId = $_POST['editid'];
						$result = $this->getDataById($editId, 'categories');
						echo json_encode(['result' => $result, 'mainid' => $editId]);
					}

					break;

				case '/delete':

					if (isset($_POST)) {

						$result = $this->destroy($_POST['id'], 'categories');

						if ($result) {
							$dataResult = array('status' => 1, 'message' => 'Category Deleted', 'className' => 'alert-success');
						} else {
							$dataResult = array('status' => 2, 'message' => 'Something Error', 'className' => 'alert-danger');
						}
					}
					echo json_encode($dataResult);

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

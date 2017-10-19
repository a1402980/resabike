<?php
include_once ROOT_DIR.'views/header.inc';

//Collect data from controller
$msg = $this->vars['msg'];
$user = $_SESSION['user'];

$stations = $_SESSION['regional_stations'];
var_dump($stations);

?>

<div class="container">
	<div class="col l12 center card admin-menu">
		<h4>Stations for region [region here]:</h4>
		<table id="regional-stations-list">
			<thead>
				<th>ID</th>
				<th>Station Name</th>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" name="id" value=""></td>
					<td><input type="text" name="name" value=""></td>
				</tr>
			</tbody>
		</table>
	</div>


</div>


<?php
unset($_SESSION['msg']);
include_once ROOT_DIR.'views/footer.inc';
?>

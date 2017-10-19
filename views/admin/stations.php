<?php
include_once ROOT_DIR.'views/header.inc';

//Collect data from controller
$msg = $this->vars['msg'];
$user = $_SESSION['user'];

$stations = $_SESSION['regional_stations'];

?>

<div class="container">
	<div class="col l12 center card admin-menu">
		<h4>Stations for region [region here]:</h4>
		<p>Disclamer: Make sere the station IDs are correct!</p>
		<table id="regional-stations-list">
			<thead>
				<th>ID</th>
				<th>Station Name</th>
			</thead>
			<tbody>
				<?php foreach ($stations as $station): ?>
				<tr>
						<td><input type="text" name="id" value="<?php echo $station['id'] ?>"></td>
						<td><input type="text" name="name" value="<?php echo $station['name'] ?>"></td>
						<td><a class="btn-floating delete-row"><i class="material-icons">delete</i></a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>

		</table>
		<button id="add-table-row" class="btn waves-effect waves-light" type="button" name="action">Add station
	  		<i class="material-icons right">add</i>
		</button>
	</div>


</div>


<?php
unset($_SESSION['msg']);
include_once ROOT_DIR.'views/footer.inc';
?>

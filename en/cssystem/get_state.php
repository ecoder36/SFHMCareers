<?php
include_once('require/api/db.php');
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["country_id"])) {
	$query ="SELECT * FROM regions WHERE `eregion` = '" . $_POST["country_id"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select State</option>
<?php
	foreach($results as $state) {
?>
	<option value="<?php echo $state["ecity"]; ?>"><?php echo $state["ecity"]; ?></option>
<?php
	}
}
?>
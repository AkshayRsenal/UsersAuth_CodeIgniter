<!-- <style type="text/css">
		.form-control {
		  display: block;
		  width: 100%;
		  height: calc(1.5em + 0.75rem + 15px);
		  padding: 0.375rem 0.75rem;
		  font-size: 1.875rem;
		  font-weight: 400;
		  line-height: 1.5;
		  color: #5c6873;
		  background-color: #fff;
		  background-clip: padding-box;
		  border: 1px solid #e4e7ea;
		  border-radius: 0.25rem;
		  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}
</style> -->
<div class="input-group-prepend">
	<span class="input-group-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</div>

<?php
	$stateIdVal = $_REQUEST["stateID"];

	// echo $stateIdVal;

	$query = $this->db->get_where('list_cities',array('from_state_id' => $stateIdVal));

	 $cityArray= $query->result_array();
?>
		<select  class="form-control" name="city_Select" id="cityNameID" required>

			<option value="0" selected> -- Select City -- </option>

			<?php foreach ($cityArray as $cityKey => $cityValue){ ?>

				<option value = "<?php echo $cityValue['city_id']; ?>" > <?php echo $cityValue['city_name']; ?> </option>

			<?php } ?>

		</select>

<?php

	// print_r($cityArray); 
?>

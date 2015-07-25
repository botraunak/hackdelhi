<div class="container">
	<br><br>
	<div class="row">
		<form action="viewcourseware.php" method="get">
		<div class="input-field col s6 offset-s3">
			<select name="subject" id="subject" class="browser-default">
				<option value="">Choose Subject</option>
				<?php 
					$subjects = getsubjects($_SESSION["user"]["sem"],$_SESSION["user"]["stream"]);
	 						foreach ($subjects as $value) {
 								echo '<option value="'.$value["subjectid"].'">'.$value["subjectname"].'</option>';
 							}
 				?>
			</select>
		</div>
		<div class="input-field col s2">
			<button type="submit" class="btn">Go</button>
		</div>
		</form>
	</div>

	<br>

	<h4>Please Select A subject to view your prescribed books</h4>
</div>
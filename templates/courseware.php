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
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque minima eum necessitatibus, vero amet, aut ipsa sunt laudantium eos, odit omnis voluptatibus earum vel cupiditate! Rem id eaque ea temporibus mollitia! Dolor libero ratione adipisci magnam cumque, necessitatibus facilis voluptatem itaque placeat, incidunt commodi eius. Expedita error incidunt, est rem dolore, distinctio, vero laboriosam facilis quae aperiam necessitatibus, porro. Quod numquam, vitae in cumque incidunt obcaecati! Doloremque explicabo vel voluptate earum repellendus suscipit quidem neque repudiandae totam eius laudantium iste error facilis est quo nesciunt atque, ex tempora eum accusamus quam vero, sapiente molestias a. Dolor similique animi quisquam, perspiciatis.</p>
</div>
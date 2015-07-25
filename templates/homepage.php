<div class="container">
  <br>
  <h3>Hello there <?php  echo $_SESSION["user"]["name"];?>!</h3>

	<div class="row">
		<div class="col s12 m6">
			<h4>Notifications</h4>
			<ul class="collection">
				<li class="collection-item avatar">
					<img src="images/yuna.jpg" alt="" class="circle">
					<span class="title">Title</span>
					<p>First Line <br>
						Second Line
					</p>
					<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				<li class="collection-item avatar">
					<i class="material-icons circle">folder</i>
					<span class="title">Title</span>
					<p>First Line <br>
						Second Line
					</p>
					<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				<li class="collection-item avatar">
					<i class="material-icons circle green">insert_chart</i>
					<span class="title">Title</span>
					<p>First Line <br>
						Second Line
					</p>
					<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				<li class="collection-item avatar">
					<i class="material-icons circle red">play_arrow</i>
					<span class="title">Title</span>
					<p>First Line <br>
						Second Line
					</p>
					<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
			</ul>
		</div>
		<div class="col s12 m6">
			<h4>Add Books</h4>
			 <form action="addbook.php" method="post" class="col s12">
			 	<div class="input-field col s12" style="margin-top:-15px;">
			 	  <p>Select Stream</p>
			 		<select onchange="populatesubjects()" id="stream" class="browser-default">
			 	  		<option value="">Choose Stream</option>
			 			<?php 
			 				$streams = getstreamdata();
	 						foreach ($streams as $value) {
 								echo '<option value="'.$value["streamid"].'">'.$value["streamname"].'</option>';
 							}
 						?>
			 		</select>

			 		<p>Semester</p>
			 		<select onchange="populatesubjects()" id="sem" name="sem" class="browser-default">
			 			<option value="">Choose Sem</option>
			 			<?php 
			 			$sems = ["0","I","II","III","IV","V","VI","VII","VIII"];
			 			for($i=1;$i<=8;$i++) {
			 				echo '<option value="'.$i.'">'.$sems[$i].'</option>';
			 			}
			 			?>
			 		</select>

                    <p>Subject</p>
                    <select name="subject" id="subject" onchange="populatebooks()" class="browser-default">
                    	<option value="">Choose subject</option>
			 			
                    </select>

					<p>Book</p>
                    <select name="book" id="book" class="browser-default">
                    	<option value="">Choose book</option>
                    	
                    </select>

			 	<br>
			 	</div>
			 	<div class="input-field col s12">
                    	<input name="price" id="last_name" type="number" class="validate" width="100%">
                    	<label for="last_name">Price</label>

				<button type="submit" class="btn">Add Book</button>
                </div>

     		 </form>
		</div>
	</div>
</div>
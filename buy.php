
        <?php
				include 'dbconnect.php';
				$mysqli=connectdb();
				if($mysqli->connect_error)
					{
					die("Connection Failed ".$mysqli->connect_error);
					}
					
					$sql="Select * from sell";
					$result=$mysqli->query($sql);
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{	
							echo '
							<div class="col-lg-12">
												  <div class="listing-item">
													<div class="left-image">
													  <a href="#"><img src="'.$row["supload"].'" alt="" width="500" height="500"></a>
													  <div class="hover-content">
														
													  </div>
													</div>
													<div align="right" ><br><br><center>
													  <a href="#"><h4>Apartment Name : '.$row["suy"].'</h4></a><br><br>
													  <h6>Price: '.$row["ssize"].'</h6><br><br>
													   <h6>Area: '.$row["sprice"].'</h6><br><br>
													     <h6>Description: '.$row["sgender"].'</h6>
														 <br><center>
														 <div class="btn-box" >
														 <input type="button" name="btnsubmit" value="BOOK NOW">
														  
														</div>
								
													</div>
												  </div>
									</div></form>';
						}  
					}
				?>
        

       
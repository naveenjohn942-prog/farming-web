<?php include './include/header.html';
include './include/connection.php'; 


$rid = $_GET['id'];
$rsql = "SELECT * FROM `tbl_product` WHERE f_id = $rid";
$rquery = mysqli_query($conn, $rsql);
$rrow = mysqli_fetch_assoc($rquery);

$eid = $_GET['id'];
$esql = "SELECT * FROM `tbl_expert_details` WHERE e_id = $eid";
$equery = mysqli_query($conn, $esql);
$erow = mysqli_fetch_assoc($equery);

$revid = $_GET['id'];
$revsql = "SELECT * FROM `tbl_reviews` WHERE review_id = $revid";
$revquery = mysqli_query($conn, $revsql);
$revrow = mysqli_fetch_assoc($revquery);
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Review</h4>
                  
                  <form class="forms-sample" method="POST" action="">
                    <div class="form-group" id="pname-update-input-div">
                      <label for="exampleInputName1">Product  Name</label>
                      <input type="text" class="form-control" id="pname-update-input" placeholder="Name" value="<?php echo $rrow['product_name']; ?>" readonly>
                      <div id="pname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div>
                    <div class="form-group" id="pname-update-input-div">
                      <label for="exampleInputName1">Expert  Name</label>
                      <input type="text" class="form-control" id="pname-update-input" placeholder="Name" value="<?php echo $erow['username']; ?>" readonly>
                      <div id="pname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div>
                     
                    <div class="form-group">
                        <label for="exampleInputName1">Review</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Description" name="review_det" value="<?php echo $revrow['review_details']; ?>">
                    </div> 
                     
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    <button class="btn btn-light" name='submit'>Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
  <script>
		let name_error = false;
		let email_error = false;
		let password_error = false;
		let number_error = false;
		const fname = document.getElementById("pname-update-input");
		const lname = document.getElementById("lname-input");
		const email = document.getElementById("email-input");
		const password = document.getElementById("password-input");
		const number = document.getElementById("number-input");


		fname.addEventListener("keyup", function(e) {
			e = e || window.event;
			// Add scripts here
			let inputText = e.keyCode;
			const inputValue = e.target.value;
			inputText = e.key.toString();
  			console.log(inputText);
  			console.log(inputValue);
			if(!isNaN(inputText)) {
				$('#pname-update-input-div').addClass("has-danger");
				$('#pname-update-input').addClass('form-control-danger');
				$('#pname-update-input-label').show();
			}else {
				$('#pname-update-input-div').removeClass("has-danger");
				$('#pname-update-input').removeClass('form-control-danger');
				$('#pname-update-input-label').hide();
			}
		})


	</script>
<?php include './include/footer.html';
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (isset($_POST['submit']))
  {
    
     
      $rev_details=$_POST['review_det'];
      
      $update_query="UPDATE tbl_reviews SET review_details = '$rev_details' WHERE review_id = '$revid' ";
  
  
      $res = mysqli_query($conn, $update_query);
    
      if($res){
      
        echo "<script>alert('Updated successfully');</script>";
      }
      else{
        echo "<script>alert('Updated unsuccessfully');</script>";
      }
    }
    
  } ?>
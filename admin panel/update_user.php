<?php include './include/header.html';
include './include/connection.php';


  $rid = $_GET['id'];
  $rsql = "SELECT * FROM `tbl_farmer` WHERE f_id = $rid";
  $rquery = mysqli_query($conn, $rsql);
  $rrow = mysqli_fetch_assoc($rquery);

  $eid = $_GET['id'];
$esql = "SELECT * FROM `tbl_farmer` WHERE f_id = $eid";
$equery = mysqli_query($conn, $esql);
$erow = mysqli_fetch_assoc($equery);

$revid = $_GET['id'];
$revsql = "SELECT * FROM `tbl_farmer` WHERE f_id = $revid";
$revquery = mysqli_query($conn, $revsql);
$revrow = mysqli_fetch_assoc($revquery);

$aid = $_GET['id'];
$asql = "SELECT * FROM `tbl_farmer` WHERE f_id = $aid";
$aquery = mysqli_query($conn, $asql);
$arow = mysqli_fetch_assoc($aquery);
    ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Farmer Details</h4>
                  
                  <form class="forms-sample" method="POST">
                    
                    <div class="form-group" id="uname-update-input-div">
                        <label for="exampleInputName1">User Name</label>
                        <input type="text" class="form-control" id="uname-update-input" name="username" value="<?php echo $rrow['username']; ?>">
                        <div id="uname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" class="form-control" required onkeyup="emails(this)" name="email" invalid-text="exampleInputName16" value="<?php echo $erow['f_email']; ?>" >
                        <small id="exampleInputName16" style="color: red; display: none;">Please Enter valid Email.<br/></small>
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputName1">Mobile No.</label>
                        <input type="number" class="form-control" name="phonenumber" required onkeyup="tel(this)" invalid-text="exampleInputName1" value="<?php echo $revrow['phone_no']; ?>">
                        <small id="phonenumber" style="color: red; display: none;">Please Enter valid Phone number.<br/></small>
                    </div>                   
                    <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="addr" value="<?php echo $arow['address']; ?>">
                    </div> 
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
  <script>
		let name_error = false;
		let email_error = false;
		let password_error = false;
		let number_error = false;
		const fname = document.getElementById("uname-update-input");
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
				$('#uname-update-input-div').addClass("has-danger");
				$('#uname-update-input').addClass('form-control-danger');
				$('#uname-update-input-label').show();
			}else {
				$('#uname-update-input-div').removeClass("has-danger");
				$('#uname-update-input').removeClass('form-control-danger');
				$('#uname-update-input-label').hide();
			}
		})


	</script>
<?php include './include/footer.html';
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (isset($_POST['submit']))
  {
    
     
      $username=$_POST['username'];
      $phonenumber=$_POST['phonenumber'];
      $email=$_POST['email'];
      $addr=$_POST['addr'];
      
      $update_query="UPDATE tbl_farmer SET username = '$username' , phone_no='$phonenumber' , f_email='$email', address='$addr' WHERE f_id = '$aid' ";
  
  
      $res = mysqli_query($conn, $update_query);
    
      if($res){
      
        echo "<script>alert('Updated successfully');</script>";
      }
      else{
        echo "<script>alert('Updated unsuccessfully');</script>";
      }
    }
    
  } ?>
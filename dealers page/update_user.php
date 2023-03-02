<?php include './include/header.html';
include './include/connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (isset($_POST['submit']))
  {
    
     
      $userid=$_POST['userid'];
      $username=$_POST['username'];
      $email=$_POST['email'];
      $phone=$_POST['phonenumber'];
      $addr=$_POST['address'];

      $update_query="UPDATE tbl_dealer SET username = '$username', email = '$email',phone = '$phonenumber', addr = '$address' WHERE userid = '$userid' ";
  
  
      $res = mysqli_query($conn, $update_query);
    
      if($res){
      
        echo "<script>alert('Updated successfully');</script>";
      }
      else{
        echo "<script>alert('Updated unsuccessfully');</script>";
      }
    }
    
  }
    ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Farmer Details</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">User Id</label>
                      <input type="number" class="form-control" id="exampleInputName1" name="userid">
                    </div>
                    <div class="form-group" id="uname-update-input-div">
                        <label for="exampleInputName1">User Name</label>
                        <input type="text" class="form-control" id="uname-update-input" name="username">
                        <div id="uname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" class="form-control" required onkeyup="emails(this)" name="email" invalid-text="exampleInputName16" >
                        <small id="exampleInputName16" style="color: red; display: none;">Please Enter valid Email.<br/></small>
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputName1">Mobile No.</label>
                        <input type="number" class="form-control" name="phonenumber" required onkeyup="tel(this)" invalid-text="exampleInputName1" >
                        <small id="exampleInputMobile14" style="color: red; display: none;">Please Enter valid Phone number.<br/></small>
                    </div>                   
                    <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="addr">
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
<?php include './include/footer.html'; ?>
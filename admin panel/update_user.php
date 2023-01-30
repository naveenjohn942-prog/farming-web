<?php include './include/header.html'; ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Users Details</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">User Id</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="ID" value="1" readonly>
                    </div>
                    <div class="form-group" id="uname-update-input-div">
                        <label for="exampleInputName1">User Name</label>
                        <input type="text" class="form-control" id="uname-update-input" placeholder="Username" value="heisenberg">
                        <div id="uname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" class="form-control" required onkeyup="emails(this)" invalid-text="exampleInputName16" placeholder="Email" value="abc@gmail.com">
                        <small id="exampleInputName16" style="color: red; display: none;">Please Enter valid Email.<br/></small>
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputName1">Mobile No.</label>
                        <input type="number" class="form-control" required onkeyup="tel(this)" invalid-text="exampleInputName1" placeholder="Number" value="7887868479">
                        <small id="exampleInputMobile14" style="color: red; display: none;">Please Enter valid Phone number.<br/></small>
                    </div>                   
                    <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Address" value="shfghsgjhsg">
                    </div> 
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
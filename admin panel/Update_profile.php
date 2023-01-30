<?php include './include/header.html'; ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Profile</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group row" id="pro-name-update-input-div">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Your Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="pro-name-update-input" placeholder="Name">
                        <div id="pro-name-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" required onkeyup="emails(this)" invalid-text="exampleInputEmail13" placeholder="Email">
                        <small id="exampleInputEmail13" style="color: red; display: none;">Please Enter valid Email.<br/></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                      <div class="col-sm-9">
                        <input type="Number" class="form-control" required onkeyup="tel(this)" invalid-text="exampleInputMobile14" placeholder="Mobile number">
                        <small id="exampleInputMobile14" style="color: red; display: none;">Please Enter valid Phone number.<br/></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" required onkeyup="pswds(this)" invalid-text="exampleInputPassword15" placeholder="Password">
                        <small id="exampleInputPassword15" style="color: red; display: none;"><ul>
                  <li>min 6 characters, max 50 characters</li>
                  <li>must contain 1 letter</li>
                  <li>must contain 1 number</li>
                  <li>may contain special characters like !@#$%^&*()_+</li>

                </ul><br/></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      
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
		const fname = document.getElementById("pro-name-update-input");
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
				$('#pro-name-update-input-div').addClass("has-danger");
				$('#pro-name-update-input').addClass('form-control-danger');
				$('#pro-name-update-input-label').show();
			}else {
				$('#pro-name-update-input-div').removeClass("has-danger");
				$('#pro-name-update-input').removeClass('form-control-danger');
				$('#pro-name-update-input-label').hide();
			}
		})


	</script>
<?php include './include/footer.html'; ?>
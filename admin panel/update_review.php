<?php include './include/header.html';
include './include/connection.php'; ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Review</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group" id="pname-update-input-div">
                      <label for="exampleInputName1">Product  Name</label>
                      <input type="text" class="form-control" id="pname-update-input" placeholder="Name" value="xyz">
                      <div id="pname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div>
                    <div class="form-group" id="pname-update-input-div">
                      <label for="exampleInputName1">Farmer  Name</label>
                      <input type="text" class="form-control" id="pname-update-input" placeholder="Name" value="xyz">
                      <div id="pname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div>
                     
                    <div class="form-group">
                        <label for="exampleInputName1">Review</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Description" value="afgkdguykgaguyfggfgggaykgke">
                    </div> 
                     
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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
<?php include './include/footer.html'; ?>
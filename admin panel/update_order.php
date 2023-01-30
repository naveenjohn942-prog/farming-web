<?php include './include/header.html'; ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Order</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group" id="oname-update-input-div">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" id="oname-update-input" placeholder="Name" value="xyz">
                      <div id="oname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Product  Type</label>
                        <select class="form-control">
                          <option>Flower Seeds</option>
                          <option>seasonal seeds</option>
                          <option>tool and equipment</option>
                          <option>bio fertilizer</option>
                          <option>chemical fertilizer</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputName1">MRP</label>
                        <input type="number" class="form-control" required onkeyup="numbers(this)" invalid-text="exampleInputName6" placeholder="MRP" value="789">
                        <small id="exampleInputName6" style="color: red; display: none;">Please Enter valid MRP.<br/></small>
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="number" class="form-control" required onkeyup="numbers(this)" invalid-text="exampleInputName7" placeholder="Price" value="78">
                        <small id="exampleInputName7" style="color: red; display: none;">Please Enter valid Price.<br/></small>
                    </div>                   
                    <div class="form-group">
                        <label for="exampleInputName1">Quantity</label>
                        <input type="number" class="form-control" required onkeyup="numbers(this)" invalid-text="exampleInputName8" placeholder="Quantity" value="9">
                        <small id="exampleInputName8" style="color: red; display: none;">Please Enter valid Quantity.<br/></small>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputName1">Product  Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Description" value="afgkdguykgaguyfggfgggaykgke">
                    </div> 
                    <div class="col-md-6 form-group">
                    <span>Order Status </span>
                      <select name="order_status" class="form-control">
                        <option></option>
                        <option value="Rejected" selected="">Rejected</option>
                        <option value="Completed">Completed</option>
                        <option value="Pending">Pending</option>
                        
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <span>Payment status</span>
                    <select name="order_status" class="form-control">
                        <option></option>
                        <option value="Rejected" selected="">Rejected</option>
                        <option value="Completed">Completed</option>
                        <option value="Pending">Pending</option>
                        
                    </select>
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
		const fname = document.getElementById("oname-update-input");
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
				$('#oname-update-input-div').addClass("has-danger");
				$('#oname-update-input').addClass('form-control-danger');
				$('#oname-update-input-label').show();
			}else {
				$('#oname-update-input-div').removeClass("has-danger");
				$('#oname-update-input').removeClass('form-control-danger');
				$('#oname-update-input-label').hide();
			}
		})


	</script>
<?php include './include/footer.html'; ?>
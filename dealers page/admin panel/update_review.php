<?php include './include/header.html';
include './include/connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (isset($_POST['submit']))
  {
    
     
      $review_details=$_POST['review_details'];
      $product_name=$_POST['product_name'];
      $update_query="UPDATE tbl_reviews SET review_details = '$review_details' WHERE product_name = '$product_name' ";
  
  
      $res = mysqli_query($conn, $update_query);
    
      if($res){
      
        echo "<script>alert('Updated successfully');</script>";
      }
      else{
        echo "<script>alert('Updated successfully');</script>";
      }
    }
    
  } ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
          <?php $result=$conn->query("SELECT * FROM tbl_product WHERE product_name = '".$_GET['product_name']."'");
        $row = $result->fetch_assoc();
        $result=$conn->query("SELECT * FROM tbl_farmer WHERE first_name = '".$_GET['first_name']."'");
        $row = $result->fetch_assoc();


       $result1=$conn->query("SELECT review_details FROM tbl_reviews ");
        $row1 = $result1->fetch_assoc();

        ?> 
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Review</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group" id="pname-update-input-div">
                      <label for="exampleInputName1">Product  Name</label>
                      <input type="text" class="form-control" id="pname-update-input" value="<?php echo $row["product_name"]; ?>" name="product_name">
                      <div id="pname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div>
                    <div class="form-group" id="pname-update-input-div">
                      <label for="exampleInputName1">Farmer  Name</label>
                      <input type="text" class="form-control" id="pname-update-input"  value="<?php echo $row["product_name"]; ?>" name="product_name">
                      <div id="pname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div>
                     
                    <div class="form-group">
                        <label for="exampleInputName1">Review</label>
                        <input type="text" class="form-control" id="exampleInputName1"  value="<?php echo $row["review_details"]; ?>" name="review_details" >
                    </div> 
                     
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
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
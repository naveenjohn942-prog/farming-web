<?php include './include/header.html';
include './include/connection.php';

include './include/connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

if (isset($_POST['submit']))
{
  

    $order_status=$_POST['order_status'];
  $product_name=$_POST['product_name'];

    $update_query="UPDATE tbl_orders SET order_status = '$order_status' WHERE product_name = '$product_name' ";


    $res = mysqli_query($conn, $update_query);
  
    if($res){
    
      echo "<script>alert('Updated successfully');</script>";
    }
    else{
      echo "<script>alert('Updated successfully');</script>";
    }
  }
  
}
  ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
          <?php $result=$conn->query("SELECT * FROM tbl_product WHERE product_name = '".$_GET['product_name']."'");
        $row = $result->fetch_assoc();


       $result1=$conn->query("SELECT order_status FROM tbl_orders ");
        $row1 = $result1->fetch_assoc();

        ?>
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Order</h4>
                  
                  <form class="forms-sample">
                    <div class="form-group" id="oname-update-input-div">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" id="oname-update-input" value="<?php echo $row["product_name"]; ?>" name="product_name">
                      <div id="oname-update-input-label" class="form-control-feedback" style="display: none; color: red;">Please Enter alphabet</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Product  Type</label>
                        <select class="form-control">
                          <!-- <option>Flower Seeds</option>
                          <option>seasonal seeds</option>
                          <option>tool and equipment</option>
                          <option>bio fertilizer</option>
                          <option>chemical fertilizer</option> -->

                          <?php while($row1 = $result1->fetch_assoc()){ ?>
                            <option> <?php echo $row1["product_type"];?></option>
                            <?php } ?>

                        </select>
                    </div> 
                     
                    <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="number" class="form-control" required onkeyup="numbers(this)" invalid-text="exampleInputName7" value="<?php echo $row["price"]; ?>" name="price">
                        <small id="exampleInputName7" style="color: red; display: none;">Please Enter valid Price.<br/></small>
                    </div>                   
                    <div class="form-group">
                        <label for="exampleInputName1">Quantity</label>
                        <input type="number" class="form-control" required onkeyup="numbers(this)" invalid-text="exampleInputName8"  value="<?php echo $row["quantity"]; ?>" name="quantity">
                        <small id="exampleInputName8" style="color: red; display: none;">Please Enter valid Quantity.<br/></small>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputName1">Product  Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $row["p_description"]; ?>" name="p_description">
                    </div> 
                    <div class="col-md-6 form-group">
                    <span>Order Status </span>
                      <select name="order_status" class="form-control" value="order_status">
                        <option></option>
                        <option >Rejected</option>
                        <option >Completed</option>
                        <option >Pending</option>
                        
                    </select>
                </div>
                <div class="col-md-6 form-group">
                  
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
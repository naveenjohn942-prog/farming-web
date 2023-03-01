<?php include './include/header.html';
include './include/connection.php'; 





$rid = $_GET['rid'];
$rsql = "SELECT * FROM `tbl_queries` WHERE query_id = $rid";
$rquery = mysqli_query($conn, $rsql);
$rrow = mysqli_fetch_assoc($rquery);

$qid = $_GET['rid'];
$qsql = "SELECT * FROM `tbl_response` WHERE response_id = $qid";
$qquery = mysqli_query($conn, $qsql);
$qrow = mysqli_fetch_assoc($qquery);
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
          
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Review</h4>
                  
                  <form class="forms-sample" method="POST">
                    <div class="form-group" id="pname-update-input-div">
                      <label for="exampleInputName1">Query</label>
                      <input type="text" class="form-control" id="pname-update-input" name="query_desc" value="<?php echo $rrow['q_desc']; ?>" readonly>
                      <div id="pname-update-input-label" class="form-control-feedback" style="display: none; color: red;"></div>
                    </div>
                    
                     
                    <div class="form-group">
                        <label for="exampleInputName1">Response</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="response_details" value="<?php echo $qrow['response_details']; ?>">
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
<?php include './include/footer.html'; 
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (isset($_POST['submit']))
  {
    
     
      $response_details=$_POST['response_details'];
      
      $update_query="UPDATE tbl_response SET response_details = '$response_details' WHERE query_id = '$rid' ";
  
  
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
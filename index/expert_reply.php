<?php include './include/header.php';
include './include/connection_session.php';

    $sql = "SELECT q_desc FROM tbl_queries;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $sql1 = "SELECT response_details FROM tbl_response;";
    $result1 = mysqli_query($conn, $sql1);
    $resultCheck1 = mysqli_num_rows($result1);
   
    $sql2 = "SELECT * FROM tbl_expert_details;";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);
    
    if (isset($_POST['submit']))
        {
        $response = $_POST['message'];
        
        $query = "INSERT INTO tbl_response(response_details, status) VALUES('$response','ACTIVE')";
        
        
        if ($conn->query($query) === TRUE) {
        echo "<script>alert('Done');</script>";
        }
        else{
          
          echo "Error".mysqli_error($conn);
        }
        } 
     
 ?>

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                                <div class="blog-details__date">
                                    <p>28</p>
                                    <span>Dec</span>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                <ul class="list-unstyled blog-details__meta">
                                    <li><a href="blog-details.html"><i class="fas fa-user-circle"></i> By Naveen John</a>
                                    </li>
                                    
                                </ul>
                                <?php if($resultCheck!=0)
            {
        while(($total=mysqli_fetch_assoc($result)))
        {
        ?>
            <h3 class="blog-details__title"><?php echo $total['q_desc']; break; ?></h3>
        <?php
        }}
        else
    {
        echo "No Records Found";
    }
        ?>
                                <?php if($resultCheck1!=0)
            {
        while(($total=mysqli_fetch_assoc($result1)))
        {
        ?>
                                <p class="blog-details__text-1"><?php echo $total['response_details']; break;?></p>
                                <?php
        }}
        else
    {
        echo "No Records Found";
    }     ?>           
                            </div><br><br>
                            <div class="comment-one">
                               
                                <div class="comment-form">
                                    <h3 class="comment-form__title">Provide Your Answer</h3>
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                <?php if($resultCheck2!=0)
                                                 {
                                                     while(($total=mysqli_fetch_assoc($result2)))
                                                         {
                                                          ?>
                                                         <input type="text" placeholder="Your Name" name="name" value="<?php echo $total['first_name']." ".$total['last_name'];?>">
                                                          <?php
                                                          break;
                                                         }
                                                }
                                                else
                                                            {
                                                      echo "No Records Found";
                                                            }     ?>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write a Comment"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Question</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Harsh</span>
                                                <a href="blog-details.html">Agriculture Miracle
                                                    you Dont know About</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Jenin</span>
                                                <a href="blog-details.html">There are many variations of</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Tejas</span>
                                                <a href="blog-details.html">Bring to the table win-win survival</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->
        
        <?php include './include/footer.html';
        
        ?>
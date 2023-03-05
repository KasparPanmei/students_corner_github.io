<?php
    include 'email_connect.php';
    session_start();
    $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Corner</title>
    <link rel="icon" href="./1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      *
{
    margin: 0%;
    padding: 0%;
}
body
{
    background: linear-gradient(to right, rgb(51, 49, 49),rgb(61, 70, 71));
}
/* start of header and navbar */
header
{
    background-color: rgb(32, 33, 33);
}
header .navbar
{
    display: block;
    align-items: center;
    justify-content: space-evenly;
}
header .navbar img
{
    width: 30%;
}
/* end of navbar and header */
/* start of php-connection and details */
section .php-connection .flex
{
    display: flex;
    justify-content: space-evenly;
}
section .php-connection .flex .image
{
    display: flex;
    flex-direction: column;
    overflow: hidden;
}
section .php-connection .flex .image img
{
    width: 250px;
    height: 200px;
    border-radius: 5px;
    margin: 10px 0 0 10px;
    object-fit: contain;
}
section .php-connection .flex .image #signature
{
    width: 250px;
    height: 50px;
}

/* scholastic -details */
section .php-connection .flex .image .scholastic_details
{
    display: flex;
    justify-content: space-between;
    padding: 5px;
    border-radius: 2px;
    color: white;
    font-size: 20px;
    letter-spacing: 1px;
}
section .php-connection .flex .image .scholastic_details .new-frnt-end,.new-bck-end
{
    line-height: 40px;
}

/* personal detail side */

section .php-connection .flex .head h1
{
    letter-spacing: 2px;
    color: white;
    font-size: 30px;
    text-transform: uppercase;
    background-image: linear-gradient(-255deg,#fff800 0%,
    #ff1361 29%,#ff1361 67%,#fff800 100%);
    background-size: auto auto;
    background-clip: border-box;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-fill-color: transparent;
    animation: scale 1s infinite linear;
}
section .php-connection .flex .details
{
    display: flex;
    gap: 20px;
    justify-content: space-between;
    font-size: 25px;
    color: white;
    border: 1px solid white;
    border-radius: 8px;
    margin: 20px 0 0 0;
    padding: 10px;
    letter-spacing: 1px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
    background-color: rgb(32, 33, 33);
}
section .php-connection .flex .details .frnt-end-details,.bck-end-details
{
    line-height: 50px;
}

/* section btn */
section .btn
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 33px 0 0 0;
}
section .btn button
{
    padding: 10px 50px;
    font-size: 20px;
    background-color: rgb(14, 94, 192);
    color: white;
    border: 1px solid  rgb(14, 94, 192);
    border-radius: 8px;
    cursor: pointer;
}
section .btn .modal-content
{
    background-color: rgb(32, 33, 33);
}
section .btn .modal .btn
{
    width: 100px;
    margin: 5px;
}
section .btn .modal .canvas-flex
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}
section .offcanvas
{
    background-color:  rgb(32, 33, 33);
    color: white;
}
#logout
{
    display: flex;
    justify-content: center;
}
@media (max-width:1030.98px) 
{
    section .php-connection .flex .image .scholastic_details h4
    {
        font-size: 15px;
    }
    section .php-connection .flex .details h4
    {
        font-size: 15px;
    }
    section .btn button
    {
        padding: 10px 30px;
        font-size: 15px;
    }
}
@media (max-width:723.98px) 
{
    section .php-connection .flex .image .scholastic_details h4
    {
        font-size: 10px;
    }
    section .php-connection .flex .details h4
    {
        font-size: 10px;
    }
    section .btn button
    {
        padding: 10px 30px;
        font-size: 10px;
    }
    #logout button
    {
        font-size: 12px;
    }
}
@media (max-width:583.98px) 
{
    section .php-connection .flex .image
    {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section .php-connection .flex 
    {
        display: block;
    }
    section .php-connection .flex .image .scholastic_details
    {
        display: flex;
        justify-content: space-evenly;
        gap: 20px;
    }
    section .php-connection .flex .image .scholastic_details h4
    {
        font-size: 18px;
    }
    section .php-connection .flex .details
    {
        display: flex;
        gap: 20px;
        justify-content: space-evenly;
    }
    section .php-connection .flex .details h4
    {
        font-size: 18px;
    }
    #logout button
    {
        font-size: 10px;
    }
}
@media (max-width:478.98px) 
{
    section .php-connection .flex .details h4
    {
        font-size: 10px;
    }
    section .php-connection .flex .image .scholastic_details h4
    {
        font-size: 10px;
    }
}
@media (max-width:303.98px) 
{
    section .php-connection .flex .head h1
    {
        letter-spacing: 2px;
        color: white;
        font-size: 20px;
    }
    section .php-connection .flex .image .scholastic_details h4
    {
        font-size: 9px;
    }
    section .php-connection .flex .details h4
    {
        font-size: 8px;
    }
}
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <img src="./Manipur-Technical-University-logo.png" alt="">
        </div>
    </header>
    <section>
        <form action=""method="post" enctype="multipart/form-data">
            <div class="php-connection">
            <?php
            $select = mysqli_query($con, "SELECT *FROM `student_details` WHERE id = '$user_id'") or die('Query Failed');
            if(mysqli_num_rows($select) > 0)
            {
                $fetch = mysqli_fetch_assoc($select);
            }
            ?>
            <div class="flex">
                <div class="image">
                    <img src="./image/KasparPanmei_CSE.jpg" alt="passport" id="passport" name="file" style="color:white;">
                    
                    <img src="./sign_folder/Signature.jpg" alt="signature" id="signature" name="sign" style="color:white;">
                    <div class="scholastic_details">
                        <div class="new-frnt-end">
                            <h4>MTU-Email</h4>
                            <h4>Regd. No.</h4>
                            <h4>Course</h4>
                            <h4>Branch</h4>
                            <h4>Batch</h4>
                            <h4>Current Sem</h4>
                        </div>
                        <div class="new-bck-end">
                            <h4>: 
                              <?php
                              echo $fetch['mtu_email']
                              ?>
                            </h4>
                            <h4>: 
                              <?php
                              echo $fetch['regno']
                              ?>
                            </h4>
                            <h4>: 
                              <?php
                              echo $fetch['course']
                              ?>
                            </h4>
                            <h4>: 
                              <?php
                              echo $fetch['branch']
                              ?>
                            </h4>
                            <h4>: <?php
                              echo $fetch['batch']
                              ?></h4>
                            <h4>: <?php
                              echo $fetch['sem']
                              ?></h4>
                        </div>
                    </div>
                </div>
                <div class="head">
                    <h1>Personal Details</h1>
                    <div class="details">
                        <div class="frnt-end-details">
                            <h4>Name  </h4>
                            <h4>D.O.B. </h4>
                            <h4>Father Name </h4>
                            <h4>Mother Name </h4>
                            <h4>Aadhaar </h4>
                            <h4>Social Category </h4>
                            <h4>Contact No. </h4>
                            <h4>Personal Email </h4>
                        </div>
                        <div class="bck-end-details">
                            <h4>: <?php
                              echo $fetch['name']
                              ?> </h4>
                            <h4>: <?php
                              echo $fetch['date']
                              ?></h4>
                            <h4>: <?php
                              echo $fetch['fname']
                              ?> </h4>
                            <h4>: <?php
                              echo $fetch['mname']
                              ?></h4>
                            <h4>: <?php
                              echo $fetch['aadhar']
                              ?></h4>
                            <h4>: <?php
                              echo $fetch['category']
                              ?></h4>
                            <h4>: +91-<?php
                              echo $fetch['phone']
                              ?></h4>
                            <h4>: <a href="mailto:">
                              <?php
                              echo $fetch['email']
                              ?>
                            </a></h4>
                        </div>
                    </div>
                    <div class="btn">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Semester-Details
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Documents</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- offcanvas -->
                                    <div class="canvas-flex">
                                        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            1<sup>st</sup> Semester
                                          </a>
                                        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            2<sup>nd</sup> Semester
                                          </a>
                                        <a class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            3<sup>rd</sup> Semester
                                          </a>
                                        <a class="btn btn-success" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            4<sup>th</sup> Semester
                                          </a>
                                        <a class="btn btn-warning" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            5<sup>th</sup> Semester
                                          </a>
                                        <a class="btn btn-danger" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            6<sup>th</sup> Semester
                                          </a>
                                        <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            7<sup>th</sup> Semester
                                          </a>
                                        <a class="btn btn-secondary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            8<sup>th</sup> Semester
                                          </a>
                                    </div>
                                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                    <div class="offcanvas-header">
                                      <h1 class="offcanvas-title" id="offcanvasExampleLabel">Documents</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                      <div>
                                        Upload your important documents here
                                        <br>
                                      </div>
                                      <!-- input file -->
                                      <form action=""method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                        <?php
                                        include('email_connect.php');
                                        error_reporting(0);
                                        $msg = "";
                                        extract($_POST);

                                        // Get image from Post Data
                                        $documents = $_FILES['docfile'];
                                        // Image Name
                                        $documents_name=$documents['name'];
                                        // Temporary file path
                                        $documents_tmp_name = $documents['tmp_name']; 
                                        // Folder path where Image is Saved 
                                        $destination="document/".$documents_name; 
                                        //this is a function that are used to store the file in the destination path.
                                        move_uploaded_file($documents_tmp_name , $destination); 
                                        if(isset($submit))
                                        {
                                            $sql = "INSERT INTO `documents` (doc_file)VALUES('$docfile')";
                                            if($con->query($sql)==TRUE)
                                            {
                                                echo '<script>alert("Uploaded Successfully!")</script>';
                                            }
                                            else
                                            {
                                                echo '<script>alert("Uploaded Unsuccessfully!")</script>';
                                            }
                                        }
                                        ?>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple name="docfile" required>
                                        </div>
                                          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                          <!-- end of input file -->
                                          <div class="fetch-from-database">

                                          </div>
                                        </div>
                                      </form>
                                  </div>
                                  <!-- end-of-offcanvas -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
    <footer>
        <div  id="logout">
            <a href="logout.php"><button class="btn btn-danger">Log Out</button></a>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>



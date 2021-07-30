
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Admin Page</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Do+Hyeon&family=Raleway:wght@100;300;600&display=swap" rel="stylesheet">
<link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="icon"type="image/png"href="images/rb.png">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<p align="center"><img src="images/logo.PNG"width="800"height="200"></p>
<p align="center"><a href="index.html"><img src="images/logout.JPG"width="100"></a></p>
		
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              
              <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">X</span>-->
              </button>
            </div>
        </div>

        <div class="col-md-12">
            <div class="float-left">
                <h2>Feedback List</h2>
            </div>            
           
           

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Names</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Message</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php

                include "connection.php";

                $sql="select * from feedback"; 

                $result = $con->query($sql);
                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    
                    
                    <td> 
                      <a href="edit.php?custId=<?php echo $array[0];?>" class="btn btn-primary">Update</a>
                      <a href="delete.php?custId=<?php echo $array[0];?>" class="btn btn-danger">Delete</a>
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>        
</div>

        
</section>
</center> 
</form>
</body>
</html>

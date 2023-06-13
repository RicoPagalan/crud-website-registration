<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];

    $sql = "INSERT INTO crud (`id`, `First_name`, `Last_name`, `Email`, `Gender`) VALUES (NULL, '$First_name',' $Last_name',' $Email','$Gender')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: index.php?msg=New record created successfully");
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: yellow;">
        <b>STUDENTS REGISTRATION FORM</b>
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3><b>Add New User<b></h3>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                    <label class="form-label">First Name:</label>
                    <input type="text" class="form-control" name="First_name" placeholder="Enter First Name">
                    </div>

                    <div class="col">
                    <label class="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="Last_name" placeholder="Enter Last Name">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="Email" placeholder="Enter Email">
                    </div>

                    <div class="form-group mb-3">
                    <label>Gender:</label>
                    <input type="radio" class="form-check-input" name="Gender" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>

                    <input type="radio" class="form-check-input" name="Gender" name="gender" id="female" value="female">
                    <label for="female" class="form-input-label">Female</label>
                    </div>

                    <div>
                        <button class="btn btn-success" name="submit">Save</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
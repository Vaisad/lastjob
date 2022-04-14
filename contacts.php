<?php  

if(isset($_POST['submit'])){
    header("Location: thank.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <style>
        body{ font: 14px sans-serif; }
        .regForm{ width: 800px; padding: 30px; margin: 0 auto;
    float: none;}
    </style>
</head>
<body>
    <div class="regForm">
        <h1 class="text-center mb-5 mt-5">Contact us</h1>
        <p class="text-center mb-5 mt-5 text-muted fw-light">Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-floating mb-4 mx-5">
                <input type="text" name="name" class="form-control fw-light">
                <label>Your Name</label>
            </div>    
            <div class="form-floating mb-4 mx-5">
            <input type="text" name="lastname" class="form-control fw-light">
            <label>Your Last Name</label>
            </div>    
            <div class="form-floating mb-4 mx-5">
            <select class="form-select fw-light">
                <option selected></option>
                <option value="">About Mother</option>
                <option value="">About Father</option>
                <option value="">About Something</option>
                <option value="">About You</option>
                <option value="">About Us</option>
            </select>
            <label>About What You Ask</label>
            </div>    

            <div class="form-floating mb-4 mx-5">
            <textarea class="form-control fw-light"style="height: 200px" name="textarea"></textarea>
            <label>Comments</label>
            </div>
            <div class="row mx-5">
            <input name="submit" type="submit" class="btn btn-danger btn-lg mb-1 form-control fw-light" value="SEND">
            <p class="text-muted text-end fw-light mt-4">Back to Main Page ?  <a href="index.html" class="text-decoration-none fw-light">HERE</a>.</p>
            </div>

        </form>
    </div>    
</body>
</html>
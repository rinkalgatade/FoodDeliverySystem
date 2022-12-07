<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD</title>
    <style>
        body{

        background-image: url("food1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        }
        .login{
            text-decoration:none !important;
            font-weight:600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
              <h1 class="my-5 text-center">Registration Form</h1>
                <form action="getdata.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">NAME</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">EMAIL</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">MOBILE</label>
                        <input type="text" class="form-control" name="mobile">
                    </div>
                    <button type="submit" name="registerbtn" class="btn btn-success">Register</button>
                    <a href="login.php" class="login">login</a>
                    <!-- <button type="reset" class="btn btn-danger">CANCEL</button> -->
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
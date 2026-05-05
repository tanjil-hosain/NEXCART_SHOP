 <?php
include('../../config/config.php');
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #f5f5f5;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg p-4">
                <h3 class="text-center mb-4">Login Please</h3>

                <form action="register_action.php" method="POST">



                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>         
                    <!-- Submit -->
                    <button type="submit" name ="register"class="btn btn-primary w-100">Register</button>

                </form>
                <p class="text-center mt-3">Don't have an account? <a href="../Registration/register.php">Register</a></p>
            </div>

        </div>
    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #f5f5f5;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg p-4">
                <h3 class="text-center mb-4">Registration Form</h3>

                <form action="" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Roles</label>
                        <select name="role_id" class="form-select" required>
                            <option value="" disabled selected>Select Role</option>
                            <?php
                            // Super Admin chara baki role fetch kora
                            $roles = mysqli_query($db, "SELECT * FROM roles WHERE id != 1");
                            while($role = mysqli_fetch_assoc($roles)) {
                                echo "<option value='".$role['id']."'>".$role['role_name']."</option>";
                            }
                            ?>
                        </select>

                    <!-- Full Name -->
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>

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

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" required>
                    </div>

                    <!-- Gender -->
                    <div class="mb-3">
                        <label class="form-label">Gender</label><br>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female" class="ms-3"> Female
                    </div>

                    <!-- Terms -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label class="form-check-label">I agree to terms & conditions</label>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary w-100">Register</button>

                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
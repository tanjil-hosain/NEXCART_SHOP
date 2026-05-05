<?php include '../config/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Admin Dashboard</h2>
        <p>Welcome, <?php echo $_SESSION['user_name']; ?>!</p>
        <hr>

        <h4>Pending Staff Approval</h4>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Pending Staff (Manager/Salesman) fetch kora
                $pending_users = mysqli_query($db, "SELECT users.*, roles.role_name FROM users 
                                                      JOIN roles ON users.role_id = roles.id 
                                                      WHERE users.status = 0");
                
                if(mysqli_num_rows($pending_users) > 0) {
                    while($row = mysqli_fetch_assoc($pending_users)) {
                        echo "<tr>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['role_name']."</td>
                            <td>
                                <a href='approval_logic.php?id=".$row['id']."' class='btn btn-success btn-sm'>Approve</a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No pending requests!</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
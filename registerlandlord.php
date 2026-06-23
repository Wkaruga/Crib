<?php

include("../includes/db.php");

if(isset($_POST['register']))
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $national_id = $_POST['national_id'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $role = "Landlord";

    $query = "
    INSERT INTO users
    (
        full_name,
        email,
        phone,
        national_id,
        password,
        role
    )
    VALUES
    (
        '$full_name',
        '$email',
        '$phone',
        '$national_id',
        '$password',
        '$role'
    )";

    pg_query($conn, $query);

    echo "<script>alert('Registration Successful');</script>";
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Landlord Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">
Tenant Registration
</h2>

<form method="POST">

<input
type="text"
name="full_name"
class="form-control mb-3"
placeholder="Full Name"
required>

<input
type="email"
name="email"
class="form-control mb-3"
placeholder="Email"
required>

<input
type="text"
name="phone"
class="form-control mb-3"
placeholder="Phone Number"
required>

<input
type="text"
name="national_id"
class="form-control mb-3"
placeholder="National ID"
required>

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<button
name="register"
class="btn btn-dark">
Register
</button>

</form>

</div>

</body>
</html>
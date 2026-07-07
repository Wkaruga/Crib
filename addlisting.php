<?php

session_start();
include("../includes/db.php");

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != "Landlord")
{
    header("Location: ../auth/login.php");
    exit();
}

if(isset($_POST['add_property']))
{
    $landlord_id = $_SESSION['user_id'];

    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $property_type = $_POST['property_type'];
    $amenities = $_POST['amenities'];

    $query = "
    INSERT INTO property
    (
        landlord_id,
        title,
        description,
        location,
        price,
        bedrooms,
        bathrooms,
        property_type,
        amenities,
        status
    )

    VALUES
    (
        '$landlord_id',
        '$title',
        '$description',
        '$location',
        '$price',
        '$bedrooms',
        '$bathrooms',
        '$property_type',
        '$amenities',
        'Pending'
    )

    RETURNING property_id
    ";

    $result = pg_query($conn,$query);
    

    if($result)
    {
        $row = pg_fetch_assoc($result);

        $property_id = $row['property_id'];

        $totalFiles = count($_FILES['images']['name']);

        for($i=0;$i<$totalFiles;$i++)
        {
            $filename = time()."_".$_FILES['images']['name'][$i];

            $tempname = $_FILES['images']['tmp_name'][$i];

            $folder = "../assets/images/properties/".$filename;

            move_uploaded_file($tempname,$folder);

            pg_query($conn,"
            INSERT INTO property_images
            (
                property_id,
                image_path
            )

            VALUES
            (
                '$property_id',
                'assets/images/properties/$filename'
            )
            ");
        }

        echo "<script>
        alert('Property Added Successfully');
        window.location='myproperties.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Add Property</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

<div class="container mt-5">

<div class="card shadow p-4">

<h2 class="mb-4">

Add New Property

</h2>

<form method="POST" enctype="multipart/form-data">

<div class="mb-3">

<label>Title</label>

<input
type="text"
name="title"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
class="form-control"
rows="4"
required></textarea>

</div>

<div class="row">

<div class="col-md-6">

<label>Location</label>

<input
type="text"
name="location"
class="form-control"
required>

</div>

<div class="col-md-6">

<label>Price</label>

<input
type="number"
name="price"
class="form-control"
required>

</div>

</div>

<br>

<div class="row">

<div class="col-md-4">

<label>Bedrooms</label>

<input
type="number"
name="bedrooms"
class="form-control"
required>

</div>

<div class="col-md-4">

<label>Bathrooms</label>

<input
type="number"
name="bathrooms"
class="form-control"
required>

</div>

<div class="col-md-4">

<label>Property Type</label>

<select
name="property_type"
class="form-control">

<option>Apartment</option>

<option>Studio</option>

<option>Bedsitter</option>

<option>Bungalow</option>

<option>Maisonette</option>

<option>Single Room</option>

</select>

</div>

</div>

<br>

<div class="mb-3">

<label>Amenities</label>

<textarea
name="amenities"
class="form-control"
rows="3"></textarea>

</div>

<div class="mb-3">

<label>Property Images</label>

<input
type="file"
name="images[]"
class="form-control"
multiple
accept="image/*"
required>

<small class="text-muted">

You can select multiple images.

</small>

</div>

<button
name="add_property"
class="btn btn-dark">

Add Property

</button>

</form>

</div>

</div>

</body>

</html>

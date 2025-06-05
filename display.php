
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-container {
            margin-top: 50px;
        }
        img.rounded-img {
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container table-container">
    <h2 class="text-center mb-4">Client List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>

            <?php
            include "connect.php";
            $run = "SELECT * FROM laps";
            $show = mysqli_query($con, $run);

            while($row = mysqli_fetch_assoc($show)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $image = $row['image'];
                $imagePath = "media/" . $image;

                echo '<tr class="text-center">
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td><img src="' . $imagePath . '" width="50" height="50" class="rounded-img"></td>
                    <td><a href="delete.php?deleteid='.$id.'" class="btn btn-sm btn-outline-danger">Delete</a></td>
                    <td><a href="update.php?updateid='.$id.'" class="btn btn-sm btn-outline-primary">Update</a></td>
                </tr>';
            }
            ?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>

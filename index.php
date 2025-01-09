<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7564f8716b.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <form action="insert.php" method="Get">
        <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center test-primary font-monospace">TODO LIST</h3>
            <div class="col-8">
                <input type="text" required name="list" class="form-control">
            </div>
            <div class="col-2">
                <button class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></button>
            </div>
        </div>
        </div>
    </form>

<!--- getdata -->
<?php
include "db.php";
$rawDate= mysqli_query($con,"SELECT * FROM `tbltodo` WHERE 1");
?>

<div class= "container">
    <div class=" col-8 bg-white m-auto mt-3">

<table class="table">
    <tbody>
        <?php
        while($row = mysqli_fetch_array($rawDate)){

        ?>
        <tr>
            <td><?php echo$row['list'] ?></td>
            <td style="width: 10%"><a href="delete.php? ID=<?php echo$row['ID'] ?>"class="btn btn-outline-danger"><i class="fa-solid fa-delete-left"></i></a></td>
            <td style="width: 10%"><a href="update.php? ID=<?php echo$row['ID'] ?>"class="btn btn-outline-danger"><i class="fa-solid fa-square-pen"></i></a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

 
<div class="container ">
            <div class="row" >
                <div class="col-md-10 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> How to fetch data by its id from database</h4>
                        </div>

                            <div class="card-body">
                                <div class="col-md-4 ">

                                    <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="get_id" class="form-control" placeholder="ENTER YOUR ID" required><br>
                                        <button type="submit" class="btn btn-primary" name="search_by_id">search</button>
                            </div>
                                        </form>
                                    </div>

                        
                                </div>

        <?php
            include "db.php";
        ?>

</body>
</html>
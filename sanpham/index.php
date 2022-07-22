<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body >

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-success text-white text-center py-3"> Insert Book </h3>
                </div>
                <div class="card-body">
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <label for="book_name"><b>book_name</b></label>
                        <input type="text" class="form-control mb-2" placeholder="book_name" name="book_name">
                        <label for="quantity"><b>quantity</b></label>
                        <input type="text" class="form-control mb-2" placeholder="quantity" name="quantity">
                        <label for="publication_date"><b>publication_date</b></label>
                        <input type="date" class="form-control mb-2" placeholder="publication_date" name="publication_date">
                        <label for="publisher_name"><b>publisher_name</b></label>
                        <input type="text" class="form-control mb-2" placeholder="publisher_name" name="publisher_name">
                        <label for="author_name"><b>author_name</b></label>
                        <input type="text" class="form-control mb-2" placeholder="author_name" name="author_name">
                        <label for="image"><b>image</b></label>
                        <input type="file" class="form-control mb-2" placeholder="image" name="image" id="image">
                        <label for="category"><b>category</b></label>
                        <input type="text" class="form-control mb-2" placeholder="category" name="category">
                        <label for="description"><b>description</b></label>
                        <input type="text" class="form-control mb-2" placeholder="description" name="description">
                        <label for="price"><b>price</b></label>
                        <input type="text" class="form-control mb-2" placeholder="price" name="price">
                        <button class="btn btn-primary" name="submit" value="Upload Image">Submit</button>
                        <a href="them.php"><button class="btn btn-primary" name="button" type="button">Cancel</button></a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
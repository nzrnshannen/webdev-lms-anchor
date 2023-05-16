<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage-books-add.css">
    <title>Manage Books: Add Books</title>
</head>
<body>
    <?php include "admin-navbar.html"?>
    <div class="container">
        <div class="card">
            <div class="card">
                <div class="card-header">
                    <h1>Add Book</h1>
                </div>
                <div class="card-body">
                    <form action="book-add.php" method="POST">
                        <label class="title">Title: </label>
                        <input type="text" name="title">
                        <br>
                        <label>Author: </label>
                        <input type="text" name="author">
                        <br>
                        <label>Number of Pages: </label>
                        <input type="number" name="no_of_pages">
                        <br>
                        <center>
                            <label>Status:</label>
                            <label>Available</label>
                            <input type="radio" name="status" value="Available">
                            <label>Borrowed</label>
                            <input type="radio" name="status" value="Borrowed">
                        </center>
                        <br>
                        <div class="submit-btn">
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 
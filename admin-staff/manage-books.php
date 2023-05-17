<?php 
    require_once ('../db.php');

    $query = "select * from books";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage-books.css">
    <title>Admin | Manage Books</title>
</head>
<body>
    <?php include "admin-navbar.html"?>
    <div class="container">
        <button><a href="manage-books-add.php">Add Book</a></button>
        <div class="card">
            <table>
                <tr class="row">
                    <td>Book ID</td>
                    <td>Title</td>
                    <td>Author</td>
                    <td>Number of Pages</td>
                    <td>Status</td>
                    <td>Borrower's ID</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <td><?php echo $row['book_id'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['author'];?></td>
                    <td><?php echo $row['no_of_pages'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td><?php echo $row['borrower_id']; echo "<br>"?></td>
                    <td><button>Edit</button></td>
                    <td><a href="delete-book.php?id=<?php echo $row['book_id'];?>"><button>Delete</button></a></td>
                </tr>
                    <?php
                        }
                    ?>
                
            </table>
        </div>
    </div>
    
</body>
</html>



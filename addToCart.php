<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Project 1</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php"><img class="nav-icon" src="./images/book.svg" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">BookStore
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addToCart">Checkout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <?php
				echo "<div class='card-header'>". $_SESSION['bookName'] ."</div>";
				echo '<div class="card-body">';
				echo '<h4 class="card-title">' . $_SESSION['bookPrice'] . "</h4>";
				echo '<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quis porro perspiciatis laborum, tempora aut?</p>';
				?>
            </div>
        </div>

        <div>
            <form action="updateInventory.php" method="POST">
                <fieldset>
                    <legend>Order Info</legend>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" aria-describedby="first name" name="firstName"
                            placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" aria-describedby="first name" name="lastName"
                            placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="payMode">Pay Mode</label>
                        <input type="text" class="form-control" aria-describedby="first name" name="payMode"
                            placeholder="Pay Mode">
                        <small class="form-text text-muted">We'll never share your data with anyone
                            else.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
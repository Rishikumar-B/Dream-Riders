<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dreamriders</title>
    <link rel="stylesheet" href="cardetails.css">
</head>
<body class="gif">
<div>
    <div class="card">
        <div class="cover">
            <img src="https://see.fontimg.com/api/renderfont4/eZRPg/eyJyIjoiZHciLCJoIjo2MywidyI6MTI1MCwiZnMiOjUwLCJmZ2MiOiIjRDkxRDFEIiwiYmdjIjoiI0ZGRkZGRiJ9/RFJFQU1SSURFUlM/sunnyskypersonaluse-boldita.png">
        </div>
        <div class="details">
            <div class="back">
                <?php
                $db_SERVER = "localhost";
                $db_USER = "root";
                $db_pass = "";
                $db_name = "adp project";

                $conn = mysqli_connect($db_SERVER, $db_USER, $db_pass, $db_name);

                if (!$conn) {
                    echo "Connection failed: " . mysqli_connect_error();
                    exit();
                }

                // Retrieve the current car index from the URL or set it to 1 if not provided
                $currentCarIndex = isset($_GET['car_index']) ? (int)$_GET['car_index'] : 1;

                // Fetch car details from the database based on the current car index
                $sql = "SELECT * FROM cardetails LIMIT 1 OFFSET " . ($currentCarIndex - 1);
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo '<img src="' . $row['IMAGE'] . '">';
                    echo '<div class="details-content">';
                    echo '<h3>BRAND: ' . $row['BRAND'] . '</h3>';
                    echo '<h2>TYPE: ' . $row['TYPE'] . '</h2>';
                    echo '<h2>TRANSMISSION: ' . $row['TRANMISSION'] . '</h2>';
                    echo '<h2>RATE: ' . $row['PRICE'] . '</h2>';
                    echo '<a href="payment.html">Rent now</a>';
                    echo '</div>';
                } else {
                    // No car found for the current index
                    echo "Car details not found.";
                }

                mysqli_close($conn);
                ?>
                <!-- Next and Back Buttons -->
                <div class="navigation-buttons">
                    <?php
                    // Display the "Back" button with the previous car index as a parameter in the URL
                    if ($currentCarIndex > 1) {
                        echo '<a class="nav-button" href="cardetails.php?car_index=' . ($currentCarIndex - 1) . '">B</a>';
                    }

                    // Display the "Next" button with the next car index as a parameter in the URL
                    // Note: You can change the condition as per your requirement (e.g., check against the total number of cars in the database)
                    echo '<a class="nav-button" href="cardetails.php?car_index=' . ($currentCarIndex + 1) . '">N</a>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

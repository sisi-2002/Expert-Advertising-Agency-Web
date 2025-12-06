<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Advertising Agency</title>
    <link rel="stylesheet" href="portfolio.css">
</head>
<body>
<div class="main">
    <?php require 'header.php'; ?>
    <div class="about">
        <h2>Portfolio</h2>
        <?php
        function displayPortfolio()
        {
            global $con;

            // SQL query to select all portfolio items
            $sql = "SELECT * FROM portfolio";

            // Execute the query
            $result = $con->query($sql);

            // Check if there are any portfolio items
            if ($result->num_rows > 0) {
                // Display portfolio items
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='portfolio-item'>";
                    echo "<p><strong>Company :</strong> " . $row["company_name"] . "</p>";
                    echo "<p><strong>Category:</strong> " . $row["category"] . "</p>";
                    echo "<p><strong>Ratings:</strong> " . $row["ratings"] . "</p>";
                    echo "</div>"; // Close portfolio item box
                }
            } else {
                echo "No portfolio items found.";
            }
        }

        // Call the function to display portfolio
        displayPortfolio();
        ?>
    </div>
    <div class="foot">
    <?php require 'footer.php'; ?>
    </div>
</div>
</body>
</html>

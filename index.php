<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
    <title>Vastra Planner</title>
    <link rel="stylesheet" href="Wardrobe1.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons/ionicons.js"></script>
</head>
<body>
    <header>
         <h1>Outfit Planner</h1>
        <nav class="navigation">          
            <a href="vastraplanner.php">Home</a>
            <a href="selectimg.php">Upload</a>
            <a href="About-us.html">About</a>
            <!-- <a href="contact.html">Contact</a>  -->
            <a href="feedback.php">Feedback</a>
            <?php
                session_start();
                if(isset($_SESSION["username"])){
                    echo "<a href='UserDashboard.php'><ion-icon name='person'></ion-icon></a>";
                    // print_r($_SESSION["username"]);
                }
                else{
                    echo "<button class='btnLogin-popup'>
                    <a href='login.html'>Login</a>
                </button>";
                }
            ?>
            
            <!-- <a href="dashboard.html"><ion-icon
                name="person"></ion-icon></a> -->
        </nav>
    </header>  
    <br>
    <br>
    <br>
   
<div class="categories">
    <h1>Select by Category</h1>
    <div class="cat">
            <div class="cat1">
                <a href="categoryMen.html">
                    <img src="men.jpg" alt="stackOfBooks">
                    <h2>Men</h2>
                </a>
            </div>
            <div class="cat1">
                <a href="categoryWomen.html">
                    <img src="wemen.jpg" alt="electonics">
                    <h2>Women</h2>
                </a>
            </div>
            <div class="cat1">
            <a href="categorysummer.html">
                    <img src="summer.jpg" alt="fashion">
                    <h2>Summer</h2>
                </a>
            </div>
            <div class="cat1">
                <a href="categoryWinter.html">
                    <img src="winter.jpg" alt="sports">
                    <h2>Winter</h2>
                </a>
            </div>
            <div class="cat1">
                <a href="categoryRainy.html">
                    <img src="rainy.jpg" alt="sports">
                    <h2>Rainy</h2>
                </a>
            </div>
            <br/>
            <br/>
    </div>
</div>
<div class="trending-outfits">
    <h1><i>Trending Outfit</i></h1>
    <div class="trend">
        <div class="trend1">
            <div class="t1">
                <a href="trend1.html">
                    <img src="men.jpg" alt="stackOfBooks">
                </a>               
            </div>
            <div class="t1">
                <a href="trend1.html">
                    <img src="wemen.jpg" alt="electonics">
                </a>   
            </div>
            <div class="t1">
                <a href="trend1.html">
                    <img src="summer.jpg" alt="fashion">
            </div>
            <!-- <div class="t1">
                <a href="trend1.html"> -->
                <?php
            // Include the database connection
            require_once('connection.php');
            
            // Fetch the trending outfit items from the database
            $result = $conn->query("SELECT name, image FROM trending_items");

            while ($row = $result->fetch_assoc()) {
                echo '<div class="t1">';
                echo '<a href="trend1.html">';
                echo '<img src="userUploads/' . $row['image'] . '" alt="' . $row['name'] . '">';
                echo '</a>';
                echo '</div>';
            }

            $conn->close();
            ?>
            <!-- </div> -->

        </div>
        <br/>
        <br/>
        <br/>
    </div>
</div>

    <script src="script.js"></script>     
    <footer>
        <p>&copy; 2023 Wardrobe Planner</p>
       <a href="https://instagram.com/shivam_yadav_one7?igshid=MmU2YjMzNjRlOQ=="><ion-icon name="logo-instagram"></ion-icon></a> 
       <a href="https://www.facebook.com/profile.php?id=100064806126019&mibextid=9R9pXO"><ion-icon name="logo-facebook"></ion-icon></a> 
       <a href="https://twitter.com/LolitaWardrobe?t=_BNjYKHoKU2hGQmh_jO85g&s=08"><ion-icon name="logo-twitter"></ion-icon></a> 
       <a href="https://youtube.com/@AsadStyling"><ion-icon name="logo-youtube"></ion-icon></a>
       <a href="https://youtube.com/@AsadStyling"><ion-icon name="logo-telegram"></ion-icon></a> 
    </footer>
</body>
</html>

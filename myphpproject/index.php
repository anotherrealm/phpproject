<?php
include_once("header.php");
?>

<section class="homepage">
    <?php
    if (isset($_SESSION["usersuid"])) {
        echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
    }
    ?>
    <div class="header">
        <h1>Welcome to My Website</h1>
    </div>

    <div class="recipe-card">
        <div class="recipe-image">
            <img class="img" src="iconsigfbwh/sphagetti.jpg" alt="Spaghetti and Meatballs">
        </div>
        <div class="recipe-content">
            <h2>Spaghetti and Meatballs</h2>
            <h3>Ingredients:</h3>
            <ul>
                <li>Spaghetti, ground beef, breadcrumbs, Parmesan cheese, milk, parsley, onion, garlic, egg, salt, pepper</li>
                <li>Tomato sauce, sugar, basil, oregano, red pepper flakes</li>
                <li>Mozzarella cheese for topping</li>
            </ul>
            <h3>Procedure:</h3>
            <ol>
                <li>Cook spaghetti; set aside.</li>
                <li>Mix ground beef, breadcrumbs, cheese, milk, parsley, onion, garlic, egg, salt, and pepper. Form meatballs.</li>
                <li>Cook meatballs until browned; set aside.</li>
                <li>Simmer tomato sauce with sugar, basil, oregano, and red pepper flakes (if using).</li>
                <li>Return meatballs to sauce and simmer until heated through.</li>
                <li>Serve spaghetti topped with meatballs, sauce, and mozzarella cheese.</li>
            </ol>
        </div>
    </div>

    <div class="footer">
        <a href="https://www.instagram.com"><img class="icon" src="iconsigfbwh/instagram.png" alt="Instagram"></a>
        <a href="https://www.facebook.com"><img  class="icon" src="iconsigfbwh/facebook.png" alt="Facebook"></a>
        <a href="https://www.whatsapp.com"><img class="icon" src="iconsigfbwh/whatsapp.png" alt="WhatsApp"></a>
        <p>Contact: recipes23@gmail.com</p>
    </div>
</section>
<?php
include_once("footer.php")
?>
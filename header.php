<?php
// Detect current page
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header id="header">
    <div class="header-container">
        <a href="index.php" class="logo">MediCare Health</a>
        <nav>
            <ul class="navbar" id="navbar">
                <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
                <li><a href="index.php#health-topics">Health Topics</a></li>
                <li><a href="index.php#medicines">Medicines</a></li>
                <li><a href="index.php#emergency">Emergency</a></li>
                <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About Us</a></li>
                <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact Us</a></li>
            </ul>
        </nav>
        <button class="mobile-menu-btn" id="mobile-menu-btn">☰</button>
    </div>
</header>

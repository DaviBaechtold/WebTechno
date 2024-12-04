<?php
// Variables for dynamic content
$text1 = "Welcome to our bookstore!";
$genreFilterLabel = "Filter by Genre:";

// Dynamic genre list
$genres = [
    "Books" => ["Fiction", "Non-Fiction"],
    "Educational" => ["Dictionaries", "Textbooks"],
    "Recipes" => ["Desserts", "Grandma's Recipes"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home of the Book</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/TASK_1.css">
    <link rel="stylesheet" href="../CSS/mystyle.css">
</head>

<header>
    <h1><?php echo $text1; ?></h1>
    <a class='cero' href='about.php' target='_blank'>Seller info</a><br>
    <a href='login.php' target='_blank'><button>LOGIN</button></a>
</header>
<body>
    <label for="genreDropdown"><?php echo $genreFilterLabel; ?></label>
    <select id="genreDropdown">
        <option value="all">All Genres</option>
        <?php foreach ($genres as $genre => $subgenres): ?>
            <option value="<?php echo strtolower($genre); ?>"><?php echo $genre; ?></option>
        <?php endforeach; ?>
    </select>
    <ul style='list-style-type: circle'>
        <?php foreach ($genres as $genre => $subgenres): ?>
            <li class="bookGenre" data-genre="<?php echo strtolower($genre); ?>"><?php echo $genre; ?></li>
            <ul>
                <?php foreach ($subgenres as $subgenre): ?>
                    <li class="bookGenre" data-genre="<?php echo strtolower($genre); ?>">
                        <a href="Exercise books.php"><?php echo $subgenre; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </ul>
</body>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Home of the Book</p>
    <button id="toggleDarkMode">Toggle Dark Mode</button>
</footer>
<script src="../JavaScript/script.js"></script>
<script defer src="../JavaScript/JS_task_4_bookFilter.js"></script>
</html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home of the Book</title>

		<link rel='stylesheet' href="../CSS/style.css">
		<link rel="stylesheet" href="../CSS/TASK_1.css">
		<link rel="stylesheet" href="../CSS/mystyle.css">
	</head>
	
	<header>
		<h1><big>Welcome to our bookstore!</big></h1>
			<a class='cero' href='About.php' target='_blank'>Seller info</a><br>
			<a href='./login.php' target='_blank'>
				<button>LOGIN</button>
			</a>
	</header>
	<body>
		<label for="genreDropdown">Filter by Genre:</label>
		<select id="genreDropdown">
			<option value="all">All Genres</option>
			<option value="books">Books</option>
			<option value="educational">Educational</option>
			<option value="recipes">Recipes</option>
		</select>

		<ul style='list_style_type: circle'>
			<li class="bookGenre" data-genre="books">Books</li>
				<ul style='list_style_type: empty-cells'>
					<li class="bookGenre" data-genre="books"><a class='two' href='Exercise books.php'>Fiction</a></li>
					<li class="bookGenre" data-genre="books"><a class='uno' href='Exercise books.php'>Non-Fiction</a></li>
				</ul>
			<li class="bookGenre" data-genre="educational">Educational</li>
				<ul style='list_style_type: empty-cells'>
					<li class="bookGenre" data-genre="educational"><a class='two' href='Exercise books.php'>Dictionaries</a></li>
					<li class="bookGenre" data-genre="educational"><a class='uno' href='Exercise books.php'>Textbooks</a></li>
				</ul>
			<li class="bookGenre" data-genre="recipes">Recipes</li>
				<ul style='list_style_type: empty-cells'>
					<li class="bookGenre" data-genre="recipes"><a class='two' href='Exercise books.php'>Desserts</a></li>
					<li class="bookGenre" data-genre="recipes"><a class='uno' href='Exercise books.php'>Grandma's Recipes</a></li>
				</ul>
		</ul>
	</body>
		
	<footer>
		<p>&copy; 2024 Home of the Book</p>
		<button id="toggleDarkMode">Toggle Dark Mode</button>
	</footer>
	<script src="../JavaScript/script.js"></script>
	<script defer src="../JavaScript/JS_task_4_bookFilter.js"></script>
</html>
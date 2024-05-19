<!DOCTYPE html>
<html>
	<head>
		<title>Giriş</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="/style.css" rel="stylesheet">
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="navbar-nav me-auto">
							<li class="nav-item"><a class="nav-link" href="/index.html">Hakkımda</a></li>
							<li class="nav-item"><a class="nav-link" href="/resume.html">Özgeçmişim</a></li>
							<li class="nav-item"><a class="nav-link" href="/my-city.html">Şehirim</a></li>
							<li class="nav-item"><a class="nav-link" href="/heritage.html">Mirasımız</a></li>
							<li class="nav-item"><a class="nav-link" href="/interests.html">İlgi Alanlarım</a></li>
							<li class="nav-item"><a class="nav-link" href="/contact.html">İletişim</a></li>
						</ul>

						<ul class="navbar-nav justify-content-end mt-3 mt-md-0">
							<li class="nav-item"><a class="nav-link active" href="/login.php">Giriş</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<main class="container">
			<h1 class="mb-4">Giriş</h1>

			<?php
			if (isset($_POST["username"]) && isset($_POST["password"])) {
				if (strtolower($_POST["username"]) != "g221210020@sakarya.edu.tr") {
					echo '<p class="text-danger">Geçersiz Kullanıcı Adı</p>';
				}
				else if ($_POST["password"] != "g221210020") {
					echo '<p class="text-danger">Geçersiz Şifre</p>';
				}
				else {
					echo '<p>Hoşgeldiniz, "'.htmlspecialchars($_POST["username"]).'"</p>';
					return;
				}
			}

			echo '
				<form action="/login.php" method="post">
					<div class="form-group">
						<label for="username">Kullanıcı Adı:</label><br>
						<input type="email" class="form-control" id="username" name="username" value="'.addslashes($_POST["username"] ?? "").'" required><br>
					</div>
					<div class="form-group">
						<label for="password">Şifre:</label><br>
						<input type="password" class="form-control" id="password" name="password" value="'.addslashes($_POST["password"] ?? "").'" required><br><br>
					</div>
					<input type="submit" class="btn btn-primary" value="Giriş Yap">
				</form>
				';
			?>
		</main>

		<footer class="footer mt-auto py-3 bg-body-tertiary fixed-bottom">
			<div class="container">
				<span class="text-body-secondary">Ayhan Dalkıran @ 2024</span>
			</div>
		</footer>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
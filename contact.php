<?php
$gender_map = [
	"male" => "Erkek",
	"female" => "Kadın",
	"other" => "Diğer"
];

$category_map = [
	"ideas" => "Fikirler ve Öneriler",
	"bug-report" => "Hata Raporu",
	"other" => "Diğer"
];

$kvkk_map = [
	"on" => "Kabul Edildi",
	"off" => "Kabul Edilmedi"
]
?>
<!DOCTYPE html>
<html lang="tr">
	<head>
		<title>İletişim</title>
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
							<li class="nav-item"><a class="nav-link active" href="/contact.html">İletişim</a></li>
						</ul>

						<ul class="navbar-nav justify-content-end mt-3 mt-md-0">
							<li class="nav-item"><a class="nav-link" href="/login.php">Giriş</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<main class="container">
			<h4>Form Gönderildi!</h4>
			<div class="table-responsive">
				<table class="table">
					<tbody>
						<tr><th scope="row">İsim:</th><td><?php echo $_POST["name"];?></td></tr>
						<tr><th scope="row">Cinsiyet:</th><td><?php echo $gender_map[$_POST["gender"]];?></td></tr>
						<tr><th scope="row">E-Posta:</th><td><?php echo $_POST["email"];?></td></tr>
						<tr><th scope="row">Telefon Numarası:</th><td><?php echo $_POST["tel"];?></td></tr>
						<tr><th scope="row">Kategori:</th><td><?php echo $category_map[$_POST["category"]];?></td></tr>
						<tr><th scope="row">Mesaj:</th><td><?php echo $_POST["message"];?></td></tr>
						<tr><th scope="row">KVKK:</th><td><?php echo $kvkk_map[$_POST["kvkk"] ?? "off"];?></td></tr>
					</tbody>
				</table>
			</div>
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

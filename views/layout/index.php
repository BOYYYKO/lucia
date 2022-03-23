<?php
$userModel = new \models\Users();
$name = $userModel->GetCurrentUser();
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?=$MainTitle ?> | LUCIA</title>	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    	<link href="/views/users/css/form.css" rel="stylesheet">
	</head>
	<body>
		<header class="p-3 bg-dark text-white sticky-top">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
					<h1 class="m-0 text-white">LUCIA</h1>			
				</a>

				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<a href="/history" class="nav-item nav-link text-white">Історія</a>
					<a href="/news" class="nav-item nav-link text-white">Моделі</a>
					<a href="/gallery" class="nav-item nav-link text-white">Галерея</a>
					<a href="/feedback" class="nav-item nav-link text-white">Зворотній зв'язок</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Дії</a>
						<div class="dropdown-menu m-0">
							<a href="http://lucia/news/add" class="dropdown-item">Додати новину</a>
						</div>
					</div>
				</ul>

				<div class="text-end">
				<? if (!$userModel->IsAuth()) : ?>
					<a href="/users/login" type="button" class="btn btn-outline-light me-2">Увійти</a>
					<a  href="/users/register" type="button" class="btn btn-light text-dark">Реєстрація</a>
					<? else : ?>
						<div class="flex-shrink-0 dropdown">
							<a href="#" class="d-block link-white text-decoration-none dropdown-toggle text-white" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
							<?=$name['login']?>
							</a>
							<ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
								<li><a class="dropdown-item" href="/users/logout">Вийти</a></li>
							</ul>
						</div>
						<? endif; ?>
					</div>
				</div>
			</div>
		</header>
		<? if(!empty($MessageText)) :?>
			<div class="alert alert-dark text-center" role="alert"><?=$MessageText?></div>
		<? endif; ?>
		<?=$PageContent ?>
		</br></br>
		<? $url = $_SERVER['REQUEST_URI'];
		$url = explode('?', $url);
		$url = $url[0];
		if($url !== '/users/login' && $url !== '/users/register') :?>
		<div class="container sticky-bottom">
			<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
				<p class="col-md-4 mb-0 text-muted">© 2021 LUCIA, Inc</p>

				<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
					<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
				</a>

				<ul class="nav col-md-4 justify-content-end">
					<li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Головна</a></li>
					<li class="nav-item"><a href="/history" class="nav-link px-2 text-muted">Історія</a></li>
					<li class="nav-item"><a href="/news" class="nav-link px-2 text-muted">Моделі</a></li>
					<li class="nav-item"><a href="/gallery" class="nav-link px-2 text-muted">Галерея</a></li>
					<li class="nav-item"><a href="/feedback" class="nav-link px-2 text-muted">Зворотній зв'язок</a></li>
				</ul>
			</footer>
		</div>
		<? endif; ?>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="/alien/ckeditor/ckeditor.js"></script>
		<script>
			CKEDITOR.replace('text');
		</script>
	</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <meta http-equiv="X-UA-compatble" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<div class="container d-flex flex-wrap container me-2 ">
      <ul class="nav me-auto">
        <nav class="nav fixed-top container mt-2">
        <li class="nav-item"><a href="/index.php" class="btn btn-outline-primary me-2 my-2" aria-current="page">Головна</a></li>
        <li class="nav-item"><a href="/stroka.php" class="btn btn-outline-dark me-2 my-2">Стільці та крісла</a></li>
        <li class="nav-item"><a href="/stroka2.php" class="btn btn-outline-dark me-2 my-2   ">Столи</a></li>
        <li class="nav-item"><a href="/stroka3.php" class="btn btn-outline-dark me-2 my-2">Ліжка та Дивани</a></li>
        <li class="nav-item"><a href="/stroka4.php" class="btn btn-outline-dark me-2 my-2">Шафи</a></li>
        <li class="nav-item"><a href="/stroka5.php" class="btn btn-outline-dark me-2 my-2">Тумби и Комоди</a></li>
        <li class="nav-item"><a href="/about.php" class="btn btn-outline-primary me-2 my-2">Контакти</a></li>
        <li class="nav-item"><a href="/ictive.php" class="btn btn-outline-primary me-2 my-2">Доставка,Гарантія</a></li>
        <li class="nav-item"><a href="/one.php" class="btn btn-outline-primary me-2 my-2">О нас</a></li>
        </ul>
        <nav class="nav">
        <?php
        if($_COOKIE['user'] == 'Да'):
        
        ?>
        <li class="nav-item"><a href="/auth.php" class="btn btn-success me-2 my-2">Кабінет користувача</a></li>

        <?php else: ?>
        <li class="nav-item"><a href="/auth.php" class="btn btn-success me-2 my-2">Увійти</a></li>
        <?php endif;?>
        <li class="nav-item "><a href="/ct.php" class="btn btn-outline-success   me-2 my-2">Корзина</a></li>
      </ul>
      </ul>
        </nav>
        </div>
    <header class="py-3 mb-4 border-bottom my-2">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4"> <img src='/img/image1.jpg' > </span>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    </div>
    <div class="container mt-5">
    </div>
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">	
    <script src="scr/MyInterestsDropdown.js"></script>
    <link href="/public/assets/css/styles.css" rel="stylesheet">
    <script src="/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src ="/public/assets/js/MenuDate.js"></script>	
    <script src="/public/assets/js/MyInterestsDropdown.js"></script>
    <title> Высшая математика. Контакты. </title>
</head>
<body>
        <nav class="headbg">
        <div class="nav-item" id="main"><a href="MainPage.php?controller=MainPage&action=index">Главная страница</a></div>
        <div class="nav-item" id="about"><a href="About.php?controller=About&action=index">Обо мне</a></div>
        <div id="dropdown-container" class="nav-item"></div>
        <div class="nav-item" id="learning"><a href="Learning.php?controller=Learning&action=index">Учёба</a></div>
        <div class="nav-item" id="photos"><a href="Photos.php?controller=Photos&action=index">Фотоальбом</a></div>
        <div class="nav-item" id="contacts"><a href="Contacts.php?controller=Contacts&action=index">Контакты</a></div>
        <div class="nav-item" id="discTest"><a href="DiskTest.php?controller=DiskTest&action=index">Тест по дисциплине</a></div>
        <div class="nav-item" id="history"><a href="History.php?controller=History&action=index">История просмотра</a></div>
        <div id="dates"></div>
    </nav>
    <script src="/public/assets/js/History.js"></script>
<div class="MiddleText">Мои интересы</div>
<div class="anchors">
    <?php foreach ($model['categorys'] as $index => $category): ?>
        <p class="invEle">1</p>
        <a href="#<?= 'anch' . ($index + 1) ?>" class="flexItem"><?= htmlspecialchars($category) ?></a>
    <?php endforeach; ?>
</div>
<br>
<div id="interests">
    <?php foreach ($model['categorys'] as $index => $category): ?>
        <div id="<?= htmlspecialchars('anch' . ($index + 1)) ?>"> 
            <h3><?= htmlspecialchars($category) ?></h3>
            <?php foreach ($model['interests']['anch' . ($index + 1)] as $interest): ?> 
                <div><?= htmlspecialchars($interest) ?></div>
            <?php endforeach; ?>
            
            <?php if (isset($model['photos']['anch' . ($index + 1)])): ?> 
                <img src="<?= htmlspecialchars($model['photos']['anch' . ($index + 1)]) ?>" alt="<?= htmlspecialchars($category) ?> Photo" class="flexflexItem">
            <?php endif; ?>
        </div>
        <br>
    <?php endforeach; ?>
</div>
</body>
</html>
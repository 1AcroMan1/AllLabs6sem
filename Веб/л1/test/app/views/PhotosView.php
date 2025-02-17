<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="/public/assets/css/styles.css" rel="stylesheet">
    <script src="/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src ="/public/assets/js/MenuDate.js"></script>	
    <script src="/public/assets/js/MyInterestsDropdown.js"></script>
    <title><?php echo $title; ?></title>
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
        <div class="flexflex">
            <?php if (!empty($photos)): ?>
                <?php foreach ($photos as $photo): ?>
                    <div class="flexflexItem">
                        <img src="<?php echo htmlspecialchars($photo['filename']); ?>" alt="<?php echo htmlspecialchars($photo['description']); ?>" class="smallImage">
                        <div class="tip"><?php echo htmlspecialchars($photo['description']); ?></div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Нет доступных фотографий.</p>
            <?php endif; ?>
        </div>
</body>
</html>
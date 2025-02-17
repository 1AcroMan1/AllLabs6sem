<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link href="/public/assets/css/styles.css" rel="stylesheet">
    <script src="/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src ="/public/assets/js/MenuDate.js"></script>	
    <script src="/public/assets/js/MyInterestsDropdown.js"></script>
    <title>Гостевая книга</title>
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
        <div class="nav-item" id="history"><a href="History.php?controller=Guest&action=index">Гостевая книга</a></div>
        <div id="dates"></div>
    </nav>
    <script src="/public/assets/js/History.js"></script>
    <form class="Forms3" id="forms3" action="Guest.php?controller=Guest&action=index" method = "POST">
        <label for="name" class="form-tooltip">Введите ваше имя</label>
        <br>
        <input id="name" name ="name" type="text" placeholder="Имя" required>

        <label for="surname" class="form-tooltip">Введите вашу фамилию</label>
        <br>
        <input id="surname" name ="surname" type="text" placeholder="Фамилия" required>

        <label for="thirdName" class="form-tooltip">Введите ваше отчество</label>
        <br>
        <input id="thirdName" name ="thirdName" type="text" placeholder="Отчество" required>

        <label for="e-mail" class="form-tooltip">Введите вашу электронную почту</label>
        <br>
        <input id="e-mail" name ="e-mail" type="text" placeholder="e-mail" required>

        <label for="text" class="form-tooltip">Введите ваш отзыв</label>
        <br>
        <input id="text" name ="text" type="text" placeholder="Отзыв" required>
    </form>
    <?php foreach($data as $datas)
    {

    }
    ?>
</body>
</html>
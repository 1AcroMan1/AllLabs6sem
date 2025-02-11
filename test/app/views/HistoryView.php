<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <script src="/public/assets/js/jquery-3.7.1.min.js"></script>
    <link href="/public/assets/css/styles.css" rel="stylesheet">
    <title>История просмотра</title>
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

    <div id="HistoryTable">
        <h2>История текущего сеанса</h2>
        <table id="sessionHistory">
            <tr>
                <th>Страница</th>
                <th>Количество посещений</th>
            </tr>
        </table>

        <h2>История за все время</h2>
    </div>
    <script src ="/public/assets/js/MenuDate.js"></script>
    <script src="/public/assets/js/History.js"></script>
    <script src="/public/assets/js/MyInterestsDropdown.js"></script>
</body>
</html>
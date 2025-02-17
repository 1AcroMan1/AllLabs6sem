<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link href="/public/assets/css/styles.css" rel="stylesheet">
    <script src="/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src ="/public/assets/js/MenuDate.js"></script>	
    <script src ="/public/assets/js/Calendar.js"></script>	
    <script src="/public/assets/js/MyInterestsDropdown.js"></script>
    <title>Высшая математика. Контакты.</title>
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
    <div class="MiddleText">

       <form class="Forms" id="form1" action="Contacts.php?controller=Contacts&action=index" method = "POST">
    <label for="name" class="form-tooltip" data-tooltip="Введите ваше полное имя, включая фамилию, имя и отчество.">Фамилия Имя Отчество</label>
    <input id="name" type="text" name = "name" placeholder="Фамилия Имя Отчество" required>

    <label for="phone" class="form-tooltip" data-tooltip="Введите номер телефона в формате +7 или +3, далее 9-11 цифр.">Телефон</label>
    <input id="phone" name = "phone" type="text" placeholder="Телефон" required>

    <label class="form-tooltip" data-tooltip="Выберите ваш пол.">Пол:</label>
    Мужской <input id="sex-male" type="radio" name="sex" value="Male">
    Женский <input id="sex-female" type="radio" name="sex" value="Female">

    <label for="age" class="form-tooltip" data-tooltip="Выберите ваш возраст.">Возраст</label>
    <select id="age" name="age" required>
    <option value="" selected>Выберите возраст</option>
    <option value="under-18">меньше 18</option>
    <option value="18-60">18-60</option>
    <option value="60+">60+</option>
    </select>

    <label for="date" class="form-tooltip" data-tooltip="Введите вашу дату рождения в формате день.месяц.год.">Дата рождения</label>
    <input id="date" name="date" readonly>
    <div id="calendar-container" class="calendar hidden"></div>

    <?php if (!empty($errors)) : ?>
    <div class="error-messages" id = "error-messages">
        <?php echo $errors; ?>
    </div>
<?php endif; ?>
    <button type="submit" id="butSub">Отправить</button>
    <button type="reset">Очистить</button>
</form>

    </div>

</body>
</html>
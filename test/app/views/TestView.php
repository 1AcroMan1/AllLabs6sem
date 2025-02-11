<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <link href="/public/assets/css/styles.css" rel="stylesheet">
    <script src="/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/public/assets/js/FormsChecker.js" defer></script>
<title> Высшая математика. Тест </title>
<h class = "MiddleText">Тест по высшей математике</h>
<p class = "invEle">1</p>
</head>
<body>
<div class="MiddleText2">
    <form class="Forms2" id="forms2" action="Test.php?controller=Test&action=index" method = "POST">
        <label for="name" class="form-tooltip" data-tooltip="Введите ваше полное имя, включая фамилию, имя и отчество.">Фамилия Имя Отчество</label>
        <br>
        <input id="name" name ="name" type="text" placeholder="ФИО" required>
        
        <p class="invEle">1</p>
        <div class="form-tooltip">Группа:</div> 
        <select id="group" name="group" required>
            <option value="" selected>Выберите группу</option>
            <option>ИТ/б-23-1-о</option>
            <option>ИТ/б-23-2-о</option>
            <option>ИТ/б-23-3-о</option>
            <option>ИТ/б-23-4-о</option>
            <option>ИТ/б-23-5-о</option>
            <option>ИТ/б-23-6-о</option>
        </select>

        <p class="invEle">1</p>
        <div class="form-tooltip" data-tooltip="Ответьте на вопрос исключительно в письменном виде">Вопрос №1</div>
        <label>Двумерный массив также имеет название ...</label>
        <input id="answer1"type="text" name = "answer1" placeholder="Ответ" required>

        <p class="invEle">1</p>
        <div class="form-tooltip" data-tooltip="Выберите ответ">Вопрос №2</div>
        <div>Какой формы бывают матрицы</div>
        <label>
            <input type="checkbox" name="answer2" value="squ"> Квадратные
        </label>
        <br>
        <label>
            <input type="checkbox" name="answer2" value="rec"> Прямоугольные
        </label>
        <br>
        <label>
            <input type="checkbox" name="answer2" value="one"> Единичные
        </label>
        <br>
        <label>
            <input type="checkbox" name="answer2" value="nul"> Нулевые
        </label>
        <br>
        <label>
            <input type="checkbox" name="answer2" value="bin"> Бинарные
        </label>

        <p class="invEle">1</p>
        <div>Вопрос №3</div>
        <div class="form-tooltip" data-tooltip="Выберите 2 формулы через ctrl">Выберите неверную формулу</div>
        <select id="groups" name="answer3" multiple>
            <optgroup label="Свойства матриц">
                <option value="11">A*(B*C) = (A*B)*C</option>
                <option value="12">(A+B)*C = A*C+B*C</option>
                <option value="13">(A-B)*C = (A-C)*B</option>
                <option value="14">A*E = E*A = A</option>
            </optgroup>
            <optgroup label="Транспортирование матриц">
                <option value="51">(k*A)^T = k * A^T</option>
                <option value="52">(A+B)^T = A^T + B*T</option>
                <option value="53">(A^T)^T = A</option>
            </optgroup>
        </select>

        <?php if (!empty($errors)) : ?>
            <div class="error-messages" id = "error-messages">
                <?php echo $errors; ?>
            </div>
        <?php endif; ?>

        <p class="invEle">1</p>
        <button type="submit" class="form-tooltip" data-tooltip="Отправьте форму">Отправить</button>
        <button type="reset" class="form-tooltip" data-tooltip="Очистите форму">Очистить</button>
    </form>
</div>
</body>
</html>
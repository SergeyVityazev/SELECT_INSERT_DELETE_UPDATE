
<?php
// ПОЧТИ ГОТОВА ЗА ВОСКРЕСЕНЬЕ ДОПИЛЮЮЮЮЮЮЮЮЮЮ НЕ СТАВЬТЕ НЕ ЗАЧЕТ

require ("config.php");
$sql_select="select * from ListBisiness";


echo $_GET['action'];

if (empty($_GET['status']))
    $_GET['status']='Не начинал';

?>

<table>
    <?php foreach($connect->query($sql_select) as $row){?>
        <tr>

            <td><?=$row['id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['date']?></td>
            <td><label><?=$_GET['status']?></label></td>
            <td>
                <a href="index.php?action=edit">Изменить</a>
                <a href="index.php?action=done">Выполнить</a>
                <a href="index.php?action=delete">Удалить</a>
            </td>
        </tr>
    <?php } ?>
</table>










<style>
    table {
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }

    table th {
        background: #eee;
    }
</style>

<h1>Список дел на сегодня</h1>
<div style="float: left">
    <form method="POST">
        <input type="text" name="description" placeholder="Описание задачи" value="" />
        <input type="submit" name="save" value="Добавить" />
    </form>
</div>

<div style="float: left; margin-left: 20px;">
    <form method="POST">
        <label for="sort">Сортировать по:</label>
        <select name="sort_by">
            <option value="date_created">Дате добавления</option>
            <option value="is_done">Статусу</option>
            <option value="description">Описанию</option>
        </select>
        <input type="submit" name="sort" value="Отсортировать" />
    </form>
</div>
<div style="clear: both"></div>

<table>
    <tr>
        <th>Описание задачи</th>
        <th>Дата добавления</th>
        <th>Статус</th>
        <th></th>
    </tr>
    <tr>
        <td>test</td>
        <td>2018-06-26 22:03:04</td>
        <td><span style='color: green;'>Выполнено</span></td>
        <td>
            <a href='?id=670&action=edit'>Изменить</a>
            <a href='?id=670&action=done'>Выполнить</a>
            <a href='?id=670&action=delete'>Удалить</a>
        </td>
    </tr>
    <tr>
        <td>Резервное пирование 14.07.2015 04:04</td>
        <td>2018-06-29 03:45:01</td>
        <td><span style='color: green;'>Выполнено</span></td>
        <td>
            <a href='?id=671&action=edit'>Изменить</a>
            <a href='?id=671&action=done'>Выполнить</a>
            <a href='?id=671&action=delete'>Удалить</a>
        </td>
    </tr>
    <tr>
        <td>Fork from https://</td>
        <td>2018-06-29 03:47:09</td>
        <td><span style='color: orange;'>В процессе</span></td>
        <td>
            <a href='?id=673&action=edit'>Изменить</a>
            <a href='?id=673&action=done'>Выполнить</a>
            <a href='?id=673&action=delete'>Удалить</a>
        </td>
    </tr>
    <tr>
        <td>test</td>
        <td>2018-06-29 20:21:05</td>
        <td><span style='color: orange;'>В процессе</span></td>
        <td>
            <a href='?id=674&action=edit'>Изменить</a>
            <a href='?id=674&action=done'>Выполнить</a>
            <a href='?id=674&action=delete'>Удалить</a>
        </td>
    </tr>
</table>
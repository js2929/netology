<!DOCTYPE html>
<?php
$userName = 'Иван Сафронов';
$userAge = '36';
$userEmail = 'js29@mail.ru';
$userCity = 'Moscow';
$userDescription = 'Я работаю в маркетинге, но в шклое очень хорошо шла математика и даже поступил в Физтех, но в итоге не пошел. А сейчас возникло желание посмотреть, что такое программирование, пока не знаю, зачем мне это, просто интересно';
?>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>Поле</th>
    <th>Значение</th>
  </tr>
  <tr>
    <td>Имя</td>
    <td><?php echo $userName ?></td>
  </tr>
  <tr>
    <td>Возраст</td>
    <td><?php echo $userAge ?></td>
  </tr>
  <tr>
    <td>Город</td>
    <td><?php echo $userCity ?></td>
  </tr>
  <tr>
    <td>Адрес email</td>
    <td><?php echo $userEmail ?></td>
  </tr>
  <tr>
    <td>Рассказ о себе</td>
    <td><?php echo $userDescription ?></td>
  </tr>
</table>

</body>
</html>

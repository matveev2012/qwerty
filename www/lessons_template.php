<?php
 include("blocks/bd.php");
$result=mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE id=3 ",$db);
$myrow=mysql_fetch_array($result);
?>
<!doctype html>
<meta name="description" content="<?php echo $myrow['meta_d'];?> ">
<meta name="keywords" content="   <?php echo $myrow['meta_k'];?>">
<html>
<head>
<meta charset="utf-8">
<title>  <?php echo $myrow['title'];?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="900" height="489" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
  <tr>
   <?php include("blocks/left.php"); ?>
    <td width="649" valign="top" ><table width="649" cellpadding="10" height="366" border="0">
      <tr>
        <td width="690" align="left" valign="top"><p><strong>Модели процессов извлечения,  обработки данных, хранения, представления и использования в информационных  системах.</strong><br>
При  получении информации как правило она должна быть преобразована из аналогового  вида в дискретный. Большая часть физических процессов имеет аналоговый тип.  Поэтому для работы в вычислительных системах такая информация должна быть  приведена к цифровому виду. После получения информации из внешних источников.  </p>
          <p><img src="lessons/15112015/хуйня какая то/17456999_x_cb99fa51.jpg" width="359" height="480" alt=""/></p>
          <p>Она должна быть предварительно обработана и записана определенным образом.  Объекты и их свойства, процессы и функции являются источниками данных в любой  предметной области.</p>
          <p><img src="lessons/15112015/хуйня какая то/i.jpg" width="218" height="150" alt=""/><br>
            Предметная область рассматривается в виде трех  представлений:<br>
            1)  реальное представление предметной области<br>
            2)  формальное представление <br>
            3)  информационное представление </p>
          <p><img src="lessons/15112015/хуйня какая то/C476Y5CWqS0.jpg" width="448" height="604" alt=""/></p>
          <p>При  извлечении информации важное место занимают различные формы и методы  исследования данных:</p>
          <ol>
            <li>поиск ассоциаций, связанных с  привязкой к какому-либо событию</li>
            <li>обнаружение последовательностей  событий во времени</li>
            <li>выявление скрытых закономерностей о  наборам данных, путем определения причинно-следственных связей </li>
            <li>оценка важности влияния параметров на  развитие ситуации </li>
            <li>классифицирование(распознавание) –это  поиск критериев, по которым объект можно отнести к той или иной категории</li>
            <li>кластеризация-группирование объектов  по каким-либо признакам</li>
            <li>прогнозирование событий и ситуаций. </li>
          </ol></td>
      </tr>
    </table>      <br></td>
  </tr>
 <?php include("blocks/down.php"); ?>
</table>
</body>
</html>
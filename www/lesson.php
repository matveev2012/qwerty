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
<link type="text/css" rel="stylesheet" media="all" href="styles.css" />
</head>

<body>
<table width="900" height="489" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
  <tr>
   <?php include("blocks/left.php"); ?>
    <td width="649" valign="top" class="main_border">
    
      <p><?php echo $myrow['text'];?></p>
      
      
      
      
      
      
      
      
<?
$result=mysql_query("SELECT id,title,description,author,date FROM lesson",$db);
$myrow=mysql_fetch_array($result);
do{
printf ("<table  border='0' align='center' class='lesson'>
          <tr>
          <td class='lesson_title'><p class='lesson_name'><a href='view_lesson.php?id=%s'>%s</a></p>
		  <p class='lesson_adds'>Дата добавления:%s </p> 
		  <p class='lesson_adds'>Автор урока: %s</p></td>
          </tr>
          <tr>
          <td>%s</td>
          </tr>
          </table><br><br>",$myrow["id"],$myrow["title"],$myrow["date"],$myrow["author"],$myrow["description"]);
}
while ($myrow=mysql_fetch_array($result));  
?>	  









    <p>&nbsp;</p></td>
  </tr>
 <?php include("blocks/down.php"); ?>
</table>
</body>
</html>
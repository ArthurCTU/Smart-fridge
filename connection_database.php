<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Test my PostgreSql Database </title>
    </head>
    <body>

    <p><em>Retrieving all tuples from the artist table</em></p>

 <form id="testdb" name="testdb" method="post" action="index.php">
            <p> <lable for="name"> Enter your User Name:</lable>
            <input name="iuser" type="text" id="iuser" />
            </p>
            <p> <lable for="name"> Enter your password:</lable>
            <input name="ipass" type="password" id="ipass" />
            </p>
            <p> <input type="submit" name="bfetch" value="Connection Database"/>
        </form>

    </body>
</html>

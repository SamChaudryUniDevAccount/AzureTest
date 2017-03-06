<?php
/**
 * Created by PhpStorm.
 * User: SamChaudry
 * Date: 06/03/2017
 * Time: 18:41
 */

$name = htmlspecialchars($_POST["name"]);
$comment = htmlspecialchars($_POST["comment"]);
echo "Hi, $name. Your comment has been received successfully." . "<br>";
echo "Here's the comment what you've entered: $comment";
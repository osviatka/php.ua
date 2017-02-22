<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request has been sent successfully</title>
</head>
<body>

<h1>Request has been sent successfully: go check <a href="includes/datalist.php">List</a></h1>
<?php
require_once 'includes/database.php';
$form = new Database("localhost", "root", "", "php");
$form->connect();
if (isset($_REQUEST["submit"]))
{
    $name = $_REQUEST["name"];
    $surname = $_REQUEST["surname"];
    $sex1Value = $_REQUEST["sex"];
    $age = $_REQUEST["age"];
    $sex2Value = $_REQUEST["sex2"];
    $sex1 = ($sex1Value == "m") ? "Male" : "Female";
    $sex2 = ($sex2Value == "m") ? "Young man" : "Girl";
    $birthday = $_REQUEST["birth"];
    $familyStatus = $_REQUEST["famstatus"];
    $socialStatus = $_REQUEST["socstatus"];
    $address = $_REQUEST["address"];
    $doff = implode(", ", $_REQUEST["doff"]);
    $bestCompany = $_REQUEST["bestcompany"];
    $readBooks = $_REQUEST["book"];
    $userComment = $_REQUEST["comment"];
    $selectCompany = $_REQUEST["selectcompany"];
    $spam = implode(", ", $_REQUEST["spam"]);
    $task = $_REQUEST["task"];
    $form->insert($name, $surname, $sex1, $age, $sex2, $birthday, $familyStatus, $socialStatus, $address, $doff, $bestCompany, $readBooks, $userComment, $selectCompany, $spam, $task);
}
<?php
echo "<pre>";
 print_r($_POST);
 echo "</pre>";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>
        body {
            background: gainsboro;
            margin: 0;
            padding: 0;
            top: 0;
            font-family: "Arial Black";
        }

        .container {
            width: 960px;
        //       background: #2aabd2;
            margin: auto;
        }

        .header {
            width: 100%;
            height: 50px;
        // background: greenyellow;
            text-align: center;
            font-size: 30px;
        }

        .form-group {
            width: 100%;
        //background: burlywood;
            height: 50px;
            margin-top: 5px;
        }

        .input {
            width: 99.7%;
            height: 20px;
        }

        .select {
            width: 100%;
            height: 30px;
        }

        .texBox {
            width: 100%;
            height: 100px;
        // background: #2e6da4;
            float: left;
        }

        .texBox textarea {
            width: 99.5%;
            height: 70px;
        }

        .form-group button{
            background: gray;
            width: 150px;
            height: 40px;
            border: 2px solid burlywood;

        }

    </style>
</head>
<body>
<div class="container">
    <div class="header">
        Student Form
    </div>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="input" name="name" id="name" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="text" class="input" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="pass">Password: </label>
            <input type="password" class="input" name="pass" id="pass">
        </div>

        <div class="form-group">
            <label for="gen">Gender: </label> <!-- name must be common -->
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
        </div>

        <div class="form-group">
            <label for="lang">Language</label>
            <input type="checkbox" name="language[]" value="Nep">Nepali
            <input type="checkbox" name="language[]" value="Eng">English
            <input type="checkbox" name="language[]" value="Chinese">Chinese
        </div>

        <div class="form-group">
            <label for="country">Country: </label>
            <select name="country" id="country" class="select">
                <option value="nep">Nepal</option>
                <option value="uk">Uk</option>
                <option value="china">China</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Profile Pic</label>
            <input type="file" name="upload" class="input">
        </div>

        <div class="texBox">
            <label for="desc">Description:</label>
            <textarea name="description" id="" cols="30" rows="10" maxlength="20"></textarea>
        </div>

        <div class="form-group">
            <button>Add</button>
        </div>

    </form>
</div>
</body>
</html>
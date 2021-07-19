<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Me</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
                integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
    <link rel="stylesheet" href="<?= ROOT. "templates/style.css" ?>">

    <style>
        * {
    box-sizing: border-box;
}

body{
    font-family: Arial;
    margin: 0;
}


#header{
    display: flex;
    background-color: rgb(0, 183, 255);
}

#header>h1{
    padding-top:2%;
    padding-left: 15px
}

#navbar{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: flex-end;
    /*border: 1px solid red;*/
    background-color: #333;
}

@media (max-width: 800px) {
    #navbar {
        justify-content: space-around;
    }
  }

@media (max-width: 500px) {
    #navbar {
        flex-direction: column;
    }
}

#navbar a{
    color: white;
    /*border: solid black 1px;*/
    padding: 14px 20px;
    text-decoration: none;
    text-align: center;
}

#navbar a:hover{
    color: black;
    background-color: white;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.sidebar{
    flex: 20%;
    background-color: rgb(223, 223, 223);
    padding: 20px;
}

.main{
    flex: 80%;
    background-color: white;
    padding: 20px;
}

.article, .animaux{
    border-style: solid;
    border-color: black;
    border-radius: 2px;
    margin-bottom: 5px;
}

footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin: 0 auto;
}


    </style>
</head>
<body>
    <div id="header">
        <img src="https://fakeimg.pl/150x100" alt=""><h1>Adopt a pet</h1>
    </div>

    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="index.php?method=getArticles">Blog</a>
        <a href="index.php?method=getAnimaux">Adopt Me</a>
        <a href="index.php?method=getProduits">Product</a>
        <a href="index.php?method=dons">Abous Us</a>
    </div>

    <div class="row">
        <div class="sidebar">
            <?php if (isset($_SESSION["email"])):?>
                <a href="index.php?method=deconnexion">Deconnexion</a>
            <?php else:?>
                <a href="index.php?method=login">Login</a>
                </br>
                <a href="index.php?method=register">Inscription</a>
            <?php endif; ?>
         

            <!--<a href="#">Panier</a>-->
            <?php if (isset($_SESSION["admin"])):?>
                <h4>Admin</h4>
                <a href="index.php?method=createAnimal">Add animal</a>
                </br>
                <a href="index.php?method=createProduit">Create product</a>
                </br>
                <a href="index.php?method=donsAdmin">Listes des dons</a>
            <?php endif; ?>
        </div>

        <div class="main">
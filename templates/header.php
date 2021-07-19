<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Me</title>
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
    padding-bottom: 50px;
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

.article{
    border-style: solid;
    border-color: black;
    border-radius: 2px;
}

.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
}


    </style>
</head>
<body>
    <div id="header">
    </div>

    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="index.php?method=getArticles">Blog</a>
        <a href="#">Adopt Me</a>
        <a href="index.php?method=getProduits">Product</a>
        <a href="index.php?method=dons">Abous Us</a>
    </div>

    <div class="row">
        <div class="sidebar">
            <p></p>
            <a href="#">Panier</a>
            <h4>Admin</h4>
            <a href="index.php?method=getArticles">Home</a>
            </br>
            <a href="#">Add animal</a>
            </br>
            <a href="index.php?method=createProduit">Create product</a>
            </br>
            <a href="index.php?method=donsAdmin">Listes des dons</a>
        </div>
        <div class="main">
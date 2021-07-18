<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT. "templates/style.css" ?>">

    <style>
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
        <p>Hello</p>
    </div>

    <div id="navbar">
        <a href="#">Home</a>
        <a href="#">Adopt Me</a>
        <a href="#">Product</a>
        <a href="#">Abous Us</a>
    </div>

    <div class="row">
        <div class="sidebar">
            <p>Here some information about me</p>
        </div>
        <div class="main">
            <div class="article">
                <h1>Article</h1>
                <h2>15 July 2021</h2>
                <p>Welcome to our home</p>
                <p>Here the main content about the page and what we offer</p>
            </div>
        </div>
    </div>


    <div class="footer">
        <h2>Footer</h2>
    </div>

</body>
</html>
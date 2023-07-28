  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body id="bckgrnd">

    <header>
        <div class="navbar">
            <span class="title">Product List</span>
            <ul class="btn-list">
                <li><a href="add.php"><button class="btn">ADD</button></a></li>
                <li><button  class="btn mass_delete" name="mass_delete">MASS DELETE</button></li>
            </ul>
        </div>

    </header>
    <div class="container">

        <div class="productList">



        </div>

    </div>
    <footer>
        <div class="navbar">
            <span class="title">Scandiweb Junior Developer test assignment</span>
            <p>by Blagoja Sarkisjan</p>
        </div>
    </footer>
    <script type = "module"  src="scripts/appIndex.js"></script>
</body>

</html>
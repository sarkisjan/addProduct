<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
</head>

<body id="bckgrnd">
    <div class="form_container">
        <header>
            <div class="navbar">
                <span class="title">Add Product</span>
                <ul class="btn-list">
                <li><button form="product_form" id="save" type="submit" class="btn" name="submit">SAVE</button></li>
                    <li><a href="index.php"><button class="btn">CANCEL</button></a></li>
                </ul>
            </div>
        </header>

        <form id="product_form" action="" method="POST" name="submit">
            <div class="form_inputs">
                <div class="product_form_item">
                    <label for="sku">SKU</label>
                    <input id="sku" class="inputs" type="text" placeholder="enter SKU" name="sku">
                    <span class="error" id="skuError"></span>
                </div>

                <div class="product_form_item">
                    <label for="name">Name</label>
                    <input id="name" class="inputs" type="text" placeholder="enter name" name="name">
                    <span class="error" id="nameError"></span>
                </div>

                <div class="product_form_item">
                    <label for="price">Price ($)</label>
                    <input id="price" class="inputs" type="number" placeholder="enter price" name="price">
                    <span class="error" id="priceError"></span>
                </div>

                <div class="product_form_item">
                    <label for="productType">Type Switcher</label>
                    <select name="productType" class="inputs" id="productType" required>
                        <option value="">select Type</option>
                        <option value="DVD">DVD-disk</option>
                        <option value="Book">Book</option>
                        <option value="Furniture">Furniture</option>
                    </select>

                </div>

            </div>

            <div class="shown_form_inputs">

            </div>

        </form>
    </div>
    <footer>
        <div class="navbar">
            <span class="title">Scandiweb Junior Developer test assignment</span>
            <p>by Blagoja Sarkisjan</p>
        </div>
    </footer>
    <script type = "module" src="scripts/app.js"></script>

</body>

</html>

<html>
    <head>
        <title>
            create a product
        </title>
    </head>
    <body>
        <?php if (isset( $_SESSION["sku"])):?>
        <span><?php echo  $_SESSION["sku"]?></span>
        <?php endif;?>
        <form action="/create" method="post" enctype="multipart/form-data">
           <div>
               <label>Product Name</label><br>
               <input type="text" name="pro-name" required placeholder="product-name">
           </div>
           <div>
               <label>upload image</label><br>
               <input type="file" name="pro-img" required >
           </div>
            <div>
                <label>SKU</label><br>
                <input type="text" name="pro-sku" required placeholder="sku" >
            </div>
            <div>
                <label>Price</label><br>
                <input type="number" name="pro-price" required placeholder="product-price">
            </div>
            <div>
                <label>Brand</label><br>
                <select name="pro-brand" required>
                    <option></option>
                    <option >puma</option>
                    <option >addidas</option>
                    <option >apple</option>
                </select>
            </div>
           <div>
               <label>Stock</label><br>
               <input type="number" name="pro-stock" required placeholder="stock">
           </div>
            <div>
                <label>Manufacturing Date</label><br>
                <input type="date" id="date" name="pro-date" required placeholder="Manufacturing-date">
            </div>
            <br>
            <button type="submit">create a product</button>
        </form>

    <form action="/list" method="post">
        <button type="submit">go to list page</button>
    </form>
    </body>
    <script type="text/javascript">
            let toDay = new Date();
            let month = toDay.getMonth() + 1;
            let day = toDay.getDate();
            let year = toDay.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();

            let minDate= year + '-' + month + '-' + day;
            document.querySelector("#date").setAttribute("min",minDate)

    </script>
</html>
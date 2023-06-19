<html>
    <head>
        <title>
            list page
        </title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="relative overflow-x-auto">
        <h1 class="px-10 py-5 font-extrabold">Products details page:</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-6">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    product images
                </th>
                <th scope="col" class="px-6 py-3">
                    price
                </th>
                <th scope="col" class="px-6 py-3">
                    brand
                </th>
                <th scope="col" class="px-6 py-3">
                    SKU
                </th>
                <th scope="col" class="px-6 py-3">
                    stock
                </th>
                <th scope="col" class="px-6 py-3">
                    action
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($listData as $listDatas):?>


            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $listDatas["product_name"]?>
                </th>
                <td class="px-6 py-4">
                    <img src="<?php echo $listDatas["product_images"]?>" alt="product-img">
                </td>
                <td class="px-6 py-4">
                    <?php echo $listDatas["price"]?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $listDatas["brand"]?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $listDatas["SKU"]?>
                </td>
                <td class="px-6 py-4" id="stock-value">
                    <?php echo $listDatas["stock"];
                    ?>
                </td>
                <td class="px-6 py-4" id="stock">
                    <form action="/edit" method="post">
                        <input type="hidden" name="edit" value="<?php echo $listDatas["id"]?>">
                        <button type="submit">edit</button>
                    </form>
                    <form action="/delete" method="post">
                        <input type="hidden" name="delete" value="<?php echo $listDatas["id"]?>">
                        <button type="submit"  value="delete">delete</button>
                    </form>
                </td>
            </tr>

            </tbody>
            <?php endforeach;?>
        </table>
    </div>
    <form action="/create" method="post">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back create page</button>

    </form>
    </body>
<script type="text/javascript">
    let stock =  document.querySelectorAll("#stock-value")
    console.log(stock)
    stock.forEach((element)=>{
        if(Number(element.innerText)<10){
            element.parentElement.style.backgroundColor = "yellow"
        }
        else {
            element.parentElement.style.backgroundColor = "white"
        }
    })
</script>
</html>
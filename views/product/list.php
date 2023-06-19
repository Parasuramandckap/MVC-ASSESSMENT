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
                <td class="px-6 py-4" id="stock">
                    <?php echo $listDatas["stock"];
                    ?>
                </td>
            </tr>

            </tbody>
            <?php endforeach;?>
        </table>
    </div>
    <form action="/create" method="post">
        <button type="submit">back create page</button>
    </form>
    </body>
<script type="text/javascript">
    let stock =  document.querySelectorAll("#stock")
    stock.forEach(ele=>{
       if(Number(ele.innerText)<10){
           ele.parentElement.style.backgroundColor ="white"
       }
       else{
           ele.parentElement.style.backgroundColor ="yellow"
       }
    })
</script>
</html>
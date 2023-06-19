<?php
class Database
{
    public $db;

    public function __construct()
    {
        try{
            $this->db = new PDO
            (
                'mysql:host=localhost;dbname=MVC_product',
                'admin',
                'welcome'
            );
//            echo "ok";
        }
        catch(Exception $e){
            die("connection error");
        }
    }

}

class UserModel extends Database {
    // Database connection and other necessary properties

    public function create($data) {
        $productName = trim($data["pro-name"]);
        $productImage = $_FILES["pro-img"];
        $productSKU = trim($data["pro-sku"]);
        $productPrice = $data["pro-price"];
        $productBrand = $data["pro-brand"];
        $stock = $data["pro-stock"];
        $manufacuringDate = $data["pro-date"];


        $exits = $this->db->query("SELECT * FROM `products` where SKU='$productSKU'");
        $exits = $exits->fetchAll();

        if ($exits){
            $_SESSION["sku"] = "SKU already exits";
            require "views/product/create.php";
        }
        else{
            if($productName != "" && $productSKU != "" && strlen($productSKU)>=8 && $productPrice != 0 && $productBrand != "" && $manufacuringDate !="" && $stock != 0){


               $filpath = "images/".$productImage["name"];

               move_uploaded_file($productImage["tmp_name"],$filpath);


               $this->db->query("INSERT INTO products(product_name,product_images,SKU,price,stock,brand,manufacture_date)VALUES ('$productName','$filpath','$productSKU','$productPrice','$stock','$productBrand','$manufacuringDate')");
               echo "<script>
                        alert('product added successfully')
                        window.location.href='http://localhost:8888/create'
                    </script>";

               session_unset();
            }
            else{
               echo "<script>alert('please fill the all details and SKU minum 8 character')
                    window.location.href='http://localhost:8888/create'</script>";
            }
        }

    }

    public function list_data(){
        $list = $this->db->query("SELECT * FROM products");
        $list = $list->fetchAll();
        return $list;
    }


}


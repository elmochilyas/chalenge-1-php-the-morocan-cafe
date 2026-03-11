<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="?category=tech&sort=asc">Category Tech en ordre A => Z</a> <br>
    <a href="?category=tech&sort=desc">Category Tech en ordre Z => A</a> <br>
    <a href="?category=furniture&sort=asc">Category furniture en ordre A => Z</a> <br>
    <a href="?category=furniture&sort=desc">Category furniture en ordre Z => A</a> <br>
    
    
    <?php
        $products = [
            ["name" => "Laptop", "category" => "tech"],
            ["name" => "Phone", "category" => "tech"],
            ["name" => "Tablet", "category" => "tech"],
            ["name" => "Chair", "category" => "furniture"],
            ["name" => "Desk", "category" => "furniture"]
        ];

        $sortOrder = null;
        $categoryFilter = null;
        
        if (isset($_GET['category'])){
            $categoryFilter = $_GET['category'];
            echo "The category selected from the URL is :  " . $categoryFilter . "<br>" . "The products in this category is : <br>";
        }
        else {echo "Please select a category from the URL to see the products on it ";}
        
        
        if (isset($_GET['sort'])){
            $sortOrder = $_GET['sort'];
        }
        
        usort($products, function($a, $b) use ($sortOrder){
            if ($sortOrder == "asc" ){
                return strcmp($a['name'], $b['name']); 
            }
            elseif ($sortOrder == "desc" ){
                return strcmp($b['name'], $a['name']); 
            }
        });
        
        
        foreach ($products as $product ){
            if ($product['category'] == $categoryFilter){
                echo $product['name'] . "<br>";
            }
        }
        
    ?>
</body>
</html>
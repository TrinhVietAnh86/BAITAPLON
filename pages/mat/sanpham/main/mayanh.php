<h1>may ảnh</h1>
<div class="productssp">
            <?php
            $products = [
                ["name" => "Sản phẩm 1", "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 1"],
                ["name" => "Sản phẩm 2", "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 2"],
                ["name" => "Sản phẩm 3", "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 3"],
                ["name" => "Sản phẩm 4", "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 4"],
                ["name" => "Sản phẩm 5", "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 5"],
                ["name" => "Sản phẩm 6", "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 6"],
                ["name" => "Sản phẩm 7", "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 7"],
                ["name" => "Sản phẩm 8", "image" => "https://via.placeholder.com/150", "description" => "Mô tả sản phẩm 8"],
            ];

            foreach ($products as $product) {
                echo "<div class='product'>
                        <img src='{$product['image']}' alt='{$product['name']}'>
                        <h3>{$product['name']}</h3>
                        <p>{$product['description']}</p>
                      </div>";
            }
            ?>
        </div>
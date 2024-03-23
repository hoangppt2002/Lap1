/* This PHP code snippet is displaying a list of products fetched from a database. Here's a breakdown
of what each part of the code does: */
<?php
require_once('entities/product.class.php');
?>
<?php
include_once('header.php');
$prods = Product::list_product(); // * GET PRODUCT FROM DATABASE
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table border="1" class="table">
                <tr>
                    <td>Picture</td>
                    <td>Product Name</td>
                    <td>CateID</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Description</td>
                </tr>
                <?php
                foreach ($prods as $item) {
                ?>
                    <tr>
                        <td><?php echo $item['Picture'] ?></td>
                        <td><?php echo $item['ProductName'] ?></td>
                        <td><?php echo $item['CateID'] ?></td>
                        <td><?php echo $item['Price'] ?></td>
                        <td><?php echo $item['Quantity'] ?></td>
                        <td><?php echo $item['Description'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php
include_once('footer.php');

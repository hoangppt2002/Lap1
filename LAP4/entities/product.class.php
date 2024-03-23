/* The Product class in PHP defines properties and methods for managing product data in a database. */
<?php
require_once("config/db.class.php");


class Product
{
    public $productID;
    public $productName;
    public $cateID;
    public $price;
    public $quantity;
    public $description;
    public $picture;
    public function __construct(
        $pro_name,
        $cate_id,
        $price,
        $quantity,
        $desc,
        $picture
    ) {
        $this->productName = $pro_name;
        $this->cateID = $cate_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $desc;
        $this->picture = $picture;
    }
    // * Save product
    public function save()
    {
        // Initialize $db object with class Db from file db.class.php
        $db = new Db();
        // Create $sql variable to insert products, run this variable below
        $sql = "INSERT INTO product (ProductName, CateID, Price, Quantity,
    
    Description, Picture) VALUES
    ('$this->productName',
    '$this->cateID',
    '$this->price',
    '$this->quantity',
    '$this->description',
    '$this->picture')";
        // query_execute is a function from class Db
        $result = $db->query_execute($sql);
        // Return results
        return $result;
    }
    // *  List of products
    public static function list_product()
    {
        $db = new DB();
        $sql = "SELECT * FROM product";
        // select_to_array is a function of class Db, used to output an array
        $rs = $db->select_to_array($sql);
        return $rs;
    }
}

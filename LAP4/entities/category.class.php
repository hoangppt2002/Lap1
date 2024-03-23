/* The Category class in PHP defines properties and methods for managing categories in a database,
including saving new categories and listing existing ones. */
<?php
require_once("config/db.class.php");


class Category
{
    public $cateId;
    public $cateName;
    public $cateDes;

    public function __construct(
        $cate_name,
        $cate_des,
    ) {
        $this->cateName = $cate_name;
        $this->cateDes = $cate_des;
    }

    //* SAVE CATEGORY

    public function save()
    {
        $db = new Db();
        // ! check correct name of table in database
        // * id in categogy table is auto_increment so you dont need to add it
        $sql = "INSERT INTO category (CategoryName,Description) VALUES ('$this->cateName','$this->cateDes')";
        //  query_execute is a function from class Db
        $result = $db->query_execute($sql);
        //  Return results
        return $result;
    }

    // * List of products
    public static function list_category()
    {
        $db = new DB();
        $sql = "SELECT * FROM category";
        // select_to_array is a function of class Db, used to output an array
        $rs = $db->select_to_array($sql);
        return $rs;
    }
}

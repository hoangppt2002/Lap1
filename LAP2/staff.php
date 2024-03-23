/* The `staff` class extends the `character` class and generates a unique staff code for each instance
based on a static counter. */
<?php
require_once("character.php");

class staff extends character
{
    private $staffcode;
    private $part;

    public function __construct($fullname_staff, $countrycode, $part)
    {
         // ? Should check input is valid or not
        parent::__construct($fullname_staff, $countrycode);
        $this->part = $part;
        $this->staffcode = $this->staffcode_continue();
    }

    public function get_staffcode()
    {
        return $this->staffcode;
    }

    public function get_part()
    {
        return $this->part;
    }

    final private function staffcode_continue()
    {
        
        // * first set userId is 1 and then +1 for following user
        static $makecode = 1;
        return $makecode++;
    }
}

/* The class "character" in PHP defines properties for a character's full name and country code, with
methods to retrieve these values. */
<?php
class character
{
    private $fullname;
    private $countrycode;
    public function __construct($fullname, $countrycode)
    {
        $this->fullname = $fullname;
        $this->countrycode = $countrycode;
    }
    public function get_fullname()
    {
        return $this->fullname;
    }
    public function get_countrycode()
    {
        return $this->countrycode;
    }
}

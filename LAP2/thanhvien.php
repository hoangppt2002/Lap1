/* The above PHP class defines a member with properties for fullname, email, and idmember, utilizing a
constructor to initialize these properties and a destructor to clean up resources. */
<?php
require_once("hotro.php");

class member
{
    private $fullname;
    private $email;
    private $idmember;
    public function __construct($fullname, $email)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        // * idcontinue() function from hotro.php
        $this->idmember = idcontinue();
    }

    public function __destruct()
    {
        $this->fullname = NULL;
        $this->email = NULL;
        // $this->status = NULL;
        $this->idmember = NULL;
    }

    public function get_fullname()
    {
        return $this->fullname;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function get_id()
    {
        return $this->idmember;
    }
}

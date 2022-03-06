<?php
    class Database
    {
        var $conn;
        function __construct()
        {
            $this->conn=mysqli_connect("mysql5046.site4now.net","a7e931_shoppin","ABC@123456","db_a7e931_shoppin");
        }
    //To Insert- Update - delete 
        function RunDML($statment)
        {
            if(!mysqli_query($this->conn,$statment))
                {
                    return  mysqli_error($this->conn);
                }
            else
                return "ok";
        }
    //to search select
      function GetData($select)
      {
        $result= mysqli_query($this->conn,$select);
        return $result;
      }
    }
?>
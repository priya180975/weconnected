<?php

    function getUsers($conn,$uid,$searchTerm)
    {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT uid= '{$uid}' AND (username LIKE '%{$searchTerm}%') ");
        if(mysqli_num_rows($sql)>0)
        {
            // $result = mysqli_fetch_assoc($sql);
            // return $result['username'];
            $solution = array();
            $result=mysqli_num_rows($sql);
      
            while ($row = mysqli_fetch_assoc($sql))
            {
                $solution[]=$row['uid'];
            }
            return $solution;
        }
        else
        {
            return '';
        }
    }

    // function getUsers()
    // {
    //     $result = "";
    //     $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT uid= '{$uid}' AND (username LIKE '%{$searchTerm}%' OR name LIKE '%{$searchTerm}%') ");
    //     if(mysqli_num_rows($sql) > 0)
    //     {
    //         // include_once "data.php";
    //         $solution = array();
    //         $result=mysqli_num_rows($sql);
      
    //         while ($row = mysqli_fetch_assoc($sql))
    //         {
    //             echo $row['username'];
    //         }
    //     }
    //     else
    //     {
    //         $result .= 'No user found related to your search term';
    //         echo $result
    //     }
    // }
?>
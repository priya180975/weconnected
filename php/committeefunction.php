<?php
    include_once "config.php";
    include_once "mainfunctions.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    //committee id from name
    function getCommitteeid($conn,$name)
    {
        $sql=mysqli_query($conn,"SELECT uid FROM users WHERE name='{$name}'");
        if(mysqli_num_rows($sql)>0)
        {
            $result = mysqli_fetch_assoc($sql);
            return $result['uid'];
        }
        else
        {
            return "invalid";
        }
    }

    //get all the committee 
    function getCommittee($conn)
    {
        if(getUserType($conn,$_SESSION['uid'])=="Committee")
        {
            $uid=$_SESSION['uid'];
            $sql=mysqli_query($conn,"SELECT uid FROM profile WHERE type='Committee' and uid!='$uid'");
        }
        else
        {
            $sql=mysqli_query($conn,"SELECT uid FROM profile WHERE type='Committee';");
        }

        if(mysqli_num_rows($sql)>0)
        {
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
            return "invalid";
        }
    }


    //chk user added committee
    function getUserCommittee($conn,$uid,$cid)
    {   
        //already added
        $sql=mysqli_query($conn,"SELECT * FROM committee WHERE uid='{$uid}' AND cid='{$cid}'");
        if(mysqli_num_rows($sql)>0)
        {
            $solution = array();
            $result=mysqli_num_rows($sql);
    
            while ($row = mysqli_fetch_assoc($sql))
            {
                $solution[]=$row['cid'];
            }

            return "minus";
        }
        //not added
        else
        {
            return "plus";
        }
    }

    //add a committee
    if(!empty($_REQUEST['add']))
    {
        $committeName=$_REQUEST['add'];
        
        addCommittee($conn,getCommitteeid($conn,$committeName),$_SESSION['uid']);

    }  

    function addCommittee($conn,$cid,$uid)
    {
        $sql=mysqli_query($conn,"INSERT INTO committee(cid,uid) VALUES('{$cid}','{$uid}');");
        if($sql)
        {
            echo  "done";
        }
        else
        {
            echo "invalid";
        }
    }
    
    //remove a committee
    if(!empty($_REQUEST['remove']))
    {
        $committeName=$_REQUEST['remove'];
        
        removeCommittee($conn,getCommitteeid($conn,$committeName),$_SESSION['uid']);

    }  

    function removeCommittee($conn,$cid,$uid)
    {
        $sql=mysqli_query($conn,"DELETE FROM committee  WHERE cid='{$cid}' AND uid='${uid}';");
        if($sql)
        {
            echo  "done";
        }
        else
        {
            echo "invalid";
        }
    }
?>
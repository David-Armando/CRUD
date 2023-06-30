<?php
include ("db.php");


if(isset($_POST['save_task']))
{
    if(!empty($_POST['title'] && $_POST['description']))
    {

        $title = $_POST['title'];
        $description = $_POST['description'];
      
    
        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($conn,$query);
        if(!$result)
        {   
            die("query failed");
        }
    
        $_SESSION['message'] = 'Task Saved Successfully';
        $_SESSION['message_type'] = 'success';
        
        header('Location: index.php');
    }else{
        $_SESSION['message'] = 'Empty field';
        $_SESSION['message_type'] = 'warning';
        
        header('Location: index.php');
    }
}
?>
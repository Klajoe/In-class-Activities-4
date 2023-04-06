<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In-Class-Activity-4</title>
</head>
<body>
    <h1>Preview</h1>
    <?php

        
        if( $_GET['name'] == null)
        {
            echo "You have to enter a name <br>";
        }
        else
        {
            echo $_GET['name']."<br>";
        }

        
        if( $_GET['username'] == null)
        {
            echo "You have to enter a username <br>";
        }
        else
        {
            echo $_GET['username']."<br>";
        }

        
        if( $_GET['password'] == null)
        {
            echo "You have to enter a password <br>";
        }
        else
        {
            echo $_GET['password']."<br>";
        }

        
        if( $_GET['address'] == null)
        {
            echo "You have to enter a address<br>";
        }
        else
        {
            echo $_GET['address']."<br>";
        }

        
        if( $_GET['countries'] == "none" )
        {
            echo "You have to enter a country <br>";
        }

        else
        {
            echo $_GET['countries']."<br>";
        }
        
        
        if($_GET['zip'] == null)
        {
            echo "You have to enter a zip code <br>";
        }
        else
        {
            echo $_GET['zip']."<br>";
        }

        
        if($_GET['email'] == null)
        {
            echo "You have to enter a email <br>";
        }
        else
        {
            echo $_GET['email']."<br>";
        }

        
        if(empty($_GET['sex']))
        {
            echo "You have to enter a sex<br>";
        }
        else
        {
            echo $_GET['sex']."<br>";
        }

        
        if(empty($_GET['languages']))
        {
            echo "You have to select a language <br>";
        }
        else
        {
            foreach($_GET['languages'] as $item)
            {
                echo $item . " ";
            }
            echo "<br>";
        }

        if($_GET['about'] == null)
        {
            echo "You have to enter a about part<br>";
        }
        else
        {
            echo $_GET['about']."<br>";
        }
       
            
        


    ?>
</body>
</html>




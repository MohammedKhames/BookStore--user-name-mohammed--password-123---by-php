

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Khamis Book Store</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel='stylesheet' href='css/font-awesome.min.css' />
        <link rel='stylesheet' href='css/style.css' />
      
    </head>
    <body>

    
        <!-- Start Our Navbar -->
    
        <section class="main">
            
            <nav>
                 <div class="menu"> 
                    <a href="#" class="siteName"> <i class="fas fa-book"></i> BookStore </a>
                 </div>

                <ul class="menu">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#categories">categories</a></li>
                    <li><a href="#product">New Arrival</a></li>
                    <li><a href="#writer">Writers</a></li>
                    <li><a href="register.php">Register</a></li>
                    
                    <li>
                            <?php
                                if (!isset($_SESSION ['login']))
                                    {
                                     ?>
                                       <a href="sign_in.php"> Sign In  </a>
                                     <?php
                                    }
                                    
                                    else
                                    {
                                        echo"Welcome";
                                    }
                            ?>
                   </li>
                    
                    
                    <li>
                            <?php
                                if (isset($_SESSION ['login']))
                                {
                                    ?>
                                      <a href="logout.php">Logout</a>
                                    <?php
                                } 
                            ?>
                    </li>
                    
                </ul>
            </nav>
            


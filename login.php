
<?php

//session_start();

include_once("header.php");

  if(isset($_POST['submit']))
    {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username=="mohammed" and $password=="123")
        {
            ?>
                <div style="text-align: center; margin-top: 30px;font-size: 22px;letter-spacing: 1px; font-weight:bold;color: #0F056D;">
                    Welcome, Mohammed khamis
                </div>
            <?php
            
            $_SESSION['login']="yes";
            header("refresh:4;url=index.php");
        }
        else
        {
            ?>
                <div style="text-align: center; margin-top: 30px;font-size: 28px;letter-spacing: 1px; font-weight:bold;color: #0F056D;">
                    Wrong Username or Password
                </div>
            <?php
           header("refresh:3;url=index.php");
        }
    }       
    
    else
    {
    
        ?>   
                  <form method="post" action="index.php">
                        
                        <input type="text" required=required  placeholder="Your Username" class="signin-inputbox" name="username">
                        
                        <input type="password" required=required  placeholder="Password" class="signin-inputbox" name="password">
                        
                        <button type="submit" class="signin-btn" name="submit">Submit</button>
                        
                        <input type="checkbox"> <label>Remember Me</label>
                     
                  </form>
                  
                  <button type="button" class="here-btn"> <a href="../index.php" >I'm New Here</a> </button>
                  <a href=""> Forgot Password</a>
             </div>
       
           </div>
        </div>
       <?php
    }
          
?>
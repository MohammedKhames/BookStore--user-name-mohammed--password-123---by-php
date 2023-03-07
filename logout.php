<?php

session_start();

include_once("header.php");

?>


<br><br><br>
<div class="signIn_page">
  
    <div class="signin_card">
     <div class="signin_Box">
       
       
       <h2>Log out</h2>
                 
         <?php
         
             if(isset($_SESSION['login']))
              {
                 session_destroy();
                 
                 ?>
                   <div style="text-align: center; margin-top: 5rem;font-size: 28px;letter-spacing: 1px; font-weight:bold;color: #0F056D;">
                     Logged out successfuly.
                   </div>
                   
                 <?php
                 
                 header("refresh:2;url=index.php");
              }
              
              else
              {
                
                ?>
                   <div style="text-align: center; margin-top: 30px;font-size: 28px;letter-spacing: 1px; font-weight:bold;color: #0F056D;">
                      You Already Logged out.
                   </div>
                   
                 <?php
                 
                 header("refresh:2;url=sign_in.php");
            
               }
               
               
        
          ?>

<?php

session_start();

include_once("header.php");

?>


<br><br><br>
<div class="signIn_page">
  
    <div class="signin_card">
     <div class="signin_Box">
       
       
       <h2>Log In</h2>
       <br><br>
       
                 
         <?php
         
               if(isset($_SESSION['login']))
                {
                   ?>
                      <div style="text-align: center; margin-top: 30px;font-size: 28px;letter-spacing: 1px; font-weight:bold;color: #0F056D;">
                          You Already <br>Logged in. 
                      </div>
                    <?php
                }
                
                else
                {
      
                  include_once("login.php");
                  
                 }

            ?>

<?php
session_start();
include_once("header.php");

?>
        

  <br><br><br>
  <div class="student_register_page">

    <div class="signin_card">
      
       <div class="signin_Box">

           <h2>Registeration</h2>
      
           <?php
           if(isset($_POST['submit']))
           
               {
                $firstName = $_POST['firsName'];
                $familyName = $_POST['familyName'];
                $password = $_POST['password'];
                $email = $_POST['email'];
               
                  
                  
                  if($firstName==NULL ||  $familyName==NULL || $email==NULL  || $password==NULL)
                  {
                    
                    ?>
                      <div class="alert alert-danger">
                         Error! Please fill all data
                      </div>
                    <?php
                    
                    header("refresh:2;url=index.php");
                  }
                  else
                  {
                    //first name
                    $username_length = strlen($username);
                    if($username_length>=8 and $username_length<=12)
                    {
                      ?>
                          <div class="alert alert-success">
                                   Valid Username
                          </div>
                      <?php
                            
                            
                      $enc_password = md5($password);
                      $enc_password = substr($enc_password,10,5);
                      $enc_password = sha1($enc_password);
                      $enc_password = substr($enc_password,20,5);
                            
                      ?>
                      
                          <div class="alert alert-success">
                              Password Encrypted.
                          </div>
                          
                      <?php
                            
                       $at_pos = strpos($email,"@");
                       if($at_pos===FALSE)
                       {
                         ?>
                            <div class="alert alert-danger">
                              Error! Invalid Email. E-mail must have "@" char.
                            </div>
                         <?php
                       }
                       
                       else
                       {
                         if($at_pos>0)
                           {
                                  
                              ?>
                                 <div class="alert alert-success">
                                    Valid E-mail.
                                 </div>
                              <?php
                              
                              $filter = array("aa","bb","cc","dd");
                              $comment_filter = str_replace($filter,"***",$comment);
                              ?>
                                 <div class="alert alert-success">
                                     Valid Comment <br>
                                     <?php echo $comment_filter; ?>
                                 </div>
                                 
                              <?php
                                    
                                    
                           }
                           else
                           {
                               ?>
                                  <div class="alert alert-danger">
                                    Error! Invalid E-mail. E-mail "@" char can not be in the first position
                                  </div>
                              <?php
                              
                           }
                                     
                            }
                            
                                 
                        }
                        else
                        {
                           ?>
                               <div class="alert alert-danger">
                                 Error! Username Must be between 8 to 12 chars
                               </div>
                          <?php
                          
                        }
                  }
                        
                        
               }
               else
               {
                  ?>
                       <form method="post" action="index.php">
              
                            <input type="text" required=required  placeholder="Your Fisrt Name" class="signin-inputbox" name="firstName">
                            
                            <input type="text" required=required  placeholder="Your Family Name" class="signin-inputbox" name="familyName">
                            
                            <input type="text" required=required  placeholder="Your Email ID" class="signin-inputbox" name="email">
                            
                            <input type="password" required=required  placeholder="Password" class="signin-inputbox" name="password">
                            
                            <button type="submit" class="signin-btn" name="submit">Sign Up</button>
                 
                       </form>
                       
                 <?php
                 
                 }
                 ?>
      
       </div>

    </div>

  </div>
         
         
         
<?php include_once("footer.php")  ?>
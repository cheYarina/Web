<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            My 1st Page
        </title>
        <link rel="stylesheet" href="../css/mStyle.css">
        
    </head>
    <body>
        <div class="row right-content" id="header">
        <?php
                if (isset($_SESSION["username"])) {
                    echo '<span style="margin-left: 0%; padding-bottom: 0%; margin-bottom: 0%; float:left;color:#f4f0f0;">Welcome, ' . $_SESSION["fullname"] . '! ';
                    echo '<br><a href="../BackEnd/logout.php" style="text-decoration: none; float:left; color: #f4f0f0 ";>Logout <i class="fas fa-sign-out-alt"></i></a></span>';
                }
                ?>
            <div id="dropdown-menu">
                <span><i class="ico burger-ico"></i>MENU</span>
                <div class="dropdown-content  menu-rtl">
                    <ul>
                        <a href="contact.php">
                            <li><i class="ico ico-l user-ico"></i>Home</li>
                        </a>
                        <a href="mydigitalcv.php">
                            <li><i class="ico ico-l wallet-ico"></i>My Digital CV</li>
                        </a>
                        <a href="page3.php">
                            <li><i class="ico ico-l gallery-ico"></i>Gallery</li>
                        </a>
                    </ul>
                </div>
            </div>
        
        <div class="contact">
         
            <div class="contact-item">

                <div class="about"><h1>Contact Us</h1></div>
                <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex odit blanditiis, ullam nisi beatae quod molestiae, vero, eius ducimus obcaecati facere ipsum iusto quae officiis assumenda magnam inventore doloribus.</div><br>


                
           
              <div><h1><img src="../images/office-phone-icon--25.png" alt="Phone Icon">81 806 846</h1></div>  
    </div>
            <div class="contact-item">
               
           
                <div><h1> <img src="../images/emailicon.png" alt="Email Icon">yara.mlaeb.s@gmail.com</h1>
            </div></div>
            <div class="contact-item">
                <a href="https://www.instagram.com/yara.malaeb/" target="_blank">
                   
                  
                   <div> <h1> <img src="../images/Instagram-icon-isolated-on-transparent-background-PNG.png" alt="Instagram Icon">yara.malaeb</h1></div>
                </a>
            </div>
        </div>
        
        </div>
        
      </div>
            <div class="righty">
                <h2>Get In Touch</h2>
      <label for="Name">Name:</label><br>
      <input type="text" id="name" name="name" ><br>
      <label for="Email">Email:</label><br>
      <input type="text" id="email" name="email" ><br>
      <label for="Message">Message:</label><br>
      <textarea id="msg" name="msg" rows="4" cols="50" ;"></textarea><br><br>
      
    
      <input type="submit" value="Submit"></div>
    </form> 
            </div>
</body>
</html>
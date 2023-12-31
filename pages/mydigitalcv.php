<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara Malaeb - Digital CV</title>
    <link rel="stylesheet" href="../css/mStyle.css">
   
    <div class="row right-content" id="header">
                <?php
                if (isset($_SESSION["username"])) {
                    echo '<span style="margin-left: 0%; padding-bottom: 0%; margin-bottom: 0%; float:left;color:#f4f0f0;">Welcome, ' . $_SESSION["fullname"] . '! ';
                    echo '<br><a href="../BackEnd/logout.php" style="text-decoration: none; float:left; color: #f4f0f0 ";>Logout <i class="fas fa-sign-out-alt"></i></a></span>';
                }
                ?>
        <div id="dropdown-menu">
            <span>MENU<i class="ico burger-ico"></i></span>
            <div class="dropdown-content  menu-rtl">
                <ul>
                    <a href="contact.php">
                        <li>Home<i class="ico ico-l user-ico"></i></li>
                    </a>
                    <a href="mydigitalcv.php">
                        <li>My Digital CV<i class="ico ico-l wallet-ico"></i></li>
                    </a>
                    <a href="page3.php">
                        <li>Gallery<i class="ico ico-l gallery-ico"></i></li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
        <div class="header2">
            <img src="mepiccat.jpg" alt="logo" class="log">
            
            <h1>Yara Malaeb</h1>
            
            
            <h2>Computer Science Undergraduate</h2>
            <h3>
                <p>+961 - 81 806 846</p>
                <p>yara.mlaeb.s@gmail.com</p>
                <p>Beirut, Lebanon</p>
                         </h3>
            
        </div>
        
    </head>
    <body>

  
    <div class="container">
        <div class="left-section">


            <div class="bio">
                <h1>Biography</h1>
                <p>Possessing a proactive and mature approach to tasks,
                    I am highly motivated and consistently strive for independence.
                    I am dedicated to continuous learning and expanding my knowledge within and beyond my field of
                    expertise.</p>
            </div>
            <br>
            <br>
            <hr class ="horizontal">
            <div class="education">
                <h2>Education</h2>
                <p style="font-size: 15px; color: black;">Bachelors of Science in Computer Science - Lebanese American University 2021-2024</p>
              
                <p style="font-size: 15px; color: black;">Lebanese Baccalaureate (Life Science) - Education and Teaching Secondary School (ETSS) 2015-2021</p>
                
            </div>
            <hr class ="horizontal">
            
            <div class="hard-skills">
                <h2>Hard Skills</h2>
                <ul>
                    <li>Proficient in Java and C application development, utilizing OOP and concurrent programming.</li>
                    <li>Skilled in Python for scientific computing and data analysis.</li>
                    <li>Adept at database management (SQL and NoSQL). </li>
                    <li>Familiar with web development using HTML, CSS, and JavaScript.</li>
                    <li>Knowledgeable in software engineering principles and
                        practices.</li>
                    <li>Familiar with operating systems administration
                        (Windows and Linux).</li>
                    <li>Strong in OOP concepts and algorithm design,
                        implementation, and analysis.</li>

                        <vr style="size: 2px; color: black;"></vr>
            </div>
            </ul>

           

            </ul>
        </div>
        <div class="right-section">
            <div class="experience">
    <h2>Experience</h2>
  
    <div class="exp1">
            <p style="font-weight: bold">Full Stack Developer|Integrated Digital Systems (Aug 2023-Present)</p>
        
        <ul>
            <li>Building frontend webpages using HTML/HTML5
                and CSS.</li>
            <li> Adding interactions to webpages using
            <li> JavaScript, AJAX and JQuery.</li>
            <li> Building Database using SQL Server.</li>
            <li> Develop full website using Visual Studio,
                ASP.NET/MVC,C#.NET, and Entity Framework
                Core.</li>
            <li>Develop WebAPIs (.NET Core 5.0/6.0/7.0).</li>
        </ul>
    </div>
        
        <div class="exp2" style = " margin-left: 20px;">
            <p style="font-size: 18px; font-weight: bold;"> OOP Lab Volunteering| Jan-April Lebanese American University</p>
      
        <li style="margin-left: 10px; margin-right: 100px;">Assisted in an object-oriented programming laboratory as a volunteer, providing support to students
            in their coding projects and helping to create a positive and productive learning environment</li>
        </div>
        <div class="exp3">
            <p style="font-weight: bold">Private Tutoring |Lebanese American University (Jan-May 2022) </p>
             <li style="margin-left: 26px;">Provided tutoring in Discrete Mathematics to sophomores</li> </div>
        <div class="exp4">
            <p style="font-weight: bold">Call Center Operator|Donner Sang Compter (Feb-April 2022)</p>
        
        <ul>
            <li>Scheduled and confirmed blood donation appointments through daily communication with donors.
            </li>
            <li>Provided accurate information on blood availability, donation procedures, etc. to patients and
                requestors.</li>
            <li>Promoted blood donation awareness and encouraged participation through outreach efforts.</li>
            <li>Maintained accurate records of donor information in a large database.</li>
        </ul>
   
    </div></div>
            

                
        
        <div style="clear: both;"></div>

    </div>
    </div>
</body>

</html>
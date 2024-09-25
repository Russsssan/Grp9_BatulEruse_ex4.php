<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="../styles/default.css">
    <link rel="stylesheet" href="../styles/carousel.css">
    <script type="text/javascript" src="../javascript/bgmode.js" defer></script>
    <script type="text/javascript" src="../javascript/carousel.js" defer></script>
</head>
<body>
    <header>
        <button title="Toggle Dark/Light Mode." id="theme-switch">
            <!--dm-->
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z"/></svg>
            <!--lm-->
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z"/></svg>
        </button>
    </header>
    <div class="body-styles">
        <a title="Scroll Page to the Top." class="btn-style-default" href="#title" id="stp-btn">Scroll to Top</a>
        <!--Dito yung sa title para sa name ng subject at group natin-->
        <div class="title spce" id="title">
            <div class="title-subject-name">
                <h1>INTEGRATIVE PROGRAMMING <br> AND TECHNOLOGIES 1</h1>
            </div>
            <div class="title-group-name">
                <h4>GROUP 9</h5>
            </div>
        </div>

        <center>
        <!--Dito yung sa navigation bar para sa listings-->
        <div class="navmenu spce" id="navmenu">
            <div class="navmenu-list">
                <div>
                    <a class="" href="#members">
                        <button title="Redirect into Members Page." class="btn-list-style">
                            <i class="fa fa-solid fa-users"></i><br>
                            Members
                        </button>
                    </a>
                </div>
                <div>
                    <a class="" href="#profiles">
                        <button title="Redirect into Profiles Page." class="btn-list-style">
                            <i class="fa fa-solid fa-address-card"></i><br>
                            Profiles
                        </button>
                    </a>
                </div>
                <div>
                    <a class="" href="#accountslinks">
                        <button title="Redirect into Accounts Page." class="btn-list-style">
                            <i class="fa fa-solid fa-link"></i><br>
                            Accounts
                        </button>
                        
                    </a>
                </div>  
                <div>
                    <a class="" href="#about">
                        <button title="Redirect into About Page." class="btn-list-style">
                            <span><b>?</b></span><br>
                            About 
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="form-container">
        <form action="handle.php" method="post" id="form">
        
        <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="submit_post">Submit via POST</button>
        <button type="submit" name="submit_get" formmethod="get">Submit via GET</button>
        </form>
        </div>
        </center>

        <!--Dito yung division para sa Members-->
        <div class="members spce" id="members">
            <h1><b>GROUP MEMBERS:</b></h1>
            <div class="members-list">
                <div class="member-1">
                    <a title="Redirect to Profile Page of Cabrera." href="#profmem-cabrera"><img src="../assets/formalPic/cabrera.png" alt="" class="mem"></a>
                    <h4>Mark Alexis Jaudian Cabrera</h4>
                    <p>Leader</p>
                </div>
                <div class="member-1">
                    <a title="Redirect to Profile Page of Batul." href="#profmem-batul"><img src="../assets/formalPic/batul.jfif" alt="" class="mem"></a>
                    <h4>Eliazer Eruse Rabago Batul</h4>
                    <p>Member</p>
                </div>
                <div class="member-1">
                    <a title="Redirect to Profile Page of Leoveras." href="#profmem-leoveras"><img src="../assets/formalPic/leoveras.jfif" alt="" class="mem"></a>
                    <h4>Karyll Anne Leoveras</h4>
                    <p>Member</p>
                </div>
            </div>
            <div class="members-list">
                <div class="member-1">
                    <a title="Redirect to Profile Page of Toralde." href="#profmem-toralde"><img src="../assets/formalPic/toralde.jpg" alt="" class="mem"></a>
                    <h4>John Bryan Toralde</h4>
                    <p>Member</p>
                </div>
                <div class="member-1">
                    <a title="Redirect to Profile Page of Camacho." href="#profmem-camacho"><img src="../assets/formalPic/camacho.jpg" alt="" class="mem"></a>
                    <h4>Ronel Camacho</h4>
                    <p>Member</p>
                </div>
                <div class="member-1">
                    <a title="Redirect to Profile Page of Loquinte." href="#profmem-loquinte"><img src="../assets/formalPic/loquinte.jfif" alt="" class="mem"></a>
                    <h4>John Lawrence Loquinte</h4>
                    <p>Member</p>
                </div>
            </div>
        </div>

        <!--Dito yung division para sa Profiles-->
        <div class="profiles spce" id="profiles">
            <h1 class="centertext"><b> PROFILES:</b></h1>
            <br><br>
            <div class="profmem-1" id="profmem-cabrera">
                <img class="profiles-img" src="../assets/formalPic/cabrera.png" alt="">
                <h4 class="profiles-fn">Mark Alexis Jaudian Cabrera</h4>
                <a title="Redirect into account-link-Cabrera" href="#accountslinks"><div class="btn-style-default profiles-link lta-btn">LINK TO ACCOUNT</div></a>
                <p class="profiles-desc">
                    My birthday was 30th of October, year 2003 and I'm currently <span id="age-cabrera">.</span> years old.
                    A BSIT Student and a Web Developer that was particular in front 
                    end development. Learned with some kinds of programming 
                    languages for making web projects. Some of the programming 
                    languages that I learned including HTML, Java, JavaScript, CSS, 
                    MySQL, C#, C++, Python, Proteus, Assembly, PHP, and Kotlin. Willing to help those 
                    who lacks in the use of communication and modern technology. 
                </p>
                <span  class="prog-fami-1">
                    <div class="progbars">
                        <span class="perc-bar">
                            <p><b>HTML</b><b>80%</b></p>
                            <span class="bar">
                                <span class="percent percbar1"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>CSS</b><b>70%</b></p>
                            <span class="bar">
                                <span class="percent percbar2"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>BOOTSTRAP</b><b>20%</b></p>
                            <span class="bar">
                                <span class="percent percbar3"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>JAVASCRIPT</b><b>60%</b></p>
                            <span class="bar">
                                <span class="percent percbar4"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>PHP</b><b>50%</b></p>
                            <span class="bar">
                                <span class="percent percbar5"></span>
                            </span>
                        </span>
                    </div>
                </span>
            </div>
            <br><br>
            <div class="profmem-1" id="profmem-batul">
                <img class="profiles-img" src="../assets/formalPic/batul.jfif" alt="">
                <h4 class="profiles-fn">Eliazer Eruse Rabago Batul</h4>
                <a title="Redirect into account-link-Batul" href="#accountslinks"><div class="btn-style-default profiles-link lta-btn">LINK TO ACCOUNT</div></a>
                <p class="profiles-desc">
                    My birthday was 18th of January, year 2004 and I'm currently <span id="age-batul">.</span> years old.
                    I am Eruse Batul from bayanan and I'm excited to 
                    connect with you. I interestested in a few things like 
                    watching anime playing volleyball and basketball and I 
                    love exploring new ideas and challenges. Professionally, 
                    I am an 3rd yr, BSIT student in PLMUN. In my free time, I 
                    enjoy playing guitar or games  which helps me stay creative 
                    and energized.
                </p>
                <span  class="prog-fami-2">
                    <div class="progbars">
                        <span class="perc-bar">
                            <p><b>HTML</b><b>80%</b></p>
                            <span class="bar">
                                <span class="percent percbar1"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>CSS</b><b>80%</b></p>
                            <span class="bar">
                                <span class="percent percbar2"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>BOOTSTRAP</b><b>0%</b></p>
                            <span class="bar">
                                <span class="percent percbar3"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>JAVASCRIPT</b><b>50%</b></p>
                            <span class="bar">
                                <span class="percent percbar4"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>PHP</b><b>20%</b></p>
                            <span class="bar">
                                <span class="percent percbar5"></span>
                            </span>
                        </span>
                    </div>
                </span>
            </div>
            <br><br>
            <div class="profmem-1" id="profmem-leoveras">
                <img class="profiles-img" src="../assets/formalPic/leoveras.jfif" alt="">
                <h4 class="profiles-fn">Karyll Anne Leoveras</h4>
                <a title="Redirect into account-link-Leoveras" href="#accountslinks"><div class="btn-style-default profiles-link lta-btn">LINK TO ACCOUNT</div></a>
                <p class="profiles-desc">
                    My birthday was 5th of September, year 2002 and I'm currently <span id="age-leoveras">.</span> years old.
                    I am Karyll Anne Leoveras, a vibrant 21-year-old irregular 4th 
                    year student hailing from Bayanan, brings a unique perspective 
                    and a wealth of experiences to our project. This journey as an 
                    irregular student, coupled with our deep-rooted connection to 
                    this project, offers a valuable lens through which to explore 
                    about Integrative Programming and Technologies. I love playing 
                    online games mostly CODM, and also I cooked some easies dish 
                    that I learned from food vloggers and other social content 
                    creator. And lastly I play with my dogs to release my stress.
                </p>
                <span  class="prog-fami-3">
                    <div class="progbars">
                        <span class="perc-bar">
                            <p><b>HTML</b><b>60%</b></p>
                            <span class="bar">
                                <span class="percent percbar1"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>CSS</b><b>30%</b></p>
                            <span class="bar">
                                <span class="percent percbar2"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>BOOTSTRAP</b><b>0%</b></p>
                            <span class="bar">
                                <span class="percent percbar3"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>JAVASCRIPT</b><b>20%</b></p>
                            <span class="bar">
                                <span class="percent percbar4"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>PHP</b><b>20%</b></p>
                            <span class="bar">
                                <span class="percent percbar5"></span>
                            </span>
                        </span>
                    </div>
                </span>
            </div>
            <br><br>
            <div class="profmem-1" id="profmem-toralde">
                <img class="profiles-img" src="../assets/formalPic/toralde.jpg" alt="">
                <h4 class="profiles-fn">John Bryan Toralde</h4>
                <a title="Redirect into account-link-Toralde" href="#accountslinks"><div class="btn-style-default profiles-link lta-btn">LINK TO ACCOUNT</div></a>
                <p class="profiles-desc">
                    My birthday was 14th of April, year 2004 and I'm currently <span id="age-toralde">.</span> years old.
                    I am John Bryan G. toralde 20 years old from sucat Muntinlupa City 
                    a 3rd year regular student. A student that want to know more about 
                    programming and technologies. I am a photographer in kultura teknika 
                    taking a unique pictures is my passion and my hobby and last I want 
                    to experience new things and challenges especially in programming.
                </p>
                <span  class="prog-fami-4">
                    <div class="progbars">
                        <span class="perc-bar">
                            <p><b>HTML</b><b>70%</b></p>
                            <span class="bar">
                                <span class="percent percbar1"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>CSS</b><b>35%</b></p>
                            <span class="bar">
                                <span class="percent percbar2"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>BOOTSTRAP</b><b>0%</b></p>
                            <span class="bar">
                                <span class="percent percbar3"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>JAVASCRIPT</b><b>15%</b></p>
                            <span class="bar">
                                <span class="percent percbar4"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>PHP</b><b>20%</b></p>
                            <span class="bar">
                                <span class="percent percbar5"></span>
                            </span>
                        </span>
                    </div>
                </span>
            </div>
            <br><br>
            <div class="profmem-1" id="profmem-camacho">
                <img class="profiles-img" src="../assets/formalPic/camacho.jpg" alt="">
                <h4 class="profiles-fn">Ronel Camacho</h4>
                <a title="Redirect into account-link-Camacho" href="#accountslinks"><div class="btn-style-default profiles-link lta-btn">LINK TO ACCOUNT</div></a>
                <p class="profiles-desc">
                    My birthday was DAYth of MONTH, year YEAR and I'm currently <span id="age-camacho">.</span> years old.
                    I am Ronel Camacho studying in the Pamantasang Lungsod 
                    Muntinlupa, my passion is to play basketball and play online games 
                    like mobile legends.
                </p><br><br><br> 
                <span  class="prog-fami-5">
                    <div class="progbars">
                        <span class="perc-bar">
                            <p><b>HTML</b><b>50%</b></p>
                            <span class="bar">
                                <span class="percent percbar1"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>CSS</b><b>20%</b></p>
                            <span class="bar">
                                <span class="percent percbar2"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>BOOTSTRAP</b><b>0%</b></p>
                            <span class="bar">
                                <span class="percent percbar3"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>JAVASCRIPT</b><b>15%</b></p>
                            <span class="bar">
                                <span class="percent percbar4"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>PHP</b><b>15%</b></p>
                            <span class="bar">
                                <span class="percent percbar5"></span>
                            </span>
                        </span>
                    </div>
                </span>
            </div>
            <br><br>
            <div class="profmem-1" id="profmem-loquinte">
                <img class="profiles-img" src="../assets/formalPic/loquinte.jfif" alt="">
                <h4 class="profiles-fn">John Lawrence Loquinte</h4>
                <a title="Redirect into account-link-Loquinte" href="#accountslinks"><div class="btn-style-default profiles-link lta-btn">LINK TO ACCOUNT</div></a>
                <p class="profiles-desc">
                    My birthday was DAYth of MONTH, year YEAR and I'm currently <span id="age-loquinte">.</span> years old.
                    My name is John Lawrence C  Loquinte, I currently live in Biazon Ville 
                    Poblacion Muntinlupa City, my hometown is in abuyog leyte. I am interested 
                    in mobile games and I play basketball sometimes. I work often to have 
                    extra money for my needs.
                </p><br><br><br> 
                <span  class="prog-fami-6">
                    <div class="progbars">
                        <span class="perc-bar">
                            <p><b>HTML</b><b>50%</b></p>
                            <span class="bar">
                                <span class="percent percbar1"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>CSS</b><b>20%</b></p>
                            <span class="bar">
                                <span class="percent percbar2"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>BOOTSTRAP</b><b>0%</b></p>
                            <span class="bar">
                                <span class="percent percbar3"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>JAVASCRIPT</b><b>15%</b></p>
                            <span class="bar">
                                <span class="percent percbar4"></span>
                            </span>
                        </span>
                        <span class="perc-bar">
                            <p><b>PHP</b><b>15%</b></p>
                            <span class="bar">
                                <span class="percent percbar5"></span>
                            </span>
                        </span>
                    </div>
                </span>
            </div>
            <br><br>
        </div>

        <!--Dito yung division para sa Accounts-->
        <div class="accountslinks spce" id="accountslinks">
            <h1><b>ACCOUNTS:</b></h1>
            <div class="carousel-padding-for-navbtns">
                <div class="carousel">
                    <div class="carousel__item carousel__item--selected">
                        <div class="row row1">
                            <!---->
                            <div class="column rightborder" id="accountslink-cabrera">
                                <h2>Mark Alexis Jaudian Cabrera</h2>
                                <p>
                                    <a title="GITHUB-account-link-Cabrera" href="https://github.com/MarkAlexisJaudianCabrera" class="btn-style-default accountslink-btn-styles">GITHUB</a><br><br>
                                    <a title="COURSERA-account-link-Cabrera" href="https://www.coursera.org/user/5cb284fb5b0b4602712261dd4a4e0e14" class="btn-style-default accountslink-btn-styles">COURSERA</a><br><br>
                                    <a title="UDEMY-account-link-Cabrera" href="https://www.udemy.com/user/mark-alexis-jaudian-cabrera/" class="btn-style-default accountslink-btn-styles"> GREAT LEARNING/UDEMY</a><br><br>
                                    <a title="LINKEDIN-account-link-Cabrera" href="https://www.linkedin.com/in/mark-alexis-cabrera-50007a282/" class="btn-style-default accountslink-btn-styles">LINKEDIN</a><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <div class="row row1">
                            <!---->
                            <div class="column rightborder" id="accountslink-cabrera">
                                <h2>Eliazer Eruse Rabago Batul</h2>
                                <p>
                                    <a title="GITHUB-account-link-Batul" href="https://github.com/Russsssan" class="btn-style-default accountslink-btn-styles">GITHUB</a><br><br>
                                    <a title="COURSERA-account-link-Batul" href="https://www.coursera.org/user/149aa3d16c5f8e3ff5ecd99a28757ce2" class="btn-style-default accountslink-btn-styles">COURSERA</a><br><br>
                                    <a title="UDEMY-account-link-Batul" href="https://www.udemy.com/user/eliazer-eruse-batul/" class="btn-style-default accountslink-btn-styles"> GREAT LEARNING/UDEMY</a><br><br>
                                    <a title="LINKEDIN-account-link-Batul" href="https://ph.linkedin.com/in/eruse-batul-554037323" class="btn-style-default accountslink-btn-styles">LINKEDIN</a><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <div class="row row1">
                            <!---->
                            <div class="column rightborder" id="accountslink-cabrera">
                                <h2>Karyll Anne Leoveras</h2>
                                <p>
                                    <a title="GITHUB-account-link-Leoveras" href="https://github.com/Leoveraskaryllanne" class="btn-style-default accountslink-btn-styles">GITHUB</a><br><br>
                                    <a title="COURSERA-account-link-Leoveras" href="https://www.coursera.org/user/db26bc88c86f4cd159e16cc770819506" class="btn-style-default accountslink-btn-styles">COURSERA</a><br><br>
                                    <a title="UDEMY-account-link-Leoveras" href="https://www.udemy.com/user/karyll-anne-leoveras/" class="btn-style-default accountslink-btn-styles"> GREAT LEARNING/UDEMY</a><br><br>
                                    <a title="LINKEDIN-account-link-Leoveras" href="https://ph.linkedin.com/in/karyll-anne-leoveras-1889a8322" class="btn-style-default accountslink-btn-styles">LINKEDIN</a><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <div class="row row1">
                            <!---->
                            <div class="column rightborder" id="accountslink-cabrera">
                                <h2>John Bryan Toralde</h2>
                                <p>
                                    <a title="GITHUB-account-link-Toralde" href="https://github.com/Bryan-toralde" class="btn-style-default accountslink-btn-styles">GITHUB</a><br><br>
                                    <a title="COURSERA-account-link-Toralde" href="https://www.coursera.org/user/b8da74546d431b741f5cbcd4e8a38a8b" class="btn-style-default accountslink-btn-styles">COURSERA</a><br><br>
                                    <a title="UDEMY-account-link-Toralde" href="https://www.udemy.com/user/john-bryan-toralde/" class="btn-style-default accountslink-btn-styles"> GREAT LEARNING/UDEMY</a><br><br>
                                    <a title="LINKEDIN-account-link-Toralde" href="https://www.linkedin.com/in/john-bryan-toralde-bb9049323" class="btn-style-default accountslink-btn-styles">LINKEDIN</a><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <div class="row row1">
                            <!---->
                            <div class="column rightborder" id="accountslink-cabrera">
                                <h2>Ronel Camacho</h2>
                                <p>
                                    <a title="GITHUB-account-link-Camacho" href="https://github.com/Nelnel0520" class="btn-style-default accountslink-btn-styles">GITHUB</a><br><br>
                                    <a title="COURSERA-account-link-Camacho" href="https://www.coursera.org/user/4df5e8f3c43589f3ca10195df5ad3b2b" class="btn-style-default accountslink-btn-styles">COURSERA</a><br><br>
                                    <a title="UDEMY-account-link-Camacho" href="https://www.udemy.com/user/ronel-camacho/" class="btn-style-default accountslink-btn-styles"> GREAT LEARNING/UDEMY</a><br><br>
                                    <a title="LINKEDIN-account-link-Camacho" href="https://www.linkedin.com/in/ronel-camacho-894062323" class="btn-style-default accountslink-btn-styles">LINKEDIN</a><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__item">
                        <div class="row row1">
                            <!---->
                            <div class="column rightborder" id="accountslink-cabrera">
                                <h2>John Lawrence Loquinte</h2>
                                <p>
                                    <a title="GITHUB-account-link-Loquinte" href="https://github.com/lawrenceeee2002" class="btn-style-default accountslink-btn-styles">GITHUB</a><br><br>
                                    <a title="COURSERA-account-link-Loquinte" href="https://www.coursera.org/user/cf72e77ee65a117791f0a6d2a5c31651" class="btn-style-default accountslink-btn-styles">COURSERA</a><br><br>
                                    <a title="UDEMY-account-link-Loquinte" href="https://www.udemy.com/user/john-lawrence-loquinte/" class="btn-style-default accountslink-btn-styles"> GREAT LEARNING/UDEMY</a><br><br>
                                    <a title="LINKEDIN-account-link-Loquinte" href="https://www.linkedin.com/in/john-lawrence-loquinte-b3b39b323" class="btn-style-default accountslink-btn-styles">LINKEDIN</a><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Dito yung division para sa About-->
        <div class="about spce" id="about">
            <h1><b>ABOUTS:</b></h1>
            <br>
            <h2><b>GROUP 9 - IT3H</b></h2>
            <p>
                A group of students from the University of the City of Muntinlupa 
                from the College of Information Technology & Computer Studies 
                (CITCS). That are willing to learn and to innovate future ideas 
                that will help society.
                <br><br> 
            </p>
            <img class="citcs-logo-1" src="https://plmun.edu.ph/assets/images/collegelogo/citcs-logo.png" alt="">
            <img class="plmun-logo-1" src="https://plmun.edu.ph/student-portal//shared/images/plmun-logo-1.png" alt="">
        </div>
    </div>

     <!--Dito yung division para sa Footer-->
     <div class="footerr">
        <br>
        <hr id="hr-styles">
        All Rights Reserved 2024.
    </div>

    <!-- Automated Age JS--> 
    <!-- PART OF CABRERA -->
     <?php
        $phpBdCabrera = "2003-10-30";
        $phpBdBatul = "2004-1-18";
        $phpBdLeoveras = "2002-9-2";
        $phpBdToralde = "2004-4-14";
        $phpBdCamacho = "2002-00-00";
        $phpBdLoquinte = "2002-00-00";
     ?>

    <!-- ALL INITIALIZED FOR AUTOMATED AGE -->
    <script>
        //CURRENT DATE
        var dt = new Date();

        //Value for CABRERA
        var phpBdCabrera = "<?php echo $phpBdCabrera; ?>";
        var CabParts = phpBdCabrera.split('-');
        var bdCabrera = new Date(CabParts[0], CabParts[1] - 1, CabParts[2]);

        //Value for BATUL
        var phpBdBatul = "<?php echo $phpBdBatul; ?>";
        var BatParts = phpBdBatul.split('-');
        var bdBatul = new Date(BatParts[0], BatParts[1] - 1, BatParts[2]);

        //Value for LEOVERAS
        var phpBdLeoveras = "<?php echo $phpBdLeoveras; ?>";
        var LeoParts = phpBdLeoveras.split('-');
        var bdLeoveras = new Date(LeoParts[0], LeoParts[1] - 1, LeoParts[2]);

        //Value for TORALDE
        var phpBdToralde = "<?php echo $phpBdToralde; ?>";
        var TorParts = phpBdToralde.split('-');
        var bdToralde = new Date(TorParts[0], TorParts[1] - 1, TorParts[2]);

        //Value for CAMACHO
        var phpBdCamacho = "<?php echo $phpBdCamacho; ?>";
        var CamParts = phpBdCamacho.split('-');
        var bdCamacho = new Date(CamParts[0], CamParts[1] - 1, CamParts[2]);

        //Value for LOQUINTE
        var phpBdLoquinte = "<?php echo $phpBdLoquinte; ?>";
        var LoqParts = phpBdLoquinte.split('-');
        var bdLoquinte = new Date(LoqParts[0], LoqParts[1] - 1, LoqParts[2]);
    </script>

    <!-- PART OF BATUL -->


   <script>
        //var bdCabrera =  new Date("2003-10-30");
        //var dt = new Date();
        var ageCabrera = dt.getFullYear()  -  bdCabrera.getFullYear();
        var monthGap =  dt.getMonth() - bdCabrera.getMonth();
        if (monthGap < 0 || (monthGap === 0 && dt.getDate() < bdCabrera.getDate()))  {
            ageCabrera--;
        }
        document.getElementById('age-cabrera').innerHTML = ageCabrera;
    </script>

    <script>  
        //var bdBatul = new Date("2004-1-18");
        //var dt = new Date();
        var ageBatul = dt.getFullYear() - bdBatul.getFullYear();
        var monthGap = dt.getMonth() - bdBatul.getMonth();
        if (monthGap < 0 || (monthGap === 0 && dt.getDate() < bdBatul.getDate()))  {
            ageBatul--;
        }
        document.getElementById('age-batul').innerHTML = ageBatul;
    </script>

    <script>  
        //var bdLeoveras =  new Date("2002-9-2");
        //var dt = new Date();
        var ageLeoveras = dt.getFullYear()  -  bdLeoveras.getFullYear();
        var monthGap =  dt.getMonth() - bdLeoveras.getMonth();
        if (monthGap < 0 || (monthGap === 0 && dt.getDate() < bdLeoveras.getDate()))  {
            ageLeoveras--;
        }
        document.getElementById('age-leoveras').innerHTML = ageLeoveras;
    </script>

    <script>  
        //var bdToralde =  new Date("2004-4-14");
        //var dt = new Date();
        var ageToralde = dt.getFullYear()  -  bdToralde.getFullYear();
        var monthGap =  dt.getMonth() - bdToralde.getMonth();
        if (monthGap < 0 || (monthGap === 0 && dt.getDate() < bdToralde.getDate()))  {
            ageToralde--;
        }
        document.getElementById('age-toralde').innerHTML = ageToralde;
    </script>

    <script>  
        //var bdCamacho =  new Date("YYYY-MM-DD");
        //var dt = new Date();
        var ageCamacho = dt.getFullYear()  -  bdCamacho.getFullYear();
        var monthGap =  dt.getMonth() - bdCamacho.getMonth();
        if (monthGap < 0 || (monthGap === 0 && dt.getDate() < bdCamacho.getDate()))  {
            ageCamacho--;
        }
        document.getElementById('age-camacho').innerHTML = ageCamacho;
    </script>

    <script>  
        //var bdLoquinte =  new Date("YYYY-MM-DD");
        //var dt = new Date();
        var ageLoquinte = dt.getFullYear()  -  bdLoquinte.getFullYear();
        var monthGap =  dt.getMonth() - bdLoquinte.getMonth();
        if (monthGap < 0 || (monthGap === 0 && dt.getDate() < bdLoquinte.getDate()))  {
            ageLoquinte--;
        }
        document.getElementById('age-loquinte').innerHTML = ageLoquinte;
    </script>
    
</body>
</html>

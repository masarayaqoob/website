<?
require_once('Connections/conn.php'); 
require_once('vc_app/config.php');
<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>Nineveh Peace and Reconciliation Working Group</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/font-awesome.min.css">
    
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/bootstrap.min.css">
    
    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/fontawesome-stars-o.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/style.css">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/responsive-style.css">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/colors/theme-color-2.css" id="changeColorScheme">

    <!-- ==== RTL Stylesheets ==== -->
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/font-awesome.css">
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/style.css">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="<? echo $style_dir; ?>css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body dir='ltr'>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section header--style-1">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-2">
                <div class="container">
                    <div class="float--left float--xs-none text-xs-center">
                        <!-- Header Topbar Info Start -->
                        <ul class="header--topbar-info nav">
                            <center>
                            


 </center>

                        </ul>
                        <!-- Header Topbar Info End -->
                    </div>

                    <div class="float--right float--xs-none text-xs-center">
                        <!-- Header Topbar Action Start -->
                        
                        <!-- Header Topbar Action End -->
                        
                        <!-- Header Topbar Language Start -->
                        
                        <!-- Header Topbar Language End -->

                        <!-- Header Topbar Social Start -->
                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                            <li><a href="https://www.facebook.com/جمعية-التحرير-للتنمية-916269461747078/"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                        <!-- Header Topbar Social End -->
                    </div>
                </div> 
            </div>
            <!-- Header Topbar End -->

            <!-- Header Mainbar Start -->
            <div class="header--mainbar" style="padding:10px; /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,f3f3f3+50,ededed+51,ffffff+100;White+Gloss+%232 */
background: rgb(255,255,255); /* Old browsers */
background: -moz-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(243,243,243,1) 50%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg, rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg, rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */">
                <div class="container">
                    <!-- Header Logo Start -->
                    <div class="col-lg-4 hidden-xs">
                        
                    </div>
                    
                    <div class="col-lg-4 hidden-xs  text-center" >
                        <h1 class="h1">
                            <a href="#" class="btn-link">
                                <img src="<? echo $style_dir; ?>img/prwg.png" style="padding-top:10px;  mix-blend-mode: multiply;" width="130" alt="logo">
                            </a>
                        </h1>
                    </div>
                    
                    <div class="col-lg-4 hidden-xs  text-center"  style="display:none">
                        
                    </div>
                    
                    
                    <div class="col-lg-12 text-center" style="font-size:26px; line-height:28px; color:#007380; ">
         Nineveh Peace and Reconciliation Working Group

                    <br>
                    
                    <!-- Header Logo End -->

                    <!-- Header Ad Start -->
                   
                    <!-- Header Ad End -->
                </div>
            </div>
            <!-- Header Mainbar End -->

            <!-- Header Navbar Start -->
            
            <!-- Header Navbar End -->
        </header>
        
        <? 
        $query_sin = "SELECT * from prwg_data  ";
        $sin = mysqli_query($prog,$query_sin) or die(mysql_error());
        $row_sin = $sin->fetch_assoc();
        $totalRows_sin = $sin->num_rows;
        
        ?>
        <h4 style='text-align:center'> MONTHLY COORDINATION MEETING
        <br>
<? echo // $datetime=$row_sin['datetime'];
 ?>
<br>
<? echo //$location=$row_sin['location'];
 ?></h4>

<?
if(isset($_POST['save_data']))
{
  $name= addslashes(htmlspecialchars($_POST['name']));
  $org= addslashes(htmlspecialchars($_POST['org']));
  $pos= addslashes(htmlspecialchars($_POST['pos']));
  $phone= addslashes(htmlspecialchars($_POST['phone']));
  $email= addslashes(htmlspecialchars($_POST['email']));
  $gender= addslashes(htmlspecialchars($_POST['gender']));
  $method= addslashes(htmlspecialchars($_POST['method']));
  
  $code = substr(md5(uniqid(mt_rand(), true)) , 0, 8);

  
  $insertSQL = sprintf("INSERT INTO apply_prwg (name,org,pos,phone,email,gender,method,month)
  VALUES ('$name','$org','$pos','$phone','$email','$gender','$method','3')");
  $Result1 = mysqli_query($prog, $insertSQL) or die(mysql_error());
  if($Result1)
  {
      

  }
  
  $number=$row_sin['id'];
  
  $link='https://altahreer.org/apply/'.$number.'/'.$code;


$to = $email;
$subject = "Confirmation of your registration";
$txt = "<html><body><meta charset='utf-8'>
Dear PRWG Member,
<br>
Thank you for registering to attend the PRWG Monthly Coordination Meeting, This email is to confirm your registration.
<br>
We are looking forward to seeing you there.
<br>
<br>
Sincerely,
<br>
<br>
Secretariat
<br>
<br>
PRWG  
<br>
Thank you </a></body></html>";

$headers = "From: secretariat@prwg.info \r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
//$headers .= "CC: omar_it@altahreer.org\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

mail($to,$subject,$txt,$headers);


$ok=1;
}


?>
        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
        
            
            <div class="container">
                <!-- Main Content Start -->
                <div class="main--content">
                    <? if($ok==1) { ?>
                        <br />
                        <div style="font-size:26px" class="alert alert-info">Thank you for confirming your attendance</div>
                        <br />
                        
                        <br /><br /><br /><br /><br />

                    <? } else { ?>
                <form action="http://prwg.info/forms/prwg/" method="post" onsubmit="return confirm('Confirm ?');">
                    <input name="save_data" type="hidden" value="1">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-1">
                        <div class="row gutter--15">
                        <br />
                            <div class="col-md-12" style="padding-top:12px; font-size:18px; color:#000">
                                <div class="col-lg-12" style="padding:10px; font-size:24px; color:#000; margin-bottom:10px; border-bottom:1px solid #247d18;"><i class="fa fa-info-circle">&nbsp;&nbsp;</i>Confirmation of Attendance</div>
                                
                                <div class="row">
                                    <div class="col-lg-1 text-left"></div>
                                    <div class="col-lg-5">
                                    Full Name
                                    <input type="text" name="name" required class="form-control" style="border:1px solid #666; background-color:#fff" />
                                    </div>
                            
                                    <div class="col-lg-1  text-left"></div>
                                    <div class="col-lg-5">
                                    Gender
                                    <select name="gender" required class="form-control" style="border:1px solid #666; background-color:#fff">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1 text-left"></div>
                                    <div class="col-lg-5">
                                    <br>
                                    Organization
                                    <input type="text" name="org" required class="form-control" style="border:1px solid #666; background-color:#fff" />
                                    </div>
                                    <div class="col-lg-1  text-left"></div>
                                    <div class="col-lg-5">
                                    <br>
                                    Position
                                    <input type="text" name="pos" required class="form-control" style="border:1px solid #666; background-color:#fff" />
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-1 text-left"></div>
                                    <div class="col-lg-5">
                                    <br>
                                    Telephone Number
                                    <input type="number" name="phone" required class="form-control" style="border:1px solid #666; background-color:#fff" />
                                    </div>
                                    <div class="col-lg-1  text-left"></div>
                                    <div class="col-lg-5">
                                    <br>
                                    Email
                                    <input type="email" name="email" required class="form-control" style="border:1px solid #666; background-color:#fff" />
                                    </div>
                                </div>
                                
                                
                                <div class="row" style="display:none">
                                    <div class="col-lg-1 text-left"></div>
                                    <div class="col-lg-5">
                                    <br>
                                    Will you participate in this meeting in-person or online?
                                    <select name="method" required class="form-control" style="border:1px solid #666; background-color:#fff">
                                        <option>In-person</option>
                                        <option>Online</option>
                                    </select>
                                    </div>
                                    <div class="col-lg-1  text-left"></div>
                                    <div class="col-lg-6">
                                    <br>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                    <br /><br />
                                    <button type="submit" style="height:50px; width:150px;"  class="btn btn-lg btn-info">Register</button>
                                    </div>
                                </div>


                                
                        </div>
                    </div>
                    <!-- Post Items End -->
                    </div>
                </div>
                <!-- Main Content End -->
                    </form>
                    <? } ?>
                            </div>
                        </div>    
                    </div>
                    <!-- Main Content End -->
                    
                    
                    <!-- Modal -->


                </div>

                <!-- Main Content Start -->
                
            </div>
        </div>
        <!-- Main Content Section End -->

        <!-- Footer Section Start -->
        <footer class="footer--section">
            <!-- Footer Widgets Start -->
            

            <!-- Footer Copyright Start -->
            <div class="footer--copyright bg--color-2">
                <div class="social--bg bg--color-2"></div>

                <div class="container">

                    <ul class="nav social float--right">
                        
                    </ul>

                    <ul class="nav links float--right">
                        
                    </ul>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

   

    <!-- Back To Top Button Start -->
    
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="<? echo $style_dir; ?>js/jquery-3.2.1.min.js"></script>

    <!-- ==== Bootstrap Framework ==== -->
    <script src="<? echo $style_dir; ?>js/bootstrap.min.js"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/jquery.sticky.min.js"></script>

    <!-- ==== HoverIntent Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/jquery.hoverIntent.min.js"></script>

    <!-- ==== Marquee Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/jquery.marquee.min.js"></script>

    <!-- ==== Validation Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/jquery.validate.min.js"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/isotope.min.js"></script>

    <!-- ==== Resize Sensor Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/resizesensor.min.js"></script>

    <!-- ==== Sticky Sidebar Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/theia-sticky-sidebar.min.js"></script>

    <!-- ==== Zoom Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/jquery.zoom.min.js"></script>

    <!-- ==== Bar Rating Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/jquery.barrating.min.js"></script>

    <!-- ==== Countdown Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/jquery.countdown.min.js"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="<? echo $style_dir; ?>js/retina.min.js"></script>

    <!-- ==== Google Map API ==== -->

    <!-- ==== Main JavaScript ==== -->
    <script src="<? echo $style_dir; ?>js/main.js"></script>

</body>
</html>

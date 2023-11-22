<!--
                        Powered by @TW Solutions
Copyright © 2022 Ceylon Fiberio Manufacturing PVT Ltd. All Rights Reserved.	

 *Title  			:   Ceylon Fiberio Manufacturing (PVT)Ltd.
 *File Type 		:   PHP
 *Title             :   About Us Page

 *Descrption        :	Website for Ceylon Fiberio Manufacturing (PVT)Ltd.
 *Coded by          :	Thanuja Wickramanayaka
 *Subject           :	ITM 2233 - Web Application Development
 *Reg.Number        :	MGT/2019/401
 *Index Number      :   MGT/5701
 *Date of creation  :	27.09.2022

-->


<!DOCTYPE html>
<html>

    <head>
        <meta name ="viewport" content="with=device-width , initial-scale=1.0">
        <link rel="stylesheet" href=" css/about_us.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/whatsappstyle.css">
        
        <title>
            Ceylon Fiberio | About Us
        </title>
    </head>

<body>



<!--Logo & Navigation Bar-->
    <section class="sub_header">
        
        <nav>
            <a href="about.php"><img src="images/logo/logo-tr.png" alt="image"></a>

                <div class="navbar_links" id="navLinks">  
                    <i  class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                            </svg> &nbsp;   Home    </a>
                        </li>

                        <li><a href="about.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                            </svg> &nbsp;   About Us    </a>
                        </li>
                    
                        <li><a href="products.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg> &nbsp;   Our Products    </a>
                        </li>
                        
                        <li><a href="gallery.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                            </svg> &nbsp;   Gallery     </a>
                        </li>

                        <li><a href="buynow - Login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg> &nbsp;   Buy Now     </a>
                        </li>

                        <li><a href="careers.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                            </svg> &nbsp;   Careers     </a>
                        </li>

                        <li><a href="contact_us.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                            </svg> &nbsp;   Contact Us  </a>
                        </li>   
                    </ul> 
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>

                <h1 class="us-abt">     About Us     </h1> 
        
    </section>


    
<!--Search Bar-->
    <div class="row">
        <div class="col-md-12">
            <div class="search">
                <input type="text" class="input" placeholder="What are you looking for ?">
                    <div class="searchbtn">
                    <a href="about.php" class="search_btn"> <i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>

    <section class="bac">

<!--Starting Paragraph-->
    <section class="about-Us">
        <div class="row">
            
            <div class="col-md-6">
                <h2>    Ceylon Fiberio Us...    </h2>
                <p >    Ceylon Fiberio is one of the leading suppliers of coconut fibre products in Sri Lanka. 
                        We are a company situated in coconut triangle in Sri Lanka engaged in suppling coconut and 
                        various coconut fibre related materials with high-quality standards. 
                        We deal with more than 50 companies, spread across all over in Sri Lanka.
                </p>
                <a href="journey.php" class="exp_btn">     EXPLORE NOW     </a>
            </div>

            <div class="col-md-6">
                <img src="images/roundimg.png" alt="image">
            </div>
            
        </div>
    </section>



<!--Vision Mission Values Section-->
    <h1>    What We Do?    </h1> <br>

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="main">
                        <div class="about_VMV">
                            <div class="about_VMV-logo">
                                <img src="images/icons/vision.png" alt="image">
                                    </div>
                                    <h4>    Our Vision     </h4>
                                    <p>     To be known as the leading manufacturer of coir products in Sri Lanka, 
                                            offering our clients genuine products with the best quality. <br><br><br><br>
                                    </p>
                                </div>
                            <div class="shadow_One"></div>
                        <div class="shadow_Two"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main">
                        <div class="about_VMV">
                            <div class="about_VMV-logo">
                                <img src="images/icons/mission.png" alt="image">
                                    </div>
                                    <h4>    Our Mission    </h4>
                                    <p>     We pledge to offer the highest customer service while retaining the best quality coir products through 
                                            guaranteed on-time and transparent transactions.Also, we work diligently to uphold "quality" as our 
                                            first goal while being fair and honest.
                                        
                                    </p>
                                </div>
                            <div class="shadow_One"></div>
                        <div class="shadow_Two"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main">
                        <div class="about_VMV">
                            <div class="about_VMV-logo">
                                <img src="images/icons/values.png" alt="image">
                                    </div>
                                    <h4> Our Values</h4>
                                    <p> Legendary figures who are professionally innovative. Timely team management and accountability. 
                                        We use environmentally friendly production techniques to guarantee the quality and safety of our products. <br><br>
                                    </p>
                                </div>
                            <div class="shadow_One"></div>
                        <div class="shadow_Two"></div>
                    </div>
                </div>

            </div>
        </div>



<!--Our Staff-->

    <section class="staff">
       
        <div class="slide-container swiper">
            
            <h1 class="st-heading">     Our Management     </h1> 
            <div class="para" >
                <p>
                    We at Ceylon Fiberio have perfected a recipe for success using two essential components: the highest-quality coir goods, 
                    and a team of enthusiastic, committed individuals ready to share our priceless creations with everyone. 
                    At Ceylon Fiberio, we promote empowerment and support both professional and personal growth in a serene 
                    work atmosphere so that as our company expands, so does our team.

                </p>
                <br><br><br><br>
            </div>
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="images/people/Finance Officer.jpg" alt="" class="card-img">
                                    </div>
                                </div>
            
                            <div class="card-content">
                                <h2 class="name">   Sudarshana Botheju  </h2>
                                    <h3 class="name"><i>    Finance Manager     </i></h3>
                                        <p class="description">
                                            Get to Know Us Better...  Contact Us For More Details.
                                        </p>
                                <a href="contact_us.php"> <button class="button">     View More       </button></a>
                            </div>
                        </div>
                        
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="images/people/Manager.jpg" alt="" class="card-img">
                                    </div>
                                </div>
            
                            <div class="card-content">
                                <h2 class="name">   Nisitha Manchanayaka    </h2>
                                    <h3 class="name"><i>    Factory Manager     </i></h3>
                                        <p class="description">
                                            Get to Know Us Better...  Contact Us For More Details.
                                        </p>
                                <a href="contact_us.php"> <button class="button">     View More       </button></a>
                            </div>
                        </div>
        
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="images/people/HR Manager.jpg" alt="" class="card-img">
                                    </div>
                                </div>
            
                            <div class="card-content">
                                <h2 class="name">   Suneetha Jayathilaka    </h2>
                                    <h3 class="name"><i>    HR Manager      </i></h3>
                                        <p class="description">
                                            Get to Know Us Better...  Contact Us For More Details.
                                        </p>
                                <a href="contact_us.php"> <button class="button">     View More       </button></a>
                            </div>
                        </div>
        
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="images/people/Accountant.jpg" alt="" class="card-img">
                                    </div>
                                </div>
            
                            <div class="card-content">
                                <h2 class="name">   Sachin Wijesinghe   </h2>
                                    <h3 class="name"><i>    Accountant      </i></h3>
                                        <p class="description">
                                            Get to Know Us Better...  Contact Us For More Details.
                                        </p>
                                <a href="contact_us.php"> <button class="button">     View More     </button></a>
                            </div>
                        </div>
        
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="images/people/Marketing Manager.jpg" alt="" class="card-img">
                                    </div>
                                </div>
            
                            <div class="card-content">
                                <h2 class="name">   Nishan Chathuranga      </h2>
                                    <h3 class="name"><i>    Marketing Manager   </i></h3>
                                        <p class="description">
                                            Get to Know Us Better...  Contact Us For More Details.
                                        </p>
                                <a href="contact_us.php"> <button class="button">     View More      </button></a>
                            </div>
                        </div>
        
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="images/people/Production Manager.jpg" alt="" class="card-img">
                                    </div>
                                </div>
            
                            <div class="card-content">
                                <h2 class="name">   Chandrakumara Banneheka     </h2>
                                    <h3 class="name"><i>    Production Manager  </i></h3>
                                        <p class="description">
                                            Get to Know Us Better...  Contact Us For More Details.
                                        </p>
                                <a href="contact_us.php"> <button class="button">     View More      </button></a>
                            </div>
                        </div>
        
                    </div>
                </div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
        </div>
    </section>
        
   

<!--Why Ceylon Fiberio?-->

    <section class="why_CF">
        <div class="container">
            <div class="left">
                <img src="images/4iimg.jpg" alt="">
            </div>
                <div class="right">
                    <div class="content">
                         <h1 class="wH1">    Why Ceylon Fiberio?    </h1>
                            <p >    With years of knowledge and experience invested in our products and processes, what differentiates us from the rest is 
                                    our ability to utilize accurate production methods as well as traditional know-how, towards consistently superior products.<br><br>
                                    We also take pride in letting our customers know that by choosing Ceylon Fiberio as their material and product supplier, 
                                    they are making a positive social impact: empowering local jobless rural people to build sustainable livelihoods and 
                                    creating job opportunities.
                            </p>
                            <a href="#" class="seeM-btn">   See More..    </a>
                    </div>
                </div>
            </div>
    </section>



<!--Glowing Text Button-->
    <section class="glowbtn">   <br>
        <div class="row">
            <div class="col-md-3">  </div>
                <div class="col-md-9">
                    <a class="gbutton" href="careers.php">     Join With Us  </a>
                        </div>
                    </div>
                <div>
            <img class="message" src="images/icons/msg.png" alt="message"> 
        </div>
    </section>
    <br><br>

</section>

<!-- Whatsapp Button -->
    <div class="whatsapp-btn-container">
            <a class="whatsapp-btn" href="https://wa.me/+94379245957"><i class="fa fa-whatsapp" style='font-size:60px;'></i></a>
            <span>  Contact Us  </span>
    </div>

    
<!--Footer-->
<section class="footer">
    <div class="container">

        <div class="c_row">
            <div class="footer-col">
                <h4>    Company     </h4>
                <ul>
                    <li><a href="about.php">       About Us        </a></li>
                    <li><a href="products.php">    Our Products    </a></li>
                    <li><a href="gallery.php">     Gallery         </a></li>
                    <li><a href="buynow.php">      Outlet          </a></li>
                    <li><a href="contact_us.php">   Privacy Policy  </a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>    Get Help    </h4>
                <ul>
                    <li><a href="#">    FAQ             </a></li>
                    <li><a href="#">    Delivery        </a></li>
                    <li><a href="#">    Returns         </a></li>
                    <li><a href="#">    Order Status    </a></li>
                    <li><a href="#">    Payment Options </a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>    Online Shop     </h4>
                <ul>
                    <li><a href="products.php">    Bristle Fibre               </a></li>
                    <li><a href="products.php">    Coco Peat                   </a></li>
                    <li><a href="products.php">    Coir Fibre Bale             </a></li>
                    <li><a href="products.php">    Hop Twine                   </a></li>
                    <li><a href="products.php">    Machine Twisted Fibre-FMT   </a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>    Contact Us     </h4>
                    <p> Ceylon Fiberio Manufacturing PVT Ltd.   <br> 
                        No 567/2                                <br> 
                        Negambo Road                            <br> 
                        Kurunegala                              <br> 
                        +9437 924 5957
                    </p>
            </div>
        </div>

    </div>
    
    <a href="#" class="top_btn"><i class="fa fa-arrow-up" ></i>   To the Top  </a>



<!--Social Media Icons-->
    <div class="icons">

        <p>     Get to Know Us Better...  Follow Us On Social Media     <br> 
        <a href="https://www.facebook.com/">    <i class="fa fa-facebook-official"> </i></a>
        <a href="https://www.instagram.com/">   <i class="fa fa-instagram">         </i></a>
        <a href="https://twitter.com/?lang=en"> <i class="fa fa-twitter">           </i></a>
        <a href="https://www.youtube.com/">     <i class="fa fa-youtube-play">      </i></a>
        <a href="https://lk.linkedin.com/">     <i class="fa fa-linkedin">          </i></a>




<!--Copyrights & Powered by--> 
        </br>
            Powered by <a href="index.php" target="_blank" >       @TW Solutions   </a> </br>
            Copyrights 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
            </svg> 2022
            <a href="index.php" target="_blank" >  Ceylon Fiberio Manufacturing PVT Ltd.</a> All Rights Reserved.
              
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        </p>
    
    </div>

</section>





<!--Java Script Part-->
    <script type="text/javascript">
            
        /*Java Script For Toggle Menu*/
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right ="0";
        }
        function hideMenu(){
            navLinks.style.right ="-280px";    
        }

    </script>


</body>

<!--Java Script For Swiper-->
        <script src="js/swiper-bundle.min.js"></script>
<!--Javascript File-->
        <script src="js/script.js"></script>

</html>






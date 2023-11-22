<!--
                        Powered by @TW Solutions
Copyright © 2022 Ceylon Fiberio Manufacturing PVT Ltd. All Rights Reserved.	

 *Title  			:   Ceylon Fiberio Manufacturing (PVT)Ltd.
 *File Type 		:   PHP
 *Title             :   Index Page

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
        <link rel="stylesheet" href="index_style.css">
        <link rel="stylesheet" href="css/whatsappstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
                 
        <title>
            Ceylon Fiberio Manufacturing PVT Ltd. | Home
        </title>
    </head>

<body>



<!--Logo & Navigation Bar-->
<header>

    <nav>
        <a href="index.php"><img src="images/logo/logo-txt-wh-border.png" alt="image"></a>
            
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
                        </svg> &nbsp;   Buy Now    </a>
                    </li>

                    <li><a href="careers.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                        </svg> &nbsp;   Careers    </a>
                    </li>

                    <li><a href="contact_us.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                        </svg> &nbsp;   Contact Us      </a>
                    </li>
                </ul> 
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

    </nav>


</header>

   

<!--Text Animation for welcome -->  
    <h1 class="anima0"> WELCOME</h1>    

    <div class="text-box">
        <h1>        Sri Lanka's Number One Coir Manufacturer        </h1>
        <p>         Sri Lanka is well known for its naturally occurring cocos nucifera species. 
                    Everywhere on the island where the normal temperatures are typically tropical, 
                    the coconut grows luxuriantly. The natural thickness of the shell and the isotonic 
                    qualities of its liquid content have won over consumers and established a specialty market for the range of goods we deal in.
        </p> <br>
    
        <a href="about.php" class="visit_btn">     Visit Us To Know More       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </a>
    
    </div>
    
    

<!--Search Bar-->
    <div class="row">
        <div class="col-md-12">
            <div class="search">
                <input type="text" class="input" placeholder="What are you looking for ?">
                    <div class="searchbtn">
                    <a href="index.php" class="search_btn"> <i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>



<!-- Company Description & Greeting -->
    <section class="descr">
        <div class="row">
            <div class="col-md-12">
                <h2>        Welcome to Ceylon Fiberio Manufacturing PVT Ltd.        </h2>
                <p class="slog"><i>     ~Step into Light through Nature~        </i></p>
                <p>
                        Ceylon Fiberio is one of the leading suppliers of coconut fibre products in Sri Lanka. 
                        We are a company situated in coconut triangle in Sri Lanka engaged in suppling coconut and various coconut fibre related materials with high-quality standards. 
                        We deal with more than 50 companies, spread across all over in Sri Lanka.
                        With a special emphasis on Coir Fibre and Coco Peat, Ceylon Fiberio's Coir Products offers a wide range of products across the country. 
                        The best quality resources are selected, processed, and best products are delivered to our customers/vendors.
                </p>
            </div>
        </div>
    </section>



<!--Key Features of the Company-->
    <section class="key_features">
        <h1>Key Features Of Our Company</h1>
            <p> The crucial components necessary for our business to compete in our target markets are stated in these key features. 
                <br> In essence, it outlines what we must do in order to successfully accomplish the objectives set forth in Ceylon Fiberio's strategic strategy.
            </p>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature">
                                <h3>    Integrity   </h3>
                                    <p> Truthfulness, reliability, and treating others fairly and respectfully are all examples of having integrity. 
                                        Integrity is one of our greatest assets.It must not be compromised. We guarantee that we are trustworthy and 
                                        that we uphold high moral standards. In doing so, we provide our clients with high-quality, customized services.
                                    </p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="feature">
                                <h3>    Quality     </h3>
                                    <p> Selling and supporting products and services that satisfy customers, creating a climate conducive to work, 
                                        and producing financial results that meet earnings targets are just a few instances of how quality is demonstrated. 
                                        We can provide our consumers with high-quality products thanks to our diverse production capabilities.
                                    </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature">
                                <h3>    Commitment  </h3>
                                    <p> Since we are committed to always giving our shareholders and clients the best, that commitment is crucial. 
                                        We ought to treat the chance we have to serve as a privilege and not take it for granted. <br><br>
                                        In both good and bad situations, when obstacles stand in our way, it aids us in maintaining our goals.
                                    </p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature">
                                <h3>    Innovation  </h3>
                                    <p> Innovation means creating new ideas, designs and services that are highly marketable and increase 
                                        customer demand for Ceylon Fiberio Manufacturing PVT Ltd. We constantly encourage our employees to innovate things. 
                                        By way of that we can touch various aspects of the industry.
                                    </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature">
                                <h3>    Provenance  </h3>
                                    <p> Although coconuts are grown in all tropical regions of the world, Sri Lanka contributes for the lion's share of commercially produced coir. 
                                        Our coconuts sourced straight from Sri Lanka's Coconut Triangle, which is renowned around the world for having the best soil and climate for producing high quality coconuts.
                                    </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature">
                                <h3>    Fair & diverse  </h3>
                                    <p> For many people, especially women, the production of coir products is a source of employment. <br>
                                        Besides that, more than 50% of our workforce is made up of women and people with impairments, and 
                                        each of our employees makes at least 20% more than the national median income.
                                    </p>
                            </div>
                        </div>    
                    </div>
    </section>



<!--Have a look on Our Products-->
    <section class="products">
            <div class="row">
                <div class="col-md-5">
                    <div class="view_text">
                        <br> <br> <br> 
                        <h2 class="h_look1">    Have a look     </h2>
                        <p class="h_look2">     Ceylon Fiberio is always concerned about the high quality of its products and manufactures them to a high standard. <br><br> 
                                                Our products are manufactured using only quality materials found in different parts of the Coconut Triangle and are distributed in many parts of the country. 
                        <hr>
                        <br>
                        <a href="products.php" class="view_btn"><i class="fa fa-th"></i>   View Our Products   </a>
                    </div>
                </div>

                <div class="col-md-7">
                        <img src="images/coir.png" alt="coir products" onclick="onClick(this)">
                        </p>
                </div>
            </div>
    </section>
       


<!--Statistics Counterup-->
    <div class="counterup">
    <section class="statistics">
    
            <div class="wrapper">
                
                <div class="container">
                <i class="fa fa-user-plus"></i>
                <span class="num" data-val="10">000</span>
                <span class="text">     Partners    </span>
                </div>

                <div class="container">
                <i class="fa fa-folder"></i>
                <span class="num" data-val="25">000</span>
                <span class="text">     Projects Done   </span>
                </div>
                <div class="container">
                <i class="fa fa-users"></i>
                <span class="num" data-val="1000">000</span>
                <span class="text">     Happy Clients    </span>
                </div>
                <div class="container">
                <i class="fa fa-meetup"></i>
                <span class="num" data-val="80">000</span>
                <span class="text">     Meetings     </span>
                </div>

            </div>

    </section> 
    </div>



<!--What Our Clients Say-->
    <section class="testimonials">
        <h1>    What Our Clients Say...     </h1>
            <p> 
                As well as innovative quality products, a company's most valuable asset is its clients.Our happy clients are also a symbol of our strength at Ceylon Fiberio.
                Here's what they think about our products and services.
            </p>

                <div  class="row">
                    <div class="testimonial_col">
                        <img src="images/people/Manjula Ediriweera.jpg" alt="Client">
                            <div>
                                <p>     " Ceylon Fiberio is providing an excellent services not only for their employees but also its clients.
                                        We are very happy to deal with this company and we wish best of luck for a better future! "
                                </p>
                                    <h3>    Mr. Manjula Ediriweera  </h3>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                            </div>
                    </div>

                    <div class="testimonial_col">
                        <img src="images/people/Hansani Jayathilaka.jpg" alt="Client">
                            <div>
                                <p>     " A trustworthy company which keeps its word.  
                                        Do not have to have any fear to deal with.
                                        Transactions are done on time as promised and provides quality products. Best wishes to reach the success. "
                                </p>
                                    <h3>    Mrs. Hansani Jayathilaka    </h3>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                            </div>
                    </div>
                </div>

                    <a href="contact_us.php" class="test_btn">  See More    </a>
    </section>

<hr class="newline" style="color:  red; border-style: solid;" >



<!--Call to Action-->
<div class="clr">
    <section class="cta">
        <h2>    Let's Get In Touch  </h2>
            <p >
                We also continue to update the information about the company through social media, for the latest information you can follow our social media.

            </p>
            <a href="contact_us.php" class="cont_btn">   Contact Us   </a>
    </section>
</div>


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

<!-- Counter-Up Script -->
    <script src="js/counterscript.js"></script>



</body>
</html>
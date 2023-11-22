<!--
                        Powered by @TW Solutions
Copyright © 2022 Ceylon Fiberio Manufacturing PVT Ltd. All Rights Reserved.	

 *Title  			:   Ceylon Fiberio Manufacturing (PVT)Ltd.
 *File Type 		:   PHP
 *Title             :  Explore Gallery Page

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
        <link rel="stylesheet" href="css/explore_gallery.css">
        <link rel="stylesheet" href="css/whatsappstyle.css">
        <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
        
        <title>
            Ceylon Fiberio | Explore Gallery
        </title>

    </head>

<body>


   
<!--Logo & Navigation Bar-->
<section class="sub_header">
        
        <nav>
            <a href="explore_gallery.php"><img src="images/logo/logo-tr.png" alt="image"></a>
                <div class="navbar_links" id="navLinks">  
                    <i  class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                            </svg> &nbsp;       Home            </a>
                        </li>

                        <li><a href="about.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                            </svg> &nbsp;       About Us        </a>
                        </li>
                    
                        <li><a href="products.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg> &nbsp;       Our Products    </a>
                        </li>
                        
                        <li><a href="gallery.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                            </svg> &nbsp;       Gallery         </a>
                        </li>

                        <li><a href="buynow.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg> &nbsp;       Buy Now         </a>
                        </li>

                        <li><a href="careers.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                            </svg> &nbsp;       Careers         </a>
                        </li>

                        <li><a href="contact_us.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                            </svg> &nbsp;       Contact Us      </a>
                        </li>
                    </ul> 
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>
 
                <h1>Explore Gallery</h1></br>   

    </section>

  

<!--Search Bar-->
<div class="row">
    <div class="col-md-12">
        <div class="search">
            <input type="text" class="input" placeholder="What are you looking for ?">
                <div class="searchbtn">
                <a href="explore_gallery.php" class="search_btn"> <i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</div><br>



<!-- Our Products & Raw Materials-->
<section class="bac">
    <section class="cta">   
        <h2 class="head-T"><i class="fa fa-tags" style="color: greenyellow;"></i> &nbsp;   Our Products & Raw Materials    </h2>
    </section>

        <div class="responsive">
            <div class="gallery">
                <a href="images/Gallery/1iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Dry Coconut Husks "><img src="images/Gallery/small-1iimg.jpg" alt="Ceylon Image 1"></a>
                <div class="desc">  Dry Coconut Husks   </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">	
                <a href="images/Gallery/2iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Chopped Mix Fibre "><img src="images/Gallery/small-2iimg.jpg" alt="Ceylon Image 2"></a>
                <div class="desc">  Chopped Mix Fibre   </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/3iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Bristle Fibre"><img src="images/Gallery/small-3iimg.jpg" alt="Ceylon Image 3"></a>
                <div class="desc">  Bristle Fibre   </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/4iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Bristle Fibre Single Units"><img src="images/Gallery/small-4iimg.jpg" alt="Ceylon Image 4"></a>
                <div class="desc">  Bristle Fibre Single Units  </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/5iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Packed Bristle Fibre "><img src="images/Gallery/small-5iimg.jpg" alt="Ceylon Image 5"></a>
                <div class="desc">  Packed Bristle Fibre      </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/6iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Coir Fibre Bales"><img src="images/Gallery/small-6iimg.jpg" alt="Ceylon Image 6"></a>
                <div class="desc">  Coir Fibre Bale     </div>
            </div>
        </div>	
            
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/7iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Coir Fibre Bales"><img src="images/Gallery/small-7iimg.jpg" alt="Ceylon Image 7"></a>
                <div class="desc">  Coir Fibre Bales    </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/8iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Hop Twine Before Bundling"><img src="images/Gallery/small-8iimg.jpg" alt="Ceylon Image 8"></a>
                <div class="desc">  Hop Twine Before Bundling   </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/9iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Bundled Hop Twine"><img src="images/Gallery/small-9iimg.jpg" alt="Ceylon Image 9"></a>
                <div class="desc">  Bundled Hop Twine   </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/10iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Cocopoles"><img src="images/Gallery/small-10iimg.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Cocopoles   </div>
            </div>
        </div>
            
        <div class="responsive">
            <div class="gallery">		
                    <a href="images/Gallery/11iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="FMT-Unlabled"><img src="images/Gallery/small-11iimg.jpg" alt="Ceylon Image 10"></a>
                    <div class="desc">  FMT-Unlabled    </div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/12iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Labled FMT Roles "><img src="images/Gallery/small-12iimg.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Labled FMT Roles    </div>       
            </div>
        </div>
            
        <div class="responsive">
            <div class="gallery">
                <a href="images/Gallery/13iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Cocopith"><img src="images/Gallery/small-13iimg.jpg" alt="Ceylon Image 1"></a>
                <div class="desc">  Cocopith  </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">	
                <a href="images/Gallery/14iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Cocopeat on drying Process"><img src="images/Gallery/small-14iimg.jpg" alt="Ceylon Image 2"></a>
                <div class="desc">  Cocopeat on drying Process  </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/15iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Dried Cocopeat"><img src="images/Gallery/small-15iimg.jpg" alt="Ceylon Image 3"></a>
                <div class="desc">  Dried Cocopeat  </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/16iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Handmade coir wires mamking"><img src="images/Gallery/small-16iimg.jpg" alt="Ceylon Image 4"></a>
                <div class="desc">  Handmade coir wires making     </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/17iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Wet Coco Chips"><img src="images/Gallery/small-17iimg.jpg" alt="Ceylon Image 5"></a>
                <div class="desc">  Wet Coco Chips  </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/18iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Coconut"><img src="images/Gallery/small-18iimg.jpg" alt="Ceylon Image 6"></a>
                <div class="desc">  Coconut     </div>
            </div>
        </div>	
            
                    
    <div class="clearfix"></div> <br>



<!-- Our Premises & Machinery-->             
    <section class="cta">   
        <h2 class="head-T"><i class="fa fa-tags" style="color: greenyellow;"></i> &nbsp;   Our Premises & Machinery    </h2>
    </section>
        
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/Premises/premises1.jpg" data-lightbox="Ceylon_Gallery" data-title="Ceylon Fiberio Office Premises"><img src="images/Gallery/Premises/premises1 - small.jpg" alt="Ceylon Image 7"></a>
                <div class="desc">  Ceylon Fiberio Office Premises      </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/Premises/premises2.jpg" data-lightbox="Ceylon_Gallery" data-title="Ceylon Fiberio Office Cabin "><img src="images/Gallery/Premises/premises2 - small.jpg" alt="Ceylon Image 8"></a>
                <div class="desc">  Ceylon Fiberio Office Cabin         </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/Premises/premises3.jpg" data-lightbox="Ceylon_Gallery" data-title="One of our Factory Premises Area"><img src="images/Gallery/Premises/premises3 - small.jpg" alt="Ceylon Image 9"></a>
                <div class="desc">  One of our Factory Premises Area    </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/Premises/premises4.jpg" data-lightbox="Ceylon_Gallery" data-title="Ceylon Fiberio Office Premises "><img src="images/Gallery/Premises/premises4 - small.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Ceylon Fiberio Office Premises      </div>
            </div>
        </div>
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/Premises/premises5.jpg" data-lightbox="Ceylon_Gallery" data-title="Concrete Compound Premises"><img src="images/Gallery/Premises/premises5 - small.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Products Packaging                  </div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/Premises/premises6.jpg" data-lightbox="Ceylon_Gallery" data-title="Concrete Compound Premises"><img src="images/Gallery/Premises/premises6 - small.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Concrete Compound Premises          </div> 
            </div>
        </div>
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/25iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Coconut Husks Cutting Machine"><img src="images/Gallery/small-25iimg.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Coconut Husks Cutting Machine       </div>
            </div>
        </div> 

        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/26iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="10C Chips Cutting Machine"><img src="images/Gallery/small-26iimg.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  10C Chips Cutting Machine           </div>
            </div>
        </div> 
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/22iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Hop Twine Machine"><img src="images/Gallery/small-22iimg.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Hop Twine Machine                   </div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/20iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Hop Twine Bundling Machine"><img src="images/Gallery/small-20iimg.jpg" alt="Ceylon Image 8"></a>
                <div class="desc">  Hop Twine Bundling Machine          </div>
            </div>
        </div>	
            
        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/23iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Machine Twisted FIbre Machine "><img src="images/Gallery/small-23iimg.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Machine Twisted FIbre Machine       </div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">		
                <a href="images/Gallery/24iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Cocopeat Carpet Machine"><img src="images/Gallery/small-24iimg.jpg" alt="Ceylon Image 10"></a>
                <div class="desc">  Cocopeat Carpet Machine             </div>
            </div>
        </div> 
            

    <div class="clearfix"></div> <br>
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
                    <li><a href="contact_us.php">  Privacy Policy  </a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Get Help</h4>
                <ul>
                    <li><a href="#">                FAQ             </a></li>
                    <li><a href="#">                Delivery        </a></li>
                    <li><a href="#">                Returns         </a></li>
                    <li><a href="#">                Order Status    </a></li>
                    <li><a href="#">                Payment Options </a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Online Shop</h4>
                <ul>
                    <li><a href="products.php">    Bristle Fibre               </a></li>
                    <li><a href="products.php">    Coco Peat                   </a></li>
                    <li><a href="products.php">    Coir Fibre Bale             </a></li>
                    <li><a href="products.php">    Hop Twine                   </a></li>
                    <li><a href="products.php">    Machine Twisted Fibre-FMT   </a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>    Contact Us                              </h4>
                <p>     Ceylon Fiberio Manufacturing PVT Ltd.   <br> 
                        No 567/2                                <br> 
                        Negambo Road                            <br> 
                        Kurunegala                              <br> 
                        +9437 924 5957
                </p>
            </div>

        </div>

    </div>
    
      
    
    <a href="#" class="top_btn"><i class="fa fa-arrow-up" ></i>     To the Top      </a>

<!-- Social Media Icons -->
    <div class="icons">

        <p>     Get to Know Us Better...  Follow Us On Social Media     <br> 
        <a href="https://www.facebook.com/">    <i class="fa fa-facebook-official">     </i></a>
        <a href="https://www.instagram.com/">   <i class="fa fa-instagram">             </i></a>
        <a href="https://twitter.com/?lang=en"> <i class="fa fa-twitter">               </i></a>
        <a href="https://www.youtube.com/">     <i class="fa fa-youtube-play">          </i></a>
        <a href="https://lk.linkedin.com/">     <i class="fa fa-linkedin">              </i></a>
   
<!-- Copyrights & Powered by --> 
        </br>
        Powered by <a href="index.php" target="_blank" >       @TW Solutions           </a></br>
        Copyright © 2022<a href="index.php" target="_blank" >  Ceylon Fiberio Manufacturing PVT Ltd.   </a>    All Rights Reserved.
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



<!--Gallery JS-->
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/gallery-script.js"></script>



</body>
</html>








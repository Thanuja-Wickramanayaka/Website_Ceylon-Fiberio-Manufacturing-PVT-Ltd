<!--
                        Powered by @TW Solutions
Copyright © 2022 Ceylon Fiberio Manufacturing PVT Ltd. All Rights Reserved.	

 *Title  			:   Ceylon Fiberio Manufacturing (PVT)Ltd.
 *File Type 		:   PHP
 *Title             :   Gallery Page

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
        <link rel="stylesheet" href=" css/gallery.css">
        <link rel="stylesheet" href="css/whatsappstyle.css">
        <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
       
        <title>
            Ceylon Fiberio | Gallery
        </title>

    </head>

<body>



<!--Logo & Navigation Bar-->
    <section class="sub_header">
        
        <nav>
            <a href="gallery.php"><img src="images/logo/logo-tr.png" alt="image"></a>
                <div class="navbar_links" id="navLinks">  
                    <i  class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                            </svg> &nbsp;   Home            </a>
                        </li>


                        <li><a href="about.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                            </svg> &nbsp;   About Us        </a>
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
                            </svg> &nbsp;   Gallery         </a>
                        </li>

                        <li><a href="buynow - Login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg> &nbsp;   Buy Now         </a>
                        </li>

                        <li><a href="careers.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                            </svg> &nbsp;   Careers         </a>
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

                <h1>    Gallery     </h1></br>
 
</section>

  

<!--Search Bar-->
<div class="row">
    <div class="col-md-12">
        <div class="search">
            <input type="text" class="input" placeholder="What are you looking for ?">
                <div class="searchbtn">
                <a href="gallery.php" class="search_btn"> <i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</div>



<!--Gallery Image Slider-->
<section class="bac">
<div class="slideshow-container">
    
    <div class="mySlides fade">
        <div class="numbertext">  1/6   </div>
        <img class="slide" src="images/Gallery/Slideshow/slimg1.jpg" >
        <div class="text">        Coconut Tree    </div>
    </div>
    
    <div class="mySlides fade">
        <div class="numbertext">  2/6   </div>
        <img class="slide" src="images/Gallery/Slideshow/slimg2.jpg" >
        <div class="text">        Coconuts        </div>
    </div>
    
    <div class="mySlides fade">
        <div class="numbertext">  3/6   </div>
        <img class="slide" src="images/Gallery/Slideshow/slimg3.jpg" >
        <div class="text">        Coconut Husks   </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">  4/6   </div>
        <img class="slide" src="images/Gallery/Slideshow/slimg4.jpg">
        <div class="text">        Bristle Fibre   </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">  5/6</div>
        <img class="slide" src="images/Gallery/Slideshow/slimg5.jpg" >
        <div class="text">        Coir Bale Fibre </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6/6</div>
        <img class="slide" src="images/Gallery/Slideshow/slimg6.jpg" >
        <div class="text">      Machine Twisted Fibre   </div>
    </div>
    
</div>  <br>
    
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>



<!--Gallery-->
<section class="cta">
        <h3 class="topic">  Visit Our Gallery  </h3>
        <p>    
            We also continue to update these information about the company through social media, for the latest information you can follow our social media.
        </p>
</section>

    <div class="responsive">
        <div class="gallery">
            <a href="images/Gallery/28iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Raw coconut husks."><img src="images/Gallery/small-28iimg.jpg" alt="Ceylon Image 1"></a>
            <div class="desc">  Raw Coconut Husks   </div>
        </div>
    </div>	
        
    <div class="responsive">
        <div class="gallery">	
            <a href="images/Gallery/2iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Chopped Mix Fiber"><img src="images/Gallery/small-2iimg.jpg" alt="Ceylon Image 2"></a>
            <div class="desc">  Chopped Mix Fiber   </div>
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
            <a href="images/Gallery/12iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Machine Twisted Fibre"><img src="images/Gallery/small-12iimg.jpg" alt="Ceylon Image 10"></a>
            <div class="desc">  Machine Twisted Fibre   </div>
        </div>
    </div>	
        
    <div class="responsive">
        <div class="gallery">		
            <a href="images/Gallery/27iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Hop Twine"><img src="images/Gallery/small-27iimg.jpg" alt="Ceylon Image 5"></a>
            <div class="desc">  Hop Twine   </div>
        </div>
    </div>	
        
    <div class="responsive">
        <div class="gallery">		
            <a href="images/Gallery/6iimg.jpg" data-lightbox="Ceylon_Gallery" data-title="Coir Fibre Bales"><img src="images/Gallery/small-6iimg.jpg" alt="Ceylon Image 6"></a>
            <div class="desc">  Coir Fibre Bales    </div>
        </div>
    </div>	
        
    <div>
        <a href="explore_gallery.php" > <button class="exp_btn" >    Explore Gallery &nbsp; <i class="fa fa-angle-double-right"></i></button> </a>
    </div>
    

<div class="clearfix"></div> <br>



<!--Video Library-->
<section>
    <h3 class="topic">   Visit Our Video Gallery     </h3>

    <div class="contiainer">
        <div class="main-video">
            <div class="video">
                <video src="Video/Hop Twine Manking Video.mp4" controls muted autoplay style="width:100%; border-radius: 5px;"></video>
                <h3 class="title">      01.How Hop Twine are made at Ceylon Fiberio         </h3>
            </div>
        </div>

        <div class="video-list">
            <div class="vid active">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      01.How Hop Twine are made at Ceylon Fiberio         </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      02.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      03.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      04.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      05.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      06.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      07.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      08.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      09.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

            <div class="vid">
                <video src="Video/Hop Twine Manking Video.mp4" muted></video>
                <h5 class="title">      10.How Hop Twine are made at Ceylon Fiberio             </h5>
            </div>

        </div> 
    </div>
            <div>
                <a href="explore_gallery.php" > <button class="vw_btn" >View More &nbsp; <i class="fa fa-angle-double-right"></i></button> </a>
            </div> <br><br>
</section>

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



<!--Java Script for video gallery-->
<script>

    let listVideo = document.querySelectorAll('.video-list .vid');
    let mainVideo = document.querySelector('.main-video video');
    let title     = document.querySelector('.main-video .title');
    

    listVideo.forEach(video =>{
        video.onclick = () =>{
            listVideo.forEach(vid => vid.classList.remove('active'));
            video.classList.add('active');
            if(video.classList.contains('active')){
                let src = video.children[0].getAttribute('src');
                mainVideo.src = src;
                let text = video.children[1].innerHTML;
                title.innerHTML = text;
            };

        };

    });
</script>



<!--Gallery JS-->
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/gallery-script.js"></script>



</body>
</html>








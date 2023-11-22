<!--
                        Powered by @TW Solutions
Copyright © 2022 Ceylon Fiberio Manufacturing PVT Ltd. All Rights Reserved.	

 *Title  			:   Ceylon Fiberio Manufacturing (PVT)Ltd.
 *File Type 		:   PHP
 *Title             :   Our Journey Page

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
        <link rel="stylesheet" href="css/journey.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">   
        <link rel="stylesheet" href="css/whatsappstyle.css">
      
        
        <title>
           Ceylon Fiberio | Our Journey
        </title>

    </head>

<body>


<!--Logo & Navigation Bar-->
    <section class="sub_header">

        <nav>
            <a href="journey.php"><img src="images/logo/logo-tr.png" alt="image"></a>

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
                            </svg> &nbsp;   Careers    </a>
                        </li>

                        <li><a href="contact_us.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                            </svg> &nbsp;    Contact Us     </a>
                        </li>
                    </ul>  

                        
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>


                <h1>    Our Journey     </h1></br>
    

    </section>

<!--Search Bar-->
    <div class="row">
        <div class="col-md-12">
            <div class="search">
                <input type="text" class="input" placeholder="What are you looking for ?">
                    <div class="searchbtn">
                    <a href="journey.php" class="search_btn"> <i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>


<section class="bac">
<!--Chairman's Message-->
    <section class="chairman">
        <div class="row">
            <div class="col-md-6">
                <img src="images/people/Chairman.jpg" alt="image">
                    </div>
                        <div class="col-md-6">
                            <h1>    Chairman's Message      </h1>
                                <p >    <b> "</b>   We, Ceylon Fiberio Manufacturing (PVT) Ltd is a well established and limited liability company operating since 1980.In the beginning, our company, Ceylon Fiberio Manufacturing (PVT) Ltd.  was engaged in manufacturing where we processed coconut derivative products, namely coconuts into coir fibre. 
                                                    And after that our company expanded and expanded into coconut coir related products such as Machine Twisted Fibre-FMT, Bristle Fibre, Coco Peat, 
                                                    Coconut Husks, Coir Fibre Bale, Hop Twine, Coconut Chips, to process more derivative products. 
                                    <br><br>
                                                    Ceylon Fiberio is one of the leading suppliers of coconut fibre products in Sri Lanka. 
                                                    We are a company situated in coconut triangle in Sri Lanka engaged in suppling coconut and various coconut fibre related materials with high-quality standards. 
                                                    We deal with more than 50 companies, spread across all over in Sri Lanka.
                                    <br><br>
                                                    Ceylon Fiberio has served customers from all over Sri Lanka and it has become our top priority to meet our customers’ satisfaction and expectations.
                                                    We invite you all to visit our factory to experience the purity of our products. You can compare our products with other competitors and decide which brand of coir products is the best.
                                                    We believe that Ceylon Fiberio is the exact one you choose because we deliver the best products with the right mechanism. <b>"</b>
                                </p>
                                <a href="about.php" class="exp_btn">      EXPLORE US     </a>   
                        </div>
        </div>
    </section>



<!--Journey Timeline-->
<section>
    <div class="timeline">

        <div class="t-container left-container">
            <div class="text-box">
                <img src="images/logo/logo-wh.png" alt="Logo Image">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-building" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg> <br>
            
                <h3>    "New Lanka Fiber Mills" was founded.    </h3>
                <small> 1980                                    </small>
                <p >    New Lanka Fiber Mills was first established in 1980 by the late owner Mr.L.P. Gunathilake. 
                        Our first project was collecting coconuts and sell them.
                        The business was started with 3 employees.  
                </p>
                <span class="left-container-arrow"></span>

            </div>
        </div>

        <div class="t-container right-container">
            <div class="text-box">
                <img src="images/logo/logo-wh.png" alt="Logo Image">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="orange" class="bi bi-building" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg><br>

                <h3>    Changed Company Name as "Ceylon Fiberio Manufacturing PVT Ltd." </h3>
                <small> 1990                                                            </small>
                <p >    With the expand of the business founder, Mr.Gunathilake and manager and co-partner, Mr.Wickramanayaka 
                        changed this business's name to "Ceylon Fiberio Manufacturing".
                        Then we produced coconut coir products using machineries.
                        In the same year the company was registered as a Private Limited Company. 
                </p>
                <span class="right-container-arrow"></span>

            </div>
        </div>

        <div class="t-container left-container">
            <div class="text-box">
                <img src="images/logo/logo-wh.png" alt="Logo Image">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-building" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg> <br>

                <h3>    Expand the company with machineries     </h3>
                <small> 1995                                    </small>
                <p >    After learning the market for several years, Ceylon Fiberio started 
                        to collaborating with several machineries and employing locals from rural areas
                        as employees to produce more coconut coir products such as 
                        Machine Twisted Fibre-FMT, Bristle Fibre and coconut fibre.  
                </p>
                <span class="left-container-arrow"></span>

            </div>
        </div>

        <div class="t-container right-container">
            <div class="text-box">
                <img src="images/logo/logo-wh.png" alt="Logo Image">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="orange" class="bi bi-building" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg><br>

                <h3>    Build end to end ecosystem for coconut coir products    </h3>
                <small> 2000                                                    </small>
                <p >    Ceylon Fiberio close its first bulk of coir products project to 
                        a Hyles company, followed by several companies in local market.  
                </p>
                <span class="right-container-arrow"></span>

            </div>
        </div>

        <div class="t-container left-container">
            <div class="text-box">
                <img src="images/logo/logo-wh.png" alt="Logo Image">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-building" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg> <br>

                <h3>    Expanding our current client base & capacities      </h3>
                <small> 2005                                                </small>
                <p >    After receiving many positive feedbacks from the customer,
                        Ceylon Fiberio increasingly expanding our market to more levels from current client base.
                </p>
                <span class="left-container-arrow"></span>

            </div>
        </div>

        <div class="t-container right-container">
            <div class="text-box">
                <img src="images/logo/logo-wh.png" alt="Logo Image">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="orange" class="bi bi-building" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg><br>

                <h3>    Deliver more derivative coconut products with higher quality.   </h3>
                <small> 2022                                                            </small>
                <p >    After the success of coconut coir products, we innovated our products 
                        furthermore and expanded to process more coconut derivatives products, 
                        namely Machine Twisted Fibre-FMT, Bristle Fibre, Coco Peat, Coconut Husks, 
                        Coir Fibre Bale, Hop Twine, Coconut Chips.   
                </p>
                <span class="right-container-arrow"></span>

            </div>
        </div>
    </div>

                <p class="till" style="text-align:center;">
                        Till now we have successfully come through various ups and downs and we plan to do more in future. 
                </p>
                <br><br>
 
   
</section>


<!-- Whatsapp Button -->
    <div class="whatsapp-btn-container">
        <a class="whatsapp-btn" href="https://wa.me/+94379245957"><i class="fa fa-whatsapp" style='font-size:60px;'></i></a>
        <span>      Contact Us      </span>
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

</html>
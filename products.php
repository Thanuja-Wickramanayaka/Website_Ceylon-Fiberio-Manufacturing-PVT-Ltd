<!--
                        Powered by @TW Solutions
Copyright © 2022 Ceylon Fiberio Manufacturing PVT Ltd. All Rights Reserved.	

 *Title  			:   Ceylon Fiberio Manufacturing (PVT)Ltd.
 *File Type 		:   PHP
 *Title             :   Our Products Page

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
        <link rel="stylesheet" href=" css/products.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">  
        <link rel="stylesheet" href="css/whatsappstyle.css">
      
        
        <title>
            Ceylon Fiberio | Our Products
        </title>
    </head>

<body>



<!--Logo & Navigation Bar-->
    <section class="sub_header">

        <nav>
            <a href="products.php"><img src="images/logo/logo-tr.png" alt="image"></a>

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

                <h1>Our Products</h1></br>

    </section>



<!--Search Bar-->
<div class="row">
    <div class="col-md-12">
        <div class="search">
            <input type="text" class="input" placeholder="What are you looking for ?">
                <div class="searchbtn">
                <a href="products.php" class="search_btn"> <i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</div>


<section class="bac">
<!--Our Products-->
    <section class="pdt-para">
        
        <div class="row">
            <div class="left">
                <img src="images/products.png" alt="">
            </div>

            <div class="right">
                <div class="paragraph">
                    <h1>    Ceylon Fiberio Products    </h1>
                    <p>
                            In our manufacturing process, whether it be for specific clients or business sizes, quality, 
                            innovation, adherence to industry standards, applicability,and environmental considerations are 
                            crucial variables that are taken into account.

                            The product's dependability within a given time frame, adherence to product standards, durability and longevity, 
                            and specialized features are further areas of focus and evaluation. are factors that we continually assess before 
                            releasing our product line to the market. <br><br>

                            Ceylon Fiberio is always concerned about the high quality of its products and manufactures them to a high standard.  
                            Our products are manufactured using only quality materials found in different parts of the Coconut Triangle and are 
                            distributed in many parts of the country.  Moreover, our company works to make quality products by identifying the 
                            unique characteristics of coconut coir and selecting the most suitable coir from among them.

                    </p>
                </div>
            </div>
        </div>

    </section>



<!--Product Card-->
    <section class="product-card">
        <div class="container-card">
            <div class="pdct-row">

                <div class="card-r">
                    <img src="images/products/Product1.jpeg" alt="Bristle Fibre">
                        <h4>        Bristle Fibre   </h4>
                            <p> 
                                    Available in three different varieties (1 Tie / 2 Tie / 3 Tie), bristle fibre can range in length from 15 cm to 25 cm. 
                                    Its strength and versatility allow for it to be cut to specific lengths and used to make a variety of brushes and twines. 
                            </p>
                                <a href="#bristle-fibre" class="read-btn">     Read More     </a>
                </div>

                <div class="card-r">
                    <img src="images/products/Product2.jpeg" alt="Bristle Fibre">
                        <h4>        Machine Twisted Fibre-FMT   </h4>
                            <p> 
                                    Machine Twisted Fibre are produced from matured brown fibre widely used for manufacturing coir cushions, beds, etc. 
                                    Coir fibre is twisted into coils using the "Ferrer Machine Twisted" technique.
                            </p>
                                <a href="#fmt" class="read-btn">    Read More      </a>
                </div>

                <div class="card-r">
                    <img src="images/products/Product3.jpeg" alt="Bristle Fibre">
                        <h4>        Coir Fibre Bale     </h4>
                            <p> 
                                    Coir fibre can be compressed into bales. Bales consist of the coir fiber pith or coir dust, 
                                    which is acquired through the removal of long fibre in the coconut husk. 
                                    Their usage in coir mattresses increases their comfort.
                            </p>
                                <a href="#fibr-bale" class="read-btn">      Read More      </a>
                </div>

            </div>



            <div class="pdct-row">

                <div class="card-r">
                    <img src="images/products/Product4.jpeg" alt="Bristle Fibre">
                        <h4>        Hop Twine       </h4>
                            <p> 
                                    The Hop Twine is manufactured for a variety of industries. 
                                    These are made from the bristle fibre of the husk of the coconut, coir twine is eco-friendly, biodegradable, and 
                                    has many unique uses due to its natural characteristics
                            </p>
                                <a href="#hop-twine" class="read-btn">      Read More      </a>
                </div>

                <div class="card-r">
                    <img src="images/products/Product5.jpeg" alt="Bristle Fibre">
                        <h4>        Coconut Husks       </h4>
                            <p> 
                                    The coconut's rough outer shell is known as the "coconut husk." The husks can be used in a variety of ways, including to enrich 
                                    potting soil and serve as ground cover for flowerbeds, fluids contained within the external shell.  
                            </p>
                                <a href="#coco-husks" class="read-btn">     Read More      </a>
                </div>

                <div class="card-r">
                    <img src="images/products/Product6.jpeg" alt="Bristle Fibre">
                        <h4>        Coco Peat       </h4>
                            <p> 
                                    Coco fibre pith, also known as coco peat or coir dust is generated in coconut fibre extraction. This mulch like material, high in 
                                    porosity and water holding capacity, is an ideal growing medium for plants.
                            </p>
                            <a href="#coco-peat" class="read-btn">      Read More      </a>
                </div>

            </div>



            <div class="pdct-row">

                <div class="card-r">
                    <img src="images/products/Product7.jpeg" alt="Bristle Fibre">
                        <h4>        Coco Pole       </h4>
                            <p> 
                                    Coir pole is a growing assistance and plant support made from only eco-friendly coconut fibers. widely used in horticultural farms, 
                                    plant nurseries, and indoor and outdoor decor.The product is created by encircling PVC pipes.  
                            </p>
                                <a href="#coco-pole" class="read-btn">      Read More       </a>
                </div>

                <div class="card-r">
                    <img src="images/products/Product8.jpeg" alt="Bristle Fibre">
                        <h4>        Coco Chips      </h4>
                            <p> 
                                    Ceylon Fiberio Husk Chips sizes provide an excellent means of balancing air to water ration for different applications. 
                                    These consists of chopped/ cut pieces of coconut husks.  
                            </p>
                                <a href="#coco-chips" class="read-btn">     Read More       </a>
                </div>

                <div class="card-r">
                    <img src="images/products/Product10.jpeg" alt="Bristle Fibre" style="height: 260px;">
                        <h4>        Cocopeat Blocks         </h4>
                            <p> 
                                    When hydrated with about 25 liters of water, a single 5 kg block of coco peat, weighing between 4.8 and 5.2 kg, 
                                    slowly reconstitutes to produce 60 to 75 liters.Blocks of 5 kg coco peat are packaged in pallets. 
                            </p>
                                <a href="#coco-blocks" class="read-btn">    Read More      </a>
                </div>


            </div>

        </div>
    </section>



<!--Product Details-->
    <section class="product-dtls">
        <div class="row">

            <div class="prdt1">
                <a name="bristle-fibre"></a>
                    <h2>        01.BRISTLE FIBRE        </h2>
                        <p>
                                Available in three different varieties (1 Tie / 2 Tie / 3 Tie), bristle fibre can range in length from 15 cm to 25 cm. 
                                Its strength and versatility allow for it to be cut to specific lengths and used to make a variety of brushes and twines. 
                                <br><br>
                                    <b>     Grades      </b> :1-Tie / 2-Tie and 3-Tie - Natural/ Bleached with different sizes      <br>
                                    <b>     Application </b> :Brush industry / Carpet industry                                      <br>
                                    <b>     Packing     </b> :In Hanks and Bundles                                                  <br>
                                    <b>     Utilization </b> :Approx. 7MT/ 20ft and Approx. 16MT/ 40ft container

                        </p>
            </div>

            <div class="col-md-6"> 
                                <img src="images/products/bristlefibre_1.png" alt="image">
            </div>

        </div>

        
        
        <div class="row">
            <div class="col-md-6">
                                <img src="images/products/fmt2.png" alt="image">
            </div>

            <div class="prdt1">
                <a name="fmt"></a>
                    <h2>        02.MACHINE TWISTED FIBRE</h2>
                        <p>
                                Machine Twisted Fibre are produced from matured brown fibre widely used for manufacturing coir cushions, beds, etc. 
                                Coir fibre is twisted into coils using the "Ferrer Machine Twisted" technique, which involves twisting, steaming and 
                                spinning the rope, to give the fibre a tight curl. The fibre is then passed through an untwisting machine, to give 
                                it a curled, spring-like feel. This product is then turned into sheets and used in spring mattresses in the bedding 
                                industry, and for car seats and cushions, to ensure maximum comfort levels.
                                <br><br>
                                    <b>     Grades      </b> :Mattress Fibre Twisted / MIX Fibre Twisted / Super clean / Black coir     <br>
                                    <b>     Application </b> :Bedding and Upholstery Industry, Horticulture and erosion controlling     <br>
                                    <b>     Coil weight </b> :Approx. 22 - 24kg / 140-150kg (Mega coil)                                 <br>
                                    <b>     Utilization </b> :Approx. 9MT/ 20ft and Approx. 23MT/ 40ft container 
                        </p>
            </div>

        </div>

        
        
        <div class="row">
            <div class="prdt1">
                <a name="fibr-bale"></a>
                    <h2>        03.COIR FIBRE BALE      </h2>
                        <p>
                                Coir fibre can be compressed into bales. Bales consist of the coir fiber pith or coir dust, which is acquired 
                                through the removal of long fibre in the coconut husk.They can be made with different mixtures of coco peat and 
                                coco husk, to create varying sizes of bedding (solid mattress/spring cover sheets), sheets, upholstery, seating, 
                                drainage filters and erosion control applications.Given fibre cooling and clean properties, it is a healthy 
                                alternative to synthetic products. Their usage in coir mattresses increases comfort and better sleep. 
                                Bale fibre can also be used as a raw material in the production of other horticulture and agriculture applications.
                                <br><br>
                            
                                <b>     Grades      </b> :Mattress Fibre and MIX Fibre bales                    <br>
                                <b>     Application </b> :Bedding and Upholstery Industry, Drainage Filters     <br>
                                <b>     Bale weight </b> :Approx. 130-140kg                                     <br>
                                <b>     Utilization </b> :Approx. 9MT/ 20ft and Approx. 20MT/ 40ft container

                        </p>
            </div>

            <div class="col-md-6">
                            <img src="images/products/coirfiberbale3.png" alt="image">
            </div>

        </div>



        <div class="row">
            <div class="col-md-6">
                                <img src="images/products/hoptwine4.png" alt="image">
            </div>

            <div class="prdt1">
                <a name="hop-twine"></a>
                    <h2>        04.HOP TWINE</h2>
                        <p>
                                The Hop Twine is manufactured for a variety of industries. These are made from the bristle fibre of the husk of the coconut, 
                                coir twine is eco-friendly, biodegradable, and has many unique uses due to its natural characteristics.Its strength, texture 
                                and versatility enable a variety of industrial usage - stringing hops and other vines, horticulture,gardening, matting and carpet, 
                                and a base for oyster cultivation. Available in two-ply and three-ply, the coconut coir twine has a breaking strength of up to 100 lbs., 
                                depending on its thickness, which ranges from 3.5 mm to 12 mm, and can be customized according to customer requirements.
                                <br><br>
                                
                                <b>     Application     </b> :For growing HOP and other vineries                                                            <br>
                                <b>     Specification   </b> :Thickness-4mm-5mm, Breaking Strength-85-100 Lbs. (up to 50kg) , Cut length - up to 6.25 m     <br>
                                <b>     Packing         </b> :100 cut strings per hank and then in bales                                                    <br>
                                <b>     Utilization     </b> :Approx. 60 bales/ 20ft and 140 bales/ 40ft HC

                        </p>
            </div>


        </div>



        <div class="row">
            <div class="prdt1">
                <a name="coco-husks"></a>
                    <h2>        05.COCONUT HUSKS        </h2>
                        <p>
                                The coconut's rough outer shell is known as the "coconut husk." The husks can be used in a variety of ways, including to enrich 
                                potting soil and serve as ground cover for flowerbeds, even though they cannot be eaten like the meat and fluids contained within 
                                the external shell. Products made from coconut husk can be bought in large quantities or made at home using fresh coconut shells. 
                                Ceylon Fiberio provides its customers with their desired amounts of coconut husks.
                        </p>
            </div>

            <div class="col-md-6">
                                <img src="images/products/cocohusks5.png" alt="image">
            </div>

        </div>



        <div class="row">
            <div class="col-md-6">
                                <img src="images/products/cocopeat6.png" alt="image">
            </div>
                
            <div class="prdt1">
                    <a name="coco-peat"></a>
                    <h2>        06.COCOPEAT     </h2>
                        <p>     Coco fibre pith, also known as coco peat or coir dust is generated in coconut fibre extraction. This mulch like material, high in 
                                porosity and water holding capacity, is an ideal growing medium for plants.Cocopeat has a unique ability to withstand high 
                                compaction force without leaving its beneficial structure.
                        </p>
            </div>
        </div>



        <div class="row">
            <div class="prdt1">
                <a name="coco-pole"></a>
                    <h2>        07.COCO POLE            </h2>
                        <p>
                                Coir pole is a growing assistance and plant support made from only eco-friendly coconut fibers. widely used in horticultural farms, 
                                plant nurseries, and indoor and outdoor decor.The product is created by encircling PVC pipes and wood sticks with coir fiber sheets. 
                                Due to the porous nature of coco poles, the plant can grow numerous, tiny roots all over the surface. Due to its large water-holding 
                                capacity, this is the perfect tool for supporting creeper plants so they may grow properly. widely used in horticultural farms, plant
                                nurseries, and indoor and outdoor decor.It makes it possible for plant roots to grasp the coir fiber's organic natural materials.
                                <br><br>
                                <b>     Pole diameter               </b> : 32 mm                                        <br>
                                <b>     Total dia with coir wrap    </b> : 42 to 45 mm                                  <br>
                                <b>     Length                      </b> : as specified by customer normally 2 metres.
                        </p>
            </div>

            <div class="col-md-6">
                                <img src="images/products/cocopole7.png" alt="image">
            </div>
        </div>



        <div class="row">
            <div class="col-md-6">
                                <img src="images/products/cocochips8.png" alt="image">
            </div>

            <div class="prdt1">
                <a name="coco-chips"></a>
                    <h2>        08.COCO CHIPS       </h2>
                        <p>
                                Ceylon Fiberio Husk Chips sizes provide an excellent means of balancing air to water ration for different applications. 
                                These consists of chopped/ cut pieces of coconut husks. They take the form of irregularly shaped cubes and available in 
                                different sizes to suit varying applications.These are commonly used as the potting medium for orchids and similar cut-plants.
                        </p>
            </div>
        </div>



        <div class="row">
            <div class="prdt1">
                <a name="coco-blocks"></a>
                    <h2>        09.COCOPEAT BLOCKS      </h2>
                        <p>
                                When hydrated with about 25 liters of water, a single 5 kg block of coco peat, weighing between 4.8 and 5.2 kg, 
                                slowly reconstitutes to produce 60 to 75 liters.Blocks of 5 kg coco peat, which are often packaged in pallets or 
                                as bales of five pieces each, are mostly used in large quantities to make potting soil or to grow fruits and vegetables in soilless farming. 
                                There are two grades of coco peat 5 kg blocks: Washed Low EC and Unwashed High EC.
                                <br><br>

                                <b>     Grades      </b> :Unsifted, Unwashed, Washed                                                <br>
                                <b>     Application </b> :To make potting soil, To grow fruits and vegetables in soilless farming.  <br>
                                <b>     Bale weight </b> :Approx. 4.8kg - 5.2kg                                                     <br>
                                <b>     Utilization </b> :Approx. Upto 26 tons per 40ft HC
                        </p>
            </div>

            <div class="col-md-6">
                                <img src="images/products/cocopeatblocks9.png" alt="image">
            </div>

        </div>

        
        
        <div class="row">
            <div class="col-md-6">
                                <img src="images/products/choppedfibre10.png" alt="image">
            </div>

            <div class="prdt1">
                <a name="chopped-fibre"></a>
                    <h2>        10.CHOPPED FIBRE        </h2>
                        <p>
                                This is also a product generated in coconut fibre processing and is essentially coconut fibre stands which much shorter in length. 
                                This is used extensively to decrease the bulk density in potting & bedding mixture.
                        </p>
                        <br><br>

            </div>
        </div>

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


</body>
</html>
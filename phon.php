<?php 
    $pagename = 'phones';
    include 'head.php';
    ?>

    <title>phone</title>
    <style>
        /*section 02*/
        #d6{
            background: #430049;
            height: auto;
            padding: 50px;
        }
        #d7{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .red-headings{
            font-family: var(--font2);
            color: red;
            font-size: 40px;
            font-weight: normal;
            text-transform: uppercase;
            margin: 25px 0;
        }
        #smalltext{
            font-size: 28px;
            font-family: var(--font1);
            padding-left: 20px;
            padding-bottom: 10px;
        }
        .para1{
            color: white;
        }

        /* section 03 */
        #sec3{
            background: #e6e6e6;
            padding: 50px 0;
        }
        #phon-box{
            display: flex;
            justify-content: space-evenly;
        }
        #left, #right{
            display: flex;
            flex-direction: column;
        }
        .box{
            background: #fff;
            margin: 15px;
            display: flex;
            justify-content: space-between;
        }
        .left2, .right2{
            padding: 30px;
        }
        .blacks{
            color: black;
        }
        .price{
            padding-top: 20px;
            font-size: 30px;
        }
        /* section 04 */
        #d8{
            background: #430049;
            height: auto;
            padding: 50px;
        }
        #d9{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        #smalltext2{
            font-size: 23px;
            font-family: var(--font1);
            padding-left: 20px;
            padding-bottom: 10px;
        }
        
        /* media quary */
        @media screen and (max-width:900px){
            #d6{
                height: auto;
            }
            #phon-box{
                flex-direction: column;
            }
            #no2{
                width: 75%;
            }
            #smalltext2{
                display: block;
                padding-left: 0;
            }
            
        }
        @media screen and (max-width:700px){
            #no1{
                width: 75%;
            }
            #smalltext{
                display: block;
                padding-left: 0;
            }
        }
        @media screen and (max-width:520px) {
            .box{
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
    
    <?php
        include 'nav.php';
    ?>
    <!-- Section 01 -->
    <section>
        <div id="d3">
            <div class="wrapper" id="d5">
                <div id="d4">
                    <h1>Phones &amp; <br> Accessories</h1>
                    <p id="p1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit asperiores distinctio illum libero natus veritatis.</p>
                    <p id="p2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem officia aliquid modi fuga earum dignissimos eligendi qui neque! Eaque aut, quos aspernatur omnis ipsum nam expedita delectus sed reiciendis, nisi labore sequi rem iusto quisquam.</p>
                    <p id="p3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed adipisci est eos magnam at soluta, incidunt voluptate maxime possimus exercitationem nemo aliquam tenetur iure voluptatem?</p>
                </div>
                <div>
                    <img src="home-pg/two-phones.png" alt="Two Phones" id="img1">
                </div>
            </div>
        </div>
        <!-- section 02 -->
        <div id="d6">
            <div class="wrapper" id="d7">
                <h2 class="red-headings" id="no1">Mobile Phones <span id="smalltext">iphones &amp; Android</span></h2>
                <p class="para1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi enim amet veniam beatae magnam accusamus commodi, neque voluptas reiciendis! Cumque esse repellendus quaerat ab tempora at a perspiciatis minus, harum officiis. Nam harum sequi odit quo atque cum officiis animi corporis tenetur consequatur facilis corrupti autem voluptates rem recusandae architecto nemo, placeat debitis. Voluptatibus consectetur magnam voluptatem neque atque, quos quaerat, quasi dolor iusto aspernatur provident vel in modi laborum voluptate doloribus vero ea.</p>
            </div>
        </div>
    </section>

    <!-- section 3 -->
    <section id="sec3">
        <div class="wrapper" id="phon-box">
            <div id="left">
                <div class="box">
                    <div class="left2">
                        <img src="./images/smartphone.png" alt="smartphone">
                    </div>
                    <div class="right2">
                        <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                        <p class="price">$655.78</p>
                    </div>
                </div>                
                <div class="box">
                    <div class="left2">
                        <img src="./images/smartphone.png" alt="smartphone">
                    </div>
                    <div class="right2">
                        <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                        <p class="price">$655.78</p>
                    </div>
                </div>
                <div class="box">
                    <div class="left2">
                        <img src="./images/smartphone.png" alt="smartphone">
                    </div>
                    <div class="right2">
                        <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                        <p class="price">$655.78</p>
                    </div>
                </div>
            </div>

            <div id="right">
                <div class="box">
                    <div class="left2">
                        <img src="./images/smartphone.png" alt="smartphone">
                    </div>
                    <div class="right2">
                        <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                        <p class="price">$655.78</p>
                    </div>
                </div>                
                <div class="box">
                    <div class="left2">
                        <img src="./images/smartphone.png" alt="smartphone">
                    </div>
                    <div class="right2">
                        <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                        <p class="price">$655.78</p>
                    </div>
                </div>
                <div class="box">
                    <div class="left2">
                        <img src="./images/smartphone.png" alt="smartphone">
                    </div>
                    <div class="right2">
                        <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                        <p class="price">$655.78</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 04 -->
    <div id="d8">
        <div class="wrapper" id="d9">
            <h2 class="red-headings" id="no2">Accessories <span id="smalltext2">Tempered Glass, Chargers, Back Covers and More..</span></h2>
            <p class="para1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi enim amet veniam beatae magnam accusamus commodi, neque voluptas reiciendis! Cumque esse repellendus quaerat ab tempora at a perspiciatis minus, harum officiis. Nam harum sequi odit quo atque cum officiis animi corporis tenetur consequatur facilis corrupti autem voluptates rem recusandae architecto nemo, placeat debitis. Voluptatibus consectetur magnam voluptatem neque atque, quos quaerat, quasi dolor iusto aspernatur provident vel in modi laborum voluptate doloribus vero ea.</p>
        </div>
    </div>
    <!-- section 05 -->
    <section id="sec3">
            <div class="wrapper" id="phon-box">
                <div id="left">
                    <div class="box">
                        <div class="left2">
                            <img src="./images/smartphone.png" alt="smartphone">
                        </div>
                        <div class="right2">
                            <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                            <p class="price">$655.78</p>
                        </div>
                    </div>                
                    <div class="box">
                        <div class="left2">
                            <img src="./images/smartphone.png" alt="smartphone">
                        </div>
                        <div class="right2">
                            <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                            <p class="price">$655.78</p>
                        </div>
                    </div>
                </div>
    
                <div id="right">
                    <div class="box">
                        <div class="left2">
                            <img src="./images/smartphone.png" alt="smartphone">
                        </div>
                        <div class="right2">
                            <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                            <p class="price">$655.78</p>
                        </div>
                    </div>                
                    <div class="box">
                        <div class="left2">
                            <img src="./images/smartphone.png" alt="smartphone">
                        </div>
                        <div class="right2">
                            <h1 class="red-headings">Lorem ipsum <span class="blacks">x500c</span></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores voluptas quasi fugit. Doloremque ab error delectus molestiae cum! Quisquam veritatis ad vel eligendi soluta?</p>
                            <p class="price">$655.78</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php include 'footer.php'?>
</body>
</html>
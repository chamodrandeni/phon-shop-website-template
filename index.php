<?php 
    $pagename = 'home';
    include 'head.php';?>
    <title>Home Page</title>

    <style>
        
        
        /* Section 01 */
        #a1{
            font-family: var(--font2);
            padding: 20px 30px;
            text-decoration: none;
            text-transform: uppercase;
            background: #e9afaf;
            color: #88134b;
            border-radius: 4px;
            font-size: 22px;
            display: inline-block;
        }

        /* Purple background area */
        /* section 2 */
        #d6{
            background: #430049;
        }
        
        #d7, #d8{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #d8{
            padding: 70px 0;
        }
        .red-headings{
            font-family: var(--font2);
            color: red;
            font-size: 40px;
            font-weight: normal;
            text-transform: uppercase;
            margin: 25px 0;
        }
        .para1{
            color: white;
        }
        #no1::before,#no2::before{
            font-family: var(--font1);
            font-size: 90px;
            color: white;
            display: block;
        }
        #no1::before{
            content: '01';
        }
        #no2::before{
            content: '02';
        }
        #img-div1{
            margin-right: 100px;
            margin-top: -80px;
            position: relative;
        }
        #img-div2{
            margin-left: 100px;
            margin-bottom: -120px;
            position: relative;
        }
        #img-div1::after{
            border-right: 15px solid #7c104b;
            right: -4px;
            
        }
        #img-div2::after{
            border-left: 15px solid #7c104b;
            left: -4px;
        }
        #img-div2::after,  #img-div1::after{
            border-bottom: 15px solid #7c104b;
            content: "";
            width: 200px;
            height: 350px;
            background: transparent;
            position: absolute;
            bottom: -2px;
            transition: 1s all;
        }
        #img-div1:hover:after{
            right: -30px;
            bottom: -20px;
        }
        #img-div2:hover:after{
            left:-30px;
            bottom: -20px;
        }


        /* Section 03 */

        #sec3{
            background: #e6e6e6;
            padding: 50px 0;
        }
        #h1-red{
            color: red;
            text-align: center;
        }
        #para-center{
            text-align: center;
            padding: 20px;
        }
        #d9{
            display: flex;
            justify-content: space-around;
            margin: 30px 0;
        }
        .circle, .text1{
            font-family: var(--font1);
        }
        .circle{
            width: 150px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 36px;
            border: 4px solid #fff;
            border-radius: 75px;
        }
        .text1{
            text-align: center;
            display: block;
            margin-top: 20px;
            font-size: 20px;
        }

        /* Section 4 */

        #sec-4{
            background: linear-gradient(90deg, rgba(67,0,93,.7), rgba(67,0,93, 0.5)), url('home-pg/banner.png') no-repeat center center;
            background-size: cover;
            padding: 40px 0;
        }
        #flex-main{
            display: flex;
            justify-content: space-between;
        }
        #text-2{
            color: #fff;
            padding: 20px 20px 20px 0;
        }
        #img-div3{
            position: relative;
            width: 280px;
            margin-bottom: -100px;
        }
        #img-div3::after{
            border-right: 15px solid #7c104b;
            right: 0;
            top: -4px;
            border-top: 15px solid #7c104b;
            content: "";
            width: 200px;
            height: 350px;
            background: transparent;
            position: absolute;
            bottom: -2px;
            transition: 1s all;
        }
        #img-div3:hover:after{
            right: -30px;
            top: -25px;
        }
        #form1{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .in1{
            background: #ce9aa3;
            padding: 15px;
            border: none;
            border-radius: 4px;
            margin: 20px 0;
            width: 350px;
            font-size: 20px;
            font-family: var(--font1);
        }
        #submit{
            background: #b01e4d;
            color: #fff;
            font-family: var(--font2);
            text-transform: uppercase;
            font-size: 25px;
            padding: 15px;
            width: 200px;
            box-shadow: 4px 10px 5px rgba(24, 21, 21, .3);
            border: none;
        }

        /* Section 05 */

        #sec-5{
            background: linear-gradient(90deg, #b11f4c 50%, #43005d 50% );
        }
        #sec5-flex{
            display: flex;
        }
        #left2, #right2{
            width: 50%;
            padding: 80px 0 50px;
        }
        #left2{
            background: linear-gradient(90deg, #b11f4c, #800080 );
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #right2{
            background: #43005d;
            padding-left: 100px;
        }
        #sec5-h1{
            font-family: var(--font2);
            color: red;
            font-size: 40px;
            font-weight: normal;
            text-transform: uppercase;
            margin: 25px 0;
        }
        #sec5-h1::before{
            content: '03';
            font-family: var(--font1);
            font-size: 90px;
            color: white;
            display: block;
        }
        #sec5-p{
            color: white;
        }
        
        /* section 6 */
        #sec-6{
            background: linear-gradient(90deg, #fff 50%, #b11f4c 50%);
        }
        #sec6-flex{
            display: flex;
        }
        #left3, #right3{
            width: 50%;
            padding: 80px 0 50px;
        }
        #sec6-h1{
            font-family: var(--font2);
            color: red;
            font-size: 40px;
            font-weight: normal;
            text-transform: uppercase;
            margin: 25px 0;
        }
        #readmore{
            margin-top: 50px;
        }
        #read{
            background: #800080;
            color: #fff;
            text-decoration: none;
            font-family: var(--font2);
            text-transform: uppercase;
            font-size: 20px;
            padding: 15px;
            width: 200px;
            border: 1px solid;
            border-radius: 5px;
        }
        #right3{
            background: linear-gradient(270deg, #b11f4c, #800080 );
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #left3{
            background: #fff;
            padding-left: 100px;
        }

        /* section 7 */
        #sec-7{
            background: #7c104b;
        }
        #sec7-flex{
            display: flex;
            flex-direction: column;
        }
        #top{
            margin: auto;
            margin-top: 50px;
        }
        #sec7-h1{
            text-align: center;
            text-transform: uppercase;
            font-family: var(--font1);
            font-size: 30px;
            margin-top: 0;
        }
        .sec7-p{
            color: #fff;
        }
        #form2{
            text-align: center;
            align-items: center;
            margin-bottom: 20px;
        }
        #email{
            background: #ce9aa3;
            padding: 15px;
            border: none;
            border-radius: 4px;
            margin: 20px 0;
            width: 350px;
            font-size: 20px;
            font-family: var(--font1);
            height: 60px;
        }
        #subscribe{
            background: #b01e4d;
            color: #fff;
            font-family: var(--font2);
            text-transform: uppercase;
            font-size: 20px;
            padding: 15px;
            width: 250px;
            border: none;
            border-radius: 4px;
            height: 60px;
        }

        /* footer */
        footer{
            background: black;
            padding: 20px;
        }
        #foot{
            text-align: center;
        }
        .fnav{
            text-decoration: none;
            color: #b01e4d;
        }
        .sep{
            color: #b01e4d;
        }
        #copy{
            color: #fff;
        }
        /* Media Query */
        @media screen and (max-width:1000px){
            #headphone{
                width: 300px;
            }
            #left2, #right2{
                width: auto;
                padding-left: 30px;
                padding-right: 30px;
            }
            #promotion{
                width: 400px;
            }
            #left3, #right3{
                width: auto;
                padding-left: 30px;
                padding-right: 30px;
            }
        }

        @media screen and (max-width:780px){
            #img-div1{
                margin-top: 0;
                padding-top: 50px;
                margin-right: 40px;
            }
            #img-div2{
                margin-bottom: 0;
                margin-left: 40px;
            }
            #d9{
                flex-wrap: wrap;
                
            }
            #div-circle{
                    width: 50%;
                    margin-bottom: 30px;
                }
            .circle{
                margin: 0 auto;
            }
            #sec5-flex{
                flex-direction: column;
            }
            #sec6-flex{
                flex-direction: column;
            }
        }

        @media screen and (max-width:700px){
            #flex-main{
                flex-direction: column;
                align-items: center;
            }
            #img-div3{
                margin: 20px auto;
            }
            #left{
                text-align: center;
            }
            #submit{
                width: auto;
            }
        }

        @media screen and (max-width:600px){
            #d7{
                flex-direction: column-reverse;
            }
            #d8{
                flex-direction: column;
                padding: 20px 0;
            }
            .div-center{
                text-align: center;
                padding: 0 20px;
            }
            #img-div2{
                margin-top: 30px;
            }
            #img-div1  #img-div2{
                margin-right: auto;
                margin-left: auto;
            }
            #img-div2::after{
                left: inherit;
                right: -4px;
                border-left: none;
                border-right: 15px solid #7c104b;
            }
            #img-div2:hover:after{
                right: -30px;
                left: inherit;
            }
        }
                
        @media screen and (max-width:450px){
            
            #a1{
                font-size: 18px;
                padding: 10px 20px;
            }
            .div-circle{
                width: 100%;
                margin-bottom: 30px;
            }
            .in1{
                width: 100%;
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
                    <h1>Now Available <br>in-store &amp; Online</h1>
                    <p id="p1">We are an authorised reseller</p>
                    <a href="#" id="a1">View Phones and Accessories</a>
                </div>
                <div>
                    <img src="home-pg/two-phones.png" alt="Two Phones" id="img1">
                </div>
            </div>
        </div>

        <!-- Section 02 -->

        <div id="d6">
            <div class="wrapper" id="d7">
                <div id="img-div1">
                    <img src="home-pg/girl-with-phone.png" alt="Girl">
                </div>
                <div class="div-center">
                    <h2 class="red-headings" id="no1">Best Prices <br> In town</h2>
                    <p class="para1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum ipsa a fugit ducimus voluptate! Officia nam veritatis dolor ipsam id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, dignissimos!</p>
                </div>
            </div>

            <div class="wrapper" id="d8">
                <div class="div-center">
                    <h2 class="red-headings" id="no2">after sales <br> service support</h2>
                    <p class="para1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum ipsa a fugit ducimus voluptate! Officia nam veritatis dolor ipsam id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nihil!</p>
                </div>
                <div id="img-div2">
                    <img src="home-pg/boy-with-phone.png" alt="Boy">
                </div>
            </div>
        </div>
    </section>

    <!-- section 03 -->

    <section id="sec3">
        <div class="wrapper">
            <h1 id="h1-red">Sales Completed</h1>
            <p id="para-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, corrupti odio esse dolorem veniam aperiam harum eveniet neque? Molestiae, autem.
            </p>
            <div id="d9">
                <div class="div-circle">
                    <span class="circle">884</span>
                    <span class="text1">Phone<br>Back Covers</span>
                </div>
                <div class="div-circle">
                    <span class="circle">975</span>
                    <span class="text1">Phone<br>Chargers</span>
                </div>
                <div class="div-circle">
                    <span class="circle">1578</span>
                    <span class="text1">Tempered<br>Glass</span>
                </div>
                <div class="div-circle">
                    <span class="circle">6652</span>
                    <span class="text1">Mobile Phones<br>(iphone &amp; Samsung</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 04 -->

    <section id="sec-4" >
        <div id="flex-main" class="wrapper">
            <div id="left">
                <h1>Contact Us</h1>
                <p id="text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, aliquam.</p>
                <div id="img-div3">
                    <img   src="home-pg/customer-support.png" alt="customer-support">
                </div>
            </div>
            <div id="right">
                <form id="form1">
                    <input class="in1"  type="text" placeholder="Your Name">
                     <input class="in1" type="email" placeholder="Email Adress">
                    <textarea class="in1" name="textarea" id="text-area1" placeholder="Message"></textarea>
                    <input type="submit" value="Submit" id="submit">
                </form>
            </div>
        </div>
    </section>

    <!-- Section 05 -->

    <section id="sec-5">
        <div class="wrapper" id="sec5-flex">
            <div id="left2">
                <img id="img5" src="home-pg/headphone-with-phone.png" alt="Headphone" id="headphone">
            </div>
            <div id="right2">
                <h1 id="sec5-h1">Purchase More and <br> Win Prizes</h1>
                <p id="sec5-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ducimus accusamus repellendus est quisquam quam necessitatibus quis deserunt et. Nisi!</p>
            </div>
        </div>
    </section>
    <!-- Section 05 end-->
    <!-- Section 06 -->
    <section id="sec-6">
        <div class="wrapper" id="sec6-flex">
            <div id="left3">
                <h1 id="sec6-h1">Reffer a Friend <br> And Get 20% 0ff</h1>
                <p class="sec6-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam voluptate quisquam reiciendis obcaecati quibusdam magni perferendis enim, veritatis praesentium atque possimus deleniti sit voluptatum impedit.</p>
                <p class="sec6-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nisi nemo tenetur, provident qui nulla nam eius labore exercitationem recusandae perferendis quas impedit harum. Hic.</p>
                <div id="readmore">
                    <a href="#" id="read">Read More>></a>
                </div>
            </div>
            <div id="right3">
                <img src="./images/promotion.png" alt="promotion" id="promotion">
            </div>
        </div>
    </section>
    <!-- Section 06 end-->
    <!-- Section 07 -->
    <section id="sec-7">
        <div class="wrapper" id="sec7-flex">
            <div id="top">
                <h1 id="sec7-h1">Subscribe And get the Latest Price List Every Weekend</h1>
                <p class="sec7-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ex illum repudiandae laborum excepturi <br> necessitatibus expedita earum sint temporibus quo?</p>
            </div>
            <div id="bottom">
                <form action="" id="form2">
                    <input type="email" id="email" placeholder="Email Adress">
                    <input type="button" id="subscribe" value="Subscribe">
                </form>
            </div>
        </div>
    </section>
    <!-- Section 07 end-->
    <?php
        include 'footer.php'
    ?>
</body>
</html>
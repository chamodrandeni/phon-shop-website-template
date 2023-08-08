<?php 

    if(isset($_POST['sent'])){
        ///Check name
        if (empty($_POST['user'])) $user_empty = "<br><p class='error'>plece enter your name</p>";
        ///check email
        if (empty($_post['email'])) $email_empty = "<br><p class='error'>plese enter your email</p>";
        ///check message
        if (empty($_post['message'])) $message_empty = "<br><p class='error'>plese enter your message</p>";

        if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['message'])){
            //send email
            header("location:contact.php?ok=1");
        }
}
    $pagename = 'contact';
    include 'head.php';
?>
    <title>Contact</title>
    <style>
        /* section 01 */
        .error{
            color: orange;
        }
        #okmsg{
            color: #8af58a;
            text-align: center;
        }
        #d3{
            padding-bottom: 0;
            height: 600px;
        }
        #d4{
            padding: 20px;
            padding-left: 0;
            padding-top: 0;
        }
        #bottom{
            padding-left: 0;
        }
        .bdiv{
            display: flex;
        }
        .icon{
            padding: 10px;
        }
        .iconp{
            padding: 10px;
            color: #fff;
            font-family: var(--font1);
            font-size: 30px;
        }
        #girl{
            width: 500px;
            height: 600px;
            position:relative;
            margin-top: 30px;
            padding: 10px;
        }

        /*section 02*/
        #d6{
            background: #430049;
            height: auto;
            padding: 50px;
        }
        #d7{
            display: flex;
            justify-content: space-around;
            padding: 50px;
        }
        .red-headings{
            font-family: var(--font2);
            color: red;
            font-size: 40px;
            font-weight: normal;
            text-transform: uppercase;
            margin: 25px 0;
        }
        #form{
            display: flex;
            flex-direction: column;
        }
        .input{
            display: flex;
        }
        .in1{
            background: #ce9aa3;
            padding: 15px;
            border: none;
            margin: 20px 0;
            width: 350px;
            font-size: 20px;
            font-family: var(--font1);
        }
        .l1{
            background: #b01e4d;
            color: #fff;
            font-family: var(--font1);
            text-transform: uppercase;
            font-size: 15px;
            padding: 15px;
            margin: 20px 0;
            width: 35%;
            text-align: center;
        }
        #sub{
            margin-left: 58%;
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
        #right{
            padding: 40px;
            margin-left: 100px;
        }
        .bdiv{
            padding: 5px;
            margin: 5px;
        }
        .bname{
            color: #fff;
            font-family: var(--font1);
        }
        .iconp {
            font-family: var(--font1);
            font-size: 20px;
        }
        .iconp1{
            color: red;
            font-family: var(--font1);
            font-size: 20px;
        }

        /* section 3 */
        #d8{
            background: #fff;
            height: auto;
            padding: 50px;
        }
        #divmap{
            display: flex;
            justify-content: baseline;
        }
        #map{
            margin-top: -100px;
            height: 100%;
            width: 100%;
        }
        /* media quary */
        @media screen and (max-width:1000px) {
            #d6{
                height: auto;
            }
        }
        @media screen and (max-width:900px) {
            #d3{
                height: auto;
            }
            #girl{
            width: 300px;
            height: 400px;
            position:relative;
            margin-top: 30px;
            padding: 10px;
            }
            #d7{
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 50px;
            }
            
        }
        @media screen and (max-width:500px) {
            #sub{
                margin: auto;
            }
            #right{
                align-items: flex-start;
                margin: auto;
            }
            .in1{
                width: 65%;
            }
            #d7{
                padding: 0;
            }
        }
    </style>
    <?php include 'nav.php'; ?>

    <!-- Section 01 -->
    <section>
        <div id="d3">
            <div class="wrapper" id="d5">
                <div id="d4">
                    <div id="top">
                        <h1>Contact Us</h1>
                        <p id="p1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed adipisci est eos magnam at soluta, incidunt voluptate maxime possimus exercitationem nemo aliquam tenetur iure voluptatem?</p>
                    </div>
                    <div id="bottom">
                        <div id="1" class="bdiv">
                            <img src="./images/location-icon-purple.svg" alt="location" id="locate" class="icon">
                            <p class="iconp">34/d Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.</p>
                        </div>
                        <div id="2" class="bdiv">
                            <img src="./images/call-icon-purple.svg" alt="call" id="call" class="icon">
                            <p class="iconp">+94 765846213 <br> +94 775694111</p>
                        </div>
                        <div id="3" class="bdiv">
                            <img src="./images/email-icon-purple.svg" alt="email" id="email" class="icon">
                            <p class="iconp">contact@sitename.com</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="./images/girl.png" alt="Call girl" id="girl">
                </div>
            </div>
        </div>
        <!-- section 02 -->
        <div id="d6">
            <div class="wrapper" id="d7">
                <div id="left">
                    <h2 class="red-headings" id="no1">Send Your Message</h2>
                    <form action="contact.php" id="form1" method="post">
                        <?php
                            if(isset($_GET['ok'])){
                                echo '<p id="okmsg">Email sent successfully</p>';
                            }
                        ?>
                        <div class="input">
                            <label for="" class="l1">Name</label>
                            <input type="text" name="user" class="in1" value="<?php echo $_POST['user']?? ''?>"> 
                        </div>
                        <?php
                            // if(isset($user_empty)) echo '<p>', $user_empty,'</p>';
                            //else echo ''
                            echo $user_empty ?? '';
                        ?>                    
                        <div class="input">
                            <label for="" class="l1">Email Address</label>
                            <input type="email" name="email" class="in1" value="<?php echo $_POST['email']?? ''?>">
                        </div>
                        <?php
                            echo $email_empty ?? '';
                        ?>                       
                        <div class="input">
                            <label for="" class="l1">Message</label>
                            <textarea name="message" class="in1" value="<?php echo $_POST['message']?? ''?>"></textarea>
                        </div>
                        <?php
                            echo $message_empty ?? '';
                        ?> 
                        <div id="sub">
                            <input type="submit" value="submit" id="submit" name="sent">
                        </div>
                    </form>
                </div>
                <div id="right">
                    <h2 class="red-headings" id="no1">Our Branchers</h2>
                    <div id="brancha">
                        <h2 class="bname">Lorem ipsum</h2>
                        <div id="4" class="bdiv">
                            <img src="./images/location-icon-pink.svg" alt="location" id="locate" class="icon">
                            <p class="iconp1">34/d Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.</p>
                        </div>
                        <div id="2" class="bdiv">
                            <img src="./images/call-icon-pink.svg" alt="call" id="call" class="icon">
                            <p class="iconp">+94 765846213 / +94 775694111</p>
                        </div>
                    </div>
                    <div id="branchb">
                        <h2 class="bname">Lorem ipsum</h2>
                        <div id="4" class="bdiv">
                            <img src="./images/location-icon-pink.svg" alt="location" id="locate" class="icon">
                            <p class="iconp1">34/d Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.</p>
                        </div>
                        <div id="2" class="bdiv">
                            <img src="./images/call-icon-pink.svg" alt="call" id="call" class="icon">
                            <p class="iconp">+94 765846213 / +94 775694111</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 3   -->
    <section>
        <div id="d8">
            <div class="wrapper" id="d9">
                <div class="divmap">
                    <img src="./images/map.png" alt="Map" id="map">
                </div>
            </div>
        </div>
    </section>
    <!-- footer start -->
    <?php include 'footer.php'?>
</body>
</html>
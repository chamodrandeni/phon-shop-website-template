</head>
<body>

    <!-- Header -->

    <header>
        <div class="wrapper" id="d1">
            <img src="header/logo.svg" alt="Logo" id="logo">
            <div id="d2">
                <nav id="main-menu">
                    <a href="./index.php" class="links" <?php if($pagename=='home') echo 'id="current-page"'; ?>>Home</a>
                    <span>|</span>
                    <a href="./phon.php" class="links" <?php if($pagename=='phones') echo 'id="current-page"'; ?>>Phones & Accessories</a>
                    <span>|</span>
                    <a href="./contact.php" class="links" <?php if($pagename=='contact') echo 'id="current-page"'; ?>>Contact Us</a>
                </nav>
                <img src="header/menu-icon.svg" alt="Menu" id="menu">
            </div>
        </div>
    </header>
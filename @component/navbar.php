<!-- Navbar Menu -->
<div class="ui top fixed hidden menu">
    <div class="ui container">
        <a class="toc item">
            <i class="sidebar icon"></i>
            <label> Menu</label>
        </a>
        <div class="ui search item">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Explore...">
                <i class="search link icon"></i>
            </div>
            <div class="results"></div>
        </div>
        <div class="right menu">

            <?php
                if (isset($_SESSION['username'])){
                    include('navbarLoggedIn.php');
                } else {
                    include('navbarLoggedOut.html');
                }
            ?>
            
        </div>
    </div>
</div>

<nav class="ui container">
        <!-- Following Menu -->
    <div class="ui large secondary inverted menu">
    <a class="toc item">
        <i class="sidebar icon"></i>
        <label> Menu</label>
    </a>
    <div class="ui search item">
        <div class="ui icon input">
            <input class="prompt" type="text" placeholder="Explore...">
            <i class="search link icon"></i>
        </div>
        <div class="results"></div>
    </div>
    <div class="right item">
        
        <?php
            if (isset($_SESSION['username'])){
                include('navbarRightLoggedIn.php');
            } else {
                include('navbarRightLoggedOut.html');
            }
        ?>

    </div>
    </div>
</nav>
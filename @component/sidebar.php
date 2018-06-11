<!-- Sidebar Menu -->
<div class="ui vertical sidebar menu elevated segment">
    <div class="ui item">
        <div class="right item middle aligned" >
            <i class="user big icon"></i>
        <br>
                    <?php
                        if (isset($_SESSION['username'])){
                            echo 'Hi, '.$_SESSION['username'].'!';
                        } else {
                            echo "Kamu belum login :(";
                        }
                    ?>

        </div>
    </div>
    <div class="item">
    <a class="active menu item" href="../">Beranda</a>
    <div class="menu">
        <a class="active item">Tentang kami</a>
        <a class="item">Campaign terbaru</a>
        <a class="item">Hubungi</a>
    </div>
    </div>
    <a class="item" href="/campaign">
    <i class="grid layout icon"></i> Telusuri Campaign
    </a>
    <a class="item">
    Messages
    </a>
    <div class="ui dropdown item">
    Lainnya
    <i class="dropdown icon"></i>
    <div class="menu">
        <a class="item"><i class="edit icon"></i> Edit Profile</a>
        <a class="item"><i class="globe icon"></i> Choose Language</a>
        <a class="item"><i class="settings icon"></i> Account Settings</a>
    </div>
    </div>
</div>

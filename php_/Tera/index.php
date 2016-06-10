<?php
$root = explode('/',$_SERVER['REQUEST_URI']);
define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define ('HTTP_ROOT', 'http://'.$_SERVER['HTTP_HOST']);
include ('header.php');
$sql = "SELECT * FROM slideshow";
//$query = query($sql);
?>

<!-- slider-holder -->
<div class="slider-holder">

    <!-- slider -->
    <div class="slider">
        <div class="socials">
            <a href="#" class="facebook-ico" target="_blank">facebook-ico</a>
            <a href="#" class="twitter-ico" target="_blank">twitter-ico</a>
            <a href="#" class="youtube-ico" target="_blank">youtube-ico</a>
            <a href="#" class="skype-ico" target="_blank">skype-ico</a>
            <div class="cl">&nbsp;</div>
        </div>

        <div class="arrs">
            <a href="#" class="prev-arr"></a>
            <a href="#" class="next-arr"></a>
        </div>

        <ul>
            <? #while($slideshow = fetch_array($query)) { ?>
                <li id="img<?php #$slideshow['id']?>">
                    <div class="slide-cnt">
                        <h4><?php #$slideshow['encabezado']?></h4>
                        <h2><?php #$slideshow['titulo']?></h2>
                        <p><?php #$slideshow['parrafo']?></p>
                    </div>
                    <img src="admin/resources/upload/slideshow/<?php# $slideshow['imagen']?>" alt="" height="365" width="398"/>
                </li>
                <? } ?>
            </ul>
        </div>
        <!-- end of slider -->

        <!-- thumbs -->
        <div id="thumbs-wrapper">
            <div id="thumbs">
                <?
                $sql = "SELECT * FROM slideshow";
                $query = query($sql);
                while($slideshow = fetch_array($query)) { ?>
                    <a href="#img<?php $slideshow['id']?>" ><img src="admin/resources/upload/slideshow/<?php $slideshow['miniatura']?>"/></a>
                    <? } ?>
                </div>
                <a id="prev" href="#"></a>
                <a id="next" href="#"></a>
            </div>
            <!-- end of thumbs -->
        </div>

        <!-- main -->
        <div class="main">

            <div class="featured">
                <h4>'bienvenida'</h4>
                <a href="#" class="blue-btn">CONTACTENOS</a>
            </div>

            <section class="cols">
                <div class="col">
                    <h3><?php#get_docs('inicio1_encabezado')?></h3>
                    <h5><?php #get_docs('inicio1_titulo')?></h5>
                    <p><?php #get_docs('inicio1_parrafo')?></a></p>
                </div>

                <div class="col">
                    <h3><?php #get_docs('inicio2_encabezado')?></h3>
                    <img src="css/images/col-img.png" alt="" class="left"/>
                    <h5><?php #get_docs('inicio2_titulo')?></h5>
                    <div class="cl">&nbsp;</div>
                    <p><?php #get_docs('inicio2_parrafo')?></p>
                </div>

                <div class="col">
                    <?/* $twitter = #get_docs('twitter_widget');
                    //~ $twitter = str_replace('\"', '', $twitter);
                    //~ $twitter = str_replace("\'", "'", $twitter);
                    #echo  html_entity_decode($twitter); */?>
                </div>
                <div class="cl">&nbsp;</div>
            </section>

            <?php include ('footer.php'); ?>

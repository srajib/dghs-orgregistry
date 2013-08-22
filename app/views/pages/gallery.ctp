<!--script for slider-->

<link rel="stylesheet" href="<?php echo $this->base; ?>/css/global.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="<?php echo $this->base; ?>/js/slides.min.jquery.js"></script>
<script>
    $(function(){
        $('#slides').slides({
            preload: true,
            preloadImage: 'img/loading.gif',
            play: 5000,
            pause: 2500,
            hoverPause: true,
            animationStart: function(current){
                $('.caption').animate({
                    bottom:-35
                },100);
                if (window.console && console.log) {
                    // example return of current slide number
                    console.log('animationStart on slide: ', current);
                };
            },
            animationComplete: function(current){
                $('.caption').animate({
                    bottom:0
                },200);
                if (window.console && console.log) {
                    // example return of current slide number
                    console.log('animationComplete on slide: ', current);
                };
            },
            slidesLoaded: function() {
                $('.caption').animate({
                    bottom:0
                },200);
            }
        });
    });
</script>

<!--script for treeview-->

<link rel="stylesheet" href="<?php echo $this->base;?>/css/jquery.treeview.css" />

<!--<script src="<?php echo $this->base;?>/js/jquery.js" type="text/javascript"></script>-->
<script src="<?php echo $this->base;?>/js/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo $this->base;?>/js/jquery.treeview.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        $("#tree").treeview({
            collapsed: true,
            animated: "fast",
            control:"#sidetreecontrol",
            prerendered: true,
            persist: "location"
        });
    })

</script>



<!--body-->
<?php
mysql_connect("103.247.238.173","root","mistestdb");
mysql_select_db("org_registry");
$tree = mysql_query("SELECT * from divisions");
?>
<div style="float:left;height:auto;width:200px;">
    <ul class="treeview" id="tree">

        <li class="expandable"><div class="hitarea expandable-hitarea"></div><span><a href="<?php echo $this->base; ?>/pages/search/">Bangladesh</span>
            <ul style="display: none;">
                <?php
                while($row = mysql_fetch_array($tree))
                {

                    ?>
                    <li class="expandable"><div class="hitarea expandable-hitarea"></div><a href="<?php echo $this->base; ?>/pages/division/<?php echo $row['division_id']; ?>"><?php echo $row['name']; ?></a>
                        <ul style="display: none;">
                            <?php
                            $divid = $row['division_id'];
                            $dist = mysql_query("SELECT * FROM districts WHERE division_id='$divid'");
                            while($rowdist = mysql_fetch_array($dist))
                            {
                                ?>

                                    <li class="expandable"><div class="hitarea expandable-hitarea"></div><a href="<?php echo $this->base; ?>/pages/district/<?php echo $rowdist['district_id']; ?>/<?php echo $rowdist['division_id']; ?>"><?php echo $rowdist['name']; ?></a>
                                <?php
                            }
                            ?>

                        </li>
                        </ul>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </li>
    </ul>
</div>


<div id="mainContentWrapper" style="float:left;width:400px;">

    <div style="position:relative;float: none; left: 200px">

        <div id="container">
            <div id="example">
                <!--<img src="img/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">-->
                <div id="slides">
                    <div class="slides_container">

<?php

$i = 0;
foreach($AllCode as $AllCodes):
$url ="http://app.dghs.gov.bd/dghshrm/uploads/";
//$class = null;
    $path =$url.$AllCodes['organizations']['email'].'.jpg';
    $imgurl_check = $path;
if (!is_array(@getimagesize($imgurl_check)))
{
    echo "";
}else{

?>
        <div class="slide">
            <a href="http://www.flickr.com/photos/jliba/4665625073/" title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank"><img src="<?php echo $url.$AllCodes['organizations']['email'].'.jpg'; ?>" width="570" height="250" alt="Slide 1"><!--</a>-->
            <div class="caption" style="bottom:0">
                <p><?php echo $AllCodes['organizations']['title']; ?></p>
            </div>
        </div>

    <?php
}
?>

<?php endforeach; ?>


                    </div>
                    <a href="#" class="prev"><img src="<?php echo $this->base; ?>/img/img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
                    <a href="#" class="next"><img src="<?php echo $this->base; ?>/img/img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
                </div>
                <!--<img src="img/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">-->
            </div>

        </div>
    </div>

</div>
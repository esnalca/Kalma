<?
include("includes/header.php");
include("includes/conexion.php");

$sql="SELECT * FROM anupor";
$res=mysqli_query($link,$sql);
$num=mysqli_num_rows($res);
?>
    
        <!--Slide-->
        <div class="container">
            <!-Slider-->
           <section id="miSlide" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlide" data-slide-to="1"></li>
                    <li data-target="#miSlide" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <a href="#"><img src="img/slide1.jpg" class="adaptar"></a>
                    </div>
                    <div class="item">
                       <a href="#"><img src="img/slide2.jpg" class="adaptar"></a> 
                    </div>
                    <div class="item">
                        <a href="#"><img src="img/slide3.jpg" class="adaptar"></a>
                    </div>
                </div>
                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </br>
            </section>
            <section>
                <div class="row">
                   <?
                    while ($fila=mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="hidden-xs col-sm-3 col-md-6 col-lg-6 ">
                                <br><br><img src="img/varias/<?=$fila["img"]?>" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-6 col-lg-6 tamtext3">
                                <a href="#"><h3><?=$fila["tit"]?></h3><hr></a>
                                <p align="justify">
                                    <?=$fila["des"]?>
                                </p>
                            </div>
                        </div>
                    </div> 
                    <?
                        }
                    ?>
                </div>
            </section>
<?
include("includes/footer.php");
?>
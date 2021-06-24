<?php
include 'header.php';
if(isset($_GET['err'])){
    $msg = $_GET['err'];
    echo $msg;
}
?>

<div class=""
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/lxscroll.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" id="apartment1">
            <img src="images/rxscroll.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/rangescroll.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container" id="deals">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h2 id="deal">Best Deals On All Vehicles</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
        <p>Miami Motors offers you best prices on all used and new vehicles. Trade-ins also accepted.</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
</div>

<div class="container" id="galery">
    <div class="row">
        <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
            <img src="images/e280.jpg" alt="e280" class="img-thumbnail">
            <div class="caption">
                <h6>Mercedese E280</h6>
                <hr>
            </div>
        </div>
        <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
            <img src="images/e350.jpg" alt="e350" class="img-thumbnail">
            <div class="caption">
                <h6>Mercedese E350</h6>
                <hr>
            </div>
        </div>
        <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
            <img src="images/ranger1.png" alt="ranger1" class="img-thumbnail">
            <div class="caption">
                <h6>Ford Ranger</h6>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
                <img src="images/crvlatest.jpg" alt="crv latest" class="img-thumbnail">
                <div class="caption">
                    <h6>Honda CRV</h6>
                    <hr>
                </div>
            </div>
            <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
                <img src="images/Range.jpg" alt="Range" class="img-thumbnail">
                <div class="caption">
                    <h6>Range Rover Spt</h6>
                    <hr>
                </div>
            </div>
            <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
                <img src="images/rxscroll.jpg" alt="rx scroll" class="img-thumbnail">
                <div class="caption">
                    <h6>Lexus Rx350</h6>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <p>
            <h2>Miami Motors</h2>
            Miami Motors is a reliable Kenyan Motor vehicle dealership company. We specialize on outsourcing and
            shipping of vehicles from different parts of the world. Our vehicles are customized and can be tailor–Made
            to suit your Budget.

            At Miami Motors its all about making our customers happy and satisfied with our deliveries.
            Our popular Sources includes: South Africa ,Germany, UK, USA, Japan and France.
            <br><br>

            <h5 id="home">Why us</h5>
            We’re committed to giving our customers legitimately outsourced and well tested vehicles which meet the
            required standards. <br><br>
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
    </div>
</div>

<!..Closing carousel...>
<!..First carousel at the bottom..>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active bg-info">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/Range.jpg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text">High-end vehicles outsourced from the European dealers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/ranger1.png" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text">Best 4X4 vehicles that meets your on and off-road needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/Lexus.jpg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text">An all terrain Vehicle that will never disappoint.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!..Second carousel at the bottom..>
        <div class="carousel-item bg-info">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/Rx350.jpg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text">Classic SUV's that cuts across all classes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/jeep.jpeg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text">Technically tested and approved used SUV's.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/crv1.jpg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text">Vehicles with a touch of class from the East.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <! third container bottom..>
        <div class="carousel-item bg-info">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/Bmw.jpeg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text">Highly efficient limousines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/e350.jpg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text">Limousine with a touch of class.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/Audi.jpg" class="card-img-top" alt="...">
                            <hr>
                            <div class="card-body">
                                <p class="card-text"> High-end used limousines.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!..Comment to entice customers..>
<div class="container-fluid" id="emblem">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="text-align: center">
            <h5>It's time for on-Road COMFORT! Talk to us <span style="color: red; text-decoration-style: wavy">NOW</span> for a DEAL.</h5>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a href="contacts.php" class="btn btn-info">CONTACT US NOW!</a>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
    </div>
</div>

<!..Page footer..>
<div class="footer">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <p>Miami Motors &copy; 2019 . All rights reserved. </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
</div>



<?php include 'footer.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" crossorigin="anonymous">

    <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


    <title>Chinese Ceramics (178520)</title>

</head>
<body id="bodyColor">

    <!-- TOP OF WEBSITE -->
    <!-- Row to store the Logo-->
    <div class="row">
        <div class="col-lg-12">
            <center>
                <img class="img-fluid logoPng" src="assets/images/mainLogo.png" />
            </center>
        </div>
    </div>

    <!-- The app header -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">

        <!-- Navbar Menu Icon -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Navbar and links -->
        <div class="collapse navbar-collapse">
            <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link active" href="#"><img class="img-fluid buttonPng" src="assets/images/historyButton.png" /></a>
                    </li>
                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="#"><img class="img-fluid buttonPng" src="assets/images/modelsButton.png" /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal"><img class="img-fluid buttonPng" src="assets/images/contactButton.png" /></a>
                    </li>
                </ul>
        </div>
    </nav>




    <!-- MAIN CONTENTS -->
    <!-- Container to store the main contents -->
    <div class="container-fluid">

        <!-- HOME PAGE CONTENTS (History Section, Gallery, Video) -->
        <div id="home" class="main_contents">
            <div class="row">

                <!-- HISTORY SECTION -->
                <div class="col-lg-6">
                    <div class="card text-left">

                        <!-- Header for the card, select history summary -->
                        <div class="card-header gallery-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a id="navHistory1" class="nav-link" href="#">Ancient</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navHistory2" class="nav-link" href="#">Early</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navHistory3" class="nav-link" href="#">Medieval</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navHistory4" class="nav-link" href="#">Renaissance</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Main body of the card (Title, sub-title, description) -->
                        <div class="card-body">
                            <!-- Title image -->
                            <center>
                                <img class="img-fluid titlePng" src="assets/images/historyTitle.png" />
                            </center>
                            <!-- Age (subtitle) and summary (description) -->
                            <div id="History1">
                                <center>
                                    <div class="card-subtitle">
									<h7><?php echo $data[0]['historyEra'] ?></h7>
									</div>
                                </center>
                                <div class="card-text">
								<p><?php echo $data[0]['historyDetails'] ?></p>
								</div>
                            </div>
                            <div id="History2">
                                <center>
                                    <div class="card-subtitle">
									<h7><?php echo $data[1]['historyEra'] ?></h7>
									</div>
                                </center>
                                <div class="card-text">
								<p><?php echo $data[1]['historyDetails'] ?></p>
								</div>
                            </div>
                            <div id="History3">
                                <center>
                                    <div class="card-subtitle">
									<h7><?php echo $data[2]['historyEra'] ?></h7>
									</div>
                                </center>
                                <div class="card-text">
								<p><?php echo $data[2]['historyDetails'] ?></p>
								</div>
                            </div>
                            <div id="History4">
                                <center>
                                    <div class="card-subtitle drinksText">
									<h7><?php echo $data[3]['historyEra'] ?></h7>
									</div>
                                </center>
                                <div class="card-text drinksText">
								<p><?php echo $data[3]['historyDetails'] ?></p>
								</div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End HISTORY contents-->


                <!-- GALLERY SECTION -->
                <div class="col-lg-6">
                    <div class="card text-left">
                        <!-- Header for the card, select between still images and video -->
                        <div class="card-header gallery-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a id="navGallery1" class="nav-link" href="#">Image Archive</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navGallery2" class="nav-link" href="#">3D Gallery</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Main body for the card (Image gallery or video)-->
                        <div class="card-body">
                            <!-- Generates gallery of still images -->
                            <div id="Gallery1">
                                <center>
                                    <div class="gallery" id="gallery"></div>
                                </center>
                            </div>
                            <!-- Loads video of 3D models -->
                            <div id="Gallery2">
                                <center>
                                    <video width="640" height="480" controls>
                                        <source src="movie.mp4" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                </center>
                            </div>
                        </div>
                    </div>
                </div> <!-- End GALLERY contents-->

            </div>
        </div>  <!-- End HOME PAGE contents-->






        <!-- 3D MODELS CONTENTS (Interaction buttons, X3D Model, Details) -->
        <div id="models" class="main_contents" style="display:none;">
            <div class="row">

                <!--INTERACTION BUTTONS -->
                <div class="col-lg-2">
                    <div class="card text-center card2">
                        <!-- Main body of the card, stores all the model interaction buttons -->
                        <div class="card-body">
                            <!-- Buttons to control the camera -->
                            <h6>Camera Views</h6>
                            <a href="#" class="btn btn-responsive btn1" onclick="cameraOne();">Cam 1</a>
                            <a href="#" class="btn btn-responsive btn1" onclick="cameraTwo();">Cam 2</a>
                            <a href="#" class="btn btn-responsive btn1" onclick="cameraThree();">Cam 3</a>
                            <!-- Buttons to control the render options-->
                            <h6>Rendering</h6>
                            <a href="#" class="btn btn-success btn-responsive" onclick="textureChange();">Poly</a>
                            <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                            <!-- Buttons to control the lighting -->
                            <h6>Lighting</h6>
                            <a href="#" class="btn btn2 btn-responsive" onclick="headlight();">Headlight</a>
                            <a href="#" class="btn btn2 btn-responsive" onclick="mainLights();">Backlight</a>
                            <!-- Buttons to control the animation -->
                            <h6>Animation</h6>
                            <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">Spin</a>
                            <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                        </div>
                    </div>
                </div> <!-- End INTERACTION BUTTONS contents-->
                <!-- X3D MODEL -->
                <div class="col-lg-6">
                    <div class="card text-left">
                        <!-- Header for the card, choose between the 4 models -->
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a id="navOne" class="nav-link" href="#">Cocksomb Bottle</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navTwo" class="nav-link" href="#">Covered Jar</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navThree" class="nav-link" href="#">Vase</a>
                                </li>
                                <li class="nav-item">
                                    <a id="navFour" class="nav-link" href="#">Bottle</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Main body for the card (Actual model, title, description) -->
                        <div class="card-body">

                            <!-- Contents for the first model -->
                            <div id="one">
                                <div class="model3D">
                                    <x3d id="model">
                                        <scene>
                                            <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/sprite_bottle.x3d"> </inline>
                                        </scene>
                                    </x3d>
                                </div>
                                <center>
								<div class="card-title"><h8><?php echo $data[0]['modelName'] ?></h8></div>
                                </center>
                                    <p><?php echo $data[0]['modelMethod'] ?></p>
                            </div>

                            <!-- Contents for the first model -->
                            <div id="two" style="display:none;">
                                <div class="model3D">
                                    <x3d id="model2">
                                        <scene>
                                            <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/sprite_bottle.x3d"> </inline>
                                        </scene>
                                    </x3d>
                                </div>
                                <center>
								<div class="card-title"><h8><?php echo $data[1]['modelName'] ?></h8></div>
                                </center>
                                     <p><?php echo $data[1]['modelMethod'] ?></p>
                            </div>

                            <!-- Contents for the first model -->
                            <div id="three" style="display:none;">
                                <div class="model3D">
                                    <x3d id="model3">
                                        <scene>
                                            <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/dr_pepper.x3d"> </inline>
                                        </scene>
                                    </x3d>
                                </div>
                                <center>
								<div class="card-title"><h8><?php echo $data[2]['modelName'] ?></h8></div>
                                </center>
                                    <p><?php echo $data[2]['modelMethod'] ?></p>
                            </div>

                            <!-- Contents for the first model -->
                            <div id="four" style="display:none;">
                                <div class="model3D">
                                    <x3d id="model4">
                                        <scene>
                                            <inline nameSpaceName="model" mapDEFToID="true" url="assets/x3d/bottle_model.x3d"> </inline>
                                        </scene>
                                    </x3d>
                                </div>
                                <center>
								<div class="card-title"><h8><?php echo $data[3]['modelName'] ?></h8></div>
                                </center>
                                    <p><?php echo $data[3]['modelMethod'] ?></p>
                            </div>

                        </div>


                    </div>
                </div> <!-- End X3D MODEL contents -->


                <!-- MODEL DETAILS SECTION-->
                <div class="col-lg-4">
                    <div class="card">

                        <!-- Main body for the card (Name, details, image) -->
                        <div class="card-body text-left">

                            <!-- Description for the first model (Title, date, dynasty, medium, dimensions, image) -->
							<div id="oneDescription" style="display:none;">
                                <center>
								<div class="card-title"><h10><?php echo $data[0]['modelName'] ?></h10></div>								
                                </center>
								<div class="card-text"><h9><?php echo $data[0]['modelDate'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[0]['modelDynasty'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[0]['modelMedium'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[0]['modelDimensions'] ?></h9></div>
                                <center>
                                    <img class="img-fluid modelImage" src="assets/model_images/cockscomb_bottle.jpg" />
                                </center>
                            </div>

                            <!-- Description for the first model (Title, date, dynasty, medium, dimensions, image) -->
                            <div id="twoDescription" style="display:none;">

                                <center>
								<div class="card-title"><h10><?php echo $data[1]['modelName'] ?></h10></div>
                                </center>
								<div class="card-text"><h9><?php echo $data[1]['modelDate'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[1]['modelDynasty'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[1]['modelMedium'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[1]['modelDimensions'] ?></h9></div>
                                <center>
                                    <img class="img-fluid modelImage" src="assets/model_images/covered_jar.jpg" />
                                </center>
                            </div>

                            <!-- Description for the first model (Title, date, dynasty, medium, dimensions, image) -->
                            <div id="threeDescription" style="display:none;">
                                <center>
								<div class="card-title"><h10><?php echo $data[2]['modelName'] ?></h10></div>
                                </center>
								<div class="card-text"><h9><?php echo $data[2]['modelDate'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[2]['modelDynasty'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[2]['modelMedium'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[2]['modelDimensions'] ?></h9></div>
                                <center>
                                    <img class="img-fluid modelImage" src="assets/model_images/vase.jpg" />
                                </center>
                            </div>

                            <!-- Description for the first model (Title, date, dynasty, medium, dimensions, image) -->
                            <div id="fourDescription" style="display:none;">
                                <center>
								<div class="card-title"><h10><?php echo $data[3]['modelName'] ?></h10></div>
                                </center>
								<div class="card-text"><h9><?php echo $data[3]['modelDate'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[3]['modelDynasty'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[3]['modelMedium'] ?></h9></div>
								<div class="card-text"><h9><?php echo $data[3]['modelDimensions'] ?></h9></div>
                                <center>
                                    <img class="img-fluid modelImage" src="assets/model_images/bottle.jpg" />
                                </center>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of MODEL DETAILS contents -->
            </div>
        </div> <!-- End of 3D MODELS contents -->
    </div> <!-- End of MAIN contents -->







    <!-- BOTTOM OF WEBSITE -->
    <!-- Footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <!-- Container for the footer -->
        <div class="container-fluid">
            <!-- Copyright tag -->
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2018 Anthony Robert Wythe (178520)</span></p>
            </div>
            <!-- Social buttons -->
            <div class="navbar-text float-right social">
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
            </div>
        </div>
    </nav> <!-- End of FOOTER contents-->




    <!-- CONTACT BUTTON MODAL -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h6 class="modal-title">3D App Contact Details</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>Anthony Wythe, MSc Computing with Digital Media, Email: aw399@sussex.ac.uk</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div> <!-- End of CONTACT MODAL contents -->






    <!-- LOAD JAVASCRIPT FILES -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.js" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/fontawesome-all.min.js"></script>
    <!-- Custom JavaScript code for your 3d App -->
    <script src="js/custom.js" crossorigin="anonymous"></script>
    <!-- JavaScript to swap for SPA and restyle -->
    <script src="js/swap_restyle.js"></script>
    <!-- Include the x3dom JavaScript -->
    <script type='text/javascript' src='js/x3dom.js'></script>
    <!-- Jab=vaScript and PHP based Gallery generator  -->
    <script type="text/javascript" src="js/gallery_generator.js"></script>
    <!-- Gets JSon Data-->
    <script src="js/getJsonData.js"></script>
    <!-- JavaScript model interactions -->
    <script src="js/modelInteractions.js"></script>

</body>
</html>
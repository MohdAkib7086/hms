<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <?php include 'links.php'; ?>
</head>

<body>
    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
    <br><br><br>
    <!-- body  -->
    <div class="container">
        <h2>Image Gallery</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="images/os-1.jpg" target="_blank">
                        <img src="images/os-1.jpg" alt="Lights" style="width:100%">
                        <div class="caption">
                            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="images/os-2.jpg" target="_blank">
                        <img src="images/os-2.jpg" alt="Nature" style="width:100%">
                        <div class="caption">
                            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="images/os-3.jpg" target="_blank">
                        <img src="images/os-3.jpg" alt="Fjords" style="width:100%">
                        <div class="caption">
                            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="images/in-1.jpg" target="_blank">
                            <img src="images/in-1.jpg" alt="Lights" style="width:100%">
                            <div class="caption">
                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="images/in-2.jpg" target="_blank">
                            <img src="images/in-2.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="images/in-3.jpg" target="_blank">
                            <img src="images/in-3.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- footer  -->
    <?php require_once 'footer.php'; ?>
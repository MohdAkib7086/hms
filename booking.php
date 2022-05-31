<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resort booking form</title>
    <?php include 'links.php'; ?>
</head>
<body style="background-image:url(resort.jpg);">
    </div> -->
    <div class="container bg-dark text-white">
        <div class="row">
            <div class="col-sm-6">
                <div id="content">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" id="input-group" placeholder="First name">
                </div>

                <div id="content">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="number" id="input-group" placeholder="Phone number">
                </div>

                <div id="content">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input type="text" id="input-group" placeholder="Departure Date">
                </div>

                <div id="content">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <select id="input-group">
                        <option value="">No.of guests</option>
                        <option value="">1-5</option>
                        <option value="">6-10</option>
                        <option value="">11-20</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="content">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" id="input-group" placeholder="Last name">
                </div>

                <div id="content">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="email" id="input-group" placeholder="Email">
                </div>

                <div id="content">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input type="text" id="input-group" placeholder="Arrival Date">
                </div>

                <div id="content">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <select id="input-group">
                        <option value="">Room Type</option>
                        <option value="">AC</option>
                        <option value="">Non-AC</option>
                        <option value="">Single Bed</option>
                        <option value="">Double Bed</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
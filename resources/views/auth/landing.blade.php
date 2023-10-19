<!doctype html>
<html lang="en">

<!-- Mirrored from tanshcreative.com/reals-lp-preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 09:04:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>BPS</title>
    <meta name="author" content="tansh">
    <meta name="description" content="HTML Landing Page Teamplate">
    <meta name="keywords" content="real estate, agency, business, one page">

    <!-- FAVICON FILES -->
    <link href="landing/assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon"
        sizes="144x144">
    <link href="landing/assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon"
        sizes="120x120">
    <link href="landing/assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="landing/assets/images/icons/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="landing/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="landing/assets/fonts/iconfonts.css">
    <link rel="stylesheet" href="landing/assets/css/plugins.css">
    <link rel="stylesheet" href="landing/assets/css/style.css">
    <link rel="stylesheet" href="landing/assets/css/responsive.css">
    <link rel="stylesheet" href="landing/assets/css/color.css">
    <link rel="stylesheet" href="landing/assets/css/modal.css">


</head>
<style>
/* file upload button */
input[type="file" accept=".pdf"]::file-selector-button {
    border-radius: 4px;
    padding: 0 16px;
    height: 40px;
    cursor: pointer;
    background-color: white;
    border: 1px solid rgba(0, 0, 0, 0.16);
    box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
    margin-right: 16px;
    transition: background-color 200ms;
}

/* file upload button hover state */
input[type="file" accept=".pdf"]::file-selector-button:hover {
    background-color: #f3f4f6;
    border: #1e247e 2px solid;
}

/* file upload button active state */
input[type="file" accept=".pdf"]::file-selector-button:active {
    background-color: #e5e7eb;
}

    {
    border-bottom: 1px solid grey;
}

/* ------------------------ */
</style>

<body>
    <div id="dtr-wrapper" class="clearfix">
        <!-- == main content starts == -->
        <div id="dtr-main-content">

            <!-- hero section starts
================================================== -->
            <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
                <!-- dtr-bg-shapes-type-1 : Class for shapes to background. Easy to change image color, refer local help doc -->
                <div class="dtr-box-wrapper-round dtr-bg-shapes-type-1 bg-white">

                    <!--===== row 1 starts =====-->
                    <div class="row">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6 dtr-box-full-img"
                            style="background-image: url(landing/assets/images/img-1.jpg);"> </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 dtr-py-100 dtr-sm-p-50 dtr-px-100">

                            <!-- intro text -->
                            <h1>Welcome to CSSP metaverse</h1>
                            <!-- button 1 -->
                            <a href="/logins"
                                class="dtr-btn dtr-btn-right-icon dtr-mt-30 dtr-mr-5 btn-dark-blue">Login<span
                                    class="btn-span bg-blue color-white"><i class="icon-arrow-right"></i></span></a>
                            <!-- button 2 -->
                            <a href="#modalMultiStep" class="dtr-btn dtr-btn-right-icon dtr-mt-30 btn-blue trigger"
                                data-backdrop="static" data-keyboard="false" data-toggle="modal">Apply For Permit<span
                                    class="btn-span bg-white color-blue "><i class="icon-arrow-right"></i></span></a>
                            <!-- buttons end -->


                            <!-- column 2 ends -->

                        </div>
                        <!--===== row 1 ends =====-->

                    </div>
            </section>
            <div class="container">
                <!-- Modal -->
                <div id="modalMultiStep" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header  (1/3) -->
                            <div class="container">
                                <div class="modal-header">
                                    <span style="display: flex; align-self: center;">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button></span>
                                    <div
                                        style="margin: auto;padding-top: 1%; display: flex; justify-content: center; align-self: center; align-items: center;">
                                        <h3 id="myModalLabel" style="font-size: 30px;">Add Properties</h3>
                                    </div>
                                </div>

                                <section class="signup-step-container">

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-10">
                                            <div class="wizard">
                                                <div class="wizard-inner">
                                                    <div class="connecting-line"></div>
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active">
                                                            <a href="#step1" data-toggle="tab" aria-controls="step1"
                                                                role="tab" aria-expanded="true"><span
                                                                    class="round-tab">1
                                                                </span> <i>Step 1</i></a>
                                                        </li>
                                                        <li role="presentation" class="disabled">
                                                            <a href="#step2" data-toggle="tab" aria-controls="step2"
                                                                role="tab" aria-expanded="false"><span
                                                                    class="round-tab">2</span> <i>Step 2</i></a>
                                                        </li>
                                                        <li role="presentation" class="disabled">
                                                            <a href="#step3" data-toggle="tab" aria-controls="step3"
                                                                role="tab"><span class="round-tab">3</span> <i>Step
                                                                    3</i></a>
                                                        </li>
                                                        <li role="presentation" class="disabled">
                                                            <a href="#step4" data-toggle="tab" aria-controls="step4"
                                                                role="tab"><span class="round-tab">4</span> <i>Step
                                                                    4</i></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="login-box">
                                                    <div class="tab-content" id="main_form">
                                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                                            <h4 class="text-center">Property</h4>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <input type="hidden" id="hidden">
                                                                        <label>Name</label>
                                                                        <input class="form-control wizzy" type="text"
                                                                            name="name" id="name" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Start Date</label>
                                                                        <input class="form-control" type="date"
                                                                            name="start_date" id="start_date"
                                                                            placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>End Date</label>
                                                                        <input class="form-control" type="date"
                                                                            name="end_date" id="end_date"
                                                                            placeholder="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Ownership Docs</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" accept=".pdf" class=""
                                                                                id="ownership_doc">
                                                                            <!-- <label class="custom-file-label"
                                                                                for="customFile">Select file</label> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Estimated Cost</label>
                                                                        <div class="custom-file">
                                                                            <input type="number" class="form-control"
                                                                                id="estimated_cost">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Location</label>
                                                                        <div class="custom-file">
                                                                            <input type="text" class="form-control"
                                                                                id="location">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Latitude</label>
                                                                        <div class="custom-file">
                                                                            <input type="text" class="form-control"
                                                                                id="latitude">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Longitude</label>
                                                                        <div class="custom-file">
                                                                            <input type="text" class="form-control"
                                                                                id="longitude">

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div id="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Radius</label>
                                                                                <div class="custom-file">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="radius">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">

                                                                            <div class="form-group">
                                                                                <label>Area</label>
                                                                                <div class="custom-file">
                                                                                    <input type="text"
                                                                                        class="form-control" id="area">

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="custom-file">

                                                                            <label for="" class="form-label"> Property
                                                                                Description</label>
                                                                            <textarea class="form-control wizzy"
                                                                                name="property_description"
                                                                                id="property_description"
                                                                                rows="3"></textarea>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">

                                                                        <div class="custom-file">
                                                                            <label for="map">Select Location on
                                                                                Map</label>
                                                                            <div id="map-canvas" style="height: 400px;">
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button" class="default-btn next-step"
                                                                        style="color: white;background: #1e247e;">Continue
                                                                        to next
                                                                        step</button></li>

                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane" role="tabpanel" id="step2">
                                                            <h4 class="text-center">Permit</h4>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Applicant</label>

                                                                        <input type="email" class="form-control"
                                                                            id="applicant">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Permit Type</label>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            id="permit_type">
                                                                            <option selected>Open this select menu
                                                                            </option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Development Type</label>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            id="development">
                                                                            <option selected>Select</option>
                                                                            <option value="Building_permit">Building
                                                                                Permit</option>
                                                                            <option value="Development_permit">
                                                                                Development Permit</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Permit Status</label>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            id="permit_status">
                                                                            <option selected>Open this select menu
                                                                            </option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Application Date</label>
                                                                        <input class="form-control" id="applicant_date"
                                                                            type="date" name="name" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Approvel Date</label>
                                                                        <input class="form-control" id="approval_date"
                                                                            type="date" name="name" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Expiry Date</label>
                                                                        <input class="form-control" id="expiry_date"
                                                                            type="date" name="name" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button"
                                                                        class="default-btn prev-step">Back</button></li>

                                                                <li><button type="button" class="default-btn next-step"
                                                                        style="color: white;background: #1e247e;">Continue</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane" role="tabpanel" id="step3">
                                                            <h4 class="text-center">Payment</h4>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Fee Paid</label>
                                                                        <input id="fee_paid" type="number" name="fee_paid"
                                                                            placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Fee Slip</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" accept=".pdf" class="" id="fee_slip">
                                                                            <!-- <label class="custom-file-label"
                                                                                for="customFile">Select file</label> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button"
                                                                        class="default-btn prev-step">Back</button></li>
                                                                <li><button type="button" class="default-btn next-step"
                                                                        style="color: white;background: #1e247e;">Continue</button>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                        <div class="tab-pane" role="tabpanel" id="step4">
                                                            <h4 class="text-center">Document</h4>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Drawing Docs</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" accept=".pdf" class=""
                                                                                id="drawing_doc">
                                                                            <!-- <label class="custom-file-label"
                                                                                for="customFile">Select file</label> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Structure Drawing Docs</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" accept=".pdf" class="" id="st_drawing">
                                                                            <!-- <label class="custom-file-label"
                                                                                for="customFile">Select file</label> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Soil Docs</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" accept=".pdf" class="" id="soil_doc">
                                                                            <!-- <label class="custom-file-label"
                                                                                for="customFile">Select file</label> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Fire Docs</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" accept=".pdf" class="" id="fire_doc">
                                                                            <!-- <label class="custom-file-label"
                                                                                for="customFile">Select file</label> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Agency Docs</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" accept=".pdf" class="" id="agency_doc">
                                                                            <!-- <label class="custom-file-label"
                                                                                for="customFile">Select file</label> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Integrity Docs</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" accept=".pdf" id="integrity_doc">
                                                                            <!-- <label class="custom-file-label"
                                                                                for="customFile">Select file</label> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button"
                                                                        class="default-btn prev-step">Back</button></li>
                                                                <li><button type="button" class="default-btn next-step"
                                                                        style="color: white;background: #1e247e;"
                                                                        onclick="submit()">Finish</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </section>
                        </div>
                        <!-- == main content ends == -->


                    </div>
                    <!-- #dtr-wrapper ends -->

                    <!-- JS FILES -->
                    <script src="landing/assets/js/jquery.min.js"></script>
                    <script src="landing/assets/js/bootstrap.min.js"></script>
                    <script src="landing/assets/js/plugins.js"></script>
                    <!-- <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNyJWb04pByaU1CTmimoWNl3b86VV6qZ8&callback=initMap"></script> -->

                    <script
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNyJWb04pByaU1CTmimoWNl3b86VV6qZ8&callback=initMap&libraries=drawing&v=weekly"
                        defer></script>

                    <script src="landing/assets/js/slick.min.js"></script>

                    <script src="landing/assets/js/custom.js"></script>
                    <script>
                    var geofence;
                    var marker;

                    let map;
                    var circle;

                    function initMap() {

                        gmarkers = [];
                        map = new google.maps.Map(document.getElementById("map-canvas"), {
                            center: {
                                lat: 7.9465,
                                lng: 1.0232
                            },
                            zoom: 6,

                        });


                        const drawingManager = new google.maps.drawing.DrawingManager({
                            // drawingMode: google.maps.drawing.OverlayType.MARKER,
                            drawingControl: true,
                            drawingControlOptions: {
                                position: google.maps.ControlPosition.TOP_CENTER,
                                drawingModes: [
                                    google.maps.drawing.OverlayType.CIRCLE,
                                    // google.maps.drawing.OverlayType.POLYGON,
                                ],
                            },
                            // markerOptions: {
                            //   icon:
                            //     "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                            // },
                            circleOptions: {
                                fillColor: "lightGreen",
                                fillOpacity: 0.4,
                                strokeWeight: 5,
                                clickable: false,
                                editable: true,
                                zIndex: 1,
                            },
                        });
                        drawingManager.setMap(map);
                        google.maps.event.addListener(drawingManager, 'circlecomplete', onCircleComplete);
                        // google.maps.event.addListener(drawingManager, 'polygoncomplete', polygon);
                    }
                    var circle_point = [];

                    function onCircleComplete(shape) {
                        if (shape == null || (!(shape instanceof google.maps.Circle))) return;

                        if (circle != null) {
                            circle.setMap(null);
                            circle = null;
                        }

                        circle = shape;
                        // console.log('radius', circle.getRadius());
                        // console.log('lat', circle.getCenter().lat());
                        // console.log('lng', circle.getCenter().lng());

                        var radius = circle.getRadius();
                        // console.log(radius);
                        var cirlat = circle.getCenter().lat();
                        // console.log(cirlat);
                        var cirlng = circle.getCenter().lng();
                        // console.log(cirlng);

                        var time = new Date();
                        var currentTime = time.toLocaleString();
                        circle_point.push(cirlat + ", " + cirlng)
                        console.log(circle_point)

                        // alert(n);

                        // alert(" lat => "+ cirlat +" long => "+ cirlng+"Radius => "+radius );
                        document.getElementById("latitude").value = cirlat;
                        document.getElementById("longitude").value = cirlng;
                        document.getElementById("radius").value = radius;
                        circle_point = [];
                    }

                    // ------------step-wizard-------------
                    $(document).ready(function() {
                        load_select();
                        $('.nav-tabs > li a[title]').tooltip();

                        //Wizard
                        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

                            var target = $(e.target);

                            if (target.parent().hasClass('disabled')) {
                                return false;
                            }
                        });

                        $(".next-step").click(function(e) {

                            var active = $('.wizard .nav-tabs li.active');
                            active.next().removeClass('disabled');
                            nextTab(active);

                        });
                        $(".prev-step").click(function(e) {

                            var active = $('.wizard .nav-tabs li.active');
                            prevTab(active);

                        });
                    });

                    function nextTab(elem) {
                        $(elem).next().find('a[data-toggle="tab"]').click();
                    }

                    function prevTab(elem) {
                        $(elem).prev().find('a[data-toggle="tab"]').click();
                    }


                    $('.nav-tabs').on('click', 'li', function() {
                        $('.nav-tabs li.active').removeClass('active');
                        $(this).addClass('active');
                    });

                    // function alertdesc(){
                    //   desc=  $('#property_description').val();
                    //   name=$('#name').val()
                    //   alert(desc)
                    // }
                    function submit() {

                        var allFieldsFilled = true;
                        var emptyFields = [];

                        // Check if all input fields, select elements, and textarea elements within the div are filled
                        $(".wizzy").each(function() {
                            if ($(this).val() === '') {
                                // Add the name of the empty field to the array
                                console.log(this)
                                emptyFields.push($(this).attr("name"));

                            }
                        });

                        if (emptyFields.length === 0) {

                            var update_id = document.getElementById("hidden").value;
                            console.log(update_id);
                            if (update_id == 0) {

                                var form = new FormData();
                                form.append("project_name", $('#name').val());
                                form.append("start_date", $('#start_date').val());
                                form.append("completion_date", $('#end_date').val());

                                // form.append("ownership_doc", $('#ownership_doc').val());

                                var fileInput = document.getElementById('ownership_doc');
                                console.log(fileInput.files[0]);
                                form.append('ownership_doc', fileInput.files[0]);

                                form.append("estimated_cost", $('#estimated_cost').val());
                                form.append("location_name", $('#location').val());
                                form.append("latitude", $('#latitude').val());
                                form.append("longitude", $('#longitude').val());
                                form.append("radius", $('#radius').val());
                                form.append("area", $('#area').val());
                                form.append("project_description", $('#property_description').val());
                                form.append("user_id", '1');

                                form.append("applicant", $('#applicant').val());
                                form.append("permit_type", $('#permit_type').val());
                                form.append("development", $('#development').val());
                                form.append("permit_status", $('#permit_status').val());
                                form.append("applicant_date", $('#applicant_date').val());
                                form.append("approval_date", $('#approval_date').val());
                                form.append("expiry_date", $('#expiry_date').val());

                                var fee_paid = document.getElementById('fee_paid');
                                form.append('fee_paid', fee_paid.files[0]);

                                var fee_slip = document.getElementById('fee_slip');
                                form.append('fee_slip', fee_slip.files[0]);

                                var drawing_doc = document.getElementById('drawing_doc');
                                form.append('drawing_doc', drawing_doc.files[0]);

                                var st_drawing = document.getElementById('st_drawing');
                                form.append('st_drawing', st_drawing.files[0]);

                                var soil_doc = document.getElementById('soil_doc');
                                form.append('soil_doc', soil_doc.files[0]);

                                var fire_doc = document.getElementById('fire_doc');
                                form.append('fire_doc', fire_doc.files[0]);

                                var agency_doc = document.getElementById('agency_doc');
                                form.append('agency_doc', agency_doc.files[0]);

                                var integrity_doc = document.getElementById('integrity_doc');
                                form.append('integrity_doc', integrity_doc.files[0]);



                                var settings = {
                                    "url": "http://151.106.17.246:8000/api/building_permits_applicant",
                                    "method": "POST",
                                    "timeout": 0,
                                    "processData": false,
                                    "mimeType": "multipart/form-data",
                                    "contentType": false,
                                    "data": form,
                                    crossDomain: true, // Enable cross-domain requests
                                    xhrFields: {
                                        withCredentials: false, // Set to true if you need to include credentials (cookies, authentication)
                                    },
                                };

                                $.ajax({
                                    ...settings,
                                    statusCode: {
                                        200: function(response) {
                                            console.log(response);
                                            $('#modalMultiStep').modal('hide');
                                            console.log("Request was successful");
                                            $('#fetchres').find('input:text').val('');
                                            document.getElementById('hidden').value = "";
                                            // fetchtable();
                                            Swal.fire(
                                                'Success!',
                                                'Property Created Successfully',
                                                'success'
                                            )

                                            setTimeout(function() {
                                                window.location.reload();

                                            }, 2000);
                                        },
                                    },
                                    success: function(data) {
                                        console.log('Hamza');
                                        console.log(data);

                                        // $('#myModal').reset();
                                        // Additional success handling if needed
                                    },
                                    error: function(xhr, textStatus, errorThrown) {
                                        console.log(errorThrown);
                                        console.log(xhr);
                                        console.log(textStatus);
                                        Swal.fire(
                                            'Server Error!',
                                            'Property Not Created',
                                            'error'
                                        )
                                    }
                                });

                            } else {
                                var subid = $('#subtype').find(":selected").val();
                                var settings = {
                                    "url": "api/vendors/" + update_id + "",
                                    "method": "PUT",
                                    "timeout": 0,
                                    "headers": {
                                        "Content-Type": "application/json"
                                    },
                                    "data": JSON.stringify({
                                        "company_id": "0",
                                        "vendor_type_id": subid,
                                        "name": document.getElementById("name").value,
                                        "email": document.getElementById("email").value,
                                        "phone": document.getElementById("phone").value,
                                        "alternate_phone": document.getElementById("aphone").value,
                                        "address_1": document.getElementById("address_1").value,
                                        "address_2": document.getElementById("address_2").value,
                                        "latitude": document.getElementById("latitude").value,
                                        "longitude": document.getElementById("longitude").value,
                                        "city": document.getElementById("city").value,
                                        "state": document.getElementById("state").value,
                                        "country": document.getElementById("country").value,
                                        "zipcode": document.getElementById("zipcode").value,
                                        "status": 1
                                    }),
                                };

                                $.ajax({
                                    ...settings,
                                    statusCode: {
                                        200: function(response) {
                                            console.log(response);
                                            $('#myModal').modal('hide');
                                            $('#fetchres').find('input:text').val('');
                                            document.getElementById('hidden').value = "0";


                                            fetchtable();
                                            Swal.fire(
                                                'Success!',
                                                'Property updated Successfully',
                                                'success'
                                            )
                                        },
                                    },
                                    success: function(data) {
                                        // Additional success handling if needed
                                    },
                                    error: function(xhr, textStatus, errorThrown) {
                                        Swal.fire(
                                            'Server Error!',
                                            'Property Not updated',
                                            'error'
                                        )
                                    }
                                });



                                // alert("Update Records Here");

                            }
                        } else {
                            // Not all fields are filled, display an error message or take appropriate action
                            var errorMessage = "Please fill in the following fields: " + emptyFields.join(", ");
                            // $("#errorMessage").text(errorMessage);
                            Swal.fire(
                                'Please fill in the following fields!',
                                errorMessage,
                                'error'
                            )
                        }


                    }

                    function load_select() {
                        $.ajax({
                            url: "api/permmit_type",
                            type: 'GET',
                            dataType: 'json',
                            success: function(response) {
                                console.log('response');
                                console.log(response);
                                $('#permit_type').empty();

                                // Append new options to the select
                                $('#permit_type').append($('<option>', {
                                    value: '',
                                    text: 'Select   '
                                }));
                                $.each(response, function(index, item) {
                                    $('#permit_type').append($('<option>', {
                                        value: item.id,
                                        text: item.type
                                    }));
                                });

                            }
                        });


                        $.ajax({
                            url: "api/permmit_status",
                            type: 'GET',
                            dataType: 'json',
                            success: function(response) {
                                console.log('response');
                                console.log(response);
                                $('#permit_status').empty();

                                // Append new options to the select
                                $('#permit_status').append($('<option>', {
                                    value: '',
                                    text: 'Select   '
                                }));
                                $.each(response, function(index, item) {
                                    $('#permit_status').append($('<option>', {
                                        value: item.id,
                                        text: item.status
                                    }));
                                });

                            }
                        });
                    }
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
                        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
                        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

<!-- Mirrored from tanshcreative.com/reales-lp-preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 09:05:58 GMT -->

</html>
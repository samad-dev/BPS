<!doctype html>
<html lang="en">





<!-- Mirrored from them
esdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->


<head>



    <meta charset="utf-8" />
    <title>Properties | BPS</title>
    <meta name="viewpor
t" conten t="width=device-width, initial-scale=1.0">
    {{-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> --}}
    <meta content="Themesdesign" name="author" />
    <!-- App favicon --

>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




    @include('partials.style')

    <script src="https:
//polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNyJWb04pByaU1CTmimoWNl3b86VV6qZ8&callback=initMap&libraries=drawing&v=weekly"
        defer></script>
</head>


<body data-layout-mode="bordered" data-topbar="dark" data-sidebar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('partials.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('partials.navbar')
        <!-- Left Sidebar End -->
        @include('partials.horizontal_head')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-2">

                                            <h4 class="card-title mb-0 pt-3">Properties</h4>
                                        </div>
                                        <div class="col-md-6">
                                            {{-- <button type="button" class="btn btn-soft-primary waves-effect waves-light"  data-bs-toggle="modal" data-bs-target="#myModal">
                                                     Add New
                                                </button> --}}
                                            <button class="btn btn-soft-primary waves-effect waves-light" type="button"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                aria-controls="offcanvasRight"><i
                                                    class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i>Add
                                                New</button>
                                            {{-- <button type="button" class="btn btn-primary waves-effect waves-light">Add New</button> --}}
                                        </div>
                                    </div>

                                </div><!-- end card header -->
                                <div class="card-body" id='formContainer'>
                                    <!-- <form method="post" id="create_property" enctype="multipart/form-data"> -->
                                    <ul class="wizard-nav mb-5">
                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Property Details">
                                                    <i class="bx bx-user-circle"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Permit Details">
                                                    <i class="bx bx-file"></i>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Documents">
                                                    <i class="bx bx-edit"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div class="wizard-tab step" data-step="1">
                                        <div class="text-center mb-4">
                                            <h5>Property Details</h5>
                                            <p class="card-title-desc">Fill all information below</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-firstname" class="form-label">
                                                            Name</label>
                                                        <input type="text" class="form-control wizzy" id="name" name='name'
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-email" class="form-label"> Start
                                                            Date</label>
                                                        <input type="date" class="form-control wizzy" id="start_date"
                                                            name='start_date' required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-email" class="form-label"> End
                                                            Date</label>
                                                        <input type="date" class="form-control wizzy" id="end_date"
                                                            name='end_date' required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Ownership
                                                            Doc</label>
                                                        <input type="file" accept=".pdf" class="form-control wizzy" id="ownership_doc"
                                                            name='ownership_doc'  required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputCity" class="form-label">Estimated
                                                            Cost</label>
                                                        <input type="text" class="form-control wizzy" id="estimated_cost"
                                                            name='estimated_cost' required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-inputZip"
                                                            class="form-label">Location</label>
                                                        <input type="text" class="form-control wizzy" id="location"
                                                            name='location' required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-Latitude"
                                                            class="form-label">Latitude</label>
                                                        <input type="text" class="form-control wizzy" id="latitude"
                                                            name='latitude' required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-Longitude"
                                                            class="form-label">Longitude</label>
                                                        <input type="text" class="form-control wizzy" id="longitude"
                                                            name='longitude' required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-city" class="form-label">Radius</label>
                                                        <input type="text" class="form-control wizzy" id="radius"
                                                            name='radius' required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="formrow-city" class="form-label">Area</label>
                                                        <input type="text" class="form-control wizzy" id="area" name='area'
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="map-canvas" style="width: 100%; height: 30vh; z-index: 0;"
                                                        class="">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="formrow-State" class="form-label">Property
                                                            Description</label>
                                                        <textarea class="form-control wizzy" id="Property_description"
                                                            name="Property_description" rows="4" cols="50" required>
                                                            </textarea>
                                                    </div>
                                                </div>

                                            </div><!-- end row -->
                                        </div>

                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="wizard-tab step" data-step="2">
                                        <div>
                                            <div class="text-center mb-4">
                                                <h5>Permit Detail</h5>
                                                <p class="card-title-desc">Fill all information below</p>
                                            </div>
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-firstname"
                                                                class="form-label">Applicant</label>
                                                            <!-- <input type="text" class="form-control" id="name" name='name'> -->
                                                            <select class="form-control select_ wizzy"
                                                                name="applicant" id="applicant"
                                                                placeholder="This is a search placeholder">

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-firstname" class="form-label">Permit
                                                                Type</label>
                                                            <!-- <input type="text" class="form-control" id="name" name='name'> -->
                                                            <select class="form-control select_ wizzy" id="permit_type"
                                                                name='permit_type'
                                                                placeholder="This is a search placeholder">

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-firstname"
                                                                class="form-label">Development Type</label>
                                                            <!-- <input type="text" class="form-control" id="name" name='name'> -->
                                                            <select class="form-control select_ wizzy" id="development"
                                                                name='development'
                                                                placeholder="This is a search placeholder">
                                                                <option value=""></option>
                                                                <option value="Building_permit">Building Permit
                                                                </option>
                                                                <option value="Development_permit">Development
                                                                    Permit</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-firstname" class="form-label">Permit
                                                                Status</label>
                                                            <!-- <input type="text" class="form-control" id="name" name='name'> -->
                                                            <select class="form-control select_ wizzy"  id="permit_status"
                                                                name='permit_status'
                                                                placeholder="This is a search placeholder">

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-email" class="form-label">
                                                                Application Date</label>
                                                            <input type="date" class="form-control wizzy" id="applicant_date"
                                                                name='applicant_date'>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-email" class="form-label"> Approval
                                                                Date</label>
                                                            <input type="date" class="form-control wizzy" id="approval_date"
                                                                name='approval_date'>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputCity" class="form-label">Expriry
                                                                Date</label>
                                                            <input type="date" class="form-control wizzy" id="expiry_date"
                                                                name='expiry_date'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputCity" class="form-label">Fee
                                                                Paid</label>
                                                            <input type="number" class="form-control wizzy"
                                                                id="estimated_cost" name='estimated_cost'>
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputCity" class="form-label">Fee
                                                                Slip</label>
                                                            <input type="file" accept=".pdf" class="form-control wizzy" id="fee_slip"
                                                                name='fee_slip'>
                                                        </div>
                                                    </div><!-- end col -->
                                                </div><!-- end row-->
                                            </div><!-- end form -->
                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="wizard-tab step" data-step="3">
                                        <div>
                                            <div class="text-center mb-4">
                                                <h5>Documents Details</h5>
                                                <p class="card-title-desc">Fill all information below</p>
                                            </div>
                                            <div>
                                                <div class="row">
                                                   

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-Latitude" class="form-label">Drawing
                                                                Doc</label>
                                                            <input type="file" accept=".pdf" class="form-control wizzy" id="drawing_doc"
                                                                name='drawing_doc'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-Longitude" class="form-label">Structure
                                                                Drawing Doc</label>
                                                            <input type="file" accept=".pdf" class="form-control wizzy" id="st_drawing"
                                                                name='st_drawing'>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-city" class="form-label">Soil
                                                                Doc</label>
                                                            <input type="file" accept=".pdf" class="form-control wizzy" id="soil_doc"
                                                                name='soil_doc'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-city" class="form-label">Fire
                                                                Doc</label>
                                                            <input type="file" accept=".pdf" class="form-control wizzy" id="fire_doc"
                                                                name='fire_doc'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-city" class="form-label">Agency
                                                                Doc</label>
                                                            <input type="file" accept=".pdf" class="form-control wizzy" id="agency_doc"
                                                                name='agency_doc'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-city" class="form-label">Integrity
                                                                Doc</label>
                                                            <input type="file" accept=".pdf" class="form-control wizzy" id="integrity_doc"
                                                                name='integrity_doc'>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->

                                            </div><!-- end form -->
                                            <input class="form-control" type="hidden" id="hidden" name="hidden" value="0">

                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-primary w-sm" id="prevBtn"
                                            onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn"
                                            onclick="nextPrev(1)">Next</button>
                                    </div>
                                    <!-- </form> -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>


                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->
        @include('partials.footer')
    </div>
    <!-- END layout-wrapper -->
    @include('partials.right_bar')
    <!-- Right Sidebar -->

    <!-- JAVASCRIPT -->
    <!-- right offcanvas -->
    
    @include('partials.script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </body>
    <script>
    var table;
    var type;
    var subtype;
    $(document).ready(function() {
        load_all_select();
        new Choices("#development", {
            removeItemButton: !0,
        })
        table = $('#myTable').DataTable({
            dom: 'Bfrtip',


            buttons: ['copy', 'excel', 'csv', 'pdf', 'print']

        });
        fetchtable();




    });

    function fetchtable() {
        var settings = {
            "url": "api/projects",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function(response) {
            // alert('response');
            console.log(response);
            table.clear().draw();
            $.each(response, function(index, data) {

                table.row.add([
                    index + 1,
                    data.project_name,
                    data.start_date,
                    data.completion_date,
                    // data.ownership_doc,
                    "<a class='btn btn-soft-warning waves-effect waves-light text-center' href='storage/" +
                    data.ownership_doc +
                    "' target='_blank'><i class='far fa-file-pdf' style='font-size: 24px;'></a>",
                    data.estimated_cost,
                    data.location_name,
                    data.latitude,
                    data.longitude,
                    data.radius,
                    data.area,
                    data.status,
                    data.created_at,
                    '<button type="button"id="edit" name="edit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"  onclick="editData(' +
                    data.id +
                    ')"  class="btn btn-soft-warning waves-effect waves-light"><i class="bx bx-edit-alt font-size-16 align-middle"></i></button>',
                    '<button type="button" id="delete" name="delete" onclick="deleteData(' +
                    data.id +
                    ')" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-trash-alt font-size-16 align-middle"></i></button>'
                ]).draw(false);
            });
        });
    }

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

        if (emptyFields.length  === 0) {

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
                form.append("project_description", $('#Property_description').val());
                form.append("user_id", '1');

                form.append("applicant", $('#applicant').val());
                form.append("permit_type", $('#permit_type').val());
                form.append("development", $('#development').val());
                form.append("permit_status", $('#permit_status').val());
                form.append("applicant_date", $('#applicant_date').val());
                form.append("approval_date", $('#approval_date').val());
                form.append("expiry_date", $('#expiry_date').val());
                form.append("estimated_cost", $('#estimated_cost').val());

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
                    "url": "api/building_permits",
                    "method": "POST",
                    "timeout": 0,
                    "processData": false,
                    "mimeType": "multipart/form-data",
                    "contentType": false,
                    "data": form
                };

                $.ajax({
                    ...settings,
                    statusCode: {
                        200: function(response) {
                            console.log(response);
                            $('#myModal').modal('hide');
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

    function editData(id) {
        // alert(id);
        var settings = {
            "url": "api/vendors/" + id + "",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax({
            ...settings,
            statusCode: {
                200: function(response) {
                    console.log(response[0]['name']);
                    document.getElementById('hidden').value = response[0]['id'];
                    document.getElementById("name").value = response[0]["name"];
                    document.getElementById("email").value = response[0]["email"];
                    document.getElementById("phone").value = response[0]["phone"];
                    document.getElementById("aphone").value = response[0]["alternate_phone"];
                    document.getElementById("address_1").value = response[0]["address_1"];
                    document.getElementById("address_2").value = response[0]["address_2"];
                    document.getElementById("latitude").value = response[0]["latitude"];
                    document.getElementById("longitude").value = response[0]["longitude"];
                    document.getElementById("city").value = response[0]["city"];
                    document.getElementById("state").value = response[0]["state"];
                    document.getElementById("country").value = response[0]["country"];
                    document.getElementById("zipcode").value = response[0]["zipcode"];

                    // document.getElementById("labelc").innerHTML = 'Update'


                },
                // Add more status code handlers as needed
            },
            success: function(data) {
                // Additional success handling if needed
            },
            error: function(xhr, textStatus, errorThrown) {
                Swal.fire(
                    'Server Error!',
                    '',
                    'error'
                )

                // console.log("Request failed with status code: " + xhr.status);
            }
        });

    }

    function deleteData(id) {
        var settings = {
            "url": "api/vendors/" + id + "",
            "method": "DELETE",
            "timeout": 0,
        };
        $.ajax({
            ...settings,
            statusCode: {
                200: function(response) {
                    console.log(response);
                    // $('#myModal').modal('hide');
                    // console.log("Request was successful");
                    fetchtable();
                    Swal.fire(
                        'Success!',
                        'Property Deleted Successfully',
                        'success'
                    )
                },
                // Add more status code handlers as needed
            },
            success: function(data) {
                // Additional success handling if needed
            },
            error: function(xhr, textStatus, errorThrown) {
                Swal.fire(
                    'Server Error!',
                    'Property Unit Not Deleted',
                    'error'
                )

                // console.log("Request failed with status code: " + xhr.status);
            }
        });
    }
    </script>
    <script>
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

    function load_all_select() {
        $.ajax({
            url: "api/projects",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log('response');
                console.log(response);
                type = new Choices("#project", {
                    removeItemButton: !0,
                })
                type.clearChoices();
                console.log(response);
                type.setChoices(response,
                    'Id',
                    'project_name',
                    false, );
            }
        });

        $.ajax({
            url: "api/permmit_type",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log('response');
                console.log(response);
                type = new Choices("#permit_type", {
                    removeItemButton: !0,
                })
                type.clearChoices();
                console.log(response);
                type.setChoices(response,
                    'id',
                    'type',
                    false, );
            }
        });

        $.ajax({
            url: "api/users",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log('response');
                console.log(response);
                type = new Choices("#applicant", {
                    removeItemButton: !0,
                })
                type.clearChoices();
                console.log(response);
                type.setChoices(response,
                    'id',
                    'name',
                    false, );
            }
        });
        $.ajax({
            url: "api/permmit_status",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log('response');
                console.log(response);
                type = new Choices("#permit_status", {
                    removeItemButton: !0,
                })
                type.clearChoices();
                console.log(response);
                type.setChoices(response,
                    'id',
                    'status',
                    false, );
            }
        });
    }
    </script>


</html>
<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Business Unit | Service Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> --}}
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    @include('partials.style')
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

                                            <h4 class="card-title mb-0 pt-3">Business Unit</h4>
                                        </div>
                                        <div class="col-md-6">
                                            {{-- <button type="button" class="btn btn-soft-primary waves-effect waves-light"  data-bs-toggle="modal" data-bs-target="#myModal">
                                                     Add New
                                                </button> --}}
                                            <button class="btn btn-soft-primary waves-effect waves-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i>Add
                                                New</button>
                                            {{-- <button type="button" class="btn btn-primary waves-effect waves-light">Add New</button> --}}
                                        </div>
                                    </div>

                                </div><!-- end card header -->
                                <div class="card-body">
                                    <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Company</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
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
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Create Business Units</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body" id="fetch_results">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 row">
                        <label for="formrow-inputState" class="form-label">Marketing Manager</label>
                        <div class="col-md-12">
                            <select class="form-control" name="parent" id="parent" placeholder="Marketing Manager">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 row">
                        <label for="formrow-inputState" class="form-label">Store Manager</label>
                        <div class="col-md-12">
                            <select class="form-control" name="store" id="store" placeholder="Store Manager">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Enter Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" id="name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-email" class="form-label">Enter Email</label>
                            <input type="text" class="form-control" placeholder="Enter Enter Email" id="email">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Phone" id="phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Alternate Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Alternate Phone" id="aphone">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Address 1</label>
                            <input type="text" class="form-control" placeholder="Enter Address 1" id="ad1">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Address 2</label>
                            <input type="text" class="form-control" placeholder="Enter Address 2" id="ad2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" placeholder="Enter Latitude" id="lat">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" placeholder="Enter Longitude" id="lng">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Country" class="form-label">Country</label>
                            <input type="text" class="form-control" placeholder="Enter Country" id="country">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-State" class="form-label">State</label>
                            <input type="text" class="form-control" placeholder="Enter State" id="state">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-city" class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="Enter City" id="city">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" placeholder="Enter Zip" id="zip">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-6 col-form-label">Additional
                            Fields</label>
                        <div class="col-md-6 p-1">

                            <button type="button" id="addfield" class="btn btn-outline-warning waves-effect waves-light"><i class="fas fa-plus-square"></i> Add More</button>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        {{-- <label for="example-text-input" class="col-md-2 col-form-label">Domain Members</label> --}}
                        <div class="col-md-12">
                            <div id="fields">
                                <input class="form-control" type="hidden" id="hidden" name="hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-10 col-form-label"></label>
                        <div class="col-md-2">

                            <button type="button" onclick="submit()" class="btn btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('partials.script')
</body>
<script>
    var table;
    var parent;
    var store;
    $(document).ready(function() {
        $.ajax({
            url: "api/users",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                parent = new Choices("#parent", {
                    removeItemButton: !0,
                })
                console.log(response);
                parent.setChoices(response,
                    'id',
                    'name',
                    false, );
            }
        });
        $.ajax({
            url: "api/users",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                store = new Choices("#store", {
                    removeItemButton: !0,
                })
                console.log(response);
                store.setChoices(response,
                    'id',
                    'name',
                    false, );
            }
        });
        var k = "The respective values are :";
        $("#addfield").click(function() {
            var newRowAdd =
                '<div id="row" class="row"><div class="input-group m-3">' +
                '<div class="col-6"><div class="input-group-prepend m-1"><input name="name2[]" class="form-control" type="text" placeholder="Additional Field"></div> </div>' +
                '<div class="col-4 mt-1"><select name="type[]" class="form-control " data-trigger name="choices-single-default" id="choices-single-default" placeholder=""><option>String</option><option>Number</option><option>Text</option></select> </div>' +
                '<div class="col-2"><div class="input-group-prepend">' +
                '<button type="button" id="DeleteRow" class="btn btn-outline-danger waves-effect waves-light m-1">Delete</button>' +
                '<i class="bi bi-trash"></i></button></div> </div></div>' +
                '';

            $('#fields').append(newRowAdd);

            // alert("The paragraph was clicked.");
        });


        $("body").on("click", "#DeleteRow", function() {
            $(this).parents("#row").remove();
        })
        table = $('#myTable').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'excel', 'csv', 'pdf', 'print']
        });
        fetchtable();
    });

    function fetchtable() {
        var settings = {
            "url": "api/business_units",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function(response) {
            console.log(response);
            table.clear().draw();
            $.each(response, function(index, data) {
                table.row.add([
                    index + 1,
                    data.company,
                    data.name,
                    data.email,
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
        var update_id = document.getElementById("hidden").value;
        console.log(update_id);
        if (update_id == 0) {
            var parent_id = $('#parent').find(":selected").val();
            var store_id = $('#store').find(":selected").val();

            var form = new FormData();
            form.append("company_id", "0");
            form.append("marketing_manager", parent_id);
            form.append("store_manager", store_id);
            form.append("bu_user", "1");
            form.append("name", document.getElementById("name").value);
            form.append("email", document.getElementById("email").value);
            form.append("phone", document.getElementById("phone").value);
            form.append("address_1", document.getElementById("ad1").value);
            form.append("address_2", document.getElementById("ad2").value);
            form.append("alternate_phone", document.getElementById("aphone").value);
            form.append("latitude", document.getElementById("lat").value);
            form.append("longitude", document.getElementById("lng").value);
            form.append("city", document.getElementById("city").value);
            form.append("state", document.getElementById("state").value);
            form.append("country", document.getElementById("country").value);
            form.append("zipcode", document.getElementById("zip").value);
            form.append("status", "1");
            form.append("properties", "[]");

            var settings = {
                "url": "api/business_units",
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
                        response = JSON.parse(response);
                        $('#myModal').modal('hide');
                        console.log("Request was successful");
                        // document.getElementById('example-text-input-title').value = "";
                        $('#fetch_results').find('input:text').val('');
                        document.getElementById('hidden').value = "";
                        fetchtable();

                        var k;
                        // var name = document.getElementsByName('name2[]');
                        // var type = document.getElementsByName('type[]');
                        var inserted_id = response['inserted_id'];
                        var input = document.getElementsByName('name2[]');
                        var input2 = document.getElementsByName('type[]');

                        for (var i = 0; i < input.length; i++) {
                            var a = input[i];
                            var b = input2[i];
                            k = k + "array[" + i + "].value= " +
                                a.value + "==" + b.value;
                            console.log(k)
                           
                            
                            var form = new FormData();
                            form.append("name", a.value);
                            form.append("type", b.value);
                            form.append("bu_id", inserted_id);
                            var setting2 = {
                                "url": "api/bu_fields",
                                "method": "POST",
                                "timeout": 0,
                                "processData": false,
                                "mimeType": "multipart/form-data",
                                "contentType": false,
                                "data": form
                            };

                            $.ajax({
                                ...setting2,
                                statusCode: {
                                    200: function(response) {

                                    },
                                    // Add more status code handlers as needed
                                },
                                success: function(data) {
                                    // $('#myModal').reset();
                                    // Additional success handling if needed
                                },
                                error: function(xhr, textStatus, errorThrown) {
                                    Swal.fire(
                                        'Server Error!',
                                        'Business Unit Not Created',
                                        'error'
                                    )

                                    // console.log("Request failed with status code: " + xhr.status);
                                }
                            });
                        }



                        Swal.fire(
                            'Success!',
                            'Business Unit Created Successfully',
                            'success'
                        )

                    },
                    // Add more status code handlers as needed
                },
                success: function(data) {
                    // $('#myModal').reset();
                    // Additional success handling if needed
                },
                error: function(xhr, textStatus, errorThrown) {
                    Swal.fire(
                        'Server Error!',
                        'Business Unit Not Created',
                        'error'
                    )

                    // console.log("Request failed with status code: " + xhr.status);
                }
            });

        } else {
            var market = $('#parent').find(":selected").val();
            var store = $('#store').find(":selected").val();
            var settings = {
                "url": "api/business_units/" + update_id + "",
                "method": "PUT",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    "company_id": 0,
                    "marketing_manager": market,
                    "store_manager": store,
                    "bu_user": null,
                    "name": document.getElementById("name").value,
                    "email": document.getElementById("email").value,
                    "phone": document.getElementById("phone").value,
                    "alternate_phone": document.getElementById("aphone").value,
                    "address_1": document.getElementById("ad1").value,
                    "address_2": document.getElementById("ad2").value,
                    "latitude": document.getElementById("lat").value,
                    "longitude": document.getElementById("lng").value,
                    "city": document.getElementById("city").value,
                    "state": document.getElementById("state").value,
                    "country": document.getElementById("country").value,
                    "zipcode": document.getElementById("zip").value,
                    "status": 0,
                    "created_by": 1,
                    "updated_by": 1,
                    "created_at": "2023-05-09 13:24:52",
                    "updated_at": "2023-05-09 13:25:17",
                    "deleted_at": null,
                    "properties": "[]"
                }),
            };

            $.ajax({
                ...settings,
                statusCode: {
                    200: function(response) {
                        console.log(response);
                        $('#myModal').modal('hide');
                        // document.getElementById('example-text-input-title').value = "";
                        $('#fetch_results').find('input:text').val('');
                        $('#fetch_results').find('select').val('');
                        document.getElementById('hidden').value = "";
                        // console.log("Request was successful");
                        fetchtable();
                        Swal.fire(
                            'Success!',
                            'Business Unit updated Successfully',
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
                        'Business Unit Not updated',
                        'error'
                    )

                    // console.log("Request failed with status code: " + xhr.status);
                }
            });



            // alert("Update Records Here");

        }

    }


    function editData(id) {
        // alert(id);
        var settings = {
            "url": "api/business_units/" + id + "",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax({
            ...settings,
            statusCode: {
                200: function(response) {
                    // console.log(response[0]['title']);
                    document.getElementById('name').value = response[0]['name'];
                    document.getElementById('email').value = response[0]['email'];
                    document.getElementById('phone').value = response[0]['phone'];
                    document.getElementById('aphone').value = response[0]['alternate_phone'];
                    document.getElementById('ad1').value = response[0]['address_1'];
                    document.getElementById('ad2').value = response[0]['address_2'];
                    document.getElementById('lat').value = response[0]['latitude'];
                    document.getElementById('lng').value = response[0]['longitude'];
                    document.getElementById('city').value = response[0]['city'];
                    document.getElementById('state').value = response[0]['state'];
                    document.getElementById('country').value = response[0]['country'];
                    document.getElementById('zip').value = response[0]['zipcode'];
                    document.getElementById('hidden').value = response[0]['id'];
                    parent.setChoiceByValue(response[0]['marketing_manager']);
                    store.setChoiceByValue(response[0]['store_manager']);
                    // $("#parent").val(response[0]['marketing_manager']);
                    // $("#store").val(response[0]['store_manager']);
                    // $('#myModal').modal('show');
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
            "url": "api/business_units/" + id + "",
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
                        'Business Unit Deleted Successfully',
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
                    'Business Unit Not Deleted',
                    'error'
                )

                // console.log("Request failed with status code: " + xhr.status);
            }
        });
    };
</script>

</html>
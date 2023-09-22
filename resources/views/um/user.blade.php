<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Users | BPS</title>
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

                                            <h4 class="card-title mb-0 pt-3">Users</h4>
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
                                <div class="card-body">
                                    <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Type</th>
                                                <th>Roles</th>
                                                <th>Organization Name</th>
                                                <th>Organization Location</th>
                                                <th>Active/Inactive</th>
                                                <th>Action</th>
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
    <div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Create Users</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Username</label>
                            <input type="text" class="form-control" id="u_name" name="u_name" required>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formrow-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="u_email" name="u_email" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Type</label>
                            <div class="col-md-12">
                                <select class="form-control" data-trigger id="u_type" name="u_type"
                                    onchange="check_type(this.value)" required>
                                    <option value=""></option>
                                    <option value="Individual">Individual</option>
                                    <option value="Organization">Organization </option>


                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="o_mode">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formrow-password" class="form-label">Organization Name</label>
                            <input type="text" class="form-control" id="o_name" name="o_name">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formrow-password" class="form-label">Organization Location</label>
                            <input type="text" class="form-control" id="o_location" name="o_location">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formrow-password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Role</label>
                            <div class="col-md-12">
                                <select class="form-control" data-trigger name="choices-single-default" id="u_role"
                                    name="u_role" required>
                                    <option value=""></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Inspector">Inspector</option>
                                    <option value="End-User">Client</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>



                <div class="col-12">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-10 col-form-label"></label>
                        <div class="col-md-2">

                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                onclick="submit()">Save</button>
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
$(document).ready(function() {
    // alert("Checking")
    $("#o_mode").hide();



    $("body").on("click", "#DeleteRow", function() {
        $(this).parents("#row").remove();
    })
    table = $('#myTable').DataTable({
            dom: 'Bfrtip',


            buttons: ['copy', 'excel', 'csv', 'pdf', 'print']

        });

        fetchtable();
});

function submit() {
    var formdata = new FormData();
    formdata.append("username", $('#u_name').val());
    formdata.append("email", $('#u_email').val());
    formdata.append("user_type", $('#u_type').val());
    formdata.append("organization_name", $('#o_name').val());
    formdata.append("office_location", $('#o_location').val());
    formdata.append("role", $('#u_role').val());
    formdata.append("created_by", "1");
    formdata.append("password_hash", $('#password').val());


    var settings = {
        "url": "api/users",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": formdata
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
                    'Users Created Successfully',
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
                'Users Not Created',
                'error'
            )

            // console.log("Request failed with status code: " + xhr.status);
        }
    });

}

function fetchtable() {
        var settings = {
            "url": "api/users",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function(response) {
            console.log(response);
            table.clear().draw();
            $.each(response, function(index, data) {
                table.row.add([
                    index + 1,
                    data.username,
                    data.email,
                    '**************',
                    data.user_type,
                    data.role,
                    data.organization_name,
                    data.office_location,
                    '<a type="button"id="edit" name="edit"  href="Userss/'+data.id +'" target="_blank" class="btn btn-soft-success waves-effect waves-light"><i class="bx bxs-show font-size-16 align-middle"></i></a>',
                    '<button type="button"id="edit" name="edit"  onclick="editData(' +
                    data.id +
                    ')"  class="btn btn-soft-warning waves-effect waves-light"><i class="bx bx-edit-alt font-size-16 align-middle"></i></button>',
                    '<button type="button" id="delete" name="delete" onclick="deleteData(' +
                    data.id +
                    ')" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-trash-alt font-size-16 align-middle"></i></button>'
                ]).draw(false);
            });
        });
    }

function check_type(val) {
    if (val === "Organization") {
        $("#o_mode").show();
    } else {
        $("#o_mode").hide();
    }
}
</script>

</html>
<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Assign users or team Inspection | Service Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> --}}
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    @include('partials.style')
    <Style>
    input[switch]:checked+label:after {
        left: 70px;
        background-color: #f5f6f8;
    }
    </Style>
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

                                            <h4 class="card-title mb-0 pt-3">Assign users or team Inspection</h4>
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
                                                <th>S.No</th>
                                                <th>Permit</th>
                                                <th>Inspection Type</th>
                                                <th>Inspection Date</th>
                                                <th>Inspector</th>
                                                <th>Inspection Result</th>
                                                <th>Note</th>
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
            <h5 id="offcanvasRightLabel">Create </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
            <div class="container-fluid">



                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Permit</label>
                            <!-- <input type="text" class="form-control" id="name" name='name'> -->

                            <select class="form-control select_" name="choices-single-default" id="permit" name='permit'
                                placeholder="This is a search placeholder">
                                <option value=""></option>
                                <option value="pre_production">Pre-Production</option>
                                <option value="during_production">During-Production</option>
                                <option value="post_production">Post-Production</option>


                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Inspection Type</label>
                            <!-- <input type="text" class="form-control" id="name" name='name'> -->
                            <select class="form-control select_" name="choices-single-default" id="inspection_type"
                                name='inspection_type' placeholder="This is a search placeholder">
                                <option value=""></option>
                                <option value="pre_production">Pre-Production</option>
                                <option value="during_production">During-Production</option>
                                <option value="post_production">Post-Production</option>


                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Inspection Date</label>
                            <input type="date" class="form-control" placeholder="Enter Problem" id="title">
                        </div>
                    </div>
                    <!-- <div class="square-switch">
                        <input type="checkbox" id="square-switch1" switch="none" checked="" onclick="myFunction()">
                        <label for="square-switch1" data-on-label="Indivisual" data-off-label="Team"
                            style="width: 100px;"></label>
                    </div> -->
                    <div class="col-lg-4">
                        <div class="mb-3 row">
                            <label for="formrow-inputState" class="form-label">Inspector</label>
                            <div class="col-md-12">
                                <select class="form-control" id="i_team" name="i_team"
                                    placeholder="This is a search placeholder">

                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">


                    <div class="col-12">
                        <div class="mb-3 row">
                            {{-- <label for="example-text-input" class="col-md-2 col-form-label">Domain Members</label> --}}
                            <div class="col-md-6">
                                <div id="fields">
                                    <input type="text" name="hidden" hidden id="hidden" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-10 col-form-label"></label>
                            <div class="col-md-2">

                                <button type="button" onclick="submit()"
                                    class="btn btn-primary waves-effect waves-light">Save</button>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </div>
    </div>

    @include('partials.script')






</body>
<script>
var assigned, reported, marketing, manager, ticketresolved;
var subtype;
var table;
var resolved, due_date;
$(document).ready(function() {
    // new Choices("#permit", {
    //     removeItemButton: !0,
    // })

    new Choices("#inspection_type", {
        removeItemButton: !0,
    })
    // new Choices("#i_team", {
    //     removeItemButton: !0,
    // })
    resolved = flatpickr('#resolved', {});
    due_date = flatpickr('#due_date', {});
    $("#addfield").click(function() {
        var newRowAdd =
            '<div id="row" class="row"><div class="input-group m-3">' +
            '<div class="col-3"><div class="input-group-prepend">' +
            '<button type="button" id="DeleteRow" class="btn btn-outline-danger waves-effect waves-light m-1">Delete</button>' +
            '<i class="bi bi-trash"></i></button></div> </div>' +
            '<div class="col-4"><div class="input-group-prepend m-1"><input class="form-control" type="text" placeholder="Additional Field"></div> </div><div class="col-1"></div>' +
            '<div class="col-4"><select class="form-control " data-trigger name="choices-single-default" id="choices-single-default" placeholder=""><option>String</option><option>Number</option><option>Text</option></select> </div> </div>' +
            '';

        $('#fields').append(newRowAdd);
        // alert("The paragraph was clicked.");
    });


    $.ajax({
        url: "api/project_list",
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            type = new Choices("#permit", {
                removeItemButton: !0,
            })
            type.clearChoices();
            console.log(response);
            type.setChoices(response,
                'permit_id',
                'project_name',
                false, );
        }
    });


    $.ajax({
        url: "api/inspectors",
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            i_team = new Choices("#i_team", {
                removeItemButton: !0,
            })
            i_team.clearChoices();
            console.log(response);
            i_team.setChoices(response,
                'id',
                'name',
                false, );
        }
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

function myFunction() {
    var checkBox = document.getElementById("square-switch1");
    var text = document.getElementById("text");
    if (checkBox.checked == true) {
        // alert("Indivisual")
        $.ajax({
            url: "api/users/company/0",
            type: 'GET',
            dataType: 'json',
            success: function(response) {

                assigned.clearChoices();
                console.log(response);
                assigned.setChoices(response,
                    'id',
                    'name',
                    false, );
            }
        });

    } else {
        $.ajax({
            url: "api/bu_groups/company/0",
            type: 'GET',
            dataType: 'json',
            success: function(response) {

                assigned.clearChoices();
                console.log(response);
                assigned.setChoices(response,
                    'id',
                    'title',
                    false, );
            }
        });
    }
}

$(document).ready(function() {
    subtype = new Choices("#subtype", {
        removeItemButton: !0,
    })
    $("#type").change(function() {
        var end = this.value;
        // alert(end);
        $.ajax({
            url: "api/types/parent/" + end + "",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                subtype.clearChoices();
                console.log(response);
                subtype.setChoices(response,
                    'id',
                    'title',
                    false, );
            }
        });

    });
    $.ajax({
        url: "api/types",
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            type = new Choices("#type", {
                removeItemButton: !0,
            })
            type.clearChoices();
            console.log(response);
            type.setChoices(response,
                'id',
                'title',
                false, );
        }
    });
});

function submit() {
    var form = new FormData();
    // alert(document.getElementById("i_team").value);
    form.append("permit_id", document.getElementById("permit").value);
    form.append("inspection_type", document.getElementById("inspection_type").value);
    form.append("inspection_date", document.getElementById("title").value);
    form.append("inspector_id", document.getElementById("i_team").value);
    form.append("team_id", "");
    form.append("inspection_result", "Approval");
    form.append("notes", "_");



    var settings = {
        "url": "api/inspections",
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
                // $('#myModal').modal('hide');
                document.getElementById('title')
                    .value = "";
                document.getElementById('hidden').value = "";
                // console.log("Request was successful");
                fetchtable();
                // aler

                Swal.fire(
                    'Success!',
                    'Inspection Created Successfully',
                    'success'
                )

            },
            // Add more status code handlers as needed
        },
        success: function(data) {
            // Additional success handling if needed
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr);
            console.log(textStatus);
            console.log(errorThrown);
            Swal.fire(
                'Server Error!',
                'Inspection Not Created',
                'error'
            )

            // console.log("Request failed with status code: " + xhr.status);
        }
    });

}

function fetchtable() {
    var settings = {
        "url": "api/inspections",
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(settings).done(function(response) {
        console.log(response);
        table.clear().draw();
        $.each(response, function(index, data) {
            table.row.add([
                index + 1,
                data.project_name,
                data.inspection_type,
                data.inspection_date,
                data.name,
                data.inspection_result,
                data.notes,
                '<a type="button"id="edit" name="edit"  href="Tickets/' + data.id +
                '" target="_blank" class="btn btn-soft-success waves-effect waves-light"><i class="bx bxs-show font-size-16 align-middle"></i></a>',
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
</script>

</html>
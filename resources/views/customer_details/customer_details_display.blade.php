<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../assets/css/customer_display.css">
</head>

<body>
    <h1 align="center">Customer Details</h1>
    {{-- modal content start --}}
    <!-- Button trigger modal -->
    <div class="container my-5 text-right">
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#customer_creation_modal">
            Add New Customer
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="customer_creation_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Customer Creation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="customer_name">Customer Name</label>
                            <input type="text" class="form-control" id="customer_name" placeholder="Customer Name">
                        </div>
                        <div class="form-group">
                            <label for="customer_age">Customer Age</label>
                            <input type="text" class="form-control" id="customer_age" placeholder="Customer Age">
                        </div>
                        <div class="form-group">
                            <label for="customer_phone_no">Customer Phone No</label>
                            <input type="text" class="form-control" id="customer_phone_no"
                                placeholder="Customer Phone No">
                        </div>
                        <div class="form-group">
                            <label for="customer_aadhar_no">Customer Aadhar No</label>
                            <input type="text" class="form-control" id="customer_aadhar_no"
                                placeholder="Customer Aadhar No">
                        </div>
                        <div class="form-group">
                            <label for="customer_address">Customer Address</label>
                            <input type="text" class="form-control" id="customer_address"
                                placeholder="Customer Address">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal content end --}}

    {{-- TABLE START  --}}
    <div>
        <table align="center">
            <tr>
                <th>Customer Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Addhar Card No</th>
                <th>Phone No</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Sangeetha</td>
                <td>21</td>
                <td>Solar , Erode - 638002</td>
                <td>1234 5678 9012</td>
                <td>9788894897</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Sangeetha</td>
                <td>21</td>
                <td>Solar , Erode - 638002</td>
                <td>1234 5678 9012</td>
                <td>9788894897</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Sangeetha</td>
                <td>21</td>
                <td>Solar , Erode - 638002</td>
                <td>1234 5678 9012</td>
                <td>9788894897</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Sangeetha</td>
                <td>21</td>
                <td>Solar , Erode - 638002</td>
                <td>1234 5678 9012</td>
                <td>9788894897</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <!-- Add more rows for additional customer -->
        </table>
    </div>

    {{-- TABLE START  --}}

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Details</title>
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
    @include('..\user_details\user_creation');
</head>

<body>
    <h1 align="center" class="my-5">User Details</h1>
    {{-- modal content start --}}
    <!-- Button trigger modal -->
    <div class="container my-5 text-right">
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#user_creation_modal">
            Add New User
        </button>
    </div>

    <!-- Modal -->

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

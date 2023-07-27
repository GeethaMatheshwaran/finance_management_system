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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    @include('..\user_details\user_creation');
</head>

<body>
    <h1 align="center" class="my-5">User Details</h1>
    <div class="container my-5 text-right">
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#user_creation_modal">
            Add New User
        </button>
    </div>


    {{-- TABLE START  --}}
    <div>

        <table align="center">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($user_details as $s_no => $user_details_data)
                    <tr>
                        <td>{{ $s_no + 1 }}</td>
                        <td>{{ $user_details_data->user_name }}</td>
                        <td>{{ $user_details_data->user_email }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#user_creation_modal">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </button>


                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#delete_confirmation_modal">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- TABLE START  --}}

</body>

</html>

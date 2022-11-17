<!doctype html>
<html lang="en">

<head>
    <title>View Certificate</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #eef5f9">

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <a href="javascript:void(0)" onclick="history.back()" class="btn btn-success float-left"><i
                        class="fa fa-arrow-circle-left"></i> Back</a>
                <h3 class="text-center text-primary">Certificate View</h3>
            </div>
            @if ($certificate_image != '')
                <div class="card-body">
                    <img src="{{ asset('certificate') }}/{{ $certificate_image->certificate_image }}"
                        alt="{{ $certificate_image->certificate_image }}" class="img-fluid img-thumbnail">
                </div>
                <div class="card-footer text-center">
                    <a href="{{ asset('certificate') }}/{{ $certificate_image->certificate_image }}" download=""
                        class="btn btn-success">Download Certificate</a>
                </div>
            @else
                <div class="card-body">
                    <div class="text-center">
                        <h4>Certificate Not Found.</h4>
                        <a href="{{ route('home') }}" class="btn btn-primary">Back To Home</a>
                    </div>
                </div>
            @endif

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

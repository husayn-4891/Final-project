<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | University System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">University Admin Login</h1>
                            </div>

                            {{-- Error Alerts --}}
                            @if(session('error'))
                                <div class="alert alert-danger shadow-sm small">
                                    {{ session('error') }}
                                </div>
                            @endif

                            {{-- Validation Errors --}}
                            @if ($errors->any())
                                <div class="alert alert-danger shadow-sm small">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="user" action="{{ route('admin.adminCheckLogin') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="small font-weight-bold">Email Address</label>
                                    <input type="email" name="email" class="form-control form-control-user" 
                                           placeholder="example@limu.edu.ly" value="{{ old('email') }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="small font-weight-bold">Password</label>
                                    <input type="password" name="password" class="form-control form-control-user" 
                                           placeholder="Password" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                                    Login to Dashboard
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <small class="text-muted">University Management System &copy; 2025</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
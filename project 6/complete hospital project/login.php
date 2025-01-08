<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CityCot School</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>

<body class="bg-light">
    <main class="content px-3 py-5">
        <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 80vh;">
            <div class="card shadow-sm" style="max-width: 400px; width: 90%;">

                <div class="card-header text-center">
                    <img src="hos-image.jpeg" alt="CityCot School Logo" class="img-fluid" style="max-width: 150px; border-radius:12px">
                    <h5 class="mt-3">Login to shafici hospital</h5>
                </div>

                <div class="card-body">
                    <form id="loginForm" action="dashboard.php" method="get">
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" class="form-control" placeholder="Enter your username" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" href="dashboard.php" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

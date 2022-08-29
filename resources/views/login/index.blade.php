<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-lg-start text-center">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <div class="card cascading-right"
                        style="
                                background: hsla(0, 0%, 100%, 0.55);
                                backdrop-filter: blur(30px);
                                ">
                        <div class="card-body shadow-5 p-5 text-center">
                            <h2 class="fw-bold mb-5">Login Sekarang</h2>
                            @if (session()->has('err'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <strong>Gagal !</strong> Data Tidak Dikenal
                                </div>
                            @endif
                            <form method="POST" action="/Login">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example3"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        name="email" value="{{ old('email') }}" />
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <label class="form-label" for="form3Example3">Email
                                        address</label>

                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>

                            </form>

                            <small class="d-block mt-3 text-center">Belum Terdaftar ? <a href="/Register"
                                    class="text-primary">Daftar Sekarang</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-lg-0 mb-5">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                        class="w-100 rounded-4 shadow-4" alt="" />
                </div>


            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>

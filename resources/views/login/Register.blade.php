<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="bg-image p-5"
            style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        ">
        </div>
        <!-- Background image -->

        <div class="card mx-md-5 shadow-5-strong mx-4"
            style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body px-md-5 py-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Sign up now</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Danger!</strong>
                                <ul>
                                    @foreach ($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                    @endforeach
                                    <li></li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <form method="post" action="/Register">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example3"
                            class="form-control @error('name') is-invalid @enderror" id="name" name="name" />
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label class="form-label" for="form3Example3">Name</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example3" class="form-control" id="username" name="username" />
                        <label class="form-label" for="form3Example3">Username</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" id="email" name="email" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control" id="password" name="password" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                        Register Now
                    </button>
                </form>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>

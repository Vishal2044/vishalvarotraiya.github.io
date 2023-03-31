<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <title>Register</title>
</head>
<body>
    <div class="container d-flex flex-column gap-2">
        <h1>Register</h1>
        <form class="d-flex flex-column gap-2" action="{{url('/')}}/register" method="POST">
            @csrf
            <x-input-component type="text" name="uname" label="Username" />
            <span class="text-danger">
                @error("uname")
                    {{$message}}
                @enderror
            </span>

            <x-input-component type="text" name="email" label="Email" />
            <span class="text-danger">
                @error("email")
                    {{$message}}
                @enderror
            </span>

            <x-input-component type="password" name="password" label="Password" />
            <span class="text-danger">
                @error("password")
                    {{$message}}
                @enderror
            </span>

            <x-input-component type="text" name="password_confirmation" label="Retype Password" />
            <span class="text-danger">
                @error("password_confirmation")
                    {{$message}}
                @enderror
            </span>

            <input class="btn bg-black text-white" type="submit" value="Register">
        </form>
    </div>
</body>
</html>
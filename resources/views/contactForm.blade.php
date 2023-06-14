<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" cantent="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('bootstarp.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Contact Us</h4><hr>

                <form action="">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Subject</label>
                        <input type="subject" class="form-control" name="subject" placeholder="Enter your subject" value="{{ old('subject') }}">
                        @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

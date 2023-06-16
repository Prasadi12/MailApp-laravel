<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" cantent="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('bootstarp.min.css') }}">

    {{--  <style>
        .input{width: 100%;}
    </style>  --}}
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">

                {{--  <form action="">
                    <div class="form-group">
                        <label for="">Name :</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email :</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Subject :</label>
                        <input type="subject" class="form-control" name="subject" placeholder="Enter your subject" value="{{ old('subject') }}">
                        @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Message :</label>
                        <textarea type="text" class="form-control" cols="4" rows="4">{{ old('message') }}</textarea>
                        @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <button class="btn btn-primary">Send</button>
                </form>  --}}

                <style>
                    /* CSS Styles for the Contact Form */
                    form {
                        max-width: 400px;
                        margin: 0 auto;
                        border: 1px solid #ccc;
                        padding: 20px;
                        border-radius: 4px;
                    }

                    label {
                        display: block;
                        margin-bottom: 5px;
                        font-weight: bold;
                    }

                    input[type="text"],
                    input[type="email"],
                    textarea {
                        width: 100%;
                        padding: 10px;
                        margin-bottom: 10px;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                    }

                    textarea {
                        height: 150px;
                    }

                    .head{
                        font-size: 25px;
                        color: blue;
                        margin-left: 130px;
                    }

                    button[type="submit"] {
                        background-color: #4CAF50;
                        color: white;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        margin-left: 180px;
                    }

                    button[type="submit"]:hover {
                        background-color: #45a049;

                    }
                    .primary-button {
                        background-color: #007bff;
                        color: white;
                    }
                </style>



                <form action="{{ route('send.email') }}" method="POST">
                    @csrf
                    <h4 class="head">Contact Us</h4><hr>
                    {{--  <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>  --}}
                    <div class="form-group">
                        <label for="">Name :</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email :</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Subject :</label>
                        <input type="text" id="subject" class="form-control" name="subject" placeholder="Enter your subject" value="{{ old('subject') }}">
                        @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Message :</label>
                        <textarea id="message" class="form-control" name="message" cols="4" rows="4" value="{{ old('message') }}"></textarea>
                        @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <button type="submit" class="primary-button">Send</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>

<body>
    <main>
        <br>&ensp;
        <a href="{{ route('product.index') }}"
            style="text-decoration: none; font-size: 1.2rem; color: #000; padding: .6rem 1rem; background-color: #d67;  border-radius: .25rem;">View
            Products
        </a><br>
        <div class="wrapper">
            <h1>Create a New Product</h1>
            <form method="POST" action="{{ route('product.store') }}">
                @csrf

                <div class="input-box">
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="text" name="qty" placeholder="Quantity" value="{{ old('qty') }}">
                    @error('qty')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="text" name="price" placeholder="Price" value="{{ old('price') }}">
                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="text" name="description" placeholder="Description" value="{{ old('description') }}">
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-btn">
                    <input type="submit" value="Save Product">
                </div>
            </form>


        </div>
    </main>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
        transition: all .35s ease-in-out;
    }

    input,
    textarea,
    select {
        font-size: 16px;
        color: #f0f0f0;
        background-color: #081119;
    }

    body {
        background-color: #060c12;
        /* Matches landing page */
        color: #e0e0e0;
        /* Light text for readability */
    }

    main {
        margin: 0 auto;
    }

    h1 {
        font-size: 2rem;
        color: #ffffff;
    }

    .wrapper {
        width: 60%;
        margin: 2rem auto;
        padding: 2rem;
        background-color: #0a1520;
        /* Dark card background */
        border-radius: 0.5rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
    }

    @media screen and (max-width: 750px) {
        .wrapper {
            width: 90%;
        }
    }

    form {
        margin-top: 1.5rem;
    }

    .input-box {
        margin: 15px 0;
    }

    .input-box input {
        width: 100%;
        padding: 0.6rem 1.5rem;
        border-radius: 0.35rem;
        outline: none;
        border: 2px solid #333;
        background-color: #060c12;
        color: #f0f0f0;
    }

    .input-box input:focus {
        border-color: #4fc3f7;
        /* Light blue accent to match landing page links */
        box-shadow: 0 0 10px #4fc3f7;
    }

    .input-btn {
        margin: 25px 0 15px 0;
    }

    .input-btn input[type="submit"] {
        padding: 0.6rem 1.5rem;
        background-color: #4fc3f7;
        /* Landing page blue */
        outline: none;
        border: none;
        color: #121212;
        /* Dark text on bright button */
        font-weight: bold;
        border-radius: 0.35rem;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .input-btn input[type="submit"]:hover {
        background-color: #29b6f6;
        transform: translateY(-2px);
    }

    .error {
        color: #ff6b6b;
        /* Soft red errors */
        font-size: 0.9rem;
        margin-top: 0.2rem;
    }

    /* Optional: links matching landing page style */
    a {
        color: #4fc3f7;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }

    a:hover {
        color: #29b6f6;
        text-decoration: underline;
    }
</style>
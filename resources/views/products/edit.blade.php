<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>

<body>
    <main>
        <br>&ensp;
        <a href="{{ route('product.index') }}"
            style="text-decoration: none; font-size: 1.2rem; color: #000; padding: .6rem 1rem; background-color: #d67;  border-radius: .25rem;">View
            Products
        </a><br>
        <div class="wrapper">
            <h1>Edit Product</h1>

            {{-- Success message --}}
            @if(session('success_update'))
                <div class="alert-success" id="success-alert">
                    {{ session('success_update') }}
                    <button onclick="document.getElementById('success-alert').style.display='none'"
                        style="cursor: pointer; border: none; background: transparent;">❌</button>
                </div>
            @endif

            <form method="POST" action="{{ route('product.update', $product->id) }}">
                @csrf
                @method('PATCH')

                <div class="input-box">
                    <input type="text" name="name" placeholder="Name" value="{{ old('name', $product->name) }}">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="text" name="qty" placeholder="Quantity" value="{{ old('qty', $product->qty) }}">
                    @error('qty')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="text" name="price" placeholder="Price" value="{{ old('price', $product->price) }}">
                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="text" name="description" placeholder="Description"
                        value="{{ old('description', $product->description) }}">
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-btn">
                    <input type="submit" value="Update Product">
                </div>
            </form>
        </div>
    </main>

    <script>
        // Auto-hide alert after 5 seconds
        setTimeout(() => {
            const alert = document.getElementById('success-alert');
            if (alert) alert.style.display = 'none';
        }, 5000);
    </script>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Roboto, sans-serif;
        transition: all .35s ease-in-out;
    }

    body {
        background-color: #060c12;
        /* dark page background */
        color: #f0f0f0;
        /* light text */
    }

    main {
        margin: 0 auto;
    }

    h1 {
        font-size: 2rem;
        color: #f0f0f0;
    }

    .wrapper {
        width: 60%;
        margin: 2rem auto;
        padding: 1.5rem;
        background-color: #0f172a;
        /* dark card wrapper */
        border-radius: .25rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
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
        padding: .6rem 1.5rem;
        border-radius: .35rem;
        outline: none;
        border: 2px solid #1f2937;
        /* dark border */
        background-color: #1f2937;
        /* input background */
        color: #f0f0f0;
        /* input text */
    }

    .input-box input:focus {
        border-color: #3b82f6;
        /* bright blue on focus */
    }

    .input-btn {
        margin: 25px 0px 15px 0px;
    }

    .input-btn input[type="submit"] {
        padding: 0.6rem 1.5rem;
        background-color: #3b82f6;
        /* bright button */
        outline: none;
        border: none;
        color: #f0f0f0;
        border-radius: .25rem;
        cursor: pointer;
        transition: opacity 0.3s ease;
    }

    .input-btn input[type="submit"]:hover {
        opacity: 0.9;
    }

    .error {
        color: #f87171;
        /* light red for errors */
        font-size: 0.9rem;
        margin-top: 0.2rem;
    }

    .alert-success {
        background-color: #14532d;
        /* dark green background */
        color: #a7f3d0;
        /* light green text */
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        margin-bottom: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
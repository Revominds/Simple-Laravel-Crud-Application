{{-- resources/views/products/show.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>


    <style>
        body {
            font-family: Roboto, sans-serif;
            background: #060c12;
            /* dark page background */
            color: #f0f0f0;
            /* light text for readability */
            padding: 2rem;
        }

        .card {
            background: #0f172a;
            /* dark card background */
            padding: 1.5rem;
            border-radius: 0.5rem;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        }

        h1 {
            margin-bottom: 1rem;
            color: #f0f0f0;
            /* light heading */
        }

        .field {
            margin-bottom: 0.8rem;
        }

        .field strong {
            width: 150px;
            display: inline-block;
            color: #cbd5e1;
            /* slightly muted light color for labels */
        }

        a.back-btn {
            display: inline-block;
            margin-top: 1rem;
            text-decoration: none;
            background: #3b82f6;
            /* bright blue button */
            color: #f0f0f0;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        a.back-btn:hover {
            opacity: 0.8;
        }
    </style>

</head>

<body>
    <div class="card">
        <h1>Product Details</h1>

        <div class="field">
            <strong>ID:</strong> {{ $product->id }}
        </div>
        <div class="field">
            <strong>Name:</strong> {{ $product->name }}
        </div>
        <div class="field">
            <strong>Quantity:</strong> {{ $product->qty }}
        </div>
        <div class="field">
            <strong>Price:</strong> ${{ $product->price }}
        </div>
        <div class="field">
            <strong>Description:</strong> {{ $product->description ?? '-' }}
        </div>
        <div class="field">
            <strong>Delivery Date:</strong>
            {{ $product->created_at?->format('g:i A \o\n F j, Y') ?? '-' }}
        </div>

        <a href="{{ route('product.index') }}" class="back-btn">Back to Products</a>
    </div>
</body>

</html>
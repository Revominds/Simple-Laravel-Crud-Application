{{-- resources/views/products/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-size: 15px;
            font-family: Roboto, sans-serif;
            transition: all 0.35s ease-in-out;
        }

        body {
            background: #060c12;
            /* dark theme background */
            color: #f0f0f0;
            /* light text for readability */
        }

        main {
            padding: 1.5rem;
            width: 90%;
            margin: auto;
        }

        @media screen and (max-width: 790px) {
            main {
                width: 100%;
                padding: 0.2rem;
            }
        }

        .flexbox {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .flexbox h1 {
            font-size: 2rem;
            color: #f0f0f0;
            /* light text */
        }

        .flexbox a {
            text-decoration: none;
            background: #3b82f6;
            /* nice blue button */
            padding: 0.6rem 1.5rem;
            color: #f0f0f0;
            border-radius: 0.25rem;
            cursor: pointer;
            font-weight: bold;
        }

        .flexbox a:hover {
            opacity: 0.8;
        }

        .table-wrapper {
            padding: 1rem;
            border-radius: 0.25rem;
            background: #0f172a;
            /* slightly lighter dark for card */
            margin-top: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: rgb(196, 190, 190);
        }

        th,
        td {
            border: 1px solid #1e293b;
            /* subtle dark border */
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #1e293b;
            /* header darker */
            color: lavender;
        }

        .alert-success {
            background-color: #164e2f;
            /* dark green alert */
            color: #a7f3d0;
            /* light green text */
            padding: 10px;
            border-radius: 5px;
            margin-top: 1rem;
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .action-btns a,
        .action-btns form button {
            margin-right: 0.3rem;
            padding: 0.3rem 0.6rem;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
            color: #f0f0f0;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .action-btns a.view {
            background: #0ea5e9;
            /* cyan-ish button */
        }

        .action-btns a.edit {
            background: #facc15;
            /* amber button */
            color: #111827;
            /* dark text for contrast */
        }

        .action-btns form button.delete {
            background: #dc2626;
            /* red delete */
        }

        .action-btns a:hover,
        .action-btns form button:hover {
            opacity: 0.8;
        }

        @media screen and (max-width: 790px) {
            .action-btns a {
                display: inline-block;
                margin-top: 5px;
                width: 80%;
                text-align: center;
            }

            .action-btns form,
            .delete {
                width: 94%;
                margin-top: 5px;
            }
        }

        @media screen and (max-width: 550px) {

            .action-btns form,
            .delete {
                width: calc(100% + 7%);
            }
        }
    </style>


</head>

<body>
    <main>
        <a href="{{ route('home') }}"
            style="text-decoration: none; font-size: 1.2rem; color: #000; padding: .6rem 1rem; background-color: #d67; border-radius: .25rem;">
            Home
        </a>
        <br><br>
        <div class="flexbox">
            <h1>Products</h1>
            <a href="{{ route('product.create') }}">Add Product</a>
        </div>

        {{-- Success message --}}
        @php
            $successMessage = session('success_store') ?? session('success_update') ?? session('success_delete');
        @endphp

        @if($successMessage)
            <div class="alert-success" id="success-alert">
                {{ $successMessage }}
                <button onclick="closeAlert()" style="cursor: pointer; border: none; background: transparent;">❌</button>
            </div>
        @endif

        <script>
            function closeAlert() {
                const alertDiv = document.getElementById('success-alert');
                if (alertDiv) alertDiv.style.display = 'none';
            }
        </script>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Delivery Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>${{ $product->price }}</td>
                            <td>{{ $product->description ?? '-' }}</td>
                            <td>
                                {{ $product->created_at ? \Carbon\Carbon::parse($product->created_at)->format('g:i A \o\n F j, Y') : '-' }}
                            </td>
                            <td class="action-btns">
                                <!-- View -->
                                <a href="{{ route('product.show', $product->id) }}" class="view">View</a>

                                <!-- Edit -->
                                <a href="{{ route('product.edit', $product->id) }}" class="edit">Edit</a>

                                <!-- Delete -->
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('cart.css')}}">

</head>
<body>
    <header>
        <h1>MK Bookstore</h1>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/aboutus') }}">About us</a></li>
            <li><a href="{{ url('/category') }}">Book</a></li>
            {{-- <li>New Release</li>
            <li>Contact Us</li> --}}
        </ul>
        <div class="icon">
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </i>
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </i>
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </i>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="lef">
                <h2 style="margin-bottom: 10px">Book &gt; Product &gt; Cart </h2><br><br>
                <h3>Your cart</h3>
                <div class="box" style="margin-bottom: 20px; border-top: 1px solid black; border-bottom: 1px solid black">
                    <p style="flex: 3">Item</p>
                    <p style="flex: 1">Price</p>
                    <p style="flex: 1">Quantity</p>
                </div>
                <div class="box" style="margin-bottom: 20px;"">
                    <p style="flex: 3">Book</p>
                    <p style="flex: 1">11.99$</p>
                    <p style="flex: 1">1</p>
                </div>
                {{-- <div class="box" style="margin-bottom: 20px;"">
                    <p style="flex: 3">Book</p>
                    <p style="flex: 1">11.99$</p>
                    <p style="flex: 1">1</p>
                </div> --}}
                <button style="padding: 5px; items-end; color: #fff; border: 1px solid black; background: #FFA9D0 "><a href="{{ url('/customer') }}">Next</a></button>
            </div>
            <div class="rig">
                <h2 style="margin-bottom: 20px">Summary ( 1 item )</h2>
                <div style="margin-bottom: 10px; display: flex; justify-content: space-between">
                    <p>Subtotal</p>
                    <p>11.99$</p>
                </div>
                <div style="margin-bottom: 10px; display: flex; justify-content: space-between">
                    <p>Delivery</p>
                    <p>-</p>
                </div>
                <div style="margin-bottom: 10px; display: flex; justify-content: space-between">
                    <p>Tax</p>
                    <p>-</p>
                </div>
                <div style="margin-bottom: 10px; display: flex; justify-content: space-between">
                    <p>Total</p>
                    <p>11.99$</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="text">
            <h3>MK Bookstore</h3>
            <p>Thanks for order</p>
        </div>
        <div class="link">
            <p>FACEBOOK</p>
            <p>INSTAGRAM</p>
            <p>SHOP</p>
        </div>
    </footer>
</body>
</html>
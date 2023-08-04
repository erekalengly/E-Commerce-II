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
            <li><a href="{{ url('/category') }}">Book</a></li>
            <li><a href="{{ url('/aboutus') }}">About us</a></li>
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
            <div class="topic">
                <h1>MK Book Store</h1><br>
                <h2>About us</h2>
                <p>MK Book Store is an online business which stands here ever since 2017.Everyday we're doing 
                   our best to sell the best books.</p>
                <p> We're pretty proud to announce that we've got many books so that we'd fill everybody's taste.</p>
                <p>Whether you want an online or an offline book, we've got you covered. Our supply contain over
                   1500 books in many formats! Physical, PDF, ePUB and so on.</p><br>
                <h2>Our books and journey</h2>
                <p>The purpose of MK Book Store is to provide you with your favorite books.</p>
                <p>Our journey always had one purpose:making people happier by reading that one book.</p>
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
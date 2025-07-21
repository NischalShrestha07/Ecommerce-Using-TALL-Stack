<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop | Home</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="text-2xl font-bold text-indigo-600">E-Shop</div>
            <div class="space-x-6 text-sm font-medium">
                <a href="#home" class="hover:text-indigo-600 transition">Home</a>
                <a href="#features" class="hover:text-indigo-600 transition">Features</a>
                <a href="#products" class="hover:text-indigo-600 transition">Products</a>
                <a href="#contact" class="hover:text-indigo-600 transition">Contact</a>
                <a href="/admin/login">
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition">Admin
                        Login</button>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-indigo-600 text-white py-28 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-5xl font-extrabold mb-4">Welcome to E-Shop</h1>
            <p class="text-lg mb-6">Shop the latest products with confidence and speed.</p>
            <a href="#products">
                <button
                    class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-gray-100 transition">Start
                    Shopping</button>
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gray-800">Why Choose E-Shop?</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-gray-100 p-6 rounded-xl shadow-sm">
                    <div class="text-indigo-600 text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-bold mb-2">Fast Delivery</h3>
                    <p>Lightning fast and secure delivery on every order.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-xl shadow-sm">
                    <div class="text-indigo-600 text-4xl mb-4">🎯</div>
                    <h3 class="text-xl font-bold mb-2">Top Quality</h3>
                    <p>Handpicked and reliable products from top brands.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-xl shadow-sm">
                    <div class="text-indigo-600 text-4xl mb-4">🔒</div>
                    <h3 class="text-xl font-bold mb-2">Secure Checkout</h3>
                    <p>Easy and protected payment with full support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Products</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8">
                @for($i = 1; $i <= 4; $i++) <div class="bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition">
                    <div class="h-40 bg-gray-200 rounded mb-4"></div>
                    <h4 class="text-lg font-semibold mb-1">Product {{ $i }}</h4>
                    <p class="text-sm text-gray-500">A short description about the product.</p>
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">Buy
                        Now</button>
            </div>
            @endfor
        </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-2xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Contact Us</h2>
            <form class="space-y-6">
                <input type="text" placeholder="Your Name" class="w-full p-4 border border-gray-300 rounded" />
                <input type="email" placeholder="Your Email" class="w-full p-4 border border-gray-300 rounded" />
                <textarea rows="5" placeholder="Your Message"
                    class="w-full p-4 border border-gray-300 rounded"></textarea>
                <div class="text-center">
                    <button type="submit"
                        class="bg-indigo-600 text-white px-8 py-3 rounded hover:bg-indigo-700 transition">Send
                        Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 text-center py-6 border-t">
        <p class="text-sm text-gray-600">&copy; {{ date('Y') }} E-Shop. All rights reserved.</p>
    </footer>

    @livewireScripts
</body>

</html>
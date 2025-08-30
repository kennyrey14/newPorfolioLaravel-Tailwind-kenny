<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenny Rey Magsayo Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .scroll-smooth {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 scroll-smooth">

    <!-- Navbar -->
    <header class="fixed w-full z-50 bg-white shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center p-5">
            <div class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-pink-500">
                Looking for a Fullstack Programmer?
            </div>
            <nav class="space-x-6 hidden md:flex">
                <a href="#home" class="hover:text-indigo-600 transition transform hover:scale-105">Home</a>
                <a href="#about" class="hover:text-indigo-600 transition transform hover:scale-105">About</a>
                <a href="#projects" class="hover:text-indigo-600 transition transform hover:scale-105">Projects</a>
                <a href="#skills" class="hover:text-indigo-600 transition transform hover:scale-105">Skills</a>
                <a href="#contact" class="hover:text-indigo-600 transition transform hover:scale-105">Contact</a>
            </nav>

        </div>
    </header>

    <!-- Hero Section -->
    <section id="home"
        class="h-screen flex flex-col justify-center items-center text-center text-white bg-cover bg-center relative"
        style="background-image: url('https://images.unsplash.com/photo-1581091870625-dfc8f4f9c8e0?auto=format&fit=crop&w=1950&q=80');">

        <!-- Overlay for better text readability -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-5">Hi, I'm Kenny Rey</h1>
            <p class="text-xl md:text-2xl mb-8">A Fullstack Developer Crafting Modern Web Experiences</p>
            <a href="#projects"
                class="bg-red-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-red-700 hover:scale-105 transform transition">
                See My Work
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="max-w-7xl mx-auto py-20 px-5 md:px-0">
        <h2 class="text-4xl font-bold text-center mb-12 text-red-600">About Me</h2>
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="{{ asset('images/bg.jpg') }}" alt="Profile"
                class="rounded-xl shadow-lg hover:scale-105 transition transform">
            <div>
                <p class="mb-4 text-lg leading-relaxed">I'm Kenny Rey, I’m a software developer specializing in PHP
                    (Laravel) and database-driven apps, with 1+ year of Java experience and 2 years in web design using
                    Canva and Figma. I’ve built numerous apps and websites and continuously expand my skills to create
                    efficient, modern, and scalable web solutions.</p>
                <p class="text-lg leading-relaxed">When I'm not coding, I enjoy exploring new technologies, contributing
                    to open-source projects, and improving my skills to deliver high-quality solutions.</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-gray-100 py-20">
        <h2 class="text-4xl font-bold text-center mb-12 text-red-600">Projects</h2>
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 px-5 md:px-0">
            <!-- Project Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition">
                <img src="https://via.placeholder.com/400x250" alt="Project 1" class="w-full">
                <div class="p-5">
                    <h3 class="font-bold text-xl mb-2">Project One</h3>
                    <p class="text-gray-700 mb-3">A modern web application built with Laravel and Tailwind CSS to manage
                        tasks efficiently.</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project →</a>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition">
                <img src="https://via.placeholder.com/400x250" alt="Project 2" class="w-full">
                <div class="p-5">
                    <h3 class="font-bold text-xl mb-2">Project Two</h3>
                    <p class="text-gray-700 mb-3">A responsive e-commerce platform using PHP and MySQL with advanced
                        filtering and payment integration.</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project →</a>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition">
                <img src="https://via.placeholder.com/400x250" alt="Project 3" class="w-full">
                <div class="p-5">
                    <h3 class="font-bold text-xl mb-2">Project Three</h3>
                    <p class="text-gray-700 mb-3">A custom dashboard and reporting system for business analytics built
                        with PHP, JS, and MySQL.</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="max-w-7xl mx-auto py-20 px-5 md:px-0">
        <h2 class="text-4xl font-bold text-center mb-12 text-red-600">Skills</h2>
        <div class="grid md:grid-cols-4 gap-10 text-center">
            <div class="bg-white rounded-xl shadow-lg p-10 hover:scale-105 transition transform">
                <h3 class="font-bold text-xl mb-3">Frontend</h3>
                <p>HTML, CSS, Tailwind CSS, JavaScript, Vue.js, React</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-10 hover:scale-105 transition transform">
                <h3 class="font-bold text-xl mb-3">Backend</h3>
                <p>PHP, Laravel, Node.js, MySQL, API Development</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-10 hover:scale-105 transition transform">
                <h3 class="font-bold text-xl mb-3">Tools</h3>
                <p>Git, Docker, Postman, Agile Workflow, Cloud Deployment</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-10 hover:scale-105 transition transform">
                <h3 class="font-bold text-xl mb-3">Others</h3>
                <p>Canva & Figma</p>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="bg-gray-500 text-white py-20">
        <h2 class="text-4xl font-bold text-center mb-12">Contact Me</h2>
        <div class="max-w-3xl mx-auto text-center">
            <p class="mb-8 text-lg">
                Interested in working together? Reach out to me through the form below or via email at
                <span class="font-semibold">magsayokennyrey30@gmail.com</span>
            </p>

            <!-- Single Contact Form -->
            <form id="contactForm" action="{{ route('submit') }}" method="POST" class="grid gap-6 max-w-xl mx-auto">
                @csrf
                <input type="text" name="name" placeholder="Your Name" class="p-4 rounded-lg text-gray-900">
                <input type="email" name="email" placeholder="Your Email" class="p-4 rounded-lg text-gray-900">
                <textarea name="message" placeholder="Your Message" rows="5"
                    class="p-4 rounded-lg text-gray-900"></textarea>
                <button type="submit"
                    class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white px-8 py-3 rounded-full shadow-lg">
                    Send Message
                </button>
            </form>


        </div>
    </section>

    <!-- Success Toast -->
    @if(session('success'))
        <div id="toast"
            class="fixed top-1/2 left-1/2 bg-green-500 text-white px-6 py-4 rounded-xl shadow-lg opacity-0 transform -translate-x-1/2 -translate-y-1/2 transition-all duration-500">
            {{ session('success') }}
        </div>
        <script>
            const toast = document.getElementById('toast');
            toast.classList.remove('opacity-0');
            toast.classList.add('opacity-100');
            setTimeout(() => {
                toast.classList.remove('opacity-100');
                toast.classList.add('opacity-0');
            }, 3000);
        </script>
    @endif

    <!-- Error Toast -->
    @if(session('error'))
        <div id="error"
            class="fixed top-1/2 left-1/2 bg-red-500 text-white px-6 py-4 rounded-xl shadow-lg opacity-0 transform -translate-x-1/2 -translate-y-1/2 transition-all duration-500">
            {{ session('error') }}
        </div>
        <script>
            const error = document.getElementById('error');
            error.classList.remove('opacity-0');
            error.classList.add('opacity-100');
            setTimeout(() => {
                error.classList.remove('opacity-100');
                error.classList.add('opacity-0');
            }, 3000);
        </script>
    @endif


    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-6 text-center">
        <p>© 2025 Kenny Rey Magsayo. All rights reserved.</p>
    </footer>

</body>

</html>
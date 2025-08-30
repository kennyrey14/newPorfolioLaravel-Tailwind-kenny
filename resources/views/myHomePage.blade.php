<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenny Rey Magsayo Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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

<body style="background: black;color:gray" class="bg-gray-50 text-gray-900 scroll-smooth">

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
    <section id="home" style="background:black"
        class="min-h-screen flex items-center justify-center bg-pink-500 text-white relative">


        <div class="max-w-6xl mx-auto grid md:grid-cols-2 animate-bounce-slow gap-10 items-center px-6">
            <!-- Left: Text -->
            <div class="space-y-6">
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-red-500">Kenny
                        Rey</span>
                </h1>
                <p class="text-lg text-gray-300">
                    Fullstack Developer | PHP (Laravel) | TailwindCSS | MySQL
                    Building modern, scalable, and beautiful web applications.
                </p>
                <div class="flex gap-4">
                    <a href="#projects"
                        class="px-6 py-3 bg-red-600 hover:bg-red-700 rounded-lg shadow-lg font-semibold transition transform hover:scale-105">
                        🚀 View My Work
                    </a>
                    <a href="#contact"
                        class="px-6 py-3 border border-gray-400 rounded-lg shadow-md font-semibold hover:bg-gray-800 transition">
                        📩 Contact Me
                    </a>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="relative group top-5">
                <div
                    class="p-[3px] rounded-2xl bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 shadow-2xl transition-transform duration-300 group-hover:scale-105">
                    <img src="images/profile.jpg" alt="Kenny Rey" class="w-[530px] h-[580px] object-cover rounded-2xl 
                               [mask-image:linear-gradient(to bottom,rgba(0,0,0,1),rgba(0,0,0,0))] 
                               [mask-repeat:no-repeat] [mask-size:cover]">
                </div>
                <div
                    class="absolute -bottom-4 -right-4 bg-gradient-to-r from-red-500 to-pink-500 p-3 rounded-xl shadow-xl">
                    <p class="font-semibold text-sm">💻 Laravel Developer</p>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="max-w-7xl mx-auto py-20 px-5 md:px-0">
        <div class="bg-gray-800 mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12 
           bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 
           bg-clip-text text-transparent">
                About Me
            </h2>
        </div>
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <img src="images/profile.jpg" alt="Kenny Rey" class="w-[530px] h-[580px] object-cover rounded-2xl 
                               [mask-image:linear-gradient(to bottom,rgba(0,0,0,1),rgba(0,0,0,0))] 
                               [mask-repeat:no-repeat] [mask-size:cover]">
            <div>
                <p class="mb-4 text-lg leading-relaxed">I'm Kenny Rey, a software developer specializing in PHP
                    (Laravel) and database-driven apps, with 1+ year of Java experience and 2 years in web design using
                    Canva and Figma. I’ve built numerous apps and websites and continuously expand my skills to create
                    efficient, modern, and scalable web solutions.</p>
                <p class="text-lg leading-relaxed">When I'm not coding, I enjoy exploring new technologies, contributing
                    to open-source projects, and improving my skills to deliver high-quality solutions.</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-gray-800 py-20">
        <h2 class="text-4xl font-bold text-center mb-12 
        bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 
        bg-clip-text text-transparent">
            Projects
        </h2>
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 px-5 md:px-0">

            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition">
                <img src="{{ asset('images/bg.jpg') }}" alt="Monitoring System" class="w-full">
                <div class="p-5">
                    <h3 class="font-bold text-xl mb-2">Device & Sales Monitoring System</h3>
                    <p class="text-gray-700 mb-3">
                        Developed a monitoring system for a pharmaceutical company to track tablets, SIM cards, and
                        sales representatives. Built with Laravel, PHP, and MySQL, featuring real-time reporting, Google
                        API integration, and auto-generated Excel pivot reports for sales and monitoring data.
                    </p>
                    {{-- <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project →</a> --}}
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition">
                <img src="{{ asset('images/job.jpg') }}" alt="Local Job Finder" class="w-full">
                <div class="p-5">
                    <h3 class="font-bold text-xl mb-2">Local Job Finder & Hiring Platform</h3>
                    <p class="text-gray-700 mb-3">
                        A web application built to connect job seekers and employers within our city.
                        Applicants can create profiles, upload resumes, and apply for openings,
                        while businesses can post job listings, review candidates, and manage applications.
                        Developed with Laravel and Tailwind CSS for speed, responsiveness, and modern UI.
                    </p>
                    {{-- <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project →</a> --}}
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition">
                <img src="{{ asset('images/natra.jpg') }}" alt="Business Dashboard" class="w-full">
                <div class="p-5">
                    <h3 class="font-bold text-xl mb-2">Custom Dashboard & Reporting System</h3>
                    <p class="text-gray-700 mb-3">
                        Developed a Java & PHP-based reporting dashboard that delivers real-time analytics for business
                        operations. Integrated advanced MySQL queries and dynamic summaries to support decision-making.
                        Leveraged Google Sheets & Drive APIs to automatically generate and distribute Excel reports with
                        pivoted sales and monitoring data, ensuring employees receive accurate and up-to-date insights.
                    </p>
                    {{-- <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project →</a> --}}
                </div>
            </div>

        </div>
    </section>

    <section id="skills" class="max-w-7xl mx-auto py-20 px-5 md:px-0">
        <h2 class="text-4xl font-bold text-center mb-12 
        bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 
        bg-clip-text text-transparent">
            Skills
        </h2>
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
    <section id="contact" class="bg-black text-white py-20">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">


            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-center mb-12 
            bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 
            bg-clip-text text-transparent">
                    Contact Me
                </h2>
                <p class="mb-8 text-lg">
                    Interested in working together? Reach out to me through the form below or via email at
                    <span class="font-semibold">magsayokennyrey30@gmail.com</span>
                </p>

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
            <!-- Display Messages -->
            <div class="bg-black p-6 rounded-xl shadow-lg overflow-y-auto max-h-[500px] mt-16 ">
                <h3 class="text-2xl font-semibold mb-4">Messages</h3>
                <div class="space-y-4">
                    @forelse($messages as $msg)
                        <div class="bg-gray-800 p-4 rounded-lg">
                            <p class="font-bold">{{ $msg->name }}
                                <span class="text-sm text-gray-400">({{ $msg->email }})</span>
                            </p>
                            <p class="text-gray-300 mt-2">{{ $msg->message }}</p>
                            <p class="text-xs text-gray-400 mt-1">
                                {{ $msg->created_at->format('M d, Y h:i A') }}
                            </p>
                        </div>
                    @empty
                        <p class="text-gray-400">No messages yet.</p>
                    @endforelse
                </div>
            </div>
        </div>

    </section>

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
    <footer class="bg-gray-900 text-gray-300 py-6 text-center">
        <p>© 2025 Kenny Rey Magsayo. All rights reserved.</p>
    </footer>

</body>

</html>
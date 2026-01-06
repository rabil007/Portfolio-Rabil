<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mohammed Rabil T - Software Engineer</title>
        <meta name="description" content="Mohammed Rabil T - Software Engineer with 2+ years of experience building scalable web applications, APIs, and enterprise solutions including LMS, CRM, and ERP systems.">

        <!-- Favicon -->
        <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpg') }}">
        <link rel="shortcut icon" type="image/jpeg" href="{{ asset('favicon.jpg') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.jpg') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|space-grotesk:700" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        
            <style>
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
            
            @keyframes gradient {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
            
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            
            .gradient-bg {
                background: linear-gradient(-45deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
                background-size: 400% 400%;
                animation: gradient 15s ease infinite;
            }
            
            .glass-effect {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
            
            body {
                font-family: 'Inter', sans-serif;
            }
            
            h1, h2, h3, h4, h5, h6 {
                font-family: 'Space Grotesk', sans-serif;
            }
            </style>
    </head>
    <body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        
        <!-- Navigation -->
        <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-14 sm:h-16">
                    <div class="text-lg sm:text-xl font-bold text-gray-900 dark:text-white">
                        Mohammed Rabil
                    </div>
                    <div class="hidden md:flex items-center space-x-6 lg:space-x-8">
                        <a href="#home" class="text-sm lg:text-base hover:text-blue-600 transition">Home</a>
                        <a href="#about" class="text-sm lg:text-base hover:text-blue-600 transition">About</a>
                        <a href="#skills" class="text-sm lg:text-base hover:text-blue-600 transition">Skills</a>
                        <a href="#experience" class="text-sm lg:text-base hover:text-blue-600 transition">Experience</a>
                        <a href="#projects" class="text-sm lg:text-base hover:text-blue-600 transition">Projects</a>
                        <a href="#contact" class="text-sm lg:text-base hover:text-blue-600 transition">Contact</a>
                        <a href="{{ asset('storage/mohammed Rabil CV 2.pdf') }}" download="Mohammed-Rabil-CV.pdf" class="px-3 lg:px-4 py-1.5 lg:py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg hover:shadow-lg transition flex items-center space-x-2 text-sm lg:text-base">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span>CV</span>
                        </a>
                    </div>
                    <button id="mobile-menu-button" class="md:hidden p-2">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
                <div class="px-4 py-3 space-y-2 sm:space-y-3">
                    <a href="#home" class="block py-2 hover:text-blue-600 transition text-sm sm:text-base">Home</a>
                    <a href="#about" class="block py-2 hover:text-blue-600 transition text-sm sm:text-base">About</a>
                    <a href="#skills" class="block py-2 hover:text-blue-600 transition text-sm sm:text-base">Skills</a>
                    <a href="#experience" class="block py-2 hover:text-blue-600 transition text-sm sm:text-base">Experience</a>
                    <a href="#projects" class="block py-2 hover:text-blue-600 transition text-sm sm:text-base">Projects</a>
                    <a href="#contact" class="block py-2 hover:text-blue-600 transition text-sm sm:text-base">Contact</a>
                    <a href="{{ asset('storage/mohammed Rabil CV 2.pdf') }}" download="Mohammed-Rabil-CV.pdf" class="block px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-center hover:shadow-lg transition flex items-center justify-center space-x-2 text-sm sm:text-base">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Download CV</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center justify-center pt-16 sm:pt-20 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-20">
                <div class="text-center">
                    <div class="mb-6 sm:mb-8 inline-block">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'%3E%3Ccircle cx='100' cy='100' r='90' fill='%23667eea'/%3E%3Ctext x='100' y='130' font-size='80' text-anchor='middle' fill='white' font-family='Arial, sans-serif' font-weight='bold'%3EMR%3C/text%3E%3C/svg%3E" 
                             alt="Mohammed Rabil" 
                             class="w-24 h-24 sm:w-32 sm:h-32 rounded-full mx-auto shadow-xl border-4 border-white dark:border-gray-800">
                    </div>
                    <div class="mb-3 sm:mb-4">
                        <span class="text-xs sm:text-sm md:text-base text-gray-500 dark:text-gray-400 uppercase tracking-wider">Welcome</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-bold mb-3 sm:mb-4 px-2">
                        I'm <span class="text-blue-600 dark:text-blue-400">Mohammed Rabil</span>
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl text-gray-600 dark:text-gray-400 mb-4 sm:mb-6 font-medium">
                        Software Engineer
                    </p>
                    <p class="text-sm sm:text-base md:text-lg text-gray-500 dark:text-gray-500 max-w-2xl mx-auto mb-8 sm:mb-10 leading-relaxed px-4">
                        Results-driven software engineer with 2+ years of experience designing and delivering scalable, high-performance web applications. Specialized in building robust backend systems, APIs, and enterprise solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4 mb-8 sm:mb-10 px-4">
                        <a href="#contact" class="w-full sm:w-auto px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg hover:shadow-lg transition text-center">
                            Get In Touch
                        </a>
                        <a href="#projects" class="w-full sm:w-auto px-6 py-3 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition text-center">
                            View Projects
                        </a>
                        <a href="{{ asset('storage/mohammed Rabil CV 2.pdf') }}" download="Mohammed-Rabil-CV.pdf" class="w-full sm:w-auto px-6 py-3 bg-gray-900 dark:bg-gray-100 text-white dark:text-gray-900 rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span>Download CV</span>
                        </a>
                    </div>
                    <div class="flex justify-center space-x-4 sm:space-x-6">
                        <a href="https://github.com/rabil007" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 transition">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/mohammed-rabil-2805b122a/" target="_blank" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 transition">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="mailto:mohammedrabil.work@gmail.com" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 transition">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-12 sm:py-20 bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-8 sm:mb-12">
                    About
                </h2>
                <div class="grid md:grid-cols-2 gap-8 sm:gap-12 items-center">
                    <div>
                        <p class="text-base sm:text-lg text-gray-600 dark:text-gray-400 mb-4 sm:mb-6 leading-relaxed">
                            I'm a <strong>Software Engineer</strong> with 2+ years of experience building scalable, high-performance web applications and APIs. Currently working at <strong>Zil Money</strong>, a product-based fintech company and leading payment operations platform that processes $100B+ in payments for 1M+ businesses worldwide. I design and implement robust backend systems for payment processing, automation, and API integrations using modern technologies and cloud services.
                        </p>
                        <p class="text-base sm:text-lg text-gray-600 dark:text-gray-400 mb-4 sm:mb-6 leading-relaxed">
                            Previously, I worked at <strong>Trogon Media</strong>, a service-based EdTech company, where I developed custom LMS, CRM, and ERP solutions for educational institutions. My expertise spans across backend development, API design, database architecture, and system integration. I've successfully delivered enterprise-grade solutions including payment platforms, LMS, CRM, and ERP systems, integrating various third-party services like payment gateways, AWS services, and AI models. I'm passionate about writing clean, maintainable code and building systems that drive business value at scale.
                        </p>
                        <div class="flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4">
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-sm sm:text-base text-gray-600 dark:text-gray-400">Perintalmanna, India</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                <span class="text-sm sm:text-base text-gray-600 dark:text-gray-400">+91 894 335 2260</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 sm:gap-6">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-4 sm:p-6 rounded-2xl text-white text-center transform hover:scale-105 transition">
                            <div class="text-2xl sm:text-4xl font-bold mb-1 sm:mb-2">2+</div>
                            <div class="text-xs sm:text-sm opacity-90">Years Experience</div>
                        </div>
                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-4 sm:p-6 rounded-2xl text-white text-center transform hover:scale-105 transition">
                            <div class="text-2xl sm:text-4xl font-bold mb-1 sm:mb-2">10+</div>
                            <div class="text-xs sm:text-sm opacity-90">Projects Completed</div>
                        </div>
                        <div class="bg-gradient-to-br from-pink-500 to-pink-600 p-4 sm:p-6 rounded-2xl text-white text-center transform hover:scale-105 transition">
                            <div class="text-2xl sm:text-4xl font-bold mb-1 sm:mb-2">15+</div>
                            <div class="text-xs sm:text-sm opacity-90">Technologies</div>
                        </div>
                        <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 p-4 sm:p-6 rounded-2xl text-white text-center transform hover:scale-105 transition">
                            <div class="text-2xl sm:text-4xl font-bold mb-1 sm:mb-2">100%</div>
                            <div class="text-xs sm:text-sm opacity-90">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-12 sm:py-20 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-8 sm:mb-12">
                    My Skills
                </h2>
                
                <div class="grid md:grid-cols-3 gap-6 sm:gap-8 mb-12">
                    <!-- Backend -->
                    <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-4 sm:mb-6">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Backend Development</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-xs sm:text-sm">PHP</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-xs sm:text-sm">Laravel</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-xs sm:text-sm">Codeigniter</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-xs sm:text-sm">SQL</span>
                            <span class="px-2 sm:px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-xs sm:text-sm">API Integration</span>
                        </div>
                    </div>

                    <!-- Frontend -->
                    <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 sm:mb-6">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Frontend Development</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-xs sm:text-sm">HTML</span>
                            <span class="px-2 sm:px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-xs sm:text-sm">CSS</span>
                            <span class="px-2 sm:px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-xs sm:text-sm">JavaScript</span>
                            <span class="px-2 sm:px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-xs sm:text-sm">React</span>
                            <span class="px-2 sm:px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-xs sm:text-sm">jQuery</span>
                            <span class="px-2 sm:px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-xs sm:text-sm">Bootstrap</span>
                        </div>
                    </div>

                    <!-- Tools & Services -->
                    <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                        <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center mb-4 sm:mb-6">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4">Tools & Services</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">Git</span>
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">Bitbucket</span>
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">AWS</span>
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">AWS Textract</span>
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">Postman</span>
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">OpenAI</span>
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">Firebase</span>
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">Jira</span>
                            <span class="px-2 sm:px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-xs sm:text-sm">Cursor IDE</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="py-12 sm:py-20 bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-8 sm:mb-12">
                    Experience
                </h2>
                
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-600 to-purple-600"></div>
                    
                    <!-- Experience 1 -->
                    <div class="mb-8 sm:mb-12 flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 mb-4 md:mb-0 md:text-right w-full">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 inline-block px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-white text-xs sm:text-sm font-semibold mb-3 sm:mb-4">
                                05/2025 - Present
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold mb-2">Laravel Developer</h3>
                            <p class="text-base sm:text-lg text-blue-600 dark:text-blue-400 mb-2">
                                <a href="https://zilmoney.com" target="_blank" class="hover:underline">Zil Money</a> | Manjeri
                            </p>
                            <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-500 mb-3 sm:mb-4 italic">
                                Product-Based Company • Fintech Payment Operations Platform • $100B+ Processed • 1M+ Businesses • 22K+ Bank Integrations
                            </p>
                            <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">
                                Building a complete payment operations platform supporting ACH, wire transfers, digital checks, international payments, bulk processing, payment automation, and API integrations for enterprise clients.
                            </p>
                            <ul class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 space-y-1.5 sm:space-y-2">
                                <li>✓ Developing payment operations platform processing billions in transactions</li>
                                <li>✓ Building APIs for ACH, wire transfers, checks, and international payments</li>
                                <li>✓ Implementing payment automation and bulk processing features</li>
                                <li>✓ Integrating AWS Textract for intelligent document processing</li>
                                <li>✓ Leveraging OpenAI models for payment validation and automation</li>
                                <li>✓ Using Cursor IDE for AI-assisted development workflows</li>
                                <li>✓ Working with Agile methodologies and Jira for project management</li>
                            </ul>
                        </div>
                        <div class="hidden md:block w-8 h-8 bg-blue-600 rounded-full border-4 border-white dark:border-gray-800 z-10"></div>
                        <div class="md:w-1/2 md:pl-12"></div>
                    </div>
                    
                    <!-- Experience 2 -->
                    <div class="mb-8 sm:mb-12 flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12"></div>
                        <div class="hidden md:block w-8 h-8 bg-purple-600 rounded-full border-4 border-white dark:border-gray-800 z-10"></div>
                        <div class="md:w-1/2 md:pl-12 mb-4 md:mb-0 w-full">
                            <div class="bg-gradient-to-br from-purple-500 to-purple-600 inline-block px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-white text-xs sm:text-sm font-semibold mb-3 sm:mb-4">
                                08/2023 - 05/2025
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold mb-2">PHP Developer</h3>
                            <p class="text-base sm:text-lg text-purple-600 dark:text-purple-400 mb-2">
                                <a href="https://trogonmedia.com" target="_blank" class="hover:underline">Trogon Media Pvt Ltd</a> | Calicut
                            </p>
                            <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-500 mb-3 sm:mb-4 italic">
                                Service-Based Company • EdTech Software Solutions • 2M+ End Users • 500+ Institutes • 5+ Years Experience
                            </p>
                            <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">
                                Developed next-generation EdTech solutions and enterprise software for educational institutions, providing comprehensive learning management systems and business automation platforms.
                            </p>
                            <ul class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 space-y-1.5 sm:space-y-2">
                                <li>✓ Built custom LMS platforms with live classes, video tutorials, and online exams</li>
                                <li>✓ Developed CRM and ERP solutions for educational institutions</li>
                                <li>✓ Integrated payment gateways, Zoom SDK, and push notification services</li>
                                <li>✓ Created e-commerce and enterprise solutions for clients</li>
                                <li>✓ Interfaced directly with clients to gather requirements and design solutions</li>
                                <li>✓ Maintained high-performance web applications serving 2M+ users</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-12 sm:py-20 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-8 sm:mb-12">
                    Portfolio
                </h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    
                    <!-- Project 1: NEXUS -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                        <div class="h-40 sm:h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                            <div class="text-white text-4xl sm:text-6xl font-bold">NEXUS</div>
                        </div>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold mb-2">NEXUS</h3>
                            <p class="text-xs sm:text-sm text-blue-600 dark:text-blue-400 mb-2 sm:mb-3">ERP - Customer Management</p>
                            <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">
                                Automated Gold Rate Update System with role-based access control and secure token authentication using Firebase JWT.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-3 sm:mb-4">
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">PHP</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Codeigniter</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Firebase JWT</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">RESTful API</span>
                            </div>
                            <a href="/projects/nexus" class="block w-full text-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition text-sm sm:text-base">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project 2: EDUCATOR -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                        <div class="h-40 sm:h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <div class="text-white text-4xl sm:text-6xl font-bold">EDU</div>
                        </div>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold mb-2">EDUCATOR</h3>
                            <p class="text-xs sm:text-sm text-blue-600 dark:text-blue-400 mb-2 sm:mb-3">LMS - Learning Platform</p>
                            <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">
                                Comprehensive LMS with role-based access, course management, Zoom integration, and Razorpay payment gateway.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-3 sm:mb-4">
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">PHP</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Codeigniter</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Zoom SDK</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Razorpay</span>
                            </div>
                            <a href="/projects/educator" class="block w-full text-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition text-sm sm:text-base">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project 3: IAME -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                        <div class="h-40 sm:h-48 bg-gradient-to-br from-green-400 to-teal-500 flex items-center justify-center">
                            <div class="text-white text-4xl sm:text-6xl font-bold">IAME</div>
                        </div>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold mb-2">IAME</h3>
                            <p class="text-xs sm:text-sm text-blue-600 dark:text-blue-400 mb-2 sm:mb-3">ERP - Bookstore Management</p>
                            <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">
                                Role-based system for managing book inventory, order processing, and dispatch workflows with real-time updates.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-3 sm:mb-4">
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">PHP</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Laravel</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">MySQL</span>
                            </div>
                            <a href="/projects/iame" class="block w-full text-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition text-sm sm:text-base">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project 4: Parambadan -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                        <div class="h-40 sm:h-48 bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center">
                            <div class="text-white text-3xl sm:text-5xl font-bold">PARAM</div>
                        </div>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold mb-2">Parambadan</h3>
                            <p class="text-xs sm:text-sm text-blue-600 dark:text-blue-400 mb-2 sm:mb-3">CRM - Sales Management</p>
                            <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">
                                Custom CRM with multi-role authentication, lead management, and comprehensive order tracking system.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-3 sm:mb-4">
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">PHP</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Laravel</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">RBAC</span>
                            </div>
                            <a href="/projects/parambadan" class="block w-full text-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition text-sm sm:text-base">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- Project 5: Zeacut -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                        <div class="h-40 sm:h-48 bg-gradient-to-br from-red-400 to-orange-500 flex items-center justify-center">
                            <div class="text-white text-3xl sm:text-5xl font-bold">ZEACUT</div>
                        </div>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-xl sm:text-2xl font-bold mb-2">Zeacut</h3>
                            <p class="text-xs sm:text-sm text-blue-600 dark:text-blue-400 mb-2 sm:mb-3">E-Commerce - Food Ordering</p>
                            <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">
                                Food ordering system with Flutter mobile app, Laravel backend, Razorpay integration, and Firebase push notifications.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-3 sm:mb-4">
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Laravel</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Flutter</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">Razorpay</span>
                                <span class="px-2 sm:px-3 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded-full">FCM</span>
                            </div>
                            <a href="/projects/zeacut" class="block w-full text-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition text-sm sm:text-base">
                                View Details
                            </a>
                        </div>
                    </div>

                    <!-- View More Card -->
                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2 flex items-center justify-center p-4 sm:p-6">
                        <div class="text-center text-white">
                            <svg class="w-12 h-12 sm:w-16 sm:h-16 mx-auto mb-3 sm:mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            <h3 class="text-xl sm:text-2xl font-bold mb-2">More Projects</h3>
                            <p class="text-sm sm:text-base mb-3 sm:mb-4">Check out my GitHub for more projects</p>
                            <a href="https://github.com/rabil007" target="_blank" class="inline-block px-4 sm:px-6 py-2 bg-white text-blue-600 rounded-full font-semibold hover:bg-gray-100 transition text-sm sm:text-base">
                                View GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="py-12 sm:py-20 bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-8 sm:mb-12">
                    Education
                </h2>
                
                <div class="max-w-3xl mx-auto">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 dark:from-gray-700 dark:to-gray-800 p-6 sm:p-8 rounded-2xl shadow-lg">
                        <div class="flex flex-col sm:flex-row items-start space-y-4 sm:space-y-0 sm:space-x-4">
                            <div class="flex-shrink-0 mx-auto sm:mx-0">
                                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                                </div>
                            </div>
                            <div class="flex-1 text-center sm:text-left">
                                <h3 class="text-xl sm:text-2xl font-bold mb-2">Bachelor of Science in Computer Science</h3>
                                <p class="text-base sm:text-lg text-blue-600 dark:text-blue-400 mb-2">University of Calicut</p>
                                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-3 sm:mb-4">2020 - 2023</p>
                                <p class="text-sm sm:text-base text-gray-700 dark:text-gray-300">
                                    Completed comprehensive computer science program with focus on software development, algorithms, and database management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-12 sm:py-20 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center mb-8 sm:mb-12">
                    Contact
                </h2>
                
                <div class="grid md:grid-cols-2 gap-8 sm:gap-12 max-w-5xl mx-auto">
                    <div>
                        <h3 class="text-xl sm:text-2xl font-bold mb-4 sm:mb-6">Let's Work Together</h3>
                        <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400 mb-6 sm:mb-8">
                            I'm always interested in hearing about new projects and opportunities. Whether you have a question or just want to say hi, feel free to reach out!
                        </p>
                        
                        <div class="space-y-4 sm:space-y-6">
                            <div class="flex items-start space-x-3 sm:space-x-4">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm sm:text-base font-semibold mb-1">Email</h4>
                                    <a href="mailto:mohammedrabil.work@gmail.com" class="text-xs sm:text-sm text-blue-600 dark:text-blue-400 hover:underline break-all">
                                        mohammedrabil.work@gmail.com
                                    </a>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3 sm:space-x-4">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm sm:text-base font-semibold mb-1">Phone</h4>
                                    <a href="tel:+918943352260" class="text-xs sm:text-sm text-blue-600 dark:text-blue-400 hover:underline">
                                        +91 894 335 2260
                                    </a>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3 sm:space-x-4">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm sm:text-base font-semibold mb-1">Location</h4>
                                    <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">Perintalmanna, India</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 sm:mt-6">
                                <a href="{{ asset('storage/mohammed Rabil CV 2.pdf') }}" download="Mohammed-Rabil-CV.pdf" class="inline-flex items-center space-x-2 px-4 sm:px-6 py-2 sm:py-3 bg-gray-900 dark:bg-gray-100 text-white dark:text-gray-900 rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition text-sm sm:text-base">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <span>Download My CV</span>
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt-6 sm:mt-8 flex space-x-3 sm:space-x-4">
                            <a href="https://github.com/rabil007" target="_blank" class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-200 dark:bg-gray-700 rounded-xl flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                            <a href="https://www.linkedin.com/in/mohammed-rabil-2805b122a/" target="_blank" class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-200 dark:bg-gray-700 rounded-xl flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-2xl shadow-lg">
                        <form id="contact-form" class="space-y-4 sm:space-y-6">
                            <div>
                                <label class="block text-xs sm:text-sm font-semibold mb-2">Name</label>
                                <input type="text" name="name" class="w-full px-3 sm:px-4 py-2 sm:py-3 rounded-xl border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm sm:text-base" placeholder="Your Name" required>
                            </div>
                            <div>
                                <label class="block text-xs sm:text-sm font-semibold mb-2">Email</label>
                                <input type="email" name="email" class="w-full px-3 sm:px-4 py-2 sm:py-3 rounded-xl border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm sm:text-base" placeholder="your@email.com" required>
                            </div>
                            <div>
                                <label class="block text-xs sm:text-sm font-semibold mb-2">Message</label>
                                <textarea name="message" rows="4" class="w-full px-3 sm:px-4 py-2 sm:py-3 rounded-xl border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm sm:text-base" placeholder="Your message..." required></textarea>
                            </div>
                            <button type="submit" class="w-full px-4 sm:px-6 py-2 sm:py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold hover:shadow-lg transition text-sm sm:text-base">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 py-6 sm:py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">
                        &copy; 2025 Mohammed Rabil T.
                    </p>
                </div>
            </div>
        </footer>

        <script>
            // Mobile Menu Toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton?.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Smooth Scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        // Close mobile menu if open
                        mobileMenu?.classList.add('hidden');
                    }
                });
            });
            
            // Contact Form
            const contactForm = document.getElementById('contact-form');
            contactForm?.addEventListener('submit', (e) => {
                e.preventDefault();
                const formData = new FormData(contactForm);
                const name = formData.get('name');
                const email = formData.get('email');
                const message = formData.get('message');
                
                // Open email client with pre-filled data
                const mailtoLink = `mailto:mohammedrabil.work@gmail.com?subject=Portfolio Contact from ${name}&body=Name: ${name}%0D%0AEmail: ${email}%0D%0A%0D%0AMessage:%0D%0A${message}`;
                window.location.href = mailtoLink;
                
                // Reset form
                contactForm.reset();
                alert('Opening your email client...');
            });
            
            // Navbar background on scroll
            const nav = document.querySelector('nav');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    nav.classList.add('shadow-lg');
                } else {
                    nav.classList.remove('shadow-lg');
                }
            });
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NEXUS - ERP Customer Management | Mohammed Rabil T</title>
        <meta name="description" content="NEXUS - Automated Gold Rate Update System with role-based access control and secure token authentication using Firebase JWT.">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|space-grotesk:700" rel="stylesheet" />
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
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
                <div class="flex justify-between items-center h-16">
                    <a href="/" class="text-xl font-bold text-gray-900 dark:text-white">
                        Mohammed Rabil
                    </a>
                    <a href="/#projects" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                        Back to Portfolio
                    </a>
                </div>
            </div>
        </nav>

        <!-- Project Header -->
        <section class="pt-24 pb-12 bg-white dark:bg-gray-800">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8">
                    <div class="inline-block px-4 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-300 rounded-full text-sm font-semibold mb-6">
                        ERP - Customer Management
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">NEXUS</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Automated Gold Rate Update System with role-based access control and secure token authentication
                    </p>
                </div>
            </div>
        </section>

        <!-- Project Details -->
        <section class="py-12 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 md:p-12">
                    
                    <!-- Overview -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Project Overview</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            NEXUS is a comprehensive ERP Customer Management system designed for the gold and diamonds industry. The platform features automated gold rate updates, secure role-based access control, and robust transaction monitoring capabilities.
                        </p>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                            The system integrates with external APIs for real-time data updates and provides a secure, scalable solution for managing customer relationships, transactions, and inventory in the precious metals industry.
                        </p>
                    </div>

                    <!-- Key Features -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Key Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Automated Gold Rate Updates
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Implemented integration with GoldAPI to fetch real-time gold rates and automatically update the database using a secure public API endpoint. Ensures accurate pricing information at all times.
                                </p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                    Role-Based Access Control
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Designed a comprehensive role-based system with secure token authentication using Firebase JWT to ensure appropriate access levels and maintain data integrity across different user roles.
                                </p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Automated Cron Jobs
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Developed and deployed cron jobs for periodic data updates to keep information accurate and up-to-date without manual intervention, ensuring system reliability.
                                </p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    Transaction Monitoring
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Enabled status tracking for transactions (pending, approved, rejected) with clear visual distinction for administrative ease and comprehensive transaction history.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Implementation -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technical Implementation</h2>
                        <div class="space-y-4">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Scalable RESTful APIs</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    Built custom APIs in Codeigniter 3 with robust authentication and seamless integration for external services. The API architecture supports high-volume transactions and ensures secure data exchange.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-sm">RESTful API</span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-sm">Codeigniter 3</span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-sm">JWT Authentication</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technologies Used -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technologies Used</h2>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">PHP</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Codeigniter 3</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Firebase JWT</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">MySQL</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">RESTful API</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">GoldAPI Integration</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Cron Jobs</span>
                        </div>
                    </div>

                    <!-- Back Button -->
                    <div class="text-center pt-8 border-t border-gray-200 dark:border-gray-700">
                        <a href="/#projects" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back to Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-gray-600 dark:text-gray-400">
                    &copy; 2025 Mohammed Rabil T. All rights reserved.
                </p>
            </div>
        </footer>
    </body>
</html>


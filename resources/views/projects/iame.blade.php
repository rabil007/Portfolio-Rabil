<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IAME - ERP Bookstore Management | Mohammed Rabil T</title>
        <meta name="description" content="IAME - Role-based ERP system for managing book inventory, order processing, and dispatch workflows.">
        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|space-grotesk:700" rel="stylesheet" />
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body { font-family: 'Inter', sans-serif; }
            h1, h2, h3, h4, h5, h6 { font-family: 'Space Grotesk', sans-serif; }
        </style>
    </head>
    <body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        
        <nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <a href="/" class="text-xl font-bold text-gray-900 dark:text-white">Mohammed Rabil</a>
                    <a href="/#projects" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">Back to Portfolio</a>
                </div>
            </div>
        </nav>

        <section class="pt-24 pb-12 bg-white dark:bg-gray-800">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8">
                    <div class="inline-block px-4 py-2 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 rounded-full text-sm font-semibold mb-6">ERP - Bookstore Management</div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">IAME</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Role-based system for managing book inventory, order processing, and dispatch workflows</p>
                </div>
            </div>
        </section>

        <section class="py-12 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 md:p-12">
                    
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Project Overview</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            IAME is an Enterprise Resource Planning system specifically designed for bookstore management and school book distribution. The platform streamlines the entire workflow from book inventory management to order processing and final dispatch to schools.
                        </p>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                            The system enables real-time collaboration between different administrative roles, ensuring efficient book management, accurate order processing, and timely delivery to educational institutions.
                        </p>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Key Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    Multi-Role System
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Developed a comprehensive role-based system with distinct permissions for Book Admin, School Admin, and Dispatch Admin roles.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                    Real-Time Inventory Management
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Enabled real-time book addition by Book Admin with instant inventory updates visible across all system roles.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                    </svg>
                                    Order Processing
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Streamlined order placement by School Admin with automated order approval workflow and stock verification.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Stock Verification
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Implemented stock verification system by Dispatch Admin to ensure accurate inventory before order dispatch.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                    </svg>
                                    Dispatch Tracking
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Developed comprehensive dispatch tracking system to monitor order status from approval to delivery to schools.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                    </svg>
                                    Collaborative Workflows
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Enabled seamless collaboration between roles with real-time updates, order tracking, and inventory management features.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Workflow Process</h2>
                        <div class="space-y-4">
                            <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">1</div>
                                <div>
                                    <h3 class="font-bold mb-1">Book Admin</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Adds books to inventory in real-time, manages stock levels, and updates product information.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">2</div>
                                <div>
                                    <h3 class="font-bold mb-1">School Admin</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Places orders for required books, tracks order status, and manages school-specific requirements.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">3</div>
                                <div>
                                    <h3 class="font-bold mb-1">Order Approval</h3>
                                    <p class="text-gray-600 dark:text-gray-400">System processes order approval workflow with automatic stock validation before approval.</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">4</div>
                                <div>
                                    <h3 class="font-bold mb-1">Dispatch Admin</h3>
                                    <p class="text-gray-600 dark:text-gray-400">Verifies stock availability, processes dispatch, and tracks delivery to ensure efficient distribution to schools.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technologies Used</h2>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">PHP</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Laravel</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">MySQL</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Role-Based Access Control</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Real-Time Updates</span>
                        </div>
                    </div>

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

        <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-gray-600 dark:text-gray-400">&copy; 2025 Mohammed Rabil T. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>


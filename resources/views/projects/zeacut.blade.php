<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zeacut - E-Commerce Food Ordering System | Mohammed Rabil T</title>
        <meta name="description" content="Zeacut - Food ordering system with Flutter mobile app, Laravel backend, Razorpay integration, and Firebase push notifications.">
        
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
                    <div class="inline-block px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 rounded-full text-sm font-semibold mb-6">E-Commerce - Food Ordering</div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">Zeacut</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Food ordering system with Flutter mobile app, Laravel backend, and real-time push notifications</p>
                </div>
            </div>
        </section>

        <section class="py-12 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 md:p-12">
                    
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Project Overview</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Zeacut is a complete food ordering e-commerce platform featuring a Flutter mobile application for customers and a comprehensive Laravel-based admin panel. The system provides seamless food ordering, payment processing, and real-time order tracking.
                        </p>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                            The platform enables restaurants to manage their operations efficiently while providing customers with a smooth ordering experience through the mobile app, complete with push notifications and secure payment processing.
                        </p>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Key Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    Flutter Mobile App
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Developed cross-platform mobile application using Flutter for iOS and Android, providing native performance and smooth user experience.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    RESTful APIs
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Built robust RESTful APIs for seamless communication between the Flutter mobile app and Laravel backend, ensuring fast and reliable data exchange.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                    Payment Integration
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Integrated Razorpay for secure online payments and implemented manual payment processing for admin, supporting multiple payment methods.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Admin Panel
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Designed comprehensive role-based admin panel to manage categories, products, orders, users, and coupons with intuitive interface.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    Order Tracking
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Implemented comprehensive order tracking and reporting system for real-time sales insights and order status monitoring.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                    </svg>
                                    Push Notifications
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Integrated Firebase Cloud Messaging (FCM) to send real-time push notifications for order status updates and promotional offers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">System Architecture</h2>
                        <div class="space-y-4">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Mobile Application (Flutter)</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">Cross-platform mobile app for iOS and Android providing customers with an intuitive interface to browse menus, place orders, track deliveries, and make payments.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-sm">Flutter</span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-sm">Dart</span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full text-sm">Firebase FCM</span>
                                </div>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Backend API (Laravel)</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">RESTful API backend handling business logic, database operations, payment processing, and integration with third-party services.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-sm">Laravel</span>
                                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-sm">PHP</span>
                                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-sm">MySQL</span>
                                    <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 rounded-full text-sm">RESTful API</span>
                                </div>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Admin Panel (Web)</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">Comprehensive web-based admin dashboard for restaurant management, order processing, user management, and analytics.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 rounded-full text-sm">Laravel</span>
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 rounded-full text-sm">Bootstrap</span>
                                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 rounded-full text-sm">jQuery</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technologies Used</h2>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Laravel</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Flutter</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Dart</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Razorpay</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Firebase FCM</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">RESTful API</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">MySQL</span>
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


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Parambadan - CRM Sales Management | Mohammed Rabil T</title>
        <meta name="description" content="Parambadan - Custom CRM for sales management with multi-role authentication and comprehensive order tracking.">
        
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
                    <div class="inline-block px-4 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 rounded-full text-sm font-semibold mb-6">CRM - Sales Management</div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">Parambadan</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Custom CRM for sales management with multi-role authentication and comprehensive order tracking</p>
                </div>
            </div>
        </section>

        <section class="py-12 bg-gray-50 dark:bg-gray-900">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 md:p-12">
                    
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Project Overview</h2>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                            Parambadan is a comprehensive Customer Relationship Management system designed specifically for sales management. The platform handles complex multi-role workflows, from lead generation to order fulfillment and delivery tracking.
                        </p>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                            Built with a focus on sales efficiency and customer engagement, the system provides real-time insights, automated workflows, and role-specific dashboards to streamline the entire sales process.
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
                                    Multi-Role Authentication
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Developed custom CRM handling multi-role authentication for Admin, Branch Admin, Accountant, Supervisor, Transport Manager, Driver, and Polish Team.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                    Role-Based Access Control
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Implemented comprehensive RBAC system to ensure proper permissions and customized dashboard views for different user roles.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                    Lead Management
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Designed comprehensive lead management and follow-up tracking system, improving customer engagement and conversion rates significantly.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                    </svg>
                                    Order Management
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Built comprehensive order management module enabling smooth processing from order creation to delivery tracking with real-time status updates.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    Custom Reporting
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Developed custom reporting tools for real-time insights into sales performance, orders, and lead conversions with visual analytics.</p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3 flex items-center">
                                    <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                    </svg>
                                    Notification System
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">Integrated comprehensive notification system for order updates, follow-ups, and role-based alerts to keep all stakeholders informed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">User Roles</h2>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <h4 class="font-bold mb-2">Admin</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Full system access and management</p>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <h4 class="font-bold mb-2">Branch Admin</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Branch-specific management</p>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <h4 class="font-bold mb-2">Accountant</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Financial tracking and reporting</p>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <h4 class="font-bold mb-2">Supervisor</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Team oversight and coordination</p>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <h4 class="font-bold mb-2">Transport Manager</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Logistics and delivery management</p>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <h4 class="font-bold mb-2">Driver</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Delivery tracking and updates</p>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <h4 class="font-bold mb-2">Polish Team</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Quality control and finishing</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technologies Used</h2>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">PHP</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Laravel</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">MySQL</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">RBAC</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Real-Time Notifications</span>
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


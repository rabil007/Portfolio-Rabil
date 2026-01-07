<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ManageTrans - Transportation Management System | Mohammed Rabil T</title>
        <meta name="description" content="ManageTrans - Full-stack transportation management system with real-time tracking, AWS Textract OCR, and mobile API for drivers.">
        
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
                    <div class="inline-block px-4 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-800 dark:text-indigo-300 rounded-full text-sm font-semibold mb-6">
                        TMS - Transportation Management
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">ManageTrans</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Full-stack web application for managing transportation operations with real-time tracking, OCR integration, and mobile API
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
                            ManageTrans is a comprehensive Transportation Management System (TMS) designed for managing transportation operations, including drivers, vessels, trips, expenses, and real-time tracking. The system includes a full-featured web admin panel and a RESTful mobile API for driver applications.
                        </p>
                        <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                            Built with Laravel 12 and PHP 8.2+, the platform features advanced integrations with AWS Textract for OCR document processing and Firebase Cloud Messaging for real-time push notifications. The system implements a custom permission system with role-based and user-level access control, ensuring secure and efficient operations.
                        </p>
                    </div>

                    <!-- Key Features -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Key Features & Functionality</h2>
                        
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-4">Core Management Modules</h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        Driver Management
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Complete CRUD operations, document management, real-time location tracking, and driver performance analytics.
                                    </p>
                                </div>
                                
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        Vessel Management
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Fleet management with capacity tracking, specifications management, and comprehensive vessel information.
                                    </p>
                                </div>
                                
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                        </svg>
                                        Trip Management
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Planning, assignment, status tracking, bulk operations, and AI-powered trip title generation.
                                    </p>
                                </div>
                                
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                        </svg>
                                        Staff Management
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        User management with role-based access control and comprehensive staff administration.
                                    </p>
                                </div>
                                
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        Expense & Issue Tracking
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Trip expense management with categorization and comprehensive issue reporting system.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-4">Advanced Features</h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        Real-time Location Tracking
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Driver location updates via API with interactive map visualization for real-time monitoring.
                                    </p>
                                </div>
                                
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        AWS Textract Integration
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        OCR technology for extracting trip data from images and tables, automating data entry processes.
                                    </p>
                                </div>
                                
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                        </svg>
                                        Firebase Push Notifications
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Real-time notifications to mobile devices for trip updates, assignments, and important alerts.
                                    </p>
                                </div>
                                
                                <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                    <h4 class="text-xl font-bold mb-3 flex items-center">
                                        <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        Activity Logging
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Comprehensive audit trail with IP tracking and user activity monitoring for security and compliance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-4">Reporting & Analytics</h3>
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <ul class="space-y-3 text-gray-600 dark:text-gray-400">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Trip summary reports with advanced filtering capabilities</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Expense analysis reports with detailed breakdowns</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Driver performance metrics and analytics</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>Daily and weekly activity reports</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-4">Permission System</h3>
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    Implemented a granular role-based and user-level permission system with intelligent caching for optimal performance. The system supports both role-based access control (RBAC) and user-specific permission overrides, providing flexible and secure access management.
                                </p>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold mb-4">Mobile API</h3>
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <p class="text-gray-600 dark:text-gray-400">
                                    RESTful API designed specifically for driver mobile applications with Laravel Sanctum token-based authentication. The API provides secure endpoints for trip management, location updates, and real-time synchronization.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Stack -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technical Stack</h2>
                        <div class="space-y-6">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Backend</h3>
                                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                    <li><strong>Framework:</strong> Laravel 12 (PHP 8.2+)</li>
                                    <li><strong>Authentication:</strong> Laravel Sanctum (API tokens)</li>
                                    <li><strong>Database:</strong> SQLite (configurable for MySQL/PostgreSQL)</li>
                                    <li><strong>Architecture:</strong> MVC with Service Layer pattern</li>
                                </ul>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Cloud Services</h3>
                                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                    <li><strong>AWS Textract:</strong> OCR and document processing</li>
                                    <li><strong>Firebase Cloud Messaging:</strong> Push notifications</li>
                                </ul>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Frontend</h3>
                                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                    <li><strong>UI Framework:</strong> Bootstrap CSS</li>
                                    <li><strong>Build Tool:</strong> Vite</li>
                                    <li><strong>Styling:</strong> Tailwind CSS 4.0</li>
                                    <li><strong>JavaScript:</strong> Vanilla JS with Axios for API calls</li>
                                </ul>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Development Tools</h3>
                                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                                    <li>Laravel Pint (code formatting)</li>
                                    <li>PHPUnit (testing)</li>
                                    <li>Laravel Pail (log viewer)</li>
                                    <li>Queue workers for background processing</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Highlights -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technical Highlights</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Custom Permission System</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Trait-based permission management with role and user-level overrides, cached for optimal performance.
                                </p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Activity Logging Trait</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Polymorphic activity logging with customizable descriptions for comprehensive audit trails.
                                </p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Service Layer Architecture</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Separate services for Firebase notifications and AWS Textract integration, ensuring clean code organization.
                                </p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">RESTful API Design</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Mobile API with token-based authentication, following REST principles for scalability.
                                </p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Advanced Query Optimization</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Eager loading, relationship queries, and efficient filtering for optimal database performance.
                                </p>
                            </div>
                            
                            <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                                <h3 class="text-xl font-bold mb-3">Image Processing</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    AWS Textract integration for extracting structured data from images and documents.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Project Scale -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Project Scale</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-xl">
                            <ul class="grid md:grid-cols-2 gap-4 text-gray-600 dark:text-gray-400">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>20+ Controllers (Web + API)</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>17+ Models with relationships</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>39+ Database Migrations</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Role-based Access Control with granular permissions</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Multi-tenant ready architecture</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Skills Demonstrated -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Skills Demonstrated</h2>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Full-stack Development</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Laravel</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">PHP</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">JavaScript</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">RESTful API Design</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">AWS Integration</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Firebase</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Database Design</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Authentication & Authorization</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Real-time Features</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Code Organization</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Testing & QA</span>
                        </div>
                    </div>

                    <!-- Technologies Used -->
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold mb-6">Technologies Used</h2>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Laravel 12</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">PHP 8.2+</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Laravel Sanctum</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">SQLite/MySQL</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">AWS Textract</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Firebase Cloud Messaging</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Bootstrap CSS</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Tailwind CSS 4.0</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Vite</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Axios</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">Laravel Pint</span>
                            <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium">PHPUnit</span>
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


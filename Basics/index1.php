<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Dev | Full Stack Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        dark: '#0F172A',
                        light: '#F8FAFC'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #1e293b;
        }
        ::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }

        /* Animations */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .blob {
            position: absolute;
            filter: blur(40px);
            z-index: -1;
            opacity: 0.5;
            animation: float 10s infinite ease-in-out;
        }
        @keyframes float {
            0% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0, 0) scale(1); }
        }
    </style>
</head>
<body class="bg-light text-slate-800 dark:bg-dark dark:text-slate-200 transition-colors duration-300">

    <!-- Decorative Background Blobs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="blob bg-blue-400/30 dark:bg-blue-600/20 w-96 h-96 rounded-full top-0 left-0 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="blob bg-emerald-400/30 dark:bg-emerald-600/20 w-80 h-80 rounded-full bottom-0 right-0 translate-x-1/3 translate-y-1/3 animation-delay-2000"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 dark:bg-dark/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center cursor-pointer" onclick="window.scrollTo(0,0)">
                    <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">
                        &lt;Alex /&gt;
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-sm font-medium hover:text-primary transition-colors">About</a>
                    <a href="#skills" class="text-sm font-medium hover:text-primary transition-colors">Skills</a>
                    <a href="#projects" class="text-sm font-medium hover:text-primary transition-colors">Projects</a>
                    <a href="#contact" class="text-sm font-medium hover:text-primary transition-colors">Contact</a>
                    
                    <!-- Theme Toggle -->
                    <button id="theme-toggle" class="p-2 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors focus:outline-none">
                        <i class="fas fa-moon text-slate-600 dark:text-slate-300 text-lg" id="theme-icon"></i>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-slate-600 dark:text-slate-300 hover:text-primary focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
            <div class="px-4 pt-2 pb-4 space-y-1 flex flex-col">
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-100 dark:hover:bg-slate-800" onclick="toggleMobileMenu()">About</a>
                <a href="#skills" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-100 dark:hover:bg-slate-800" onclick="toggleMobileMenu()">Skills</a>
                <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-100 dark:hover:bg-slate-800" onclick="toggleMobileMenu()">Projects</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-slate-100 dark:hover:bg-slate-800" onclick="toggleMobileMenu()">Contact</a>
                <button id="mobile-theme-toggle" class="mt-2 w-full text-left px-3 py-2 rounded-md text-base font-medium hover:bg-slate-100 dark:hover:bg-slate-800 flex items-center">
                    <span class="mr-2">Toggle Theme</span>
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 md:pt-40 md:pb-28 px-4 max-w-7xl mx-auto flex flex-col-reverse md:flex-row items-center justify-between min-h-[80vh]">
        <div class="w-full md:w-1/2 space-y-6 text-center md:text-left fade-up">
            <h2 class="text-primary font-semibold tracking-wide uppercase text-sm">Full Stack Developer</h2>
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                Building digital <br>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">experiences</span>
                that matter.
            </h1>
            <p class="text-slate-600 dark:text-slate-400 text-lg md:text-xl max-w-lg mx-auto md:mx-0">
                I design and build beautiful websites and applications with a focus on user experience and clean code.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start pt-4">
                <a href="#projects" class="px-8 py-3 rounded-full bg-primary hover:bg-blue-600 text-white font-semibold transition-all shadow-lg shadow-blue-500/30 text-center">
                    View Work
                </a>
                <a href="#contact" class="px-8 py-3 rounded-full border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all text-center">
                    Contact Me
                </a>
            </div>
            
            <div class="pt-8 flex items-center justify-center md:justify-start space-x-6 text-slate-500 dark:text-slate-400">
                <a href="#" class="hover:text-primary transition-colors text-2xl"><i class="fab fa-github"></i></a>
                <a href="#" class="hover:text-primary transition-colors text-2xl"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="hover:text-primary transition-colors text-2xl"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-primary transition-colors text-2xl"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
        
        <div class="w-full md:w-1/2 flex justify-center mb-12 md:mb-0 fade-up" style="animation-delay: 0.2s;">
            <div class="relative w-64 h-64 md:w-96 md:h-96">
                <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary rounded-full opacity-20 animate-pulse"></div>
                <div class="absolute inset-4 bg-white dark:bg-slate-800 rounded-full shadow-2xl flex items-center justify-center overflow-hidden border-4 border-white dark:border-slate-700">
                    <!-- SVG Avatar Placeholder -->
                    <svg class="w-full h-full text-slate-300 dark:text-slate-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                
                <!-- Floating Tech Icons -->
                <div class="absolute top-0 right-0 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-lg animate-bounce" style="animation-delay: 1s;">
                    <i class="fab fa-react text-blue-400 text-2xl"></i>
                </div>
                <div class="absolute bottom-10 left-0 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-lg animate-bounce" style="animation-delay: 2s;">
                    <i class="fab fa-js text-yellow-400 text-2xl"></i>
                </div>
                <div class="absolute top-10 left-4 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-lg animate-bounce" style="animation-delay: 0.5s;">
                    <i class="fab fa-python text-blue-500 text-2xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white/50 dark:bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-up">
                <h2 class="text-3xl font-bold mb-4">Technical Skills</h2>
                <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto fade-up">
                <!-- Skill Card -->
                <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100 dark:border-slate-700">
                    <i class="fab fa-html5 text-4xl text-orange-500 mb-3"></i>
                    <h3 class="font-semibold">HTML/CSS</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Advanced</p>
                </div>
                
                <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100 dark:border-slate-700">
                    <i class="fab fa-js text-4xl text-yellow-400 mb-3"></i>
                    <h3 class="font-semibold">JavaScript</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Expert</p>
                </div>

                <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100 dark:border-slate-700">
                    <i class="fab fa-react text-4xl text-blue-400 mb-3"></i>
                    <h3 class="font-semibold">React</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Advanced</p>
                </div>

                <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100 dark:border-slate-700">
                    <i class="fab fa-node text-4xl text-green-500 mb-3"></i>
                    <h3 class="font-semibold">Node.js</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Intermediate</p>
                </div>

                <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100 dark:border-slate-700">
                    <i class="fas fa-database text-4xl text-cyan-500 mb-3"></i>
                    <h3 class="font-semibold">SQL/NoSQL</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Intermediate</p>
                </div>

                <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100 dark:border-slate-700">
                    <i class="fab fa-git-alt text-4xl text-red-500 mb-3"></i>
                    <h3 class="font-semibold">Git</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Advanced</p>
                </div>

                <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100 dark:border-slate-700">
                    <i class="fas fa-paint-brush text-4xl text-purple-500 mb-3"></i>
                    <h3 class="font-semibold">UI Design</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Intermediate</p>
                </div>

                <div class="p-6 bg-white dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100 dark:border-slate-700">
                    <i class="fab fa-docker text-4xl text-blue-600 mb-3"></i>
                    <h3 class="font-semibold">Docker</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Basic</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-up">
                <h2 class="text-3xl font-bold mb-4">Featured Projects</h2>
                <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
                <p class="mt-4 text-slate-600 dark:text-slate-400">A selection of my recent work.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-700 shadow-lg hover:shadow-2xl transition-all duration-300 fade-up">
                    <div class="h-48 bg-slate-200 dark:bg-slate-700 relative overflow-hidden">
                        <!-- Placeholder for Project Image -->
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400 dark:text-slate-500">
                            <i class="fas fa-laptop-code text-5xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                            <a href="#" class="p-3 bg-white rounded-full hover:bg-primary hover:text-white transition-colors" title="View Code"><i class="fab fa-github"></i></a>
                            <a href="#" class="p-3 bg-white rounded-full hover:bg-primary hover:text-white transition-colors" title="Live Demo"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold group-hover:text-primary transition-colors">E-Commerce Dashboard</h3>
                            <span class="px-2 py-1 text-xs rounded bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300">React</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                            A comprehensive admin dashboard for managing products, orders, and analytics with dark mode support.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 text-xs rounded bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300">Tailwind</span>
                            <span class="px-2 py-1 text-xs rounded bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300">Chart.js</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-700 shadow-lg hover:shadow-2xl transition-all duration-300 fade-up" style="animation-delay: 0.2s;">
                    <div class="h-48 bg-slate-200 dark:bg-slate-700 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400 dark:text-slate-500">
                            <i class="fas fa-mobile-alt text-5xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                            <a href="#" class="p-3 bg-white rounded-full hover:bg-primary hover:text-white transition-colors"><i class="fab fa-github"></i></a>
                            <a href="#" class="p-3 bg-white rounded-full hover:bg-primary hover:text-white transition-colors"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold group-hover:text-primary transition-colors">Task Manager App</h3>
                            <span class="px-2 py-1 text-xs rounded bg-emerald-100 dark:bg-emerald-900 text-emerald-600 dark:text-emerald-300">Node.js</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                            A real-time collaborative task management tool with drag-and-drop capabilities and team chat.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 text-xs rounded bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300">Socket.io</span>
                            <span class="px-2 py-1 text-xs rounded bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300">MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group bg-white dark:bg-slate-800 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-700 shadow-lg hover:shadow-2xl transition-all duration-300 fade-up" style="animation-delay: 0.4s;">
                    <div class="h-48 bg-slate-200 dark:bg-slate-700 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400 dark:text-slate-500">
                            <i class="fas fa-cloud-sun text-5xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                            <a href="#" class="p-3 bg-white rounded-full hover:bg-primary hover:text-white transition-colors"><i class="fab fa-github"></i></a>
                            <a href="#" class="p-3 bg-white rounded-full hover:bg-primary hover:text-white transition-colors"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold group-hover:text-primary transition-colors">Weather Forecast</h3>
                            <span class="px-2 py-1 text-xs rounded bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300">API</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                            A clean weather application providing 7-day forecasts using OpenWeatherMap API with geolocation.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 text-xs rounded bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300">JavaScript</span>
                            <span class="px-2 py-1 text-xs rounded bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300">CSS3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-20 bg-white/50 dark:bg-slate-900/50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-16 fade-up">
                <h2 class="text-3xl font-bold mb-4">Work Experience</h2>
                <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
            </div>

            <div class="relative border-l-2 border-slate-200 dark:border-slate-700 ml-3 md:ml-6 space-y-10">
                <!-- Job 1 -->
                <div class="relative pl-8 md:pl-12 fade-up">
                    <div class="absolute -left-[9px] top-0 w-5 h-5 rounded-full bg-primary border-4 border-white dark:border-slate-900"></div>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-baseline mb-2">
                        <h3 class="text-xl font-bold text-slate-800 dark:text-slate-100">Senior Frontend Developer</h3>
                        <span class="text-sm font-mono text-primary bg-blue-100 dark:bg-blue-900 px-2 py-1 rounded mt-1 sm:mt-0 inline-block">2021 - Present</span>
                    </div>
                    <h4 class="text-lg text-slate-600 dark:text-slate-400 mb-2">Tech Solutions Inc.</h4>
                    <p class="text-slate-600 dark:text-slate-400">
                        Leading a team of 5 developers in building responsive web applications. Implemented CI/CD pipelines and reduced load times by 40%.
                    </p>
                </div>

                <!-- Job 2 -->
                <div class="relative pl-8 md:pl-12 fade-up" style="animation-delay: 0.2s;">
                    <div class="absolute -left-[9px] top-0 w-5 h-5 rounded-full bg-secondary border-4 border-white dark:border-slate-900"></div>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-baseline mb-2">
                        <h3 class="text-xl font-bold text-slate-800 dark:text-slate-100">Web Developer</h3>
                        <span class="text-sm font-mono text-secondary bg-emerald-100 dark:bg-emerald-900 px-2 py-1 rounded mt-1 sm:mt-0 inline-block">2019 - 2021</span>
                    </div>
                    <h4 class="text-lg text-slate-600 dark:text-slate-400 mb-2">Creative Agency</h4>
                    <p class="text-slate-600 dark:text-slate-400">
                        Developed custom WordPress themes and plugins for diverse clients. Collaborated with designers to ensure pixel-perfect implementations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-4">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-16 fade-up">
                <h2 class="text-3xl font-bold mb-4">Get In Touch</h2>
                <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
                <p class="mt-4 text-slate-600 dark:text-slate-400">Have a project in mind? Let's talk about it.</p>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700 fade-up">
                <form onsubmit="event.preventDefault(); alert('Thanks for the message! This is a demo form.');" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Name</label>
                            <input type="text" required class="w-full px-4 py-3 rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Email</label>
                            <input type="email" required class="w-full px-4 py-3 rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" placeholder="john@example.com">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Subject</label>
                        <input type="text" required class="w-full px-4 py-3 rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" placeholder="Project Discussion">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Message</label>
                        <textarea rows="4" required class="w-full px-4 py-3 rounded-lg bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" placeholder="Tell me about your project..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary hover:bg-blue-600 text-white font-bold py-4 rounded-lg transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="mb-4">
                <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">
                    &lt;Alex /&gt;
                </span>
            </div>
            <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                © 2023 Alex Dev. All rights reserved.
            </p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i class="fab fa-github text-xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i class="fab fa-twitter text-xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i class="fas fa-envelope text-xl"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Dark Mode Logic
        const toggleBtns = [document.getElementById('theme-toggle'), document.getElementById('mobile-theme-toggle')];
        const html = document.documentElement;
        const themeIcon = document.getElementById('theme-icon');

        // Check system preference or local storage
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
            updateIcon(true);
        } else {
            html.classList.remove('dark');
            updateIcon(false);
        }

        function updateIcon(isDark) {
            if (isDark) {
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        }

        toggleBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                html.classList.toggle('dark');
                if (html.classList.contains('dark')) {
                    localStorage.theme = 'dark';
                    updateIcon(true);
                } else {
                    localStorage.theme = 'light';
                    updateIcon(false);
                }
            });
        });

        // Mobile Menu Logic
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', toggleMobileMenu);

        function toggleMobileMenu() {
            mobileMenu.classList.toggle('hidden');
        }

        // Intersection Observer for Fade-up Animation
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-up').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
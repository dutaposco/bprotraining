<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPRO - Train Like A Pro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-dark font-sans antialiased">
    
    <!-- Navigation -->
    <nav class="fixed w-full z-50 transition-all duration-300 backdrop-blur-md bg-white/90 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4 grid grid-cols-2 md:grid-cols-3 items-center">
            
            <!-- Left: Logo -->
            <div class="flex justify-start">
                <a href="/" class="text-3xl font-heading tracking-widest text-dark hover:text-brand transition-colors">BPRO</a>
            </div>
            
            <!-- Center: Links (Marketing Focus) -->
            <div class="hidden md:flex justify-center items-center gap-8 text-sm font-bold tracking-wide text-gray-500">
                <a href="#features" class="hover:text-dark transition-colors">Features</a>
                <a href="#faq" class="hover:text-dark transition-colors">FAQ</a>
                <a href="#socials" class="hover:text-dark transition-colors">Socials</a>
            </div>

            <!-- Right: Actions (Strictly Download) -->
            <div class="flex justify-end items-center gap-6">
                <a href="#app" class="bg-gradient-to-r from-brand to-orange-500 text-white px-6 py-2 rounded-full text-sm font-black hover:scale-105 transition-transform shadow-glow">GET THE APP</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-gray-100">
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full">
            <!-- Light Gradient Overlay so text is readable -->
            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent z-10"></div>
            <img src="https://images.unsplash.com/photo-1575361204480-aadea25e6e68?q=80&w=2600&auto=format&fit=crop" class="w-full h-full object-cover object-center opacity-40 grayscale-[20%]" alt="Football Pitch">
        </div>
        
        <!-- Content -->
        <div class="relative z-20 text-center px-4 max-w-5xl mx-auto mt-16">
            <h2 class="text-brand font-bold tracking-widest uppercase mb-4 text-xs sm:text-sm md:text-base">Elite Football Training</h2>
            <h1 class="text-6xl sm:text-7xl md:text-[9rem] font-heading leading-none uppercase tracking-tight text-dark drop-shadow-sm">TRAIN LIKE<br>A PRO</h1>
            <p class="mt-6 md:mt-8 text-base sm:text-lg md:text-2xl font-medium text-gray-600 max-w-2xl mx-auto">Master your mechanics, elevate your football IQ, and reach the next level with Jack Brown and elite BPRO coaches.</p>
            
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <!-- App Store Button -->
                <a href="#" class="rounded-2xl bg-dark text-white font-sans px-6 py-3 hover:scale-105 transition-transform w-full sm:w-auto flex items-center justify-center gap-3 shadow-xl">
                    <svg viewBox="0 0 384 512" class="w-8 h-8 fill-current"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 24 184.9 8.1 245.9c-29.6 114.6 28.5 241.9 88.5 241.9 20.4 0 38.3-13.6 61.3-13.6 22.9 0 38.9 13.6 60.5 13.6 60.5 0 97.4-111.4 97.4-111.4-56.1-23.7-56.7-77.9-57.1-107.7zM264.3 89.2c19.1-23.2 29.8-51.5 26.5-80.4-23.9 1.4-56.4 17.5-73.4 38.1-15.6 18.2-28.5 45.4-24.6 74.4 26.4 2.1 55.4-13.5 71.5-32.1z"/></svg>
                    <div class="text-left flex flex-col leading-none">
                        <span class="text-[10px] uppercase font-bold tracking-widest text-white/70 mb-1">Download on the</span>
                        <span class="text-xl font-bold tracking-tight">App Store</span>
                    </div>
                </a>
                
                <!-- Play Store Button -->
                <a href="#" class="rounded-2xl bg-white border-2 border-gray-200 text-dark font-sans px-6 py-3 hover:bg-gray-50 transition-colors w-full sm:w-auto flex items-center justify-center gap-3 shadow-xl">
                    <svg viewBox="0 0 512 512" class="w-8 h-8 fill-brand"><path d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1z"/></svg>
                    <div class="text-left flex flex-col leading-none">
                        <span class="text-[10px] uppercase font-bold tracking-widest text-gray-500 mb-1">GET IT ON</span>
                        <span class="text-xl font-bold tracking-tight">Google Play</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- App Showcase Section (MOVED UP FOR BETTER FLOW) -->
    <section id="app" class="pt-32 pb-24 px-6 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col items-center text-center">
            <h3 class="text-brand font-bold tracking-widest uppercase mb-2 text-xs md:text-sm">Experience BPRO</h3>
            <h2 class="text-4xl sm:text-5xl md:text-7xl font-heading uppercase leading-none text-dark mb-4 md:mb-6">Built For Athletes.</h2>
            <p class="text-base md:text-lg text-gray-500 font-medium mb-10 md:mb-16 max-w-2xl">A premium, smooth, and distraction-free interface designed to get you in the zone faster. Track your tactical IQ, analyze mechanics, and master your position.</p>

            <!-- 3 Phones Showcase Container -->
            <div class="relative w-full max-w-5xl h-[550px] md:h-[650px] flex justify-center items-center mt-12 mb-8">
                
                <!-- Phone 1 (Left) -->
                <div class="absolute hidden md:block left-0 w-64 h-[500px] bg-dark rounded-[3rem] p-2 shadow-[0_20px_50px_rgba(0,0,0,0.15)] transform -rotate-6 z-10 border-[12px] border-dark overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1543326727-cf6c39e8f84c?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover rounded-[2rem] opacity-90">
                    <!-- Notch -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-6 bg-dark rounded-b-2xl z-20"></div>
                </div>

                <!-- Phone 2 (Center - Hero) -->
                <div class="absolute z-30 w-72 h-[550px] md:h-[600px] bg-dark rounded-[3rem] p-2 shadow-[0_30px_60px_rgba(0,0,0,0.25)] border-[12px] border-dark overflow-hidden transition-transform hover:-translate-y-4 duration-500">
                    <img src="https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover rounded-[2rem] opacity-95">
                    <!-- Notch -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-28 h-6 bg-dark rounded-b-2xl z-20"></div>
                </div>

                <!-- Phone 3 (Right) -->
                <div class="absolute hidden md:block right-0 w-64 h-[500px] bg-dark rounded-[3rem] p-2 shadow-[0_20px_50px_rgba(0,0,0,0.15)] transform rotate-6 z-10 border-[12px] border-dark overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1553778263-73a83bab9b0c?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover rounded-[2rem] opacity-90">
                    <!-- Notch -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-6 bg-dark rounded-b-2xl z-20"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-32 px-6 bg-gray-50 border-t border-gray-200 relative">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-end justify-between mb-12 md:mb-16">
                <div>
                   <h3 class="text-brand font-bold tracking-widest uppercase mb-2 text-xs md:text-sm">Inside The App</h3>
                   <h2 class="text-4xl sm:text-5xl md:text-7xl font-heading uppercase leading-none text-dark">Unlock Your<br>Potential.</h2>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group relative aspect-[4/5] overflow-hidden rounded-2xl bg-white cursor-pointer shadow-lg">
                    <img src="https://images.unsplash.com/photo-1431324155629-1a6d0a6ebbfc?q=80&w=1000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <h3 class="text-3xl font-heading uppercase mb-2">Master Mechanics</h3>
                        <p class="text-sm text-gray-200 font-medium">1-on-1 drills, shooting posture, and ball mastery. Step by step.</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="group relative aspect-[4/5] overflow-hidden rounded-2xl bg-white cursor-pointer mt-0 md:mt-12 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?q=80&w=1000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <h3 class="text-3xl font-heading uppercase mb-2 text-brand">Tactical IQ</h3>
                        <p class="text-sm text-gray-200 font-medium">Read the pitch faster. Decision making under immense pressure.</p>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="group relative aspect-[4/5] overflow-hidden rounded-2xl bg-white cursor-pointer shadow-lg">
                    <img src="https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=1000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <h3 class="text-3xl font-heading uppercase mb-2">Position Specific</h3>
                        <p class="text-sm text-gray-200 font-medium">Drills catered specifically for Strikers, Midfielders, and Defenders.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coaches Section -->
    <section id="coaches" class="py-32 px-6 bg-white relative border-t border-b border-gray-200">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 relative">
                <div class="w-full aspect-[3/4] rounded-3xl overflow-hidden shadow-2xl relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent z-10"></div>
                    <img src="https://images.unsplash.com/photo-1526566762798-8fac9c07aa81?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                    <div class="absolute bottom-6 left-6 z-20 text-white">
                        <p class="text-brand font-black tracking-widest uppercase text-sm mb-1">Head Coach / Founder</p>
                        <h3 class="text-4xl font-heading uppercase">Jack Brown</h3>
                    </div>
                </div>
                <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-brand rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
            </div>
            
            <div class="md:w-1/2">
                <h3 class="text-brand font-bold tracking-widest uppercase mb-2 text-xs md:text-sm">Our Personnel</h3>
                <h2 class="text-4xl sm:text-5xl md:text-7xl font-heading uppercase leading-none mb-6 md:mb-8 text-dark">Learn From<br>The Best.</h2>
                <p class="text-base md:text-lg text-gray-600 font-medium mb-8 leading-relaxed">
                   Led by former Indonesian National Team player Jack Brown, the BPRO coaching staff is comprised of ex-professionals dedicated to passing on real, pitch-proven experience to the next generation.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="border-l-4 border-brand pl-4">
                        <h4 class="text-3xl font-heading uppercase text-dark">50+</h4>
                        <p class="text-sm text-gray-500 font-bold uppercase tracking-wider">Years Pro Exp</p>
                    </div>
                    <div class="border-l-4 border-brand pl-4">
                        <h4 class="text-3xl font-heading uppercase text-dark">12</h4>
                        <p class="text-sm text-gray-500 font-bold uppercase tracking-wider">Elite Coaches</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 px-6 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-heading uppercase mb-8 text-dark">Got Questions?</h2>
            <div class="text-left space-y-6">
                <!-- FAQ Item -->
                <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                    <h4 class="font-bold text-lg mb-2 text-dark">Is the app free?</h4>
                    <p class="text-gray-600 text-sm">The BPRO App is free to download. We offer free drills and tactical quizzes, with an optional PRO subscription for personalized programs.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
                    <h4 class="font-bold text-lg mb-2 text-dark">Can I access my plan on my laptop?</h4>
                    <p class="text-gray-600 text-sm">No. BPRO is exclusively a native application available on iOS and Android to ensure you can take your training right onto the pitch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section (Below FAQ) -->
    <section class="py-20 px-6 bg-brand text-white border-t border-brand">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-6xl font-heading uppercase mb-4 md:mb-6 tracking-tighter">Ready To Step On The Pitch?</h2>
            <p class="text-base md:text-lg font-medium mb-8 md:mb-10 text-white/90">Download BPRO today and start your journey towards excellence.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-dark text-white px-8 py-4 rounded-xl font-bold flex items-center justify-center gap-3 hover:scale-105 transition-transform shadow-xl">
                    <svg viewBox="0 0 384 512" class="w-6 h-6 fill-current"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 24 184.9 8.1 245.9c-29.6 114.6 28.5 241.9 88.5 241.9 20.4 0 38.3-13.6 61.3-13.6 22.9 0 38.9 13.6 60.5 13.6 60.5 0 97.4-111.4 97.4-111.4-56.1-23.7-56.7-77.9-57.1-107.7zM264.3 89.2c19.1-23.2 29.8-51.5 26.5-80.4-23.9 1.4-56.4 17.5-73.4 38.1-15.6 18.2-28.5 45.4-24.6 74.4 26.4 2.1 55.4-13.5 71.5-32.1z"/></svg>
                    App Store
                </a>
                <a href="#" class="bg-white text-dark px-8 py-4 rounded-xl font-bold flex items-center justify-center gap-3 hover:bg-gray-100 hover:scale-105 transition-transform shadow-xl">
                    <svg viewBox="0 0 512 512" class="w-6 h-6 fill-brand"><path d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1z"/></svg>
                    Google Play
                </a>
            </div>
        </div>
    </section>

    <!-- Footer / Socials -->
    <footer id="socials" class="bg-white pt-16 pb-12 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-10">
            <!-- Left: Logo & Community -->
            <div class="text-center md:text-left">
                <div class="text-3xl font-heading tracking-widest text-dark mb-4">BPRO</div>
                <div class="flex items-center justify-center md:justify-start gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-dark hover:bg-brand hover:text-white transition-colors">
                        <!-- Instagram -->
                        <svg viewBox="0 0 448 512" class="w-5 h-5 fill-current"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-dark hover:bg-brand hover:text-white transition-colors">
                        <!-- TikTok -->
                        <svg viewBox="0 0 448 512" class="w-5 h-5 fill-current"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.2V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-dark hover:bg-brand hover:text-white transition-colors">
                        <!-- YouTube -->
                        <svg viewBox="0 0 576 512" class="w-5 h-5 fill-current"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6-42.6-11.4-213.3-11.4-213.3-11.4s-170.8 0-213.2 11.4C51.3 81.8 32.7 100.4 26.4 124.1 15 166.8 15 255.9 15 255.9s0 89.1 11.4 131.8c6.3 23.7 24.8 41.5 48.3 47.8 42.4 11.4 213.2 11.4 213.2 11.4s170.8 0 213.3-11.4c23.2-6.3 41.8-24.1 48.3-47.8 11.3-42.7 11.3-131.8 11.3-131.8s0-89.1-11.3-131.8zM232.1 337.8V174.1l147.2 81.9-147.2 81.8z"/></svg>
                    </a>
                </div>
            </div>
            
            <!-- Right: Links -->
            <div class="flex flex-wrap justify-center gap-6 text-sm font-semibold text-gray-500">
                <a href="#" class="hover:text-brand transition-colors">Privacy</a>
                <a href="#" class="hover:text-brand transition-colors">Terms</a>
                <a href="mailto:contact@bpro.com" class="hover:text-brand transition-colors">Contact</a>
            </div>
        </div>
        <div class="text-center mt-10">
            <div class="text-sm text-gray-400 font-medium">© 2026 BPRO Training. All Rights Reserved.</div>
        </div>
    </footer>

</body>
</html>

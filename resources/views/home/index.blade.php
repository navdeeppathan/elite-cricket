@extends('layouts.app')

@section('title','Home')

@section('content')


    <!-- Hero Section -->
    <!-- Hero Section -->

    <section
    id="home"
    class="min-h-screen flex items-center py-20"
    style="
        background:
        linear-gradient(
        to right,
        rgba(6,23,47,0.8),
        rgba(6,23,47,0.8),
        rgba(6,23,47,0.8)
        ),
        url('{{ asset('assets/hero-cricket.jpg') }}');
        background-size: cover;
        background-position: center;
    "
    >

    <div class="max-w-6xl mx-auto px-6 text-center">

        <!-- Welcome -->

        <p
        class="text-green-400 tracking-widest mb-3 text-sm md:text-base"
        data-aos="fade-down"
        >
        WELCOME TO
        </p>


        <!-- Title -->

        <h1
        class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-white font-semibold leading-tight"
        data-aos="zoom-in"
        >
        ELITE CRICKET
        </h1>


        <h2
        class="text-yellow-400 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold mt-2"
        data-aos="zoom-in"
        data-aos-delay="200"
        >
        ACADEMY
        </h2>


        <!-- Description -->

        <p
        class="text-gray-300 mt-6 max-w-2xl mx-auto text-sm sm:text-base"
        data-aos="fade-up"
        data-aos-delay="300"
        >
        Where champions are made. World-class coaching,
        cutting-edge analytics, and a proven track record
        of producing professional cricketers.
        </p>


        <!-- Buttons -->

        <div
        class="flex flex-col sm:flex-row justify-center gap-4 mt-8"
        data-aos="fade-up"
        data-aos-delay="500"
        >

        <a
            href="#"
            class="bg-green-600 text-white hover:bg-green-700 px-8 py-3 rounded-lg text-base md:text-lg font-semibold"
        >
            👉 Login → Dashboard
        </a>


        <a
            href="#"
            class="bg-gray-200 text-gray-800 px-8 py-3 rounded-lg text-base md:text-lg font-semibold hover:bg-gray-300"
        >
            Explore Programs
        </a>

        </div>


        <!-- Stats -->

        <div
        class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-8 mt-14"
        data-aos="fade-up"
        data-aos-delay="700"
        >

        <div>

            <h3 class="text-3xl md:text-4xl font-bold text-yellow-400">
            500+
            </h3>

            <p class="text-gray-300 mt-2 text-sm md:text-base">
            Players Trained
            </p>

        </div>


        <div>

            <h3 class="text-3xl md:text-4xl font-bold text-yellow-400">
            15+
            </h3>

            <p class="text-gray-300 mt-2 text-sm md:text-base">
            Years Experience
            </p>

        </div>


        <div>

            <h3 class="text-3xl md:text-4xl font-bold text-yellow-400">
            50+
            </h3>

            <p class="text-gray-300 mt-2 text-sm md:text-base">
            Tournaments Won
            </p>

        </div>


        <div>

            <h3 class="text-3xl md:text-4xl font-bold text-yellow-400">
            20+
            </h3>

            <p class="text-gray-300 mt-2 text-sm md:text-base">
            Pro Cricketers
            </p>

        </div>

        </div>

    </div>

    </section>


    <section id="about" class="bg-gray-100 py-24">
        <div
            class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center"
        >

            <!-- Image -->

            <div
                data-aos="fade-right"
            >
                <img
                    src="{{ asset('assets/coaching.jpg') }}"
                    alt="Cricket Training"
                    class="rounded-2xl shadow-lg w-full"
                />
            </div>

            <!-- Content -->

            <div
                data-aos="fade-left"
            >

                <p
                    class="text-green-600 tracking-widest text-sm font-semibold mb-4"
                >
                    ABOUT US
                </p>

                <h2
                    class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight"
                >
                    Building Champions
                    <br />

                    <span class="text-yellow-500">
                        Since 2009
                    </span>
                </h2>

                <p
                    class="text-gray-600 mt-6 leading-relaxed"
                >
                    Elite Cricket Academy is a premier cricket training institution
                    dedicated to nurturing raw talent into world-class cricketers.
                    With state-of-the-art facilities, experienced coaches, and a
                    data-driven approach, we provide comprehensive training
                    programs for all age groups.
                </p>

                <!-- Features -->

                <div
                    class="grid grid-cols-2 gap-6 mt-8"
                >

                    <div
                        class="flex items-center gap-3"
                    >
                        <span
                            class="w-3 h-3 bg-green-600 rounded-full"
                        ></span>

                        <span
                            class="text-gray-800"
                        >
                            Professional Coaches
                        </span>
                    </div>

                    <div
                        class="flex items-center gap-3"
                    >
                        <span
                            class="w-3 h-3 bg-green-600 rounded-full"
                        ></span>

                        <span
                            class="text-gray-800"
                        >
                            Indoor Nets
                        </span>
                    </div>

                    <div
                        class="flex items-center gap-3"
                    >
                        <span
                            class="w-3 h-3 bg-green-600 rounded-full"
                        ></span>

                        <span
                            class="text-gray-800"
                        >
                            Video Analysis
                        </span>
                    </div>

                    <div
                        class="flex items-center gap-3"
                    >
                        <span
                            class="w-3 h-3 bg-green-600 rounded-full"
                        ></span>

                        <span
                            class="text-gray-800"
                        >
                            Fitness Training
                        </span>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section id="programs" class="py-24 text-white" style=" background: linear-gradient(135deg,hsl(220 50% 12%) 0%,hsl(220 45% 18%) 50%,hsl(145 40% 20%) 100%);">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->

            <div
                class="text-center mb-16"
                data-aos="fade-up"
            >
                <p
                    class="text-green-400 tracking-[0.25em] text-sm mb-4"
                >
                    OUR PROGRAMS
                </p>

                <h2
                    class="text-4xl md:text-5xl font-bold"
                >
                    Coaching
                    <span class="text-yellow-400">
                        Programs
                    </span>
                </h2>
            </div>

            <!-- Cards -->

            <div
                class="grid md:grid-cols-2 lg:grid-cols-4 gap-8"
            >

                <!-- Card 1 -->

                <div
                    class="bg-[#132842] rounded-xl p-8 hover:-translate-y-2 transition duration-300"
                    data-aos="fade-up"
                >
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-green-500/20 rounded-lg mb-6"
                    >
                        🎯
                    </div>

                    <h3
                        class="text-xl font-semibold mb-3"
                    >
                        Batting Mastery
                    </h3>

                    <p
                        class="text-gray-300 text-sm leading-relaxed"
                    >
                        Master every shot from cover drives to pull shots
                        with our specialized batting program.
                    </p>

                    <div
                        class="flex justify-between text-sm text-gray-400 mt-6"
                    >
                        <span>⏱ 3 Months</span>
                        <span>📊 All Levels</span>
                    </div>
                </div>

                <!-- Card 2 -->

                <div
                    class="bg-[#132842] rounded-xl p-8 hover:-translate-y-2 transition duration-300"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-green-500/20 rounded-lg mb-6"
                    >
                        ⚡
                    </div>

                    <h3
                        class="text-xl font-semibold mb-3"
                    >
                        Fast Bowling
                    </h3>

                    <p
                        class="text-gray-300 text-sm leading-relaxed"
                    >
                        Develop pace, swing, and accuracy with
                        biomechanical analysis and targeted drills.
                    </p>

                    <div
                        class="flex justify-between text-sm text-gray-400 mt-6"
                    >
                        <span>⏱ 4 Months</span>
                        <span>📊 Intermediate</span>
                    </div>
                </div>

                <!-- Card 3 -->

                <div
                    class="bg-[#132842] rounded-xl p-8 hover:-translate-y-2 transition duration-300"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-green-500/20 rounded-lg mb-6"
                    >
                        🛡
                    </div>

                    <h3
                        class="text-xl font-semibold mb-3"
                    >
                        Wicket Keeping
                    </h3>

                    <p
                        class="text-gray-300 text-sm leading-relaxed"
                    >
                        Sharpen reflexes, learn positioning,
                        and master the art of keeping.
                    </p>

                    <div
                        class="flex justify-between text-sm text-gray-400 mt-6"
                    >
                        <span>⏱ 3 Months</span>
                        <span>📊 All Levels</span>
                    </div>
                </div>

                <!-- Card 4 -->

                <div
                    class="bg-[#132842] rounded-xl p-8 hover:-translate-y-2 transition duration-300"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <div
                        class="w-14 h-14 flex items-center justify-center bg-green-500/20 rounded-lg mb-6"
                    >
                        🏆
                    </div>

                    <h3
                        class="text-xl font-semibold mb-3"
                    >
                        Tournament Prep
                    </h3>

                    <p
                        class="text-gray-300 text-sm leading-relaxed"
                    >
                        Intensive match-simulation training designed
                        to prepare players for competitive cricket.
                    </p>

                    <div
                        class="flex justify-between text-sm text-gray-400 mt-6"
                    >
                        <span>⏱ 2 Months</span>
                        <span>📊 Advanced</span>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section id="achievements" class="bg-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->

            <div class="text-center mb-16" data-aos="fade-up">
                <p class="text-green-600 tracking-[0.25em] text-sm mb-4">
                    OUR PRIDE
                </p>

                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                    Player
                    <span class="text-yellow-500">
                        Achievements
                    </span>
                </h2>
            </div>

            <!-- Content -->

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Achievement List -->

                <div class="space-y-6" data-aos="fade-right">

                    <div class="flex items-center bg-white rounded-xl p-6 shadow-sm border">
                        <div class="text-yellow-500 font-bold text-xl w-20">
                            2024
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-900">
                                National U-19 Championship
                            </h4>

                            <p class="text-gray-500 text-sm">
                                Winners
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center bg-white rounded-xl p-6 shadow-sm border">
                        <div class="text-yellow-500 font-bold text-xl w-20">
                            2023
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-900">
                                State Premier League
                            </h4>

                            <p class="text-gray-500 text-sm">
                                Runners-up
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center bg-white rounded-xl p-6 shadow-sm border">
                        <div class="text-yellow-500 font-bold text-xl w-20">
                            2023
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-900">
                                Best Academy Award
                            </h4>

                            <p class="text-gray-500 text-sm">
                                Regional
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center bg-white rounded-xl p-6 shadow-sm border">
                        <div class="text-yellow-500 font-bold text-xl w-20">
                            2022
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-900">
                                International Youth Cup
                            </h4>

                            <p class="text-gray-500 text-sm">
                                Semi-finalists
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center bg-white rounded-xl p-6 shadow-sm border">
                        <div class="text-yellow-500 font-bold text-xl w-20">
                            2022
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-900">
                                5 Players Selected
                            </h4>

                            <p class="text-gray-500 text-sm">
                                State Team
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center bg-white rounded-xl p-6 shadow-sm border">
                        <div class="text-yellow-500 font-bold text-xl w-20">
                            2021
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-900">
                                District Championship
                            </h4>

                            <p class="text-gray-500 text-sm">
                                Winners
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Image -->

                <div data-aos="fade-left">
                    <img
                        src="{{ asset('assets/trophy.jpg') }}"
                        alt="Cricket Achievement"
                        class="rounded-2xl shadow-lg w-full"
                    />
                </div>

            </div>

        </div>
    </section>


    <section id="gallery" class="py-24 hero-gradient">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->

            <div
                class="text-center mb-16"
                data-aos="fade-up"
            >
                <p
                    class="text-green-400 font-semibold tracking-[0.2em] uppercase text-sm mb-2"
                >
                    Gallery
                </p>

                <h2
                    class="text-4xl md:text-5xl font-bold text-white"
                >
                    Our
                    <span class="text-yellow-400">
                        Moments
                    </span>
                </h2>
            </div>

            <!-- Gallery Grid -->

            <div
                class="grid grid-cols-2 md:grid-cols-4 gap-3 auto-rows-[200px]"
            >

                <!-- Image 1 -->

                <div
                    class="rounded-lg overflow-hidden col-span-2 row-span-2"
                    data-aos="zoom-in"
                >
                    <img
                        src="{{ asset('assets/player-batting.jpg') }}"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                    />
                </div>

                <!-- Image 2 -->

                <div
                    class="rounded-lg overflow-hidden"
                    data-aos="zoom-in"
                    data-aos-delay="100"
                >
                    <img
                        src="{{ asset('assets/player-bowling.jpg') }}"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                    />
                </div>

                <!-- Image 3 -->

                <div
                    class="rounded-lg overflow-hidden"
                    data-aos="zoom-in"
                    data-aos-delay="200"
                >
                    <img
                        src="{{ asset('assets/coaching.jpg') }}"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                    />
                </div>

                <!-- Image 4 -->

                <div
                    class="rounded-lg overflow-hidden col-span-2"
                    data-aos="zoom-in"
                    data-aos-delay="300"
                >
                    <img
                        src="{{ asset('assets/trophy.jpg') }}"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                    />
                </div>

                <!-- Image 5 -->

                <div
                    class="rounded-lg overflow-hidden"
                    data-aos="zoom-in"
                    data-aos-delay="400"
                >
                    <img
                        src="{{ asset('assets/hero-cricket.jpg') }}"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                    />
                </div>

                <!-- Image 6 -->

                <div
                    class="rounded-lg overflow-hidden"
                    data-aos="zoom-in"
                    data-aos-delay="500"
                >
                    <img
                        src="{{ asset('assets/equipment.jpg') }}"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                    />
                </div>

            </div>

        </div>
    </section>


    <section id="testimonials" class="bg-gray-100 py-24">
        <div
            class="max-w-7xl mx-auto px-6"
        >

            <!-- Heading -->

            <div
                class="text-center mb-16"
                data-aos="fade-up"
            >
                <p
                    class="text-green-600 tracking-[0.25em] text-sm mb-4"
                >
                    TESTIMONIALS
                </p>

                <h2
                    class="text-4xl md:text-5xl font-bold text-gray-900"
                >
                    What People
                    <span class="text-yellow-500">
                        Say
                    </span>
                </h2>
            </div>

            <!-- Testimonials Grid -->

            <div
                class="grid md:grid-cols-2 lg:grid-cols-4 gap-8"
            >

                <!-- Card -->

                <div
                    class="bg-white p-8 rounded-xl border shadow-sm hover:shadow-lg transition"
                    data-aos="fade-up"
                >
                    <div class="text-yellow-400 mb-4 text-lg">
                        ★★★★★
                    </div>

                    <p
                        class="text-gray-600 text-sm leading-relaxed italic"
                    >
                        "The coaching here transformed my batting technique.
                        I went from scoring 20s to consistent 50s in just 3 months."
                    </p>

                    <div class="mt-6">
                        <h4
                            class="font-semibold text-gray-900"
                        >
                            Rahul Sharma
                        </h4>

                        <p
                            class="text-sm text-gray-500"
                        >
                            U-19 Player
                        </p>
                    </div>
                </div>

                <!-- Card -->

                <div
                    class="bg-white p-8 rounded-xl border shadow-sm hover:shadow-lg transition"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div class="text-yellow-400 mb-4 text-lg">
                        ★★★★★
                    </div>

                    <p
                        class="text-gray-600 text-sm leading-relaxed italic"
                    >
                        "The academy's approach to fitness and discipline
                        is outstanding. My son has become more focused
                        both on and off the field."
                    </p>

                    <div class="mt-6">
                        <h4
                            class="font-semibold text-gray-900"
                        >
                            Priya Patel
                        </h4>

                        <p
                            class="text-sm text-gray-500"
                        >
                            Parent
                        </p>
                    </div>
                </div>

                <!-- Card -->

                <div
                    class="bg-white p-8 rounded-xl border shadow-sm hover:shadow-lg transition"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="text-yellow-400 mb-4 text-lg">
                        ★★★★★
                    </div>

                    <p
                        class="text-gray-600 text-sm leading-relaxed italic"
                    >
                        "The video analysis and data-driven coaching
                        gave me insights I never had before.
                        Truly world-class training."
                    </p>

                    <div class="mt-6">
                        <h4
                            class="font-semibold text-gray-900"
                        >
                            Amit Kumar
                        </h4>

                        <p
                            class="text-sm text-gray-500"
                        >
                            State Player
                        </p>
                    </div>
                </div>

                <!-- Card -->

                <div
                    class="bg-white p-8 rounded-xl border shadow-sm hover:shadow-lg transition"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <div class="text-yellow-400 mb-4 text-lg">
                        ★★★★★
                    </div>

                    <p
                        class="text-gray-600 text-sm leading-relaxed italic"
                    >
                        "Working at Elite Cricket Academy is a privilege.
                        The infrastructure and support we get to train
                        young talent is unmatched."
                    </p>

                    <div class="mt-6">
                        <h4
                            class="font-semibold text-gray-900"
                        >
                            Deepak Singh
                        </h4>

                        <p
                            class="text-sm text-gray-500"
                        >
                            Coach
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="shop" class="bg-gray-100 py-24" >
        <div
            class="max-w-7xl mx-auto px-6"
        >

            <!-- Heading -->

            <div
                class="text-center mb-16"
                data-aos="fade-up"
            >
                <p
                    class="text-green-600 tracking-[0.25em] text-sm mb-4"
                >
                    MARKETPLACE
                </p>

                <h2
                    class="text-4xl md:text-5xl font-bold text-gray-900"
                >
                    Cricket
                    <span class="text-yellow-500">
                        Shop
                    </span>
                </h2>
            </div>

            <!-- Products -->

            <div
                class="grid md:grid-cols-2 lg:grid-cols-4 gap-8"
            >

                <!-- Product -->

                <div
                    class="bg-white rounded-xl overflow-hidden border shadow-sm hover:shadow-lg transition"
                    data-aos="fade-up"
                >
                    <img
                        src="{{ asset('assets/equipment.jpg') }}"
                        class="w-full h-48 object-cover"
                    />

                    <div class="p-6">

                        <p
                            class="text-green-600 text-sm mb-1"
                        >
                            Bats
                        </p>

                        <h3
                            class="font-semibold text-gray-900"
                        >
                            Pro Cricket Bat
                        </h3>

                        <div
                            class="flex items-center justify-between mt-4"
                        >
                            <span
                                class="text-yellow-500 font-semibold text-lg"
                            >
                                ₹4,999
                            </span>

                            <button
                                class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700"
                            >
                                View
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Product -->

                <div
                    class="bg-white rounded-xl overflow-hidden border shadow-sm hover:shadow-lg transition"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <img
                        src="{{ asset('assets/equipment.jpg') }}"
                        class="w-full h-48 object-cover"
                    />

                    <div class="p-6">

                        <p
                            class="text-green-600 text-sm mb-1"
                        >
                            Gloves
                        </p>

                        <h3
                            class="font-semibold text-gray-900"
                        >
                            Batting Gloves
                        </h3>

                        <div
                            class="flex items-center justify-between mt-4"
                        >
                            <span
                                class="text-yellow-500 font-semibold text-lg"
                            >
                                ₹1,299
                            </span>

                            <button
                                class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700"
                            >
                                View
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Product -->

                <div
                    class="bg-white rounded-xl overflow-hidden border shadow-sm hover:shadow-lg transition"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <img
                        src="{{ asset('assets/equipment.jpg') }}"
                        class="w-full h-48 object-cover"
                    />

                    <div class="p-6">

                        <p
                            class="text-green-600 text-sm mb-1"
                        >
                            Pads
                        </p>

                        <h3
                            class="font-semibold text-gray-900"
                        >
                            Batting Pads
                        </h3>

                        <div
                            class="flex items-center justify-between mt-4"
                        >
                            <span
                                class="text-yellow-500 font-semibold text-lg"
                            >
                                ₹2,499
                            </span>

                            <button
                                class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700"
                            >
                                View
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Product -->

                <div
                    class="bg-white rounded-xl overflow-hidden border shadow-sm hover:shadow-lg transition"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <img
                        src="{{ asset('assets/equipment.jpg') }}"
                        class="w-full h-48 object-cover"
                    />

                    <div class="p-6">

                        <p
                            class="text-green-600 text-sm mb-1"
                        >
                            Helmets
                        </p>

                        <h3
                            class="font-semibold text-gray-900"
                        >
                            Cricket Helmet
                        </h3>

                        <div
                            class="flex items-center justify-between mt-4"
                        >
                            <span
                                class="text-yellow-500 font-semibold text-lg"
                            >
                                ₹3,499
                            </span>

                            <button
                                class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700"
                            >
                                View
                            </button>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Browse Button -->

            <div
                class="text-center mt-16"
            >
                <a
                    href="#"
                    class="border px-8 py-3 rounded-lg text-gray-800 hover:bg-gray-200 transition"
                >
                    Browse All Products →
                </a>
            </div>

        </div>
    </section>


@endsection
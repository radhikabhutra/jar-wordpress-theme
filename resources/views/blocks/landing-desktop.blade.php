{{--
  Title: Landing Page Block (Desktop)
  Description: Editable landing page content for desktop devices only
  Category: formatting
  Icon: admin-home
  Keywords: landing hero desktop
  Mode: edit
  Align: full
  SupportsAlign: full
  SupportsMode: true
  SupportsMultiple: false
--}}
@push('head-scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
@endpush
<style>
.splide__pagination__page {
  background: #BEB4CC;
  border-radius: 9999px;
  transition: all 0.2s;
  margin: 0;
  opacity: 1;
}
.splide__pagination__page.is-active {
  background: #1A003D;
  box-shadow: none;
}

.lottie {
    opacity: 0;
    transition: opacity 0.3s ease;
}

.lottie.active {
    opacity: 1;
}

.lottie.inactive {
    opacity: 0.5;
    position: relative;
}

.lottie.inactive::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
}

.step.active {
    opacity: 1;
}

.step-number.active {
    background: #160829 !important;
}

.step-line {
    z-index: -1;
}
</style>

<header class="sticky top-0 z-30 w-full bg-white py-6 px-[120px] gap-[320px] mx-auto flex justify-center items-center">
    <div class="flex items-center gap-3">
        <img src="{{ get_field('field_logo_image') }}" alt="{{ get_field('field_logo_alt') }}"
            class="h-auto w-9 bg-transparent">
        <span class="text-2xl font-bold text-[#1A003D]">{{ get_field('field_logo_text') }}</span>
    </div>
    <nav class="flex justify-end items-center gap-6">
        {{-- Features Dropdown --}}
        <div class="relative group">
            <button
                class="text-sm text-[#1A003D] cursor-pointer font-medium focus:outline-none flex items-center gap-1 transition-colors duration-200 group-hover:text-[#7029CC]">
                {{ get_field('field_nav_features') }}
                <svg class="w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180 group-hover:text-[#7029CC]"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            @if (have_rows('field_nav_features_dropdown'))
                <div
                    class="fixed top-12 left-1/2 transform -translate-x-1/2 w-[80vw] max-w-6xl opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-all duration-200 z-20">
                    <div class="mt-14 bg-white rounded-lg">
                        <div class="flex gap-6 mx-auto p-6">
                            @while (have_rows('field_nav_features_dropdown'))
                                @php(the_row())
                                <a href="{{ get_sub_field('field_nav_features_dropdown_link') }}"
                                    class="!no-underline flex-1 flex flex-col gap-2 text-center transition-colors duration-200">
                                    <div class="text-2xl font-bold text-[#1A003D] hover:underline">
                                        {{ get_sub_field('field_nav_features_dropdown_title') }}</div>
                                    <div class="text-xs text-[#554766]">
                                        {{ get_sub_field('field_nav_features_dropdown_desc') }}</div>
                                </a>
                            @endwhile
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- Gold Rates --}}
        <a href="{{ get_field('field_nav_gold_rates_link') }}"
            class="text-sm text-[#1A003D] font-medium !no-underline hover:text-[#43197A] cursor-pointer">{{ get_field('field_nav_gold_rates') }}</a>

        {{-- Resources Dropdown --}}
        <div class="relative group">
            <button
                class="text-sm text-[#1A003D] cursor-pointer font-medium focus:outline-none flex items-center gap-1 transition-colors duration-200 group-hover:text-[#7029CC]">
                {{ get_field('field_nav_resources') }}
                <svg class="w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180 group-hover:text-[#7029CC]"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            @if (have_rows('field_nav_resources_dropdown'))
                <div
                    class="fixed top-12 left-1/2 transform -translate-x-1/2 w-[80vw] max-w-6xl opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-all duration-200 z-20">
                    <div class="mt-14 bg-white rounded-lg">
                        <div class="flex gap-6 mx-auto p-6">
                            @while (have_rows('field_nav_resources_dropdown'))
                                @php(the_row())
                                <a href="{{ get_sub_field('field_nav_resources_dropdown_link') }}"
                                    class="!no-underline flex-1 flex flex-col gap-2 text-center transition-colors duration-200">
                                    <div class="text-2xl font-bold text-[#1A003D] hover:underline">
                                        {{ get_sub_field('field_nav_resources_dropdown_title') }}</div>
                                    <div class="text-xs text-[#554766]">
                                        {{ get_sub_field('field_nav_resources_dropdown_desc') }}</div>
                                </a>
                            @endwhile
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- Blogs --}}
        <a href="{{ get_field('field_nav_blogs_link') }}"
            class="text-sm text-[#1A003D] font-medium !no-underline hover:text-[#43197A] cursor-pointer">{{ get_field('field_nav_blogs') }}</a>

        {{-- About Us Dropdown --}}
        <div class="relative group">
            <button
                class="text-sm text-[#1A003D] cursor-pointer font-medium focus:outline-none flex items-center gap-1 transition-colors duration-200 group-hover:text-[#7029CC]">
                {{ get_field('field_nav_about_us') }}
                <svg class="w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180 group-hover:text-[#7029CC]"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            @if (have_rows('field_nav_about_us_dropdown'))
                <div
                    class="fixed top-12 left-1/2 transform -translate-x-1/2 w-[80vw] max-w-6xl opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-all duration-200 z-20">
                    <div class="mt-14 bg-white rounded-lg">
                        <div class="flex gap-6 mx-auto p-6">
                            @while (have_rows('field_nav_about_us_dropdown'))
                                @php(the_row())
                                <a href="{{ get_sub_field('field_nav_about_us_dropdown_link') }}"
                                    class="!no-underline flex-1 flex flex-col gap-2 text-center transition-colors duration-200">
                                    <div class="text-2xl font-bold text-[#1A003D] hover:underline">
                                        {{ get_sub_field('field_nav_about_us_dropdown_title') }}</div>
                                    <div class="text-xs text-[#554766]">
                                        {{ get_sub_field('field_nav_about_us_dropdown_desc') }}</div>
                                </a>
                            @endwhile
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- Help --}}
        <a href="{{ get_field('field_nav_help_link') }}"
            class="text-sm text-[#1A003D] font-medium !no-underline hover:text-[#43197A] cursor-pointer">{{ get_field('field_nav_help') }}</a>

        {{-- Download App --}}
        <a href="{{ get_field('field_download_app_link') }}"
            class="!no-underline bg-[#43197A] text-sm text-white font-medium px-4 py-3 rounded-lg flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <circle cx="12" cy="12" r="10" />
            </svg>
            {{ get_field('field_download_app_text') }}
        </a>
    </nav>
</header>

<main class="bg-white min-h-screen flex flex-col items-center w-full">
    {{-- Hero Section --}}
    <section class="py-20 w-full flex flex-col justify-center items-center gap-12 mx-auto">
        <div class="w-full max-w-3xl flex flex-col gap-3 items-center">
            <h1 class="text-7xl font-bold text-center text-[#1A003D]">{{ get_field('field_headline') }}</h1>
            <p class="text-xl text-center text-[#554766]">{{ get_field('field_subheadline') }}</p>
            <a href="{{ get_field('field_cta_link') }}"
                class="!no-underline mt-2 bg-[#43197A] text-sm text-white font-bold px-6 py-3 rounded-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                    <circle cx="12" cy="12" r="10" />
                </svg>
                {{ get_field('field_cta_text') }}
            </a>
        </div>

        @if (get_field('field_hero_video_url'))
            <div class="w-full max-w-5xl">
                <div class="!aspect-[16/9] w-full h-full overflow-hidden">
                    <iframe src="{{ get_field('field_hero_video_url') }}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen class="w-full h-full"></iframe>
                </div>
            </div>
        @endif
    </section>

    {{-- Awards Section --}}
    <section class="w-full py-20 px-[120px] bg-[#1A003D] flex justify-center items-center gap-24">
        @if (have_rows('field_awards_section'))

            @while (have_rows('field_awards_section'))
                @php(the_row())
                <div class="flex flex-col justify-center items-center gap-3">
                    {{-- award image --}}
                    @if (get_sub_field('field_award_image'))
                        <img src="{{ get_sub_field('field_award_image') }}"
                            alt="{{ get_sub_field('field_award_title') }}" class="w-20 h-auto" />
                    @endif

                    <div class="flex">
                        {{-- Left Vector --}}
                        @if (get_field('field_awards_left_vector'))
                            <img src="{{ get_field('field_awards_left_vector') }}" alt="Left Vector"
                                class="w-8 h-auto" />
                        @endif

                        <div class="flex flex-col gap-1">
                            <div class="text-[10px] text-[#BEB4CC] font-medium text-center">
                                {{ get_sub_field('field_award_title') }}</div>
                            <div class="text-sm font-bold text-white text-center">
                                {{ get_sub_field('field_award_subtitle') }}</div>
                            <div class="text-[8px] text-[#BEB4CC] text-center">
                                {{ get_sub_field('field_award_date') }}</div>
                        </div>

                        {{-- Right Vector --}}
                        @if (get_field('field_awards_right_vector'))
                            <img src="{{ get_field('field_awards_right_vector') }}" alt="Right Vector"
                                class="w-8 h-auto" />
                        @endif
                    </div>
                </div>
            @endwhile

        @endif
    </section>

    {{-- Mentions Section --}}
    <section class="w-full bg-[#FEF9EA] py-20 px-[120px] flex flex-col gap-12 items-center">
        <h2 class="text-[56px] font-bold text-center text-[#1A003D]">
            {{ get_field('field_mentions_section_title') }}
        </h2>
        @if(have_rows('field_mentions_section'))
            <div id="mentions-splide" class="splide w-full max-w-4xl mx-auto">
                <div class="splide__track">
                    <ul class="splide__list">
                        @while(have_rows('field_mentions_section')) @php(the_row())
                            <li class="splide__slide flex flex-col items-center w-full">
                                <div class="w-full flex justify-center">
                                    <iframe
                                        src="{{ get_sub_field('field_mentions_video_url') }}"
                                        class="w-full max-w-4xl aspect-video"
                                        allowfullscreen
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        title="Mention Video"
                                    ></iframe>
                                </div>
                                <span class="text-xs text-[#554766] text-center pt-1">
                                    <strong>Credits:</strong> {{ get_sub_field('field_mentions_credit') }}
                                </span>
                                <div class="text-xl font-bold text-center pt-12"
                                  style="background: linear-gradient(90deg, #7029CC 30.82%, #CC29BC 69.57%); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                    {!! get_sub_field('field_mentions_title') !!}
                                </div>
                                <div class="text-base text-[#1A003D] text-center pt-4 mb-8">
                                    {{ get_sub_field('field_mentions_subtitle') }}
                                </div>
                            </li>
                        @endwhile
                    </ul>
                </div>
            </div>
        @endif
    </section>

    {{-- Why Save in Jar Section --}}
    <section class="w-full bg-[#F4F4F5] py-20 flex flex-col items-center">
        <h2 class="text-[56px] font-bold text-center text-[#1A003D] mb-12">
            {{ get_field('field_why_save_in_jar_title') }}
        </h2>
        @if(have_rows('field_why_save_in_jar_features'))
            <div class="grid grid-cols-3 justify-center gap-6 w-full max-w-6xl">
                @while(have_rows('field_why_save_in_jar_features')) @php(the_row())
                    <div class="bg-white rounded-[20px] flex flex-col items-center p-5 border border-[#E9E4F0]">
                        <img src="{{ get_sub_field('field_why_save_in_jar_icon') }}" alt="{{ get_sub_field('field_why_save_in_jar_card_title') }}" class="h-[160px] w-auto mb-4" />
                        <div class="text-xl font-bold text-[#1A003D] mb-2 text-center">{{ get_sub_field('field_why_save_in_jar_card_title') }}</div>
                        <div class="text-base text-[#554766] text-center max-w-[65%]">
                            {{ get_sub_field('field_why_save_in_jar_card_desc') }}
                        </div>
                    </div>
                @endwhile
            </div>
        @endif
        <div class="text-xs text-[#554766] text-center mt-2">
            {{ get_field('field_why_save_in_jar_footnote') }}
        </div>
    </section>

    {{-- How Jar Works Section --}}
    <section id="how-jar-works-section" class="py-20 w-full flex flex-col justify-center items-center gap-12 mx-auto">
        <h1 class="text-[56px] font-bold text-center text-[#160829]">{{ get_field('field_how_jar_works_title') }}</h1>

        <!-- Lottie Container -->
        <div id="lottie-container" class="w-full max-w-5xl mx-auto flex justify-center gap-6">
            @if(have_rows('field_how_jar_works_steps')) 
                @while(have_rows('field_how_jar_works_steps')) 
                    @php(the_row())
                    <figure
                        class="w-[300px] h-[300px]"
                        x-data="{ animation: '' }"
                        x-init="
                            lottie.loadAnimation({
                                container: $el,
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: '{{ get_sub_field('field_how_jar_works_lottie_url') }}'
                            });
                        "
                    ></figure>
                @endwhile
            @endif
        </div>

        <!-- Stepper Section -->
        <div class="steps-container w-full max-w-5xl flex justify-center gap-6">
            @if(have_rows('field_how_jar_works_steps')) 
                @while(have_rows('field_how_jar_works_steps')) 
                    @php(the_row())
                    <div class="step flex flex-col justify-center items-center gap-2 w-[300px]" id="step-{{ get_sub_field('field_how_jar_works_step_number') }}">
                        <div class="step-number w-8 h-8 bg-[#887A99] rounded-full flex items-center justify-center text-white font-bold">
                            {{ get_sub_field('field_how_jar_works_step_number') }}
                        </div>
                        <h3 class="text-xl font-bold text-center text-[#1A003D]">
                            {{ get_sub_field('field_how_jar_works_step_title') }}
                        </h3>
                        <p class="text-sm text-[#1A003D] text-center">
                            {{ get_sub_field('field_how_jar_works_step_desc') }}
                        </p>
                    </div>
                @endwhile
            @endif
            <div class="step-line absolute top-[-20px] left-0 w-full h-[2px] bg-[#E9E4F0]"></div>
        </div>

        <!-- Controls Section -->
        <div class="controls w-full flex justify-center gap-3">
            <button class="prev-step bg-[#43197A] text-white rounded-full w-10 h-10 flex justify-center items-center cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="next-step bg-[#43197A] text-white rounded-full w-10 h-10 flex justify-center items-center cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>

    <!-- Reviews Section -->
    <section 
    x-data="reviewsComponent()" 
    x-init="init()" 
    x-intersect:enter="startAuto()" 
    x-intersect:leave="stopAuto()" 
    class="w-full px-[120px] py-20 bg-[#160829]"
    >
        <div class="max-w-5xl mx-auto grid grid-cols-2 gap-6">
            <!-- Left: Text & Button -->
            <div class="flex flex-col justify-between items-start">
                <div>
                    <div class="text-xl font-bold mb-2 uppercase tracking-wide" 
                    style="background: linear-gradient(90deg, #8D54D6 30.82%, #CC29BC 69.57%);
                            background-clip: text;
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;">
                    {{ get_field('field_reviews_section_title') }}
                    </div>
                    <div class="text-[72px] font-bold text-white mb-6">
                    {{ get_field('field_reviews_section_subtitle') }}
                    </div>

                    <div class="flex gap-2">
                    <template x-for="i in 5" :key="i">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                            <path d="M10.0979 1.8541C10.6966 0.0114765 13.3034 0.0114799 13.9021 1.8541L15.1432 5.67376C15.4109 6.49781 16.1789 7.05573 17.0453 7.05573H21.0615C22.999 7.05573 23.8045 9.53496 22.2371 10.6738L18.9879 13.0344C18.2869 13.5437 17.9936 14.4465 18.2614 15.2705L19.5024 19.0902C20.1012 20.9328 17.9922 22.465 16.4248 21.3262L13.1756 18.9656C12.4746 18.4563 11.5254 18.4563 10.8244 18.9656L7.57523 21.3262C6.0078 22.465 3.89885 20.9328 4.49755 19.0902L5.73863 15.2705C6.00638 14.4465 5.71306 13.5437 5.01209 13.0344L1.76289 10.6738C0.195462 9.53496 1.00102 7.05573 2.93846 7.05573H6.95469C7.82115 7.05573 8.58906 6.49781 8.8568 5.67376L10.0979 1.8541Z" fill="#F4C430"/>
                        </svg>
                    </template>
                    </div>
                </div>
                <a href="{{ get_field('field_reviews_section_button_link') }}"
                    class="!no-underline bg-[#F1EAFA] text-sm text-[#1A003D] font-bold px-6 py-[18px] rounded-lg flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    {{ get_field('field_reviews_section_button_text') }}
                </a>
            </div>

            <!-- Right: Images & Review Card -->
            <div class="flex flex-col gap-8 items-center">
            <!-- Images in a circle -->
                <div class="flex flex-col gap-2 items-center w-full">
                    <!-- Row 1: 4 images -->
                    <div class="flex justify-center gap-9">
                        <template x-for="(review, idx) in reviews.slice(0, 4)" :key="idx">
                            <img
                                :src="review.image"
                                :alt="review.name"
                                class="w-[60px] h-[60px] rounded-full object-cover border transition-all duration-300 cursor-pointer"
                                :class="idx === active ? 'border-4 border-[#FFF] shadow-lg scale-110 z-10' : 'border-[#E9E4F0] opacity-20 z-0'"
                                @click="showReview(idx)"
                            >
                        </template>
                    </div>
                    <!-- Row 2: 5 images -->
                    <div class="flex justify-center gap-4">
                        <template x-for="(review, idx) in reviews.slice(4, 9)" :key="idx+4">
                            <img
                                :src="review.image"
                                :alt="review.name"
                                class="w-[80px] h-[80px] rounded-full object-cover border transition-all duration-300 cursor-pointer"
                                :class="(idx+4) === active ? 'border-4 border-[#FFF] shadow-lg scale-110 z-10' : 'border-[#E9E4F0] opacity-20 z-0'"
                                @click="showReview(idx+4)"
                            >
                        </template>
                    </div>
                    <!-- Row 3: 4 images -->
                    <div class="flex justify-center gap-9">
                        <template x-for="(review, idx) in reviews.slice(9, 13)" :key="idx+9">
                            <img
                                :src="review.image"
                                :alt="review.name"
                                class="w-[60px] h-[60px] rounded-full object-cover border transition-all duration-300 cursor-pointer"
                                :class="(idx+9) === active ? 'border-4 border-[#FFF] shadow-lg scale-110 z-10' : 'border-[#E9E4F0] opacity-20 z-0'"
                                @click="showReview(idx+9)"
                            >
                        </template>
                    </div>
                </div>
                <!-- Review Card -->
                <div class="bg-[#2D1052] border border-[#5A21A3] rounded-2xl p-4 w-full flex flex-col gap-4">
                    <div class="flex justify-between items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M25.0667 26.9908C23.2889 26.9908 21.6296 26.425 20.0889 25.2932C18.6074 24.1049 17.8667 21.9829 17.8667 18.9272C17.8667 16.6071 18.3407 14.4568 19.2889 12.4763C20.2963 10.4391 21.6889 8.7415 23.4667 7.38341C25.2444 6.02532 27.3185 5.20481 29.6889 4.92188L30.0444 7.63806C29.3926 7.75123 28.5926 7.97758 27.6444 8.3171C26.6963 8.65662 25.8667 9.10932 25.1556 9.67519C24.4444 10.2411 24.0889 10.9201 24.0889 11.7123C24.0889 12.3348 24.2963 12.7592 24.7111 12.9855C25.1259 13.1553 25.6296 13.3251 26.2222 13.4948C27.3482 13.7778 28.3259 14.2305 29.1556 14.8529C30.0444 15.4754 30.7259 16.2393 31.2 17.1447C31.7333 17.9935 32 19.0121 32 20.2004C32 21.7848 31.437 23.3127 30.3111 24.7839C29.2444 26.2552 27.4963 26.9908 25.0667 26.9908ZM7.2 27.0757C5.42222 27.0757 3.76296 26.5098 2.22222 25.3781C0.740741 24.1898 0 22.0678 0 19.0121C0 16.692 0.474074 14.5417 1.42222 12.5611C2.42963 10.524 3.82222 8.82639 5.6 7.4683C7.37778 6.1102 9.45185 5.28969 11.8222 5.00675L12.1778 7.72294C11.5259 7.83611 10.7259 8.06246 9.77778 8.40198C8.82963 8.7415 8 9.1942 7.28889 9.76007C6.57778 10.3259 6.22222 11.005 6.22222 11.7972C6.22222 12.4197 6.42963 12.8441 6.84444 13.0704C7.25926 13.2402 7.76296 13.4099 8.35555 13.5797C9.48148 13.8626 10.4593 14.3153 11.2889 14.9378C12.1778 15.5602 12.8593 16.3242 13.3333 17.2296C13.8667 18.0784 14.1333 19.0969 14.1333 20.2853C14.1333 21.8697 13.5704 23.3976 12.4444 24.8688C11.3778 26.3401 9.62963 27.0757 7.2 27.0757Z" fill="#C6A9EB"/>
                    </svg>            
                    <div class="flex gap-1">
                        <template x-for="i in 5" :key="i">
                        <svg
                        class="w-7 h-7"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24" height="22" viewBox="0 0 24 22" fill="none"
                        >
                        <path
                            d="M10.0979 1.8541C10.6966 0.0114765 13.3034 0.0114799 13.9021 1.8541L15.1432 5.67376C15.4109 6.49781 16.1789 7.05573 17.0453 7.05573H21.0615C22.999 7.05573 23.8045 9.53496 22.2371 10.6738L18.9879 13.0344C18.2869 13.5437 17.9936 14.4465 18.2614 15.2705L19.5024 19.0902C20.1012 20.9328 17.9922 22.465 16.4248 21.3262L13.1756 18.9656C12.4746 18.4563 11.5254 18.4563 10.8244 18.9656L7.57523 21.3262C6.0078 22.465 3.89885 20.9328 4.49755 19.0902L5.73863 15.2705C6.00638 14.4465 5.71306 13.5437 5.01209 13.0344L1.76289 10.6738C0.195462 9.53496 1.00102 7.05573 2.93846 7.05573H6.95469C7.82115 7.05573 8.58906 6.49781 8.8568 5.67376L10.0979 1.8541Z"
                            :fill="i <= currentReview.stars ? '#F4C430' : '#BEB4CC'"
                        />
                        </svg>
                        </template>
                    </div>
                    </div>
                    <div class="text-2xl font-bold text-[#F1EAFA] mb-2" x-text="currentReview.title"></div>
                    <div class="text-base text-[#C6A9EB]" x-text="currentReview.text"></div>
                </div>
            </div>
        </div>
    </section>
</main>

@push('footer-scripts')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('mentions-splide')) {
      new Splide('#mentions-splide', {
        type: 'loop',
        perPage: 1,
        pagination: true,
        arrows: false,
        gap: '2rem',
        classes: {
          pagination: 'splide__pagination flex justify-center gap-2 mt-4',
          page: 'splide__pagination__page w-4 h-4 rounded-full mx-1',
        }
      }).mount();
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/lottie-web@5.12.2/build/player/lottie.min.js"></script>
<script id="reviews-button" type="application/json">
{!! json_encode([
  'text' => get_field('reviews_section_button_text') ?: '',
  'link' => get_field('reviews_section_button_link') ?: '#',
]) !!}
</script>
<script id="reviews-data" type="application/json">
{!! collect(get_field('reviews_repeater') ?: [])->map(function($row) {
  return [
    'image' => $row['user_image'] ?? '',
    'name' => $row['user_name'] ?? '',
    'title' => $row['review_title'] ?? '',
    'text' => $row['review_text'] ?? '',
    'stars' => $row['review_stars'] ?? 5,
  ];
})->toJson() !!}
</script>
<script>
function reviewsComponent() {
  return {
    reviews: [],
    active: 0,
    timer: null,
    get currentReview() {
      return this.reviews[this.active] || {};
    },
    showReview(idx) {
      if (idx >= 0 && idx < this.reviews.length) {
        this.active = idx;
        this.stopAuto(); // Stop auto-cycling when user manually selects
        
        // Restart auto-cycling after 5 seconds of inactivity
        setTimeout(() => {
          if (!this.timer) {
            this.startAuto();
          }
        }, 5000);
      }
    },
    
    getRandomIndex() {
      if (this.reviews.length <= 1) return 0;
      
      let newIndex;
      do {
        newIndex = Math.floor(Math.random() * this.reviews.length);
      } while (newIndex === this.active);
      
      return newIndex;
    },
    
    startAuto() {
      if (this.timer || this.reviews.length < 2) return;
      this.timer = setInterval(() => {
        this.active = this.getRandomIndex();
      }, 5000);
    },

    stopAuto() {
      if (this.timer) {
        clearInterval(this.timer);
        this.timer = null;
      }
    },

    init() {
      const reviewsScript = document.getElementById('reviews-data');
      if (reviewsScript) {
        try {
          this.reviews = JSON.parse(reviewsScript.textContent);
        } catch (e) {
          this.reviews = [];
        }
      }
      // Set initial random review
      if (this.reviews.length > 0) {
        this.active = Math.floor(Math.random() * this.reviews.length);
      }
      // Start auto cycling as soon as the component is initialized
      this.startAuto();
    }
  }
}
</script>
@endpush

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
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
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
</main>
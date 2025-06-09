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
<div class="block-visibility-wrapper" data-block-visibility="desktop">
  <header class="sticky top-0 z-30 w-full bg-white py-6 px-[120px] gap-[320px] mx-auto flex justify-center items-center">
    <div class="flex items-center gap-3">
      <img src="{{ get_field('field_logo_image') }}" alt="{{ get_field('field_logo_alt') }}" class="h-auto w-9 bg-transparent">
      <span class="text-2xl font-bold text-[#1A003D]">{{ get_field('field_logo_text') }}</span>
    </div>
    <nav class="flex justify-end items-center gap-6">
      {{-- Features Dropdown --}}
      <div class="relative group">
        <button class="text-sm text-[#1A003D] font-medium focus:outline-none flex items-center gap-1 transition-colors duration-200 group-hover:text-[#43197A]">
          {{ get_field('field_nav_features') }}
          <svg class="w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180 group-hover:text-[#43197A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        @if (have_rows('field_nav_features_dropdown'))
          <div class="fixed top-20 left-1/2 transform -translate-x-1/2 w-[80vw] max-w-6xl opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-all duration-200 z-20">
            <div class="mt-14 bg-white rounded-lg">
              <div class="flex gap-6 mx-auto p-6">
                @while (have_rows('field_nav_features_dropdown'))
                  @php(the_row())
                  <a href="{{ get_sub_field('field_nav_features_dropdown_link') }}" class="!no-underline flex-1 flex flex-col gap-2 text-center transition-colors duration-200">
                    <div class="text-2xl font-bold text-[#1A003D] hover:underline">{{ get_sub_field('field_nav_features_dropdown_title') }}</div>
                    <div class="text-xs text-[#554766]">{{ get_sub_field('field_nav_features_dropdown_desc') }}</div>
                  </a>
                @endwhile
              </div>
            </div>
          </div>
        @endif
      </div>

      {{-- Gold Rates --}}
      <a href="{{ get_field('field_nav_gold_rates_link') }}" class="text-sm text-[#1A003D] font-medium !no-underline hover:text-[#43197A] cursor-pointer">{{ get_field('field_nav_gold_rates') }}</a>

      {{-- Resources Dropdown --}}
      <div class="relative group">
        <button class="text-sm text-[#1A003D] font-medium focus:outline-none flex items-center gap-1 transition-colors duration-200 group-hover:text-[#43197A]">
          {{ get_field('field_nav_resources') }}
          <svg class="w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180 group-hover:text-[#43197A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        @if (have_rows('field_nav_resources_dropdown'))
          <div class="fixed top-20 left-1/2 transform -translate-x-1/2 w-[80vw] max-w-6xl opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-all duration-200 z-20">
            <div class="mt-14 bg-white rounded-lg">
              <div class="flex gap-6 mx-auto p-6">
                @while (have_rows('field_nav_resources_dropdown'))
                  @php(the_row())
                  <a href="{{ get_sub_field('field_nav_resources_dropdown_link') }}" class="!no-underline flex-1 flex flex-col gap-2 text-center transition-colors duration-200">
                    <div class="text-2xl font-bold text-[#1A003D] hover:underline">{{ get_sub_field('field_nav_resources_dropdown_title') }}</div>
                    <div class="text-xs text-[#554766]">{{ get_sub_field('field_nav_resources_dropdown_desc') }}</div>
                  </a>
                @endwhile
              </div>
            </div>
          </div>
        @endif
      </div>

      {{-- Blogs --}}
      <a href="{{ get_field('field_nav_blogs_link') }}" class="text-sm text-[#1A003D] font-medium !no-underline hover:text-[#43197A] cursor-pointer">{{ get_field('field_nav_blogs') }}</a>

      {{-- About Us Dropdown --}}
      <div class="relative group">
        <button class="text-sm text-[#1A003D] font-medium focus:outline-none flex items-center gap-1 transition-colors duration-200 group-hover:text-[#43197A]">
          {{ get_field('field_nav_about_us') }}
          <svg class="w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180 group-hover:text-[#43197A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        @if (have_rows('field_nav_about_us_dropdown'))
          <div class="fixed top-20 left-1/2 transform -translate-x-1/2 w-[80vw] max-w-6xl opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition-all duration-200 z-20">
            <div class="mt-14 bg-white rounded-lg">
              <div class="flex gap-6 mx-auto p-6">
                @while (have_rows('field_nav_about_us_dropdown'))
                  @php(the_row())
                  <a href="{{ get_sub_field('field_nav_about_us_dropdown_link') }}" class="!no-underline flex-1 flex flex-col gap-2 text-center transition-colors duration-200">
                    <div class="text-2xl font-bold text-[#1A003D] hover:underline">{{ get_sub_field('field_nav_about_us_dropdown_title') }}</div>
                    <div class="text-xs text-[#554766]">{{ get_sub_field('field_nav_about_us_dropdown_desc') }}</div>
                  </a>
                @endwhile
              </div>
            </div>
          </div>
        @endif
      </div>

      {{-- Help --}}
      <a href="{{ get_field('field_nav_help_link') }}" class="text-sm text-[#1A003D] font-medium !no-underline hover:text-[#43197A] cursor-pointer">{{ get_field('field_nav_help') }}</a>

      {{-- Download App --}}
      <a href="{{ get_field('field_download_app_link') }}" class="!no-underline bg-[#43197A] text-sm text-white font-medium px-4 py-3 rounded-lg flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
          <circle cx="12" cy="12" r="10" />
        </svg>
        {{ get_field('field_download_app_text') }}
      </a>
    </nav>
  </header>

  <main class="bg-white min-h-screen flex flex-col items-center mx-auto py-20">
    <section class="w-full max-w-3xl flex flex-col gap-3 items-center">
      <h1 class="text-7xl font-bold text-center text-[#1A003D]">{{ get_field('field_headline') }}</h1>
      <p class="text-xl text-center text-[#554766]">{{ get_field('field_subheadline') }}</p>
      <a href="{{ get_field('field_cta_link') }}" class="!no-underline mt-2 bg-[#43197A] text-sm text-white font-bold px-6 py-3 rounded-lg flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
          <circle cx="12" cy="12" r="10" />
        </svg>
        {{ get_field('field_cta_text') }}
      </a>
    </section>

    @if (get_field('field_hero_video_url'))
      <section class="w-full max-w-5xl mt-12">
        <div class="!aspect-[16/9] w-full h-full overflow-hidden">
          <iframe src="{{ get_field('field_hero_video_url') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="w-full h-full" />
        </div>
      </section>
    @endif

  </main>
</div>

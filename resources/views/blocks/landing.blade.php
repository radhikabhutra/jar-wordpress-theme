{{--
  Title: Landing Page Block
  Description: Editable landing page content
  Category: formatting
  Icon: admin-home
  Keywords: landing hero
  Mode: edit
  Align: full
  SupportsAlign: full
  SupportsMode: true
  SupportsMultiple: false
--}}

<header class="sticky top-0 z-30 w-full bg-[#f7f6fa] py-4 px-8 flex items-center justify-between shadow-sm">
  <div class="flex items-center gap-3">
    <img src="{{ get_field('logo_image') }}" alt="{{ get_field('logo_alt') }}" class="h-10 w-10 rounded">
    <span class="text-2xl font-bold text-[#1a0a33]">{{ get_field('logo_text') }}</span>
  </div>
  <nav class="hidden md:flex flex-1 justify-center gap-8 text-[#1a0a33] font-medium text-base">
    <div class="relative group">
      <button class="focus:outline-none flex items-center gap-1">{{ get_field('nav_features') }} <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></button>
    </div>
    <a href="{{ get_field('nav_gold_rates_link') }}" class="hover:underline">{{ get_field('nav_gold_rates') }}</a>
    <div class="relative group">
      <button class="focus:outline-none flex items-center gap-1">{{ get_field('nav_resources') }} <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></button>
    </div>
    <a href="{{ get_field('nav_blogs_link') }}" class="hover:underline">{{ get_field('nav_blogs') }}</a>
    <div class="relative group">
      <button class="focus:outline-none flex items-center gap-1">{{ get_field('nav_about_us') }} <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></button>
    </div>
    <a href="{{ get_field('nav_help_link') }}" class="hover:underline">{{ get_field('nav_help') }}</a>
  </nav>
  <a href="{{ get_field('download_app_link') }}" class="ml-4 bg-[#4b2178] hover:bg-[#38175a] text-white font-semibold px-6 py-2 rounded-lg shadow flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg>
    {{ get_field('download_app_text') }}
  </a>
</header>
<main class="bg-[#f7f6fa] min-h-screen flex flex-col items-center px-4">
  <section class="w-full max-w-3xl mx-auto flex flex-col items-center pt-24 pb-10">
    <h1 class="text-5xl md:text-6xl font-bold text-center text-[#1a0a33] mb-4 leading-tight">{{ get_field('headline') }}</h1>
    <p class="text-lg md:text-xl text-center text-[#6c648b] mb-8 max-w-2xl">{{ get_field('subheadline') }}</p>
    <a href="{{ get_field('cta_link') }}" class="bg-[#4b2178] hover:bg-[#38175a] text-white font-semibold px-8 py-3 rounded-lg shadow flex items-center justify-center gap-2 mb-8">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
      {{ get_field('cta_text') }}
    </a>
  </section>
  <section class="w-full max-w-5xl mx-auto mb-12">
    <img src="{{ get_field('hero_image') }}" alt="{{ get_field('hero_image_alt') }}" class="w-full rounded-lg object-cover shadow-lg" style="max-height:420px;">
  </section>
</main> 
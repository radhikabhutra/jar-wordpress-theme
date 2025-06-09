{{--
  Title: Landing Page Block (Mobile)
  Description: Editable landing page content for mobile devices only
  Category: formatting
  Icon: admin-home
  Keywords: landing hero mobile
  Mode: edit
  Align: full
  SupportsAlign: full
  SupportsMode: true
  SupportsMultiple: false
--}}
<header class="sticky top-0 z-30 w-full bg-[#f7f6fa] py-3 px-4 flex items-center justify-between shadow-sm">
  <div class="flex items-center gap-2">
    <img src="{{ get_field('logo_image') }}" alt="{{ get_field('logo_alt') }}" class="h-8 w-8 rounded">
    <span class="text-lg font-bold text-[#1a0a33]">{{ get_field('logo_text') }}</span>
  </div>
  <button id="mobile-menu-toggle" class="md:hidden flex items-center px-2 py-1 border rounded text-[#1a0a33] border-[#1a0a33] focus:outline-none">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
  </button>
</header>
<nav id="mobile-menu" class="hidden flex-col bg-[#f7f6fa] w-full px-4 py-2 border-b border-[#e5e3ee]">
  <a href="{{ get_field('nav_gold_rates_link') }}" class="py-2 text-[#1a0a33] font-medium border-b border-[#e5e3ee]">{{ get_field('nav_gold_rates') }}</a>
  <a href="{{ get_field('nav_blogs_link') }}" class="py-2 text-[#1a0a33] font-medium border-b border-[#e5e3ee]">{{ get_field('nav_blogs') }}</a>
  <a href="{{ get_field('nav_help_link') }}" class="py-2 text-[#1a0a33] font-medium">{{ get_field('nav_help') }}</a>
</nav>
<main class="bg-[#f7f6fa] min-h-screen flex flex-col items-center px-2">
  <section class="w-full flex flex-col items-center pt-12 pb-6">
    <h1 class="text-3xl font-bold text-center text-[#1a0a33] mb-3 leading-tight">{{ get_field('headline') }}</h1>
    <p class="text-base text-center text-[#6c648b] mb-5 max-w-xs">{{ get_field('subheadline') }}</p>
    <a href="{{ get_field('cta_link') }}" class="bg-[#4b2178] hover:bg-[#38175a] text-white font-semibold px-6 py-2 rounded-lg shadow flex items-center justify-center gap-2 mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
      {{ get_field('cta_text') }}
    </a>
  </section>
  <section class="w-full mb-8 flex justify-center">
    <img src="{{ get_field('hero_image') }}" alt="{{ get_field('hero_image_alt') }}" class="w-full max-w-xs rounded-lg object-cover shadow-lg" style="max-height:220px;">
  </section>
  <a href="{{ get_field('download_app_link') }}" class="fixed bottom-4 left-1/2 -translate-x-1/2 bg-[#4b2178] hover:bg-[#38175a] text-white font-semibold px-8 py-3 rounded-full shadow flex items-center gap-2 z-40">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg>
    {{ get_field('download_app_text') }}
  </a>
</main>
{{--
  Template Name: Landing Page
--}}

<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(wp_head())
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body @php(body_class())>
    <header class="w-full bg-gray-100 py-4 px-6 flex items-center justify-between">
      <div class="flex items-center gap-2">
        <img src="https://jarapp-s3-live.s3.ap-south-1.amazonaws.com/Jar+Logo+Blue+%281%29.svg" alt="Jar Logo" class="h-8 w-8">
        <span class="text-2xl font-bold text-[#1a0a33]">Jar</span>
      </div>
      <nav class="hidden md:flex flex-1 justify-center gap-8 text-[#1a0a33] font-medium text-base">
        <div class="relative group">
          <button class="focus:outline-none flex items-center gap-1">Features <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></button>
        </div>
        <a href="#" class="hover:underline">Gold Rates</a>
        <div class="relative group">
          <button class="focus:outline-none flex items-center gap-1">Resources <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></button>
        </div>
        <a href="#" class="hover:underline">Blogs</a>
        <div class="relative group">
          <button class="focus:outline-none flex items-center gap-1">About us <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></button>
        </div>
        <a href="#" class="hover:underline">Help</a>
      </nav>
      <a href="#" class="ml-4 bg-purple-700 hover:bg-purple-800 text-white font-semibold px-6 py-2 rounded-lg shadow flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.564 13.271c-.246-.123-1.453-.715-1.678-.797-.225-.082-.389-.123-.553.123-.164.246-.635.797-.779.963-.143.164-.287.184-.533.061-.246-.123-1.039-.383-1.98-1.221-.732-.653-1.226-1.459-1.372-1.705-.143-.246-.015-.378.108-.5.111-.111.246-.287.369-.43.123-.143.164-.246.246-.41.082-.164.041-.307-.02-.43-.061-.123-.553-1.336-.757-1.832-.2-.48-.404-.414-.553-.422l-.47-.008c-.164 0-.43.061-.656.287-.225.225-.861.842-.861 2.053 0 1.211.881 2.382 1.004 2.547.123.164 1.733 2.646 4.203 3.601.588.202 1.046.322 1.404.412.59.141 1.127.121 1.553.073.474-.056 1.453-.594 1.658-1.168.205-.574.205-1.066.143-1.168-.061-.102-.225-.164-.471-.287z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.242 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.242-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608.974-.974 2.242-1.246 3.608-1.308C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.425 3.678 1.406 2.697 2.387 2.403 3.499 2.344 4.78.013 8.332 0 8.741 0 12c0 3.259.013 3.668.072 4.948.059 1.281.353 2.393 1.334 3.374.981.981 2.093 1.275 3.374 1.334C8.332 23.987 8.741 24 12 24c3.259 0 3.668-.013 4.948-.072 1.281-.059 2.393-.353 3.374-1.334.981-.981 1.275-2.093 1.334-3.374.059-1.28.072-1.689.072-4.948 0-3.259-.013-3.668-.072-4.948-.059-1.281-.353-2.393-1.334-3.374-.981-.981-2.093-1.275-3.374-1.334C15.668.013 15.259 0 12 0z"/></svg>
        Download App
      </a>
    </header>
    <div class="bg-gray-100 min-h-screen flex flex-col items-center py-0 px-4">
      <div class="w-full max-w-4xl mx-auto flex flex-col items-center pt-12 pb-8">
        <h1 class="text-5xl md:text-6xl font-bold text-center text-gray-900 mb-4">Save Easily. Grow Daily.</h1>
        <p class="text-lg md:text-xl text-center text-gray-700 mb-8 max-w-2xl">Easy, automatic, daily saving in 24K pure gold to help you build your wealth.</p>
        <a href="#" class="bg-purple-700 hover:bg-purple-800 text-white font-semibold px-8 py-3 rounded-lg shadow mb-6 flex items-center justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.707 10.293l-6-6A1 1 0 0 0 10 5v14a1 1 0 0 0 1.707.707l6-6a1 1 0 0 0 0-1.414z"/></svg>
          Download Jar App
        </a>
        <div class="flex flex-col md:flex-row items-center gap-2 text-gray-600 text-sm mb-8">
          <span class="flex items-center gap-1">Google Playstore <span class="text-yellow-500">★</span> 4.7</span>
          <span class="hidden md:inline">|</span>
          <span class="flex items-center gap-1">
            <span class="flex -space-x-2">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-6 h-6 rounded-full border-2 border-white" alt="User1">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-6 h-6 rounded-full border-2 border-white" alt="User2">
              <img src="https://randomuser.me/api/portraits/men/45.jpg" class="w-6 h-6 rounded-full border-2 border-white" alt="User3">
            </span>
            3.5Cr+ users
          </span>
          <span class="hidden md:inline">|</span>
          <span class="flex items-center gap-1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/UPI-Logo-vector.svg/32px-UPI-Logo-vector.svg.png" alt="UPI" class="h-5">
          </span>
        </div>
        <div class="w-full mt-2">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=900&q=80" alt="Man in auto rickshaw" class="w-full rounded-lg object-cover shadow-lg" style="max-height:420px;">
        </div>
      </div>
    </div>
    @php(wp_footer())
  </body>
</html> 
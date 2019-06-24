<template>
  <div class="shadow-wrap">
    <header class="px-4 header-gradient flex flex-col text-blue-100 items-center">
      <nav class="max-w-6xl container mx-auto flex justify-between items-center">
        <a href="/">
          <svg class="w-16 h-16" viewBox="0 0 663 481" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 158L140 0V319L0 481V158Z" fill="url(#paint0_linear)"/>
            <path d="M280 158L420 0V319L280 481V158Z" fill="url(#paint1_linear)"/>
            <path d="M662.25 322L420 319L280 481H522.25L662.25 322Z" fill="url(#paint2_linear)"/>
            <path d="M280 481L0 158L140 0L420 319L280 481Z" fill="url(#paint3_linear)"/>
            <defs>
              <linearGradient id="paint0_linear" x1="1.77324e-05" y1="-25" x2="295.541" y2="93.6853"
                              gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.5"/>
                <stop offset="1" stop-color="white"/>
              </linearGradient>
              <linearGradient id="paint1_linear" x1="280" y1="-25" x2="575.541" y2="93.6853"
                              gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.5"/>
                <stop offset="1" stop-color="white"/>
              </linearGradient>
              <linearGradient id="paint2_linear" x1="280" y1="310.58" x2="360.79" y2="573.598"
                              gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.5"/>
                <stop offset="1" stop-color="white"/>
              </linearGradient>
              <linearGradient id="paint3_linear" x1="5.31971e-05" y1="-25" x2="420" y2="481"
                              gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.5"/>
                <stop offset="1" stop-color="white"/>
              </linearGradient>
            </defs>
          </svg>
        </a>
        <div>
          <a href="/blog" class="text-blue-100 no-underline hover:underline font-medium">Blog</a>
          <a href="/#contactForm"
             class="text-blue-100 no-underline hover:underline font-medium pl-4">Contact</a>
        </div>
      </nav>
      <h1 class="font-display font-black text-4xl sm:text-6xl">
        <a href="/blog" class="no-underline text-blue-100 hover:underline">Nathan's Blog</a>
      </h1>
      <div class="pb-64 w-full max-w-4xl">
        <tag-navigation :tags="tags"></tag-navigation>
      </div>
    </header>
  </div>
</template>

<script>
  export default {
    props: ['tags']
  }
</script>

<style>
</style>
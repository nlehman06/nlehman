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
          <!--          <a href="/blog" class="text-blue-100 no-underline hover:underline font-medium">Blog</a>-->
          <a href="#contactForm" class="text-blue-100 no-underline hover:underline font-medium pl-4">Contact</a>
        </div>
      </nav>
      <h1 class="font-display font-black text-4xl sm:text-6xl pt-10 pb-6">Nathan Lehman</h1>
      <h4 class="pb-10">Web application developer</h4>
      <div class="pt-8 pb-40">
        <button
                type="button"
                v-on:click="goToContact()"
                class="text-sm sm:text-lg font-medium rounded-full border-2 px-6 py-4 hover:bg-blue-100-25 focus:outline-none focus:shadow-outline">
          Let's build something together
        </button>
      </div>
    </header>
  </div>
</template>

<script>
  export default {
    methods: {
      goToContact() {
        window.location = '#contactForm'
      }
    },
  }
</script>

<style>

  .shadow-wrap {
    filter: drop-shadow(0px 8px 5px rgba(0, 0, 0, 0.15));
  }

  .header-gradient {
    background-image: url('/img/header-bg-1.svg'),
    url('/img/header-bg-2.svg'),
    radial-gradient(353.95px at 49.87% 89.04%, #466D91 0%, #36527B 31.77%, #16294D 100%);
    background-repeat: no-repeat, no-repeat, repeat-x;
    background-position: -195px -27%, -137% 0, bottom;
    background-size: 100%, 150%, 100%;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 90%, 60% 100%, 0 85%);
    clip-path: polygon(0 0, 100% 0, 100% 90%, 60% 100%, 0 85%);
  }

  @media (min-width: 640px) {
    .header-gradient {
      background-image: url('/img/header-bg-1.svg'),
      url('/img/header-bg-2.svg'),
      url('/img/header-bg-3.svg'),
      radial-gradient(353.95px at 49.87% 89.04%, #466D91 0%, #36527B 31.77%, #16294D 100%);
      background-repeat: no-repeat, no-repeat, no-repeat, repeat-x;
      background-position: -27% -27%, 144% -0%, 142% -0%;
      background-size: 38%, 50%, 50%, 100%;
      -webkit-clip-path: polygon(0 0, 100% 0, 100% 80%, 60% 100%, 0 75%);
      clip-path: polygon(0 0, 100% 0, 100% 80%, 60% 100%, 0 75%);
    }
  }
</style>
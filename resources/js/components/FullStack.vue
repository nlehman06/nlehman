<template>
  <section class="full-stack-bg bg-gray-900 text-blue-100">
    <div class="max-w-6xl mx-auto px-4 pb-20 container sm:flex sm:items-center">
      <div class="sm:w-1/2">
        <h2 class="pt-20 pb-10 text-4xl text-center font-semibold">Full Stack</h2>
        <p class="pb-10">
          I am a full stack web developer. This means I handle the front end, backend, database, server
          and anything else that is needed to build fully functioning web applications.
        </p>
        <p class="pb-10">
          While I have experience in many different programming languages and frameworks,
          I prefer to use <a href="https://laravel.com" target="_blank">Laravel</a>
          for the back end with <a href="https://vuejs.org" target="_blank">Vue JS</a> and
          <a href="https://tailwindcss.com" target="_blank">Tailwind</a> as the front end.
        </p>
      </div>
      <div class="flex flex-col justify-center sm:mt-10 sm:w-1/2">
        <img alt="laravel" class="z-30 sm:self-end" src="/img/laravel.svg">
        <img alt="vue" class="z-20 -mt-20" src="/img/vue.svg">
        <img alt="tailwind" class="z-10 -mt-20 sm:self-start" src="/img/tailwind.svg">
      </div>
    </div>
  </section>
</template>

<script>
  export default {}
</script>

<style>
  .full-stack-bg {
    background-image: url('/img/full-stack-bg.svg');
    background-repeat: no-repeat;
    background-position: 0 0;
    background-size: 100%;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 97%, 75% 96%, 55% 100%, 20% 97%, 0 98%);
    clip-path: polygon(0 0, 100% 0, 100% 97%, 75% 96%, 55% 100%, 20% 97%, 0 98%);
  }

  @media (min-width: 640px) {
    .full-stack-bg {
      background-image: url('/img/full-stack-bg.svg');
      background-repeat: no-repeat;
      background-position: 0 0;
      background-size: 60%;
      -webkit-clip-path: polygon(0 0, 100% 0, 100% 95%, 75% 93%, 55% 100%, 20% 88%, 0 96%);
      clip-path: polygon(0 0, 100% 0, 100% 95%, 75% 93%, 55% 100%, 20% 88%, 0 96%);
    }
  }
</style>

<template>
  <section class="flex flex-col items-center justify-center px-4 max-w-lg mx-auto" id="contactForm">
    <h2 class="pt-20 pb-10 text-4xl text-center font-semibold">Contact Form</h2>
    <p class="text-center mb-4">Let's start a conversation about how we can improve your business flow and bring your ideas to life.</p>
    <form class="z-20 flex flex-col items-center justify-center w-full">
      <div class="flex flex-col sm:flex-row items-center justify-center sm:-mx-4 w-full sm:w-auto">
        <div class="sm:px-4 w-full sm:w-auto">
          <input class="shadow my-2 w-full bg-blue-800 rounded-lg px-4 py-2 text-blue-100 focus:outline-none focus:shadow-outline" name="name" placeholder="Name">
        </div>
        <div class="sm:px-4 w-full sm:w-auto">
          <input class="shadow my-2 w-full bg-blue-800 rounded-lg px-4 py-2 text-blue-100 focus:outline-none focus:shadow-outline" name="email" placeholder="Email">
        </div>
      </div>
      <textarea class="shadow my-2 w-full bg-blue-800 rounded-lg px-4 py-2 text-blue-100 focus:outline-none focus:shadow-outline" name="message" rows="5" cols="10" placeholder="Your Message"></textarea>
      <button class="text-lg font-medium rounded-full border-2 px-6 py-4 hover:bg-blue-100 bg-blue-100-75 w-full my-2">Send Message</button>
    </form>
  </section>
</template>

<script>
  export default {

  }
</script>
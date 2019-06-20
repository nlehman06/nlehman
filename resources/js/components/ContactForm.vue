<template>
  <section class="flex flex-col items-center justify-center px-4 max-w-lg mx-auto" id="contactForm">
    <h2 class="pt-20 pb-10 text-4xl text-center font-semibold">Contact Form</h2>
    <p class="text-center mb-4">Let's start a conversation about how we can improve your business flow and bring your
      ideas to life.</p>
    <form class="z-20 flex flex-col items-center justify-center w-full" @submit.prevent="sendMessage()">
      <div class="flex flex-col sm:flex-row items-center justify-center sm:-mx-4 w-full sm:w-auto">
        <div class="sm:px-4 w-full sm:w-auto">
          <input
                  v-model="message.name"
                  class="shadow my-2 w-full bg-blue-800 rounded-lg px-4 py-2 text-blue-100 focus:outline-none focus:shadow-outline"
                  name="name"
                  placeholder="Name">
        </div>
        <div class="sm:px-4 w-full sm:w-auto">
          <input
                  v-model="message.email"
                  class="shadow my-2 w-full bg-blue-800 rounded-lg px-4 py-2 text-blue-100 focus:outline-none focus:shadow-outline"
                  name="email"
                  placeholder="Email">
        </div>
      </div>
      <textarea
              v-model="message.message"
              class="shadow my-2 w-full bg-blue-800 rounded-lg px-4 py-2 text-blue-100 focus:outline-none focus:shadow-outline"
              name="message" rows="5" cols="10" placeholder="Your Message">

      </textarea>
      <input type="hidden" name="recaptcha" id="recaptcha">
      <button
              :disabled="sending"
              class="text-lg font-medium rounded-full border-2 px-6 py-4 hover:bg-blue-100 bg-blue-100-75 w-full my-2">
        {{ buttonMessage }}
      </button>
    </form>
    <div v-show="showResult" class="z-10 text-center text-blue-100">
      <span :class="{'text-red-500': resultStatus === 'bad'}">{{ result }}</span>
      <ul class="list-none p-0">
        <li v-for="error in errors" class="text-red-500">{{ error[0] }}</li>
      </ul>
    </div>
  </section>
</template>

<script>
  export default {
    props: ['siteKey'],
    data() {
      return {
        buttonMessage: 'Send Message',
        sending:       false,
        showResult:    false,
        resultStatus:  'good',
        result:        '',
        message:       {
          name:      '',
          email:     '',
          message:   '',
          recaptcha: ''
        },
        errors:        [],
      }
    },
    methods: {
      sendMessage() {
        this.sending = true;
        this.buttonMessage = 'Sending...';
        this.resultStatus = 'good';
        this.errors = [];

        let vm = this;
        grecaptcha.ready(function () {
          grecaptcha
            .execute(vm.siteKey, {action: 'contactForm'})
            .then(function (token) {
              if (token) {
                vm.message.recaptcha = token;

                axios.post('/api/contact', vm.message)
                  .then(() => {
                    vm.sending = false;
                    vm.showResult = true;
                    vm.result = "Your message has been sent.  I'll be in touch shortly.";

                    vm.buttonMessage = 'Send Message';
                    vm.message.name = '';
                    vm.message.email = '';
                    vm.message.message = '';
                  })
                  .catch(error => {
                    vm.sending = false;
                    console.log(error.response);
                    vm.showResult = true;
                    vm.resultStatus = 'bad';
                    vm.result = "Message failed to send!  Try again or email me directly at nathan@nlehman.dev";
                    if (error.response) {
                      vm.result = error.response.data.message;
                      vm.errors = error.response.data.errors;
                    }
                    vm.buttonMessage = 'Try Again';
                  })
              }
            });
        });

      }
    },
  }
</script>
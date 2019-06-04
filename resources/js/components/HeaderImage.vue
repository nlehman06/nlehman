<template>
  <div class="flex-1 w-full relative h-full">
    <transition name="fade">
      <div v-show="showCodingThought">
        <svg class="absolute head" width="75" height="75" viewBox="0 0 75 75" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <circle cx="37.5" cy="37.5" r="37.5" fill="#7C9CAA"/>
          <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.8 37.5L31.1084 48.8083L27.6667 52.25L12.9167 37.5L27.6667 22.75L31.1084 26.1917L19.8 37.5ZM55.2 37.5L43.8917 48.8083L47.3333 52.25L62.0833 37.5L47.3333 22.75L43.8917 26.1917L55.2 37.5Z"
                fill="black"/>
        </svg>
      </div>
    </transition>
    <transition name="fade">
      <div v-show="showFamilyThought">
        <svg class="absolute head" width="75" height="75" viewBox="0 0 75 75" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <circle cx="37.5" cy="37.5" r="37.5" fill="#7C9CAA"/>
          <path fill-rule="evenodd" clip-rule="evenodd"
                d="M37.5 20.0827C40.1796 16.9361 44.285 14.9448 48.5625 14.9448C56.1342 14.9448 62.0834 20.894 62.0834 28.4657C62.0834 37.7505 53.7387 45.3174 41.0958 56.782L41.0646 56.8102L37.5 60.0552L33.9354 56.8348L33.8384 56.7466C21.2323 45.2911 12.9167 37.7344 12.9167 28.4657C12.9167 20.894 18.8659 14.9448 26.4375 14.9448C30.715 14.9448 34.8204 16.9361 37.5 20.0827ZM37.5 53.4177L37.7459 53.1719C49.4475 42.5765 57.1667 35.5702 57.1667 28.4657C57.1667 23.549 53.4792 19.8615 48.5625 19.8615C44.7767 19.8615 41.0892 22.2952 39.8109 25.6632H35.2138C33.9109 22.2952 30.2234 19.8615 26.4375 19.8615C21.5209 19.8615 17.8334 23.549 17.8334 28.4657C17.8334 35.5702 25.5525 42.5765 37.2542 53.1719L37.5 53.4177Z"
                fill="black"/>
        </svg>
      </div>
    </transition>
    <transition name="fade">
      <div v-show="showFitnessThought">
        <svg class="absolute head" width="75" height="75" viewBox="0 0 75 75" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <circle cx="37.5" cy="37.5" r="37.5" fill="#7C9CAA"/>
          <path d="M58.5679 44.5308L62.0834 41.0154L58.5679 37.5L49.7917 46.2762L28.7238 25.2083L37.5 16.4321L33.9846 12.9167L30.4692 16.4321L26.9538 12.9167L21.6929 18.1775L18.1775 14.6621L14.6621 18.1775L18.1775 21.6929L12.9167 26.9537L16.4321 30.4692L12.9167 33.9846L16.4321 37.5L25.2084 28.7237L46.2763 49.7917L37.5 58.5679L41.0154 62.0833L44.5309 58.5679L48.0463 62.0833L53.3071 56.8225L56.8225 60.3379L60.3379 56.8225L56.8225 53.3071L62.0834 48.0462L58.5679 44.5308Z"
                fill="black"/>
        </svg>
      </div>
    </transition>

    <svg class="absolute head" width="75" height="75" viewBox="0 0 75 75" fill="none"
         xmlns="http://www.w3.org/2000/svg">
      <circle cx="37.5" cy="37.5" r="36" stroke="white" stroke-width="3"/>
    </svg>

    <transition name="fade">
      <div v-show="showBody">
        <svg class="absolute body" width="109" height="192" viewBox="0 0 109 192" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <line x1="54.5" x2="54.5" y2="114" stroke="white" stroke-width="3"/>
          <line x1="54.352" y1="113.65" x2="17.352" y2="190.65" stroke="white" stroke-width="3"/>
          <line y1="-1.5" x2="85.4283" y2="-1.5" transform="matrix(0.433112 0.90134 0.90134 -0.433112 56 113)"
                stroke="white" stroke-width="3"/>
          <line x1="54.0505" y1="35.0707" x2="1.05051" y2="87.0707" stroke="white" stroke-width="3"/>
          <line y1="-1.5" x2="74.2496" y2="-1.5" transform="matrix(0.713809 0.700341 0.700341 -0.713809 56 34)"
                stroke="white" stroke-width="3"/>
        </svg>
      </div>
    </transition>

    <transition name="fade">
      <div v-show="showDesk">
        <svg class="absolute desk max-w-full" width="375" height="65" viewBox="0 0 375 65" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <line x1="359.832" y1="64.4708" x2="180.832" y2="0.470808" stroke="white"/>
          <line x1="181.112" y1="0.487393" x2="15.1116" y2="38.4874" stroke="white"/>
          <line x1="15.6076" y1="38.3098" x2="0.60756" y2="19.3098" stroke="white"/>
          <line x1="359.547" y1="64.7878" x2="374.547" y2="32.7878" stroke="white"/>
        </svg>
      </div>
    </transition>

    <transition name="slide-left">
      <div v-show="showKeyboard" key="keyboard">
        <svg class="absolute keyboard" width="127" height="143" viewBox="0 0 127 143" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <path d="M2.05377 110.607L17.0813 99.5609L95.0237 127.679L81.7134 139.108L2.05377 110.607Z" stroke="white"/>
          <path d="M54.5 91.1938V99.3132C54.5 99.727 54.7548 100.098 55.141 100.247L59.641 101.977C60.296 102.229 61 101.746 61 101.044V94.3841C61 93.7025 61.6669 93.2206 62.314 93.4346L124.686 114.065C125.333 114.279 126 113.798 126 113.116V40.7355C126 40.298 125.716 39.9113 125.298 39.7809L2.29784 1.40493C1.654 1.20405 1 1.68509 1 2.35954V69.8062C1 70.2235 1.25903 70.5968 1.64984 70.7429L53.8502 90.2571C54.241 90.4032 54.5 90.7765 54.5 91.1938Z"
                stroke="white"/>
          <transition name="screen-fade">
            <path v-show="showMonitor1"
                  d="M3 5.35598V69.4219C3 69.8472 3.26901 70.226 3.67057 70.3661L121.671 111.536C122.321 111.763 123 111.28 123 110.592V41.8476C123 41.4091 122.714 41.0218 122.295 40.8923L4.29545 4.40062C3.65211 4.20166 3 4.68258 3 5.35598Z"
                  fill="#FA5F00"/>
          </transition>
        </svg>

      </div>
    </transition>

    <transition name="slide-right">
      <div v-show="showPhone" key="phone">
        <svg class="absolute phone" width="120" height="133" viewBox="0 0 120 133" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <path d="M67.744 76.851L66.8993 82.9543C66.8426 83.3641 66.5393 83.6967 66.1364 83.7909L62.8394 84.5617C62.156 84.7214 61.525 84.146 61.6212 83.4508L62.2657 78.7934C62.3592 78.1182 61.7646 77.5495 61.0943 77.6728L10.1809 87.0384C9.56646 87.1514 8.99998 86.6796 8.99998 86.0549L8.99999 30.365C8.99999 29.8684 9.36451 29.447 9.85599 29.3754L110.944 14.6664C111.547 14.5787 112.088 15.0464 112.088 15.656L112.088 65.4577C112.088 65.9259 111.763 66.3313 111.306 66.4336L68.5161 76.0123C68.109 76.1034 67.8012 76.4378 67.744 76.851Z"
                stroke="white"/>
          <transition name="screen-fade">
            <path v-show="showMonitor2"
                  d="M109.512 17.2582L109.512 64.4426C109.512 64.9179 109.178 65.3276 108.712 65.4224L12.8054 84.9567C12.1856 85.083 11.6058 84.6093 11.6058 83.9768L11.6058 31.2133C11.6058 30.7166 11.9703 30.2952 12.4618 30.2237L108.368 16.2686C108.972 16.1808 109.512 16.6486 109.512 17.2582Z"
                  fill="#FA5F00"/>
          </transition>
          <path d="M37 131.5L19 105.5L30.25 102.75L41.5 100L59.5 126L37 131.5Z" stroke="white"/>
          <path d="M91.8889 117L83 103.794L88.5556 102.397L94.1111 101L103 114.206L91.8889 117Z" stroke="white"/>
          <transition name="screen-fade">
            <path v-show="showPhoneScreen" d="M91.8889 117L83 103.794L88.5556 102.397L94.1111 101L103 114.206L91.8889 117Z" fill="#FA5F00"/>
          </transition>
        </svg>

      </div>
    </transition>

    <transition name="fade">
      <div v-show="showCodingBody" key="codingBody">
        <svg class="absolute codingBody" width="146" height="114" viewBox="0 0 146 114" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <line x1="35.5" x2="35.5" y2="114" stroke="white" stroke-width="3"/>
          <line x1="65.6469" y1="35.6642" x2="0.637111" y2="19.4554" stroke="white" stroke-width="3"/>
          <line x1="1.22277" y1="19.1312" x2="28.2228" y2="57.1312" stroke="white" stroke-width="3"/>
          <line x1="26.7879" y1="56.5151" x2="82.7879" y2="48.5151" stroke="white" stroke-width="3"/>
          <line x1="64.2228" y1="35.1312" x2="91.2228" y2="73.1312" stroke="white" stroke-width="3"/>
          <line x1="89.7879" y1="72.5151" x2="145.788" y2="64.5151" stroke="white" stroke-width="3"/>
        </svg>
      </div>
    </transition>

    <transition name="fade">
      <div v-show="showDummy" key="dummy">
        <svg class="absolute codingBody" width="146" height="114" viewBox="0 0 146 114" fill="none"
             xmlns="http://www.w3.org/2000/svg">
          <line x1="35.5" x2="35.5" y2="114" stroke="white" stroke-width="3"/>
        </svg>
      </div>
    </transition>

  </div>
</template>

<script>
  export default {
    data() {
      return {
        showBody:                false,
        showDummy:               false,
        showCodingBody:          false,
        showDesk:                false,
        showKeyboard:            false,
        showMonitor1:            false,
        showMonitor2:            false,
        showPhoneScreen:            false,
        showPhone:               false,
        showCodingThought:       false,
        showFamilyThought:       false,
        showFitnessThought:      false,
        secondsUntilNextThought: 20
      }
    },
    methods: {
      startCodingTransitions() {
        setTimeout(() => this.showCodingThought = true, 1000);
        setTimeout(() => this.showCodingBody = true, 2000);
        setTimeout(() => this.showDesk = true, 2500);
        setTimeout(() => this.showKeyboard = true, 4000);
        setTimeout(() => this.showPhone = true, 4000);

        setTimeout(() => this.showMonitor1 = true, 5500);
        setTimeout(() => this.showPhoneScreen = true, 6000);
        setTimeout(() => this.showPhoneScreen = false, 6500);
        setTimeout(() => this.showMonitor1 = false, 7500);
        setTimeout(() => this.showPhoneScreen = true, 10000);
        setTimeout(() => this.showPhoneScreen = false, 10500);
        setTimeout(() => this.showMonitor2 = true, 17000);
        setTimeout(() => this.showMonitor2 = false, 19000);

        setTimeout(() => this.hideCoding(), this.secondsUntilNextThought * 1000);
      },
      hideCoding() {
        this.showCodingThought = false
        this.showCodingBody = false
        this.showDesk = false
        this.showKeyboard = false
        this.showPhone = false

        setTimeout(() => this.startFamilyTransitions(), 1000);
      },
      startFamilyTransitions() {
        setTimeout(() => this.showFamilyThought = true, 1000);
        setTimeout(() => this.showBody = true, 2000);

        setTimeout(() => this.hideFamily(), this.secondsUntilNextThought * 1000);
      },
      hideFamily() {
        this.showFamilyThought = false
        this.showBody = false

        setTimeout(() => this.startFitnessTransitions(), 1000);
      },
      startFitnessTransitions() {
        setTimeout(() => this.showFitnessThought = true, 1000);
        setTimeout(() => this.showBody = true, 2000);

        setTimeout(() => this.hideFitness(), this.secondsUntilNextThought * 1000);
      },
      hideFitness() {
        this.showFitnessThought = false
        this.showBody = false

        setTimeout(() => this.startCodingTransitions(), 1000);
      }
    },
    created() {
      this.startCodingTransitions()
    }
  }
</script>

<style>
  .head {
    left: calc(50% - (75px / 2));
    top: 0px;
    z-index: 50;
  }

  .body {
    left: calc(50% - (109px / 2));
    top: calc(0px + 75px);
  }

  .codingBody {
    left: calc(50% - (72px / 2));
    top: calc(0px + 75px);
  }

  .desk {
    left: 2px;
    top: 110px;
  }

  .keyboard {
    left: 222px;
    top: 10px;
  }

  .phone {
    left: 20px;
    top: -3px;
  }

  @media (min-width: 640px) {
    .head {
      left: calc(50% - (75px / 2));
      top: 143px;
      z-index: 50;
    }

    .body {
      left: calc(50% - (109px / 2));
      top: calc(143px + 75px);
    }

    .codingBody {
      left: calc(50% - (72px / 2));
      top: calc(143px + 75px);
    }

    .desk {
      left: 50px;
      top: calc(143px + 110px);
    }

    .keyboard {
      left: 280px;
      top: calc(143px + 9px);
    }

    .phone {
      left: 80px;
      top: calc(143px + -5px);
    }
  }


  .fade-enter-active, .fade-leave-active {
    transition: opacity 3s;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }

  .screen-fade-enter-active, .screen-fade-leave-active {
    transition: opacity 1s;
  }

  .screen-fade-enter, .screen-fade-leave-to {
    opacity: 0;
  }

  .slide-left-enter-active, .slide-left-leave-active {
    transition: all 2s ease;
  }

  .slide-left-enter, .slide-left-leave-to {
    transform: translateX(80px);
    opacity: 0;
  }

  .slide-right-enter-active, .slide-right-leave-active {
    transition: all 2s ease;
  }

  .slide-right-enter, .slide-right-leave-to {
    transform: translateX(-80px);
    opacity: 0;
  }
</style>
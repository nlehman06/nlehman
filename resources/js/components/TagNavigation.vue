<template>
  <nav class="flex items-center justify-around relative border-t border-b border-blue-300 mt-8 pt-3">
    <a v-for="tag in visibleTags"
       :href="`/blog/${tag.slug}`"
       class="no-underline text-blue-300 mb-3 inline-block hover:text-blue-500"
    >
      {{ tag.name }}
    </a>
    <button
            v-if="needsMore"
            v-on:click="showMore = !showMore"
            class="text-blue-300 mb-3 inline-block hover:text-blue-500"
    >
      More
    </button>
    <transition name="slide-down">
      <div v-show="showMore"
           class="block absolute top-0 right-0 bg-blue-950 flex flex-col justify-center mt-8 mr-12 w-1/2 sm:w-1/4">
        <div class="text-right p-2 text-gray-300 cursor-pointer" v-on:click="showMore = false">&times;</div>
        <a v-for="tag in hiddenTags" :href="`/blog/${tag.slug}`"
           class="no-underline text-blue-300 my-3 inline-block hover:text-blue-500 pl-2">{{ tag.name }}</a>
      </div>
    </transition>
  </nav>
</template>

<script>
  export default {
    props:    {
      tags:             {
        type: Array
      },
      visibleTagAmount: {
        type:    Number,
        default: 4
      }
    },
    data() {
      return {
        showMore: false
      }
    },
    computed: {
      needsMore() {
        return this.tags.length > this.visibleTagAmount;
      },
      visibleTags() {
        return this.needsMore ? this.tags.slice(0, this.visibleTagAmount) : this.tags
      },
      hiddenTags() {
        return this.needsMore ? this.tags.slice(this.visibleTagAmount) : []
      }
    },
  }
</script>

<style>
  .slide-down-enter-active, .slide-down-leave-active {
    transition: all .2s ease;
  }

  .slide-down-enter, .slide-down-leave-to {
    transform: translateY(-10px);
    opacity: 0;
  }
</style>
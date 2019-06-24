<template>
  <nav class="relative border-t border-b border-blue-100 mt-8 pt-3">
    <div class="flex items-center justify-around">
      <a v-for="tag in visibleTags"
         :href="`/blog/${tag.slug}`"
         class="no-underline text-blue-100 mb-3 inline-block hover:text-blue-500"
      >
        {{ tag.name }}
      </a>
      <button
              v-if="needsMore"
              v-on:click="showMore = !showMore"
              class="text-blue-100 mb-3 inline-block hover:text-blue-500"
      >
        {{ buttonText }}
      </button>
    </div>
    <div v-show="showMore"
         class="flex items-center justify-around flex-wrap">
      <a v-for="tag in hiddenTags" :href="`/blog/${tag.slug}`"
         class="no-underline text-blue-100 my-3 inline-block hover:text-blue-500 p-4">{{ tag.name }}</a>
    </div>
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
        default: 3
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
      },
      buttonText() {
        return this.showMore ? 'Less' : 'More'
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
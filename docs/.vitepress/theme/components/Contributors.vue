<script lang="ts" setup>
import contributors from '../metadata/contributors.json'
</script>

<template>
    <div class="text-lg max-w-250 text-center leading-7 my-10 px-5">
      <div class="flex flex-wrap gap-2">
        <a v-for="contributor of contributors" :key="contributor.id" :href="`https://github.com/${contributor.login}`" :aria-label="contributor.login" rel="noopener noreferrer">
          <img :src="contributor.avatar" :alt="contributor.login" :aria-label="contributor.login" loading="lazy" width="50" height="50" class="w-15 h-15 min-w-15 min-h-15 rounded-full" />
        </a>
      </div>
    </div>
</template>
<script setup lang="ts">
defineProps<{
  href: string
}>()
</script>

<template>
  <a :href="href" target="_blank" class="bg-blue-50 hover:bg-blue-100 !text-blue-500 px-4 py-3 rounded block flex items-center gap-2">
    <Icon icon="carbon:play-filled" class="flex-none text-lg" />
    <slot />
  </a>
</template>
<script setup lang="ts">
const data = [
    {
        name: "inteller",
        url: "https://inteller.com.br/",
        img: "inteller.svg",
        description: "Unlock the full potential of cloud"
    },
    {
        name: "owen-it",
        url: "https://github.com/owen-it",
        img: "owen-it.svg",
        description: "Unlock the full potential of cloud"
    }
]

const base = '/sponsor'
</script>

<template>
    <div class="my-12 flex flex-col items-stretch gap-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 justify-center mx-auto">
            <a v-for="{ url, img, name } of data" :href="url" target="_blank" class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 rounded-md p-10 border border-gray-400 flex items-center"
                rel="sponsored noopener">
                <picture v-if="img.endsWith('png')">
                    <source type="image/avif" :srcset="`${base}/${img.replace(/\.png$/, '.avif')}`" />
                    <img :src="`${base}/${img}`" :alt="name" />
                </picture>
                <img v-else :src="`${base}/${img}`" :alt="name" />
            </a>

            <a href="mailto:anteriovieria@gmail.com" class="rounded-md p-10 min-h-40 bg-gray-50 border-gray-300 hover:bg-gray-100 dark:bg-gray-800 flex items-center">Your logo</a>
        </div>
    </div>
</template>

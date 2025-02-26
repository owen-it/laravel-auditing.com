<script lang="ts" setup>
import { useStorage } from '@vueuse/core'

const contributors = useStorage<any[]>('contributors', [])

const fromRepo = r => fetch(`https://contributors.laravel-auditing.com/owen-it/${r}`)
    .then((res) => res.json()).catch(() => [])

const getContributors = async () => {
  const users = await Promise.all([
    fromRepo('laravel-auditing'),
    fromRepo('laravel-auditing-doc'),
    fromRepo('laravel-auditing.com'),
  ])

  contributors.value = users.reduce((acc, data = []) => {
    return [...acc, ...data.filter(i => i.username)]
  }, []).reduce((acc, user) => {
    const existingUser = acc.find(u => u.id === user.id)

    if (existingUser) {
      existingUser.contributions += user.contributions

      return acc
    }

    return [...acc, user]
  }, [])
}

getContributors()
</script>

<template>
  <div class="text-lg max-w-250 text-center leading-7 my-10 px-5">
    <div class="flex flex-wrap gap-2">
      <a v-for="contributor of contributors" :key="contributor.id" v-tooltip="contributor.username" :href="`https://github.com/${contributor.username}`" :aria-label="contributor.username" rel="noopener noreferrer">
        <img :src="`https://avatars.githubusercontent.com/u/${contributor.id}?v=4`" :alt="contributor.username" :aria-label="contributor.username" loading="lazy" width="50" height="50" class="w-15 h-15 min-w-15 min-h-15 rounded-full" />
      </a>
    </div>
  </div>
</template>
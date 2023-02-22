<script lang="ts" setup>
interface TeamMember {
  name: string
  avatar: string
  description: string
  github: string
  twitter?: string
  linkedin?: string
  sponsor?: string
}

const teamMembers: TeamMember[] = [
  {
    name: 'Antério Vieira',
    avatar: 'https://avatars.githubusercontent.com/u/1490347?v=4',
    description: 'A tech enthusiast',
    github: 'https://github.com/anteriovieira',
    twitter: 'https://twitter.com/anteriovieira',
    sponsor: 'https://github.com/sponsors/anteriovieira',
  },
  {
    name: 'Raphael França',
    avatar: 'https://media.licdn.com/dms/image/D4D03AQFtdrtFC1KV9A/profile-displayphoto-shrink_800_800/0/1675116199496?e=1682553600&v=beta&t=DV1f7mKJx2PhdkpLyJo2WbbluQs8ZFi6DfSoCE-ceU4',
    description: 'Web Server, and Cloud Computing',
    github: 'https://github.com/raphaelfranca',
    linkedin: 'https://www.linkedin.com/in/raphaelofranca/',
    sponsor: 'https://github.com/sponsors/raphaelfranca',
  },
]
</script>

<template>
  <div class="my-12 flex flex-col items-stretch gap-12">
    <div class="grid gap-4 md:grid-cols-2 w-full max-w-[500px] mx-auto">
      <div
        v-for="(tm, index) of teamMembers"
        :key="index"
        class="flex flex-col items-center gap-2 text-center"
      >
        <img
          :src="tm.avatar"
          alt="Avatar"
          class="rounded-full w-24 h-24 border border-solid border-gray-200"
        >

        <div class="flex-1">
          <div class="text-xl">
            {{ tm.name }}
          </div>

          <div
            class="text-gray-500 whitespace-pre"
            v-text="tm.description"
          />
        </div>

        <div class="flex gap-2">
          <a
            :href="tm.github"
            target="_blank"
            class="text-gray-500 hover:text-primary-500"
          >
            <Icon
              icon="mdi:github"
              class="w-6 h-6"
            />
          </a>
          <a
            v-if="tm.twitter"
            :href="tm.twitter"
            target="_blank"
            class="text-gray-500 hover:text-primary-500"
          >
            <Icon
              icon="mdi:twitter"
              class="w-6 h-6"
            />
          </a>
          <a
            v-if="tm.linkedin"
            :href="tm.linkedin"
            target="_blank"
            class="text-gray-500 hover:text-primary-500"
          >
            <Icon
              icon="mdi:linkedin"
              class="w-6 h-6"
            />
          </a>
        </div>

        <a
          :href="tm.sponsor"
          target="_blank"
          class="inline-flex items-center gap-2 px-4 py-2 hover:no-underline btn"
        >
          <span>💚</span>
          <span>Sponsor</span>
        </a>
      </div>
    </div>
  </div>
</template>

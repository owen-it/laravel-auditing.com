import { defineConfig } from 'vitepress'
import { withPwa } from '@vite-pwa/vitepress'

const guidesNav = [
  {
    text: 'Essentials',
    items: [
      {
        text: 'Introduction',
        link: '/guide/introduction',
      },
      {
        text: 'Installation',
        link: '/guide/installation',
      },
      {
        text: 'Upgrading',
        link: '/guide/upgrading',
      },
    ],
  },
  {
    text: 'Configuration',
    items: [
      {
        text: 'General Configuration',
        link: '/guide/general-configuration',
      },
      {
        text: 'Auditable Configuration',
        link: '/guide/auditable-configuration',
      },
    ],
  },
  {
    text: 'Basic Usage',
    items: [
      {
        text: 'Model Setup',
        link: '/guide/model-setup',
      },
      {
        text: 'Getting Audits',
        link: '/guide/getting-audits',
      },
    ],
  },
  {
    text: 'Advanced',
    collapsed: false,
    items: [
      {
        text: 'Audit Migration',
        link: '/guide/audit-migration',
      },
      {
        text: 'Audit Resolvers',
        link: '/guide/audit-resolvers',
      },
      {
        text: 'Audit Drivers',
        link: '/guide/audit-drivers',
      },
      {
        text: 'Audit Tags',
        link: '/guide/audit-tags',
      },
      {
        text: 'Audit Implementation',
        link: '/guide/audit-implementation',
      },
      {
        text: 'Audit Transformation',
        link: '/guide/audit-transformation',
      },
      {
        text: 'Attribute Modifiers',
        link: '/guide/attribute-modifiers',
      },
      {
        text: 'Audit Presentation',
        link: '/guide/audit-presentation',
      },
      {
        text: 'Audit Events',
        link: '/guide/audit-events',
      },
      {
        text: 'Auditable Transition',
        link: '/guide/auditable-transition',
      },
      {
        text: 'Auditor',
        link: '/guide/auditor',
      },
      {
        text: 'Custom Audits',
        link: '/guide/audit-custom',
      },
    ],
  },
];

const communityNav = [
  {
    text: 'Why Laravel Auditing?',
    link: '/guide/community/why-laravel-auditing',
  },
  {
    text: 'Contributing',
    link: '/guide/community/contributing',
  },
  {
    text: 'Having problems?',
    link: '/guide/community/problems',
  },
  {
    text: 'Troubleshooting?',
    link: '/guide/community/troubleshooting',
  },
]

const currentVersion = 'v13.0'
const versionsNav = [
  {
    text: 'Changelog',
    link: 'https://github.com/owen-it/laravel-auditing/blob/master/CHANGELOG.md',
  },
  {
    text: 'Release Notes',
    link: 'https://github.com/owen-it/laravel-auditing/releases',
  },
  {
    text: 'Versions',
    items: [
      { text: 'v13.0', link: 'https://github.com/owen-it/laravel-auditing-doc/tree/13.0' },
      { text: 'v12.0', link: 'https://github.com/owen-it/laravel-auditing-doc/tree/12.0' },
    ].map((item) => 
      item.text === currentVersion
        ? { text: `${item.text} (Current)`, link: '/', activeMatch: '/' }
        : item
    )
  }
]

module.exports = withPwa(defineConfig({
  title: 'Laravel Auditing',
  description: 'Laravel Auditing allows you to record changes to an Eloquent model\'s set of data by simply adding its trait to your model.',
  
  head: [
    ['meta', { property: 'og:title', content: 'Laravel Auditing' }],
    ['meta', { property: 'og:site_name', content: 'Laravel Auditing' }],
    ['meta', { property: 'og:type', content: 'website' }],
    ['meta', { property: 'og:description', content: 'Laravel Auditing allows you to record changes to an Eloquent model\'s set of data by simply adding its trait to your model.' }],
    ['meta', { property: 'og:url', content: 'https://laravel-auditing.com/' }],
    ['meta', { property: 'og:image', content: 'https://laravel-auditing.com/opengraph.png' }],
    ['meta', { property: 'og:image:width', content: '600' }],
    ['meta', { property: 'og:image:height', content: '315' }],
    ['meta', { name: 'twitter:card', content: 'summary_large_image' }],
    ['meta', { name: 'twitter:site', content: '@laravel_auditing' }],
    ['link', { rel: 'stylesheet', href: 'https://fonts.bunny.net/css?family=fira-sans:400,400i,600,600i' }],
  ],

  lastUpdated: true,
  lang: 'en-US',
  ignoreDeadLinks: true,

  themeConfig: {
    logo: '/logo.svg',

    editLink: {
      pattern: 'https://github.com/owen-it/laravel-auditing.com/edit/main/docs/:path',
      text: 'Edit this page on GitHub',
    },

    footer: {
      message: 'Released under the MIT License.',
      copyright: `Copyright © 2015-present Antério Vieira`,
    },

    nav: [
      {
        text: 'Guide',
        link: '/guide/model-setup',
      },
      {
        text: 'Community',
        items: communityNav,
      },
      {
        text: 'Sponsor',
        items: [
          {
            text: 'Antério Vieira',
            link: 'https://github.com/sponsors/anteriovieira',
          },
          {
            text: 'Raphael França',
            link: 'https://github.com/sponsors/raphaelfranca',
          },
        ],
      },
      {
        text: currentVersion,
        items: versionsNav,
      },
    ],

    socialLinks: [
      { icon: 'github', link: 'https://github.com/owen-it/laravel-auditing' },
      { icon: { svg: '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="52" viewBox="0 0 50 52"><title>Laravel</title><path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z" fill="currentColor" fill-rule="evenodd"/></svg>' }, link: 'https://laravel.com' },
      { icon: 'discord', link: 'https://discord.gg/csD9ysg' },
    ],

    sidebar: {
      '/guide/community': [
        {
          text: 'Community',
          items: communityNav,
        },
      ],

      '/guide/': [
        {
          text: 'Guide',
          items: guidesNav,
        },
        {
          text: 'Community Drivers',
          items: [
            {
              text: 'FileSystem',
              link: 'https://github.com/betapeak/laravel-auditing-filesystem',
            },
            {
              text: 'ElasticSearch',
              link: 'https://github.com/Iconscout/laravel-auditing-elasticsearch',
            },
          ],
        },
      ],
      
    },

    algolia: {
      appId: '83OCX29P1R',
      apiKey: 'ddd92675c3dced4b5baa450554dd53c0',
      indexName: 'laravel-auditing',
    },
  },
}))

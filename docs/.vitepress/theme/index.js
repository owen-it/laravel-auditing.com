import DefaultTheme from 'vitepress/theme'
import FloatingVue from 'floating-vue'
import { Icon } from '@iconify/vue'
import 'floating-vue/dist/style.css'
import './style/vars.pcss'
import './style/index.pcss'
import MeetTeam from './components/MeetTeam.vue'
import SponsorsGroup from './components/SponsorsGroup.vue'
import VideoLink from './components/VideoLink.vue'

export default {
  ...DefaultTheme,
  enhanceApp ({ app }) {
    app.use(FloatingVue, {
      themes: {
        dropdown: {
          computeTransformOrigin: true,
        },
      },
    })
    app.component('Icon', Icon)
    app.component('MeetTeam', MeetTeam)
    app.component('SponsorsGroup', SponsorsGroup)
    app.component('VideoLink', VideoLink)
  },
}

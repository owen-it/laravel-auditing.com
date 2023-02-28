---
layout: home

hero:
  name: Laravel Auditing
  tagline: Audit your Eloquent models
  _text: Detect discrepancies with auditing
  _tagline: This package will help you understand changes in your Eloquent models, by providing information about possible discrepancies and anomalies that could indicate business concerns or suspect activities.
  image:
    src: /logo.svg
    alt: Auditing logo
  actions:
    - theme: brand
      text: Get Started
      link: /guide/introduction
    - theme: alt
      text: Why Laravel Auditing?
      link: /guide/community/why-laravel-auditing
    - theme: alt
      text: View on GitHub
      link: https://github.com/owen-it/laravel-auditing

features:
  - title:  Auditor
    icon: { src: "/cube.svg" }
    details: The Auditor class is responsible for auditing and clearing Audit records.
  - title: Modifiers
    icon: { src: "/cube.svg" }
    details: Allows you to modify attributes before being audited. Sensitive data can be omitted or modified using this feature.
  - title: Presentation
    icon: { src: "/cube.svg" }
    details: The metadata and modified data can be accessed in several ways.
  - title: Resolvers
    icon: { src: "/cube.svg" }
    details: Resolvers provide a convenient way to get the basic data for audit.
  - title: Drivers
    icon: { src: "/cube.svg" }
    details: Besides storing model attribute changes, drivers also handle pruning when an audit threshold is set.
  - title: Transformation
    icon: { src: "/cube.svg" }
    details: If needed, the Audit data can be transformed before being stored.
  - title: Tags
    icon: { src: "/cube.svg" }
    details: Tags mark audit logs and are very useful for filtering.
  - title: Events
    icon: { src: "/cube.svg" }
    details: Auditing's events provide a simple observer pattern implementation, allowing you to subscribe and listen to the audit events.
  - title: Transition
    icon: { src: "/cube.svg" }
    details: Ability use an Audit record to transition between the states of an Auditable model.

---

<hr class="border-0 border-t border-gray-500 opacity-10 my-24" />

<div class="container px-10 mx-auto max-w-6xl">
  <h2>
    The people who made it happen
  </h2>

  <MeetTeam class="mb-10" />

  <h2>
    Sponsors
  </h2>

  <SponsorsGroup class="mb-10" />

  <h2>
    Contributors
  </h2>

  <Contributors class="mb-10" />
</div>

<style lang="postcss" scoped>
h2 {
  @apply text-left !text-xl md:text-3xl;
}
</style>
<script setup lang="ts">
import { techGroups } from '~/data/profile'
</script>

<template>
  <ul class="tech-groups" role="list">
    <li v-for="(g, i) in techGroups" :key="g.title" v-reveal="i * 70" class="card-surface lift group">
      <div class="group-head">
        <span class="icon-badge"><i :class="['pi', g.icon]" aria-hidden="true" /></span>
        <div>
          <h3>{{ g.title }}</h3>
          <p class="muted blurb">{{ g.blurb }}</p>
        </div>
      </div>
      <ul class="items" role="list">
        <li v-for="t in g.items" :key="t.name" class="item">
          <span class="tile" aria-hidden="true">
            <img v-if="t.logo" :src="t.logo" alt="" width="24" height="24" loading="lazy">
            <i v-else :class="['pi', t.icon]" />
          </span>
          <span class="name">{{ t.name }}</span>
        </li>
      </ul>
    </li>
  </ul>
</template>

<style scoped>
.tech-groups {
  list-style: none; padding: 0; margin: 0;
  display: grid; gap: var(--space-5);
  grid-template-columns: repeat(auto-fit, minmax(min(100%, 340px), 1fr));
}
.group { display: flex; flex-direction: column; gap: var(--space-4); }
.group-head { display: flex; align-items: center; gap: var(--space-4); }
.group-head h3 { margin: 0; font-size: var(--fs-xl); }
.blurb { margin: 0; font-size: var(--fs-sm); }
.icon-badge {
  display: inline-grid; place-items: center; flex: none; width: 3rem; height: 3rem;
  border-radius: var(--radius-sm); background: var(--surface-2); color: var(--primary);
  font-size: 1.25rem; border: 1px solid var(--border);
}
.items { list-style: none; padding: 0; margin: 0; display: flex; flex-wrap: wrap; gap: var(--space-2); }
.item {
  display: inline-flex; align-items: center; gap: var(--space-2);
  padding: 0.3rem var(--space-3) 0.3rem 0.3rem; border-radius: 999px;
  background: var(--surface-2); border: 1px solid var(--border);
  font-size: var(--fs-sm); font-weight: 500; color: var(--text);
}
/* Fixed light tile so dark-on-transparent brand logos stay visible in dark mode */
.tile {
  display: inline-grid; place-items: center; width: 1.75rem; height: 1.75rem;
  border-radius: 50%; background: #fff; color: var(--primary-strong); flex: none; overflow: hidden;
}
.tile img { width: 1.1rem; height: 1.1rem; object-fit: contain; }
.tile i { font-size: 0.85rem; color: #3e583d; }
</style>

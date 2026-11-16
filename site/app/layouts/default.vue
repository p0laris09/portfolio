<template>
  <div class="shell">
    <a class="skip-link" href="#main">Skip to main content</a>
    <AppHeader />
    <main id="main" tabindex="-1">
      <slot />
    </main>
    <AppFooter />
  </div>
</template>

<style scoped>
.shell { min-height: 100vh; display: flex; flex-direction: column; }
main { flex: 1; outline: none; }
</style>

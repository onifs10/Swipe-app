<template>
    <main>
      <header>
        <inertia-link href="/login">Home</inertia-link>
        <inertia-link href="/about">About</inertia-link>
        <inertia-link href="/contact">Contact</inertia-link>
      </header>
      <div>
          <slot/>
      </div>
    </main>
</template>

<script>
    export default {
        // name : "login"
    }
</script>

<style lang="scss" scoped>

</style>

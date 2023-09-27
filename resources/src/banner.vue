<template>
    <div id="app">
      <header>
        <banner></banner>
      </header>

      <main>
        <transition name="fade" mode="out-in">
          <router-view></router-view>
        </transition>
      </main>
    </div>
  </template>



  <script>
</script>

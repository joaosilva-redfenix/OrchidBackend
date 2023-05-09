<template>
<div class="flex flex-col w-full">
        <div class="flex border border-2 h-16 gap-4 items-center space-x-5 justify-between text-red-600 px-4">
          <div class="flex h-full items-center space-x-2 justify-start gap-4">
            <router-link :to="{name:'home'}">home</router-link>
            <router-link :to="{name:'about'}">about</router-link>
          </div>
          <form action="/logout" method="post">
            <input type="hidden" name="_token" :value="csrf">
            <button type="submit">Logout</button>
          </form>
        </div>
        <div class="flex-1 overflow-y-auto">
          <router-view></router-view>
        </div>
      </div>
</template>

<script>
export default {
  data: () => ({
    csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
  }),
};
</script>

<style>
.text-custom-red {
  --tw-text-opacity: 1;
  color: rgba(239, 68, 68, var(--tw-text-opacity));
}</style>
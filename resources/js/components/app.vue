<template>
<div class="flex h-full items-center space-x-2 justify-start gap-4">
            <router-link :to="{name:'home'}">home</router-link>
            <router-link :to="{name:'about'}">about</router-link>
</div>
<div class="flex-1 overflow-y-auto">
          <router-view></router-view>
</div>
</template>
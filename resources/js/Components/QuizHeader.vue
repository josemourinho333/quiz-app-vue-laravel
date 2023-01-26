<script setup>

defineProps({
    name: String,
    desc: String,
});

</script>
<template>
    <div class="flex flex-col gap-y-3 justify-center items-center">
        <h1 class="font-normal text-4xl sm:text-6xl text-slate-800">{{  name }}</h1>
        <p class="font-bold text-xl sm:text-2xl text-slate-600">{{  desc }}</p>
    </div>
</template>

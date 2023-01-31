<script setup>
import { onMounted, ref } from 'vue';

const quizResult = ref(null);

onMounted(() => {
    if (!localStorage.getItem('quizResult')) {
        window.location.href = '/';
    } else {
        const data = JSON.parse(localStorage.getItem('quizResult'));
        quizResult.value = {...data};
        localStorage.removeItem('quizResult');
    }
});

</script>
<template>
    <div class="flex flex-col min-h-screen p-5 bg-amber-200 justify-center items-center gap-y-5">
        <div class="flex flex-row justify-center items-end w-2/3">
            <h1 class="basis-1/2 text-4xl font-semibold text-center">You've completed the quiz!</h1>
            <p class="basis-1/2 text-center text-4xl">Your score: <span class="text-6xl font-black text-blue-500">{{ quizResult?.score }}% </span></p>
        </div>
        <button class="bg-blue-500 px-5 py-3 rounded-md font-bold text-2xl text-white hover:bg-blue-800"><a href="/">Go back home -></a></button>
    </div>
</template>

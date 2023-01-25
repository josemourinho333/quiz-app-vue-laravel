<script setup>
import QuizQuestion from '@/Components/QuizQuestion.vue';

defineProps({
    id: Number | String,
    quiz: Object,
});


</script>
<template>
    <div class="flex flex-col w-1/2 m-auto gap-y-10">
        <h1 class="font-black text-4xl text-slate-800 text-center">{{  quiz.name }}</h1>
        <p class="font-semibold text-xl text-slate-500 text-center">{{  quiz.description }}</p>
        <div v-for="question in quiz.questions" :key="question">
            <QuizQuestion :key="question" :title="question.title" :answers="question.answers"/>
        </div>
        <button class="bg-slate-900 text-white rounded-md p-5 hover:bg-slate-400">Submit</button>
    </div>
</template>

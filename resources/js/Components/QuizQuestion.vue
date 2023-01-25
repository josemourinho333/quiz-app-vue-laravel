<script setup>
import QuizAnswer from '@/Components/QuizAnswer.vue';

defineProps({
    title: String,
    answers: Array,
});

</script>
<template>
    <div class="flex flex-col gap-y-5 w-1/2 m-auto">
        <h1 class="font-bold text-3xl text-blue-500">{{ title }}</h1>
        <div class="flex flex-col gap-y-5 mb-5">
            <div v-for="answer in answers">
                <QuizAnswer :key="answer" :id="answer.id" :option="answer.option" :correct="answer.correct" :question="title"/>
            </div>
        </div>
    </div>
</template>

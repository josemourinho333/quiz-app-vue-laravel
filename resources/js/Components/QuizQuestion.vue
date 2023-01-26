<script setup>
import QuizAnswer from '@/Components/QuizAnswer.vue';

defineProps({
    quizId: Number | String,
    questionId: Number,
    title: String,
    answers: Array,
    clickAnswerHandler: Function,
});

</script>
<template>
    <div class="flex flex-col gap-y-5 bg-amber-200 p-5 rounded-lg">
        <h1 class="font-bold text-3xl text-blue-500">{{ title }}</h1>
        <div class="flex flex-col gap-y-5 mb-5">
            <div v-for="answer in answers">
                <QuizAnswer :key="answer" :quizId="quizId" :questionId="questionId" :id="answer.id" :option="answer.option" :correct="answer.correct" :question="title" :clickAnswerHandler="clickAnswerHandler"/>
            </div>
        </div>
    </div>
</template>

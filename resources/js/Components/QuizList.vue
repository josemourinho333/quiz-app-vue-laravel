<script setup>
import QuizBox from '@/Components/QuizBox.vue';

defineProps({
    quizId: Number,
});

const quiz = {
    id: 1,
    title: 'Quiz Title',
    description: 'Quiz Description',
};

</script>

<template>
    <div class="h-full flex flex-col gap-5 p-5 overflow-y-auto">
        <QuizBox v-bind="quiz"/>
        <QuizBox v-bind="quiz"/>
        <QuizBox v-bind="quiz"/>
        <QuizBox v-bind="quiz"/>
        <QuizBox v-bind="quiz"/>
        <QuizBox v-bind="quiz"/>
        <QuizBox v-bind="quiz"/>
        <QuizBox v-bind="quiz"/>

    </div>
</template>

<script setup>
import QuizBox from '@/Components/QuizBox.vue';
import axios from 'axios';
import { onMounted } from 'vue';

defineProps({
    quizId: Number,
});

const quiz = {
    id: 1,
    title: 'Quiz Title',
    description: 'Quiz Description',
};

let quizzes = null;
let error = null;

onMounted(() => {
    axios.get('/api/quizzes')
        .then((res) => {
            quizzes = [...res.data];
            console.log('quizzes', quizzes);

            error = null;
        })
        .catch((err) => {
            error = err;
        })
});


</script>

<template>
    <div v-if="error">
        <p>There's been an error. Try again or contact admin.</p>
    </div>
    <div class="h-full flex flex-col gap-5 p-5 overflow-y-auto" v-if="quizzes.length > 0">
        <QuizBox v-for="quiz in quizzes" :key="quiz.id" :id="quiz.id" :title="quiz.name" :description="quiz.description" :quiz="quiz"/>
    </div>
    <div v-else>
        <p>There are no quizzes available yet.</p>
    </div>
</template>

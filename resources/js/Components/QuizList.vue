<script setup>
import QuizBox from '@/Components/QuizBox.vue';
import axios from 'axios';
import { ref, onMounted } from 'vue';

const quizzes = ref(null);

onMounted(() => {
    axios.get('/api/quizzes')
        .then((res) => {
            quizzes.value = res.data;
            console.log('quizzes', quizzes);
        })
        .catch((err) => {
            console.log('err', err);
        })
});

</script>

<template>
    <div class="h-full flex flex-col gap-5 p-5 overflow-y-auto" v-if="quizzes && quizzes.length > 0">
        <QuizBox v-for="quiz in quizzes" :key="quiz.id" :id="quiz.id" :title="quiz.name" :description="quiz.description"/>
    </div>
    <div v-else>
        <p>There are no quizzes available yet.</p>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import QuizQuestion from '@/Components/QuizQuestion.vue';
import QuizHeader from '@/Components/QuizHeader.vue';
import axios from 'axios';

defineProps({
    id: Number | String,
    quiz: Object,
});

const quizAnswers = ref({
    quizId: 0,
    answers: [],
});

onMounted(() => {
    quizAnswers.value = {
        quizId: 0,
        answers: [],
    }
});

const clickAnswerHandler = (quizId, questionId, answer, correctAnswer) => {
    const oneAnswer = {
        questionId,
        answer,
        correctAnswer,
    };
    const filteredAnswers = quizAnswers.value.answers.filter((answer) => answer.questionId !== questionId);
    const updatedAnswers = [...filteredAnswers, oneAnswer];
    const userAnswers = {
        quizId,
        answers: [...updatedAnswers]
    };
    quizAnswers.value = {...userAnswers};
};

const submitHandler = () => {
    const correctAnswers = quizAnswers.value.answers.filter((answer) => answer.correctAnswer === true).length;
    const totalAnswers = quizAnswers.value.answers.length;
    const quizScore = (correctAnswers / totalAnswers) * 100;
    const updatedQuizSubmission = {
        score: quizScore,
        ...quizAnswers.value,
    };

    quizAnswers.value = {
        ...updatedQuizSubmission,
    };

    axios.post('/api/submitQuiz', { quizAnswers: quizAnswers.value })
        .then((res) => {
            console.log('res', res);
            localStorage.setItem('quizResult', JSON.stringify(res.data));
            window.location.href = '/completed';
        })
        .catch((err) => {
            console.log('err', err);
        });
};

</script>
<template>
    <div class="flex flex-col gap-y-10  p-10">
        <QuizHeader :name="quiz.name" :desc="quiz.description"/>
        <div v-for="question in quiz.questions" :key="question">
            <QuizQuestion :key="question" :quizId="id" :questionId="question.id" :title="question.title" :answers="question.answers" :clickAnswerHandler="clickAnswerHandler"/>
        </div>
        <div class="flex justify-center items-center">
            <button class="bg-black font-bold text-white rounded-md p-5 hover:border hover:border-black hover:bg-white hover:text-black" @click="submitHandler">Submit</button>
        </div>
    </div>
</template>

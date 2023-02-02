<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios';
import NewQuizQuestionsList from '@/Components/NewQuizQuestionsList.vue';
import NewQuizCreate from '@/Components/NewQuizCreate.vue';

const newQuiz = ref({
    quizName: '',
    quizDescription: '',
    questionList: [],
});

const newQuestionAndAnswers = ref({
    question: '',
    wrongAnswerOne: {
        answer: '',
        correct: false,
    },
    wrongAnswerTwo: {
        answer: '',
        correct: false,
    },
    wrongAnswerThree: {
        answer: '',
        correct: false,
    },
    correctAnswer: {
        answer: '',
        correct: true,
    },
});

const submitHandler = () => {
    if (!newQuestionAndAnswers.value.question ||
        !newQuestionAndAnswers.value.correctAnswer.answer ||
        !newQuestionAndAnswers.value.wrongAnswerOne.answer ||
        !newQuestionAndAnswers.value.wrongAnswerTwo.answer ||
        !newQuestionAndAnswers.value.wrongAnswerThree.answer ) {
            return alert('must fill in all the input boxes');
        };

    newQuiz.value.questionList.push(newQuestionAndAnswers.value);
    newQuestionAndAnswers.value = {
        question: '',
        wrongAnswerOne: {
            answer: '',
            correct: false,
        },
        wrongAnswerTwo: {
            answer: '',
            correct: false,
        },
        wrongAnswerThree: {
            answer: '',
            correct: false,
        },
        correctAnswer: {
            answer: '',
            correct: true,
        },
    };
};

const createHandler = () => {
    if (!newQuiz.value.quizName || !newQuiz.value.quizDescription || newQuiz.value.questionList.length < 1) {
        return alert('must fill in all the input boxes');
    };

    console.log('new quiz', newQuiz.value);
    axios.post('/api/createQuiz', { newQuiz: newQuiz.value })
        .then((res) => {
            window.location.href = '/';
        })
        .catch((err) => {
            console.log('err', err);
        })
};

</script>
<template>
    <div class="flex flex-col sm:flex-row min-h-screen sm:h-screen">
        <div class="flex flex-col bg-amber-200 basis-1/2 justify-between gap-y-5 items-center p-5 h-full">
            <div class="flex flex-col w-full gap-y-5">
                <input type="text" placeholder="Name your quiz..." class="border-b-black border-t-0 border-x-0 text-3xl bg-transparent placeholder:text-black placeholder:font-bold placeholder:text-3xl w-full h-[50px]" v-model="newQuiz.quizName"/>
                <input type="text" placeholder="What is yoru quiz about..." class="border-b-black border-t-0 border-x-0 text-3xl bg-transparent placeholder:text-black placeholder:font-bold placeholder:text-3xl w-full h-[50px]" v-model="newQuiz.quizDescription"/>
            </div>
            <NewQuizQuestionsList :questionList="newQuiz.questionList"/>
            <button class="bg-blue-500 p-4 rounded-md text-3xl font-bold text-white w-full" @click="createHandler">Create</button>
        </div>
        <NewQuizCreate :submitHandler="submitHandler" :newQuestionAndAnswers="newQuestionAndAnswers"/>
    </div>
</template>

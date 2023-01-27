<script setup>

defineProps({
    quizId: Number | String,
    questionId: Number,
    id: Number,
    option: String,
    correct: Boolean,
    question: String,
    clickAnswerHandler: Function,
});

</script>
<template>
    <div class="flex flex-row gap-x-3 items-center font-bold text-xl" >
        <input type="radio" :id="option" :name="question" :value="option" @click="clickAnswerHandler(quizId, questionId, option, correct)">
        <label :for="option">{{ option }}</label>
    </div>
</template>

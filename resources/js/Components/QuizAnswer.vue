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
    <div class="flex flex-row gap-x-3 items-center font-bold text-xl" @click="clickAnswerHandler(quizId, questionId, option, correct)">
        <input type="radio" :id="option" :name="question" :value="option">
        <label :for="option">{{ option }}</label>
    </div>
</template>

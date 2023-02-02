<script setup>

defineProps({
    questionInfo: Object,
});

</script>
<template>
    <div class="bg-white basis-1/2 flex flex-col justify-center items-start gap-5 p-5 rounded-md drop-shadow-md">
        <h1 class="text-3xl font-bold">{{questionInfo.question}}</h1>
        <div class="flex flex-row flex-wrap gap-5">
            <div :class="[questionInfo.correctAnswer.correct ? 'bg-green-500 p-3 rounded-md' : 'bg-red-500 p-3 rounded-md']">{{questionInfo.correctAnswer.answer}}</div>
            <div :class="[questionInfo.wrongAnswerOne.correct ? 'bg-green-500 p-3 rounded-md' : 'bg-red-500 p-3 rounded-md']">{{questionInfo.wrongAnswerOne.answer}}</div>
            <div :class="[questionInfo.wrongAnswerTwo.correct ? 'bg-green-500 p-3 rounded-md' : 'bg-red-500 p-3 rounded-md']">{{questionInfo.wrongAnswerTwo.answer}}</div>
            <div :class="[questionInfo.wrongAnswerThree.correct ? 'bg-green-500 p-3 rounded-md' : 'bg-red-500 p-3 rounded-md']">{{questionInfo.wrongAnswerThree.answer}}</div>
        </div>
    </div>
</template>

<script setup>

defineProps({
    submitHandler: Function,
    newQuestionAndAnswers: Object,
});

</script>
<template>
    <div class="basis-1/2 flex flex-col justify-center items-center p-5 gap-y-5">
        <div class="flex flex-col w-full gap-y-5">
            <input placeholder="Enter your question..." class="font-bold text-3xl border-2 border-black rounded-md w-full p-3" v-model="newQuestionAndAnswers.question"/>
            <input placeholder="Enter the correct answer..." class="font-semibold text-2xl border-2 border-green-500 rounded-md w-full p-3" v-model="newQuestionAndAnswers.correctAnswer.answer"/>
            <input placeholder="Enter a wrong answer..." class="font-semibold text-2xl border-2 border-red-500 rounded-md w-full p-3" v-model="newQuestionAndAnswers.wrongAnswerOne.answer"/>
            <input placeholder="Enter a wrong answer..." class="font-semibold text-2xl border-2 border-red-500 rounded-md w-full p-3" v-model="newQuestionAndAnswers.wrongAnswerTwo.answer"/>
            <input placeholder="Enter a wrong answer..." class="font-semibold text-2xl border-2 border-red-500 rounded-md w-full p-3" v-model="newQuestionAndAnswers.wrongAnswerThree.answer"/>
        </div>
        <button class="bg-blue-500 rounded-md p-3 text-3xl font-bold" @click="submitHandler">Submit</button>
    </div>
</template>

<script setup>
import NewQuizQuestion from '@/Components/NewQuizQuestion.vue';

defineProps({
    questionList: Array,
});

</script>
<template>
    <div class="bg-amber-200 flex flex-col justify-between gap-y-5 items-center p-5 overflow-y-auto">
        <div v-for="question in questionList" :key="question.question">
            <NewQuizQuestion :questionInfo="question"/>
        </div>
    </div>
</template>

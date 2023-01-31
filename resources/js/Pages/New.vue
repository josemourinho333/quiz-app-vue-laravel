<script setup>
import NewQuizQuestionsList from '@/Components/NewQuizQuestionsList.vue';
import NewQuizCreate from '@/Components/NewQuizCreate.vue';


</script>
<template>
    <div class="flex flex-col sm:flex-row min-h-screen sm:h-screen">
        <div class="flex flex-col bg-amber-200 basis-1/2 justify-between gap-y-5 items-center p-5 h-full">
            <input type="text" placeholder="Name your quiz..." class="border-b-black border-t-0 border-x-0 text-3xl bg-transparent placeholder:text-black placeholder:font-bold placeholder:text-3xl w-full h-[50px]"/>
            <NewQuizQuestionsList />
            <button class="bg-blue-500 p-4 rounded-md text-3xl font-bold text-white w-full">Create</button>
        </div>
        <NewQuizCreate />
    </div>
</template>

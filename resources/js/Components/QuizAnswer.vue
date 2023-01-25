<script setup>

defineProps({
    id: Number,
    option: String,
    correct: Boolean,
    question: String,
});

</script>
<template>
    <div class="flex flex-row gap-x-3 items-center">
        <input type="radio" :id="option" :name="question" :value="option">
        <label :for="option">{{ option }}</label>
    </div>
</template>

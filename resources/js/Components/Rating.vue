<template>
    <div class="app-object-info-mark">
        <p>Rate this object:</p>
        <StarRating
            v-model="rating"
            @update:model-value="handleUpdate"
        ></StarRating>
        <p v-if="displaySuccess">Than you for rating!</p>
    </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import StarRating from "./StarRating.vue";
import { router } from "@inertiajs/vue3";

export default defineComponent({
    name: "Rating",
    components: { StarRating },
    props: {
        rating: {
            type: Number,
            default: 0,
        },
        potentialId: {
            type: Number,
            required: true,
        },
        crmid: {
            type: String,
            required: true,
        },
    },
    setup(props) {
        const newRating = ref(props.rating);
        const displaySuccess = ref(false);

        function handleUpdate(value: number) {
            router.post("/rating", {
                value: value,
                property_id: props.crmid,
            });
        }
        return {
            rating: newRating,
            handleUpdate: handleUpdate,
            displaySuccess: displaySuccess,
        };
    },
});
</script>

<style scoped></style>

<template>
    <div class="app-object">
        <div class="app-object-header">
            <div class="app-object-header-name">
                <span
                    >ID:{{ object.externalid }} {{ object.project_pres }}</span
                >
            </div>
            <div class="app-object-header-price">{{ object.price }} $</div>
        </div>
        <carousel :items-to-show="1">
            <slide v-for="document in object.documents" :key="document.id">
                <img :src="getImgSrc(document)" :alt="document.notes_title" />
            </slide>

            <template #addons>
                <navigation />
                <pagination />
            </template>
        </carousel>
        <div class="app-object-info">
            <Rating
                :rating="object.rating"
                :crmid="object.id"
                :potential-id="id"
            ></Rating>
        </div>
        <div class="app-object-detail">
            <p>
                {{ object.property_description_ext }}
            </p>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import { Property } from "../types/property";
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import { DocumentData } from "@/types/document";
import Rating from "@/Components/Rating.vue";

export default defineComponent({
    name: "ObjectInfo",
    props: {
        object: {
            type: Object as PropType<Property>,
            required: true,
        },
        id: {
            type: Number,
            required: true,
        },
    },
    components: {
        Rating,
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
    setup(props) {
        function getImgSrc(document: DocumentData) {
            return `data:${document.filetype};base64, ${document.file_content}`;
        }
        return {
            getImgSrc: getImgSrc,
            object: props.object,
        };
    },
});
</script>

<style scoped></style>

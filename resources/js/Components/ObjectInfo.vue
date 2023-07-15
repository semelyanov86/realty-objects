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
            <div class="app-object-info-mark">
                <p>Rate this object:</p>
                <div class="rate">
                    <div class="rate-star __filled">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44"
                            height="44"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            style="width: 25px; height: 25px"
                        >
                            <path
                                stroke="none"
                                d="M0 0h24v24H0z"
                                fill="none"
                            ></path>
                            <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                            ></path>
                        </svg>
                    </div>
                    <div class="rate-star __filled">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44"
                            height="44"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            style="width: 25px; height: 25px"
                        >
                            <path
                                stroke="none"
                                d="M0 0h24v24H0z"
                                fill="none"
                            ></path>
                            <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                            ></path>
                        </svg>
                    </div>
                    <div class="rate-star __filled">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44"
                            height="44"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            style="width: 25px; height: 25px"
                        >
                            <path
                                stroke="none"
                                d="M0 0h24v24H0z"
                                fill="none"
                            ></path>
                            <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                            ></path>
                        </svg>
                    </div>
                    <div class="rate-star __filled">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44"
                            height="44"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            style="width: 25px; height: 25px"
                        >
                            <path
                                stroke="none"
                                d="M0 0h24v24H0z"
                                fill="none"
                            ></path>
                            <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                            ></path>
                        </svg>
                    </div>
                    <div class="rate-star __filled">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44"
                            height="44"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            style="width: 25px; height: 25px"
                        >
                            <path
                                stroke="none"
                                d="M0 0h24v24H0z"
                                fill="none"
                            ></path>
                            <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
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

export default defineComponent({
    name: "ObjectInfo",
    props: {
        object: {
            type: Object as PropType<Property>,
            required: true,
        },
    },
    components: {
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

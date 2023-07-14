<template>
    <div class="app">
        <Head>
            <title>{{ potential?.potentialname }}</title>
            <meta name="description" content="{{potential?.description}}" />
        </Head>
        <ManagerInfo :manager="manager" v-if="manager" />
        <div v-for="property in properties">
            <ObjectInfo :object="property"></ObjectInfo>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import { Head } from "@inertiajs/vue3";
import { Manager } from "@/types/manager";
import { Potential } from "@/types/potential";
import ManagerInfo from "@/Components/ManagerInfo.vue";
import ObjectInfo from "@/Components/ObjectInfo.vue";
import { Property } from "@/types/property";

export default defineComponent({
    components: {
        ObjectInfo,
        ManagerInfo,
        Head,
    },
    props: {
        id: Number,
        manager: Object as PropType<Manager>,
        potential: Object as PropType<Potential>,
        properties: Array<Property>,
    },
    setup(props) {
        return {
            id: props.id,
            manager: props.manager,
            potential: props.potential,
            properties: props.properties,
        };
    },
});
</script>

<template>
    <div class="app-header project_2174">
        <div class="app-header-image">
            <img
                src="/images/ff4233ad-46e9-42f9-a51c-c04d9bcd95a5.jpeg"
                alt="{{manager?.id}}"
            />
        </div>
        <div class="app-header-info">
            <div class="app-header-manager">
                <div class="app-header-manager-name">
                    {{ manager?.first_name }} {{ manager?.last_name }}
                </div>
                <div class="app-header-manager-title">
                    {{ manager?.title }}
                </div>
            </div>
            <div class="app-header-contacts">
                <a
                    href="tel:{{manager?.phone}}"
                    class="app-header-contacts-phone"
                    >{{ manager?.phone }}</a
                >
                <a
                    href="mailto:{{ manager?.email }}"
                    class="app-header-contacts-email"
                    >{{ manager?.email }}</a
                >
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import { Manager } from "../types/manager";

export default defineComponent({
    name: "ManagerInfo",
    props: {
        manager: {
            type: Object as PropType<Manager>,
            required: true,
        },
    },
    setup(props) {
        return {
            manager: props.manager,
        };
    },
});
</script>

<style scoped></style>

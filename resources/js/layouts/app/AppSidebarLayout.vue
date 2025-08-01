<script setup lang="ts">
import AppContent from '@/components/AppContent.vue';
import NavMain from '@/components/NavMain.vue';
import type { BreadcrumbItemType } from '@/types';

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
    <div>
        <NavMain :items="[]" />
        <AppContent class="overflow-x-hidden">
            <slot />
        </AppContent>
    </div>
</template>

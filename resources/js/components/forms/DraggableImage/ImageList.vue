<template>
    <div>
        <ul class="list-group">
            <slot />
        </ul>
    </div>
</template>

<script>
import { ContainerMixin } from 'vue-slicksort';
export default {
    mixins: [ContainerMixin]
}
</script>


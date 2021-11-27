<template>
    <nav aria-label="Page navigation">
        <ul class="pagination mb-0">
            <li
                v-for="(link, index) in links"
                :key="index"
                class="page-item"
                :class="{ active: link.active, disabled: !link.url }"
            >
                <Link
                    class="page-link"
                    :href="link.url"
                    v-html="link.label"
                ></Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
export default {
    props: {
        links: Array,
    },
    components: {
        Link,
    },
};
</script>

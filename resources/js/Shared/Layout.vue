<template>
    <main>
        <!-- navigation -->
        <Nav />

        <!-- main body -->
        <div class="container mt-4">
            <div class="row">
                <slot />
            </div>
        </div>
    </main>
</template>

<script>
import Nav from "./Nav";

export default {
    components: {
        Nav,
    },
};
</script>

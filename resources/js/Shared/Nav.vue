<template>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ONE<b>CRM</b></a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li
                        class="nav-item"
                        :class="{ active: $page.component == 'Dashboard' }"
                    >
                        <Link class="nav-link" href="/">Dashboard</Link>
                    </li>

                    <!-- users -->
                    <li
                        class="nav-item"
                        :class="{ active: $page.component == 'Users' }"
                    >
                        <Link class="nav-link" href="/users">Users</Link>
                    </li>

                    <!-- settings -->
                    <li
                        class="nav-item"
                        :class="{ active: $page.component == 'Settings' }"
                    >
                        <Link class="nav-link" href="/settings">Settings</Link>
                    </li>

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            John Doe
                        </a>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                        >
                            <a class="dropdown-item" href="#">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";

export default {
    components: {
        Link,
    },
};
</script>

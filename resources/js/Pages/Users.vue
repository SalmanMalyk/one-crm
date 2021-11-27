<template>
    <div class="col-md-12">
        <div class="d-flex justify-content-between mb-3">
            <h4 class="font-weight-bold">Users</h4>
            <input
                type="text"
                class="rounded-lg border px-2"
                placeholder="Search..."
                v-model="search"
            />
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr
                                v-for="(user, index) in users.data"
                                :key="index"
                            >
                                <td v-text="user.name"></td>
                                <td align="middle">
                                    <button class="btn btn-sm btn-primary">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <b
                    >Showing {{ users.from }} to {{ users.to }} of
                    {{ users.total }} entries</b
                >
                <Paginate :links="users.links" />
            </div>
        </div>
    </div>
</template>
<script>
import { Inertia } from "@inertiajs/inertia";
import Paginate from "../Shared/Paginate";

export default {
    props: {
        users: Object,
        filters: Object,
    },
    components: {
        Paginate,
    },
    data() {
        return {
            search: this.$props.filters.search,
        };
    },
    // watchers
    watch: {
        search(value) {
            // re-render inertia page
            Inertia.get(
                "/users",
                { search: value },
                {
                    preserveState: true,
                    replace: true,
                }
            );
        },
    },
};
</script>

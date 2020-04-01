<template>
    <nav class="col-md-2 d-none d-lg-block bg-light sidebar" style="border-right: 1px solid whitesmoke;">
        <div class="sidebar-sticky p-3">
            <ul class="nav flex-column">
                <li class="nav-item" v-for="aRoute in $store.state.oLabels.oSideNav" :key="aRoute.sLabel">
                    <router-link class="nav-link green-font" :to="{ name: aRoute.sRoute}">
                        {{ aRoute.sLabel }}
                    </router-link>
                </li>
            </ul>

            <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
                </a>
            </h6> -->
            <!-- <ul class="nav flex-column mb-2">
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    <span class="green-font">Current month</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    <span class="green-font">Last quarter</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    <span class="green-font">Social engagement</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    <span class="green-font">Year-end sale</span>
                </a>
                </li>
            </ul> -->
        </div>
    </nav>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>
    .router-link-exact-active {
        color: #28a745;
    }
</style>
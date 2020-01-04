<template>
    <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="border-right: 1px solid whitesmoke;">
        <div class="sidebar-sticky p-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <router-link class="nav-link active" :to="{ name: 'dashboard'}">
                        <span data-feather="home"></span>
                        <span class="green-font">Dashboard</span>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{ name: 'items'}">
                        <span data-feather="shopping-cart"></span>
                        <span class="green-font">Items</span>
                    </router-link>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    <span class="green-font">Item categories</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    <span class="green-font">Orders</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    <span class="green-font">Customers</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    <span class="green-font">Reports</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    <span class="green-font">Integrations</span>
                </a>
                </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
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
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        
    }
</script>
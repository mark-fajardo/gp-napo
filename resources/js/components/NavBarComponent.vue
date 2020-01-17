<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-2 mb-0 bg-white rounded" style="z-index: 1">
        <a class="navbar-brand" href="#">
            <img src="https://img.icons8.com/bubbles/50/000000/maintenance.png" width="30" height="30" class="d-inline-block align-top" alt="">
            GP-NAPO Control System
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <span class="nav-link">Welcome</span>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">User Information</a>
                    <a class="dropdown-item" href="#">Update Credentials</a>
                    <a class="dropdown-item" href="#">Add User</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</template>

<script>
    export default {
        
    }
</script>

<script setup>
import {Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import pd from '../../img/avatar.jpeg'
defineProps({
  canLogin:{
    type:Boolean
  },
  canRegister:{
    type:Boolean
  },
  onClose:{
    type:Boolean
  }
})
let show = ref(false)
const toggleDropDownMenu =()=>{
  show.value = !show.value;
}

</script>

<template>
   <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="/assets/img/logo.png" alt="">
  </a>
  <i @click="$emit(onClose)" class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">0</span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">


      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">0</span>
      </a><!-- End Messages Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
       

      </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a @click="toggleDropDownMenu" class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img :src="pd" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">{{ $page.props.auth.user.name.split(' ')[0] }}</span>
      </a><!-- End Profile Iamge Icon -->

      <ul v-show="show" class="dropdown-menu dropdown-menu-nav dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>{{ $page.props.auth.user.name.split(' ')[0] }}</h6>
          <span>Admin</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <Link class="dropdown-item d-flex align-items-center" method="post" :href="route('logout')">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </Link>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header>
</template>
<style scoped>
  .dropdown-menu-nav{
    margin: 2rem;
    right: -1rem;
    display: block;
  }
</style>
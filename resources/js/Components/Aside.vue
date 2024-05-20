<script setup>
import { Link } from '@inertiajs/vue3';

</script>
<template>
     <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <Link class="nav-link " href="/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </Link>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <Link class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" aria-expanded="$page.Component 'Post/Create' ? true : false" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
    </Link>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <Link href="/blog/create">
          <i class="bi bi-circle"></i><span>Add Posts</span>
        </Link>
      </li>
      <li>
        <Link href="/blog/manage">
          <i class="bi bi-circle"></i><span>Manage Posts</span>
        </Link>
      </li>
    </ul>
  </li><!-- End Components Nav -->
  <li class="nav-item">
    <Link class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" aria-expanded="$page.Component 'Post/Create' ? true : false" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Tour</span><i class="bi bi-chevron-down ms-auto"></i>
    </Link>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <Link href="/tour/create">
          <i class="bi bi-circle"></i><span>Add Tour</span>
        </Link>
      </li>
      <li>
        <Link href="/tour/manage">
          <i class="bi bi-circle"></i><span>Manage Tours</span>
        </Link>
      </li>
      <li>
        <Link href="/tour/create">
          <i class="bi bi-circle"></i><span>Add Tour Region</span>
        </Link>
      </li>
      <li>
        <Link href="/tour/region/manage">
          <i class="bi bi-circle"></i><span>Manage Tour Regions</span>
        </Link>
      </li>
      <li>
        <Link href="/tour/activity/create">
          <i class="bi bi-circle"></i><span>Add Activity</span>
        </Link>

      </li>
      <li>
        <Link href="/tour/activity/manage">
          <i class="bi bi-circle"></i><span>Manage Activity</span>
        </Link>
      </li>
      <li>
        <Link href="/tour/activity-level/create">
          <i class="bi bi-circle"></i><span>Add Activity Level</span>
        </Link>

      </li>
      <li>
        <Link href="/tour/activity/manage">
          <i class="bi bi-circle"></i><span>Manage Activity Level</span>
        </Link>
      </li>
      <li>
        <Link href="/tour/landscape/create">
          <i class="bi bi-circle"></i><span>Add Landscape</span>
        </Link>

      </li>
      <li>
        <Link href="/tour/activity/manage">
          <i class="bi bi-circle"></i><span>Manage Landscape</span>
        </Link>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <Link class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Comments</span><i class="bi bi-chevron-down ms-auto"></i>
    </Link>
    <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      
      <li>
        <Link href="/blog/comment/manage">
          <i class="bi bi-circle"></i><span>Manage Comments</span>
        </Link>
      </li>
     
    </ul>
  </li><!-- End Forms Nav -->


  <li class="nav-item">
    <Link class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i>
      <span>News</span>
      <i class="bi bi-chevron-down ms-auto"></i>
    </Link>
    <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <Link href="/news">
          <i class="bi bi-circle"></i><span>Send News & Updates</span>
        </Link>
      </li>
      <li>
        <Link href="/news/manage">
          <i class="bi bi-circle"></i><span>Manage News</span>
        </Link>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="/">
      <i class="bi bi-globe2"></i>
      <span>Homepage</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="mailto:msanifuasiya@gmail.com">
      <i class="bi bi-question-circle"></i>
      <span>Report isues</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->
  <li class="nav-item">
    <Link class="nav-link collapsed" method="post" :href="route('logout')">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign out</span>
    </Link>
  </li><!-- End F.A.Q Page Nav -->


</ul>

</aside><!-- End Sidebar-->
</template>
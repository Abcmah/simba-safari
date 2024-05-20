<script setup>
import Footer from '@/Components/Footer.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import VPagination from "@hennge/vue3-pagination";
import "@hennge/vue3-pagination/dist/vue3-pagination.css";
import Aside from '@/Components/Aside.vue';
import Header from '@/Components/Header.vue';
defineProps(['comments'])

async function updateHandler(newPage) {
      await router.visit(route('post.comment.manage', { page: newPage }));
    
}
</script>

<template>
    <Head title="Manage Comment" />
  <!-- ======= Header ======= -->
  <Header />
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <Aside/>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Comments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Posts <span>| Recent (10)</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Body</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-if="comments.data.length == 0">
                        <td>No Comment available</td>
                      </tr>
                      <tr :key="comment.id" v-for="comment in comments.data">
                        <td>{{ comment.name }}</td>
                        <td><a :href="`/blog/${comment.id}`" class="text-primary">{{ comment.body }}</a></td>
                        <td><Link :href="`/blog/${comment.id}/edit`" class="btn btn-sm btn-secondary">edit</Link></td>
                        <td><Link as="button" :href="route('comment.delete', comment.id)" method="delete" class="btn btn-sm btn-danger">Delete</Link></td>
                      </tr>
                    </tbody>
                  </table>
                  <v-pagination
                    v-model="$page.props.comments.current_page"
                    :pages="$page.props.comments.last_page"
                    :range-size="2"
                    active-color="#DCEDFF"
                    @update:modelValue="updateHandler"
                  />
                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <!-- End activity item-->

               <!-- End activity item-->

                <!-- End activity item-->

                <!-- End activity item-->
                <!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->


         
          
        

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <Footer/>
  <!-- End Footer -->
</template>

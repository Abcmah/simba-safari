<script setup>
import { Head, Link, router, usePage } from '@inertiajs/vue3';
import Footer from '@/Components/Footer.vue';
import VPagination from "@hennge/vue3-pagination";
import "@hennge/vue3-pagination/dist/vue3-pagination.css";
import Aside from '@/Components/Aside.vue';
import Header from '@/Components/Header.vue';
import { useToast } from 'vue-toastification';
defineProps(['news'])
const page = usePage();
const toast = useToast()
if(page.props.flash.message != null){
  toast(page.props.flash.message);
}
// const props = defineProps({})

async function updateHandler(newPage) {
      await router.visit(route('news.manage', { page: newPage }));
    
}
</script>

<template>
    <Head title="Dashboard" />
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
          <li class="breadcrumb-item active">News </li>
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
                  {{ $page.props.flash.message }}
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Headline</th>
                        <th scope="col">Authur</th>
                        <th scope="col">#</th>
                      </tr>
                    </thead>
                    <!-- {{ $page.props }} -->
                    <tbody>
                      <tr v-if="news.data.length == 0">
                        <td>No news available <Link class="mx-4" href="/news">Add News</Link></td>
                      </tr>
                      <tr :key="n.id" v-for="n in news.data">
                        <td>{{ n.headline }}</td>
                        <td><a :href="`/blog/${n.id}`" class="text-primary">{{ n.headline }}</a></td>
                        <td><Link as="button" :href="route('news.delete', n.id)" method="delete"><i class="bi bi-trash mx-1"></i> Del</Link></td>
                      </tr>
                    </tbody>
                  </table>
                  <v-pagination
                    v-model="$page.props.news.current_page"
                    :pages="$page.props.news.last_page"
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

             

            </div>
          </div><!-- End Recent Activity -->


        
          <!-- News & Updates Traffic -->
          <div class="card">
           



          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <Footer/>
  <!-- End Footer -->
</template>
<style scoped>
  button{
    color: red;
    border: none;
    background: transparent;
  }
</style>
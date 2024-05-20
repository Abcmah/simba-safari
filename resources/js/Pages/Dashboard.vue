<script setup>
import { Head, useForm, usePage, router, Link } from '@inertiajs/vue3';
import Footer from '@/Components/Footer.vue'
import Checkbox from '@/Components/Checkbox.vue';
import { useToast } from 'vue-toastification';
import Aside from '@/Components/Aside.vue';
import Header from '@/Components/Header.vue';
defineProps(['posts'])
const page = usePage();
const toast = useToast();
const form = useForm({
    is_open: page.props.is_open,
});
const changeStatus =()=>{
  router.post(route('set.registration'),{
      _method:'patch',
      is_open:form.is_open
    })
  if(form.is_open){
    toast.success('Registration form is enabled')
  }else{
    toast.info('Registration form is disabled')
  }
  console.log(form.is_open)
}
const handAside =()=>{
  console.log("jsdj")
}
</script>

<template>
    <Head title="Dashboard" />
  <!-- ======= Header ======= -->
  <Header @onClode="$emit(handAside)" />
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <Aside/>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

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
                  <h5 class="card-title">0 <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>
                      <span class="text-success small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

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
                  <h5 class="card-title">00 <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>00</h6>
                      <span class="text-success small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

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
                <div class="cardbody">
                  <div>
                    <div class="form-check form-switch mt-2 d-flex align-items-center">
                      <Checkbox name="remember" id="user" @change="changeStatus" v-model:checked="form.is_open" />
                        <label for="user" class="form-check-label mx-2" html-for="user">{{$page.props.is_open ? 'Disable Registeration form' : 'Enable Registeration form'}}</label>
                      </div>
                  </div>
                </div>
                
              </div>
            
            </div><!-- End Customers Card -->
            <div class="card-body">
                  <h5 class="card-title">Recent Post <span>| </span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Tags</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-if="posts.data.length == 0">
                        <td>No post available <Link class="mx-4 text-primary" href="/blog/create">Add post </Link></td>
                      </tr>
                      <tr :key="post.id" v-for="post in posts.data">
                        <th scope="row"><a href="#">#{{ post.id }}</a></th>
                        <td>{{ post.title }}</td>
                        <td><a href="#" class="text-primary">{{ post.tags }}</a></td>
                      </tr>
                    </tbody>
                  </table>
                  <Link class="text-primary" href="/blog/manage"> See more</Link>

                </div>
            <!-- Reports -->
          
            <!-- End Reports -->

            <!-- Recent Sales -->
           
            <!-- End Recent Sales -->



          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
          
            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Started services <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
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
<style scoped>

#toggle-container {
      display: inline-block;
      position: relative;
    }



</style>
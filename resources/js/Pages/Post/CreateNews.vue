<script setup>
import Footer from '@/Components/Footer.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Header from '@/Components/Header.vue';
import Aside from '@/Components/Aside.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';
 const form = useForm({
    headline: '',
    story: '',
});
const submit = () => {
    form.post(route('news.send'));
};

</script>

<template>
    <Head title="Create News" />
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
          <li class="breadcrumb-item"><Link href="/dashboard">Home</Link></li>
          <li class="breadcrumb-item active">Send News</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create News</h5>
              <p>Send news and Updates to all your subscribers</p>
              <form @submit.prevent="submit" class="row g-3">
                <div class="col-md-12">
                  <div>
                        <InputLabel for="name" value="Headline" />
        
                        <TextInput
                            id="headline"
                            type="text"
                            class="form-control"
                            v-model="form.headline"
                            required
                            autofocus
                            autocomplete="headline"
                        />
        
                        <InputError class="mt-2 text-danger" :message="form.errors.headline" />
                    </div>
                </div>

                <div class="col-md-12 pb-4 d-flex flex-column">
                  <label for="inputEmail5" class="form-label">Whole Story</label>
                  <textarea class="form-control" v-model="form.story" name="story"></textarea>
                  <InputError class="mt-2 text-danger" :message="form.errors.story" />
                </div>

              
            
               
                <div class="">
                  <button  type="submit" class="btn btn-primary">Send news</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
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

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <Footer/>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</template>

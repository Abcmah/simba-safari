<script setup>
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import '@vueup/vue-quill/dist/vue-quill.bubble.css';
import ImageUploader from 'quill-image-uploader';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Aside from '@/Components/Aside.vue';
import Footer from '@/Components/Footer.vue';
import Header from '@/Components/Header.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm, router } from '@inertiajs/vue3';
//  console.log(props.edit)
const form = useForm({
  name: '',
});

const submit = () => {
  form.post('/tour/activity');
};

</script>

<template>
  <Head title="Create Tour Region" />
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
          <li class="breadcrumb-item active">Tour</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create a Tour Activity</h5>
              <form @submit.prevent="submit" class="row g-3" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div>
                    <InputLabel for="name" value="Name" />

                    <TextInput
                        id="name"
                        type="text"
                        class="form-control"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                    />

                    <InputError class="mt-2 text-danger" :message="form.errors.name" />
                  </div>
                </div>



                <div class="">
                  <button  type="submit" class="btn btn-primary">Create</button>
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
</template>
<style scoped>
.img{
  max-height: 200px;
  overflow-y: scroll;
}
.img img{
  height: 100%;
}
</style>
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
import VueSelect from  "vue-select";
import "vue-select/dist/vue-select.css"
import { Head, useForm, router } from '@inertiajs/vue3';
//  console.log(props.edit)

let props = defineProps(['activities','activity_level', 'landscapes', 'regions','tour']);
 const form = useForm({
    place: props.tour.place,
    days: props.tour.days,
    nights: props.tour.nights,
    description: props.tour.discription,
    badget_from: props.tour.badget_from,
    region_id: props.tour.region_id,
    activity_id: props.tour.activity_type_id,
    activity_level_id: props.tour.activity_level_id,
    landscape_id: props.tour.landscape_id,
    photo: props.tour.photo,
});

const submit = () => {
    form.patch(`/tour/${props.tour.id}/update`);
};

function handleFile(event){
  form.photo = event.target.files[0];
  // form.image = event.target.files[0];
}

const modules = {
        name: 'imageUploader',
        module: ImageUploader,
        options: 
        {
          upload: file => 
          {
            return new Promise((resolve, reject) => 
            {
              const formData = new FormData();
              formData.append("photo", file);

              axios.post('/upload-image', formData)
              .then(res => {
                console.log(res)
                resolve(res.data.url);
              })
              .catch(err => {
                reject("Upload failed");
                console.error("Error:", err)
              })
            })
          }
        }
      }
</script>

<template>
    <Head title="Update Tour" />
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
              <h5 class="card-title">Update Tour</h5>
              <form @submit.prevent="submit" class="row g-3" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div>
                        <InputLabel for="name" value="Place" />
        
                        <TextInput
                            id="name"
                            type="text"
                            class="form-control"
                            v-model="form.place"
                            required
                            autofocus
                            autocomplete="name"
                        />
        
                        <InputError class="mt-2 text-danger" :message="form.errors.place" />
                    </div>
                </div>
                <div class="col-12">
                  <label for="inputNumber" class="form-label">Photo</label>
                    <input class="form-control" @input="form.photo = $event.target.files[0]" type="file" id="formFile">
                    <!-- <InputError class="mt-2 text-danger" :message="form.error.image" /> -->
                </div>
                <div class="col-12">
                  <div>
                        <InputLabel for="name" value="Days" />
        
                        <TextInput
                            id="name"
                            type="text"
                            class="form-control"
                            v-model="form.days"
                            required
                            autofocus
                            autocomplete="tags"
                        />
        
                        <InputError class="mt-2 text-danger" :message="form.errors.days" />
                    </div>
                </div>
                <div class="col-12">
                  <div>
                        <InputLabel for="name" value="Nights" />

                        <TextInput
                            id="name"
                            type="text"
                            class="form-control"
                            v-model="form.nights"
                            required
                            autofocus
                            autocomplete="tags"
                        />

                        <InputError class="mt-2 text-danger" :message="form.errors.nights" />
                    </div>
                </div>

                <div class="col-md-12 pb-4 d-flex flex-column">
                  <label for="inputEmail5" class="form-label">Description</label>
                  <QuillEditor :modules="modules" toolbar="full" contentType="html" theme="snow"  v-model:content="form.description" :options="{placeholder: 'Write something...'}"/>
                  <InputError class="mt-2 text-danger" :message="form.errors.description" />
                </div>
                <div class="col-12">
                  <div>
                    <InputLabel for="name" value="Badget from" />

                    <TextInput
                        id="name"
                        type="text"
                        class="form-control"
                        v-model="form.badget_from"
                        required
                        autofocus
                        autocomplete="tags"
                    />

                    <InputError class="mt-2 text-danger" :message="form.errors.badget_from" />
                  </div>
                </div>
                <div class="col-12">
                  <div>
                    <InputLabel for="name" value="Region" />

                    <vue-select label="region" v-model="form.region_id" :reduce="(option)=>option.id" :options="regions"></vue-select>

                    <InputError class="mt-2 text-danger" :message="form.errors.region_id" />
                  </div>
                </div>
                <div class="col-12">
                  <div>
                    <InputLabel for="name" value="Activity" />

                    <vue-select label="name" v-model="form.activity_id" :reduce="(option)=>option.id" :options="activities"></vue-select>

                    <InputError class="mt-2 text-danger" :message="form.errors.activity_id" />
                  </div>
                </div>
                <div class="col-12">
                  <div>
                    <InputLabel for="name" value="Activity Level" />

                    <vue-select label="level" v-model="form.activity_level_id" :reduce="(option)=>option.id" :options="activity_level"></vue-select>

                    <InputError class="mt-2 text-danger" :message="form.errors.activity_level_id" />
                  </div>
                </div>
                <div class="col-12">
                  <div>
                    <InputLabel for="name" value="Landscape" />

                    <vue-select label="name" v-model="form.landscape_id" :reduce="(option)=>option.id" :options="landscapes"></vue-select>

                    <InputError class="mt-2 text-danger" :message="form.errors.landscape_id" />
                  </div>
                </div>

            
               
                <div class="">
                  <button  type="submit" class="btn btn-primary">Update</button>
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
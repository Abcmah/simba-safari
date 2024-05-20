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
    title: '',
    blog: '',
    tags: '',
    image: '',
});

const submit = () => {
    form.post(route('post.create'));
};

function handleFile(event){
  form.image = event.target.files[0];
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
              formData.append("image", file);

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
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create a Blog Post</h5>
              <form @submit.prevent="submit" class="row g-3" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div>
                        <InputLabel for="name" value="Title" />
        
                        <TextInput
                            id="name"
                            type="text"
                            class="form-control"
                            v-model="form.title"
                            required
                            autofocus
                            autocomplete="name"
                        />
        
                        <InputError class="mt-2 text-danger" :message="form.errors.title" />
                    </div>
                </div>
                <div class="col-12">
                  <label for="inputNumber" class="form-label">Blog Image</label>
                    <input class="form-control" @input="form.image = $event.target.files[0]" type="file" id="formFile">
                    <!-- <InputError class="mt-2 text-danger" :message="form.error.image" /> -->
                </div>
                <div class="col-12">
                  <div>
                        <InputLabel for="name" value="Tags(comma separated value)" />
        
                        <TextInput
                            id="name"
                            type="text"
                            class="form-control"
                            v-model="form.tags"
                            required
                            autofocus
                            autocomplete="tags"
                        />
        
                        <InputError class="mt-2 text-danger" :message="form.errors.tags" />
                    </div>
                </div>
                <div class="col-md-12 pb-4 d-flex flex-column">
                  <label for="inputEmail5" class="form-label">Whole Story</label>
                  <QuillEditor :modules="modules" toolbar="full" contentType="html" theme="snow"  v-model:content="form.blog" :options="{placeholder: 'Write something...'}"/>
                  <InputError class="mt-2 text-danger" :message="form.errors.blog" />
                </div>

              
            
               
                <div class="">
                  <button  type="submit" class="btn btn-primary">Create Post</button>
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
<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useToast } from 'vue-toastification';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
const page = usePage();
const toast = useToast()
console.log(page.props.is_open)
const checkStatus =()=>{
    if(!page.props.is_open){
        toast.error("Registeration is Disabled")
        setTimeout(()=>toast.info("Contact Admin for help"),400)
    }
}
const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});
checkStatus()
const submit = () => {
    if(page.props.is_open){
        form.post(route('register'), {
            onFinish: () => form.reset('password', 'password_confirmation'),
        });
    }else{
        checkStatus()
    }
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />
        <div class="container login">
            <div class="form-g">
                <div>
                    <h1>Join Us</h1>
                    <h5 class="text-muted">Fill the form to create an account</h5>
                </div>
                <form class="" @submit.prevent="submit">
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
        
                    <div class="mt-4">
                        <InputLabel for="email" value="Email" />
        
                        <TextInput
                            id="email"
                            type="email"
                            class="form-control"
                            v-model="form.email"
                            required
                            autocomplete="username"
                        />
        
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
        
                    <div class="mt-4">
                        <InputLabel for="password" value="Password" />
        
                        <TextInput
                            id="password"
                            type="password"
                            class="form-control"
                            v-model="form.password"
                            required
                            autocomplete="new-password"
                        />
        
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>
        
                    <div class="mt-4">
                        <InputLabel for="password_confirmation" value="Confirm Password" />
        
                        <TextInput
                            id="password_confirmation"
                            type="password"
                            class="form-control"
                            v-model="form.password_confirmation"
                            required
                            autocomplete="new-password"
                        />
        
                        <InputError class="mt-2" :message="form.errors.password_confirmation" />
                    </div>
                    <div class="my-2">

                        <Link
                            :href="route('login')"
                            
                        >
                            Already registered?
                        </Link>
                    </div>
                    <div class="d-block">
        
                        <PrimaryButton class="w-100" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Register
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>
<style scoped>
.form-g{
    width: 350px;
}
.login{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
}
</style>
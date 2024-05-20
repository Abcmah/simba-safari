<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />
        <div class="container login">
            <div class="form-g">
                <div>
                    <h1>Welcome Back! 👋</h1>
                </div>
                <h5 class="text-muted">Enter your credentials to access  your <br>account</h5>
                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="form-control"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2 text-danger" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="form-control"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2 text-danger" :message="form.errors.password" />
            </div>

            <div class="d-flex justify-content-between align-items-center  mt-4">
                <label class="d-flex align-items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                </label>
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-primary"
                >
                    Forgot your password?
                </Link>
            </div>

            <div>
                <Link
                    v-if="canResetPassword"
                    :href="route('register')"
                    class="text-primary"
                >
                    Don't have an account ?
                </Link>
            </div>
            <div>
                <a
                   href="/"
                    class="text-primary"
                >
                   go to Home
                </a>
            </div>
            <div class="block items-center mt-4">
                <PrimaryButton class="w-100" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
                
            </div>
        </form>
            </div>
        </div>
        
    </GuestLayout>
</template>
<style scoped>
.login{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
}
</style>
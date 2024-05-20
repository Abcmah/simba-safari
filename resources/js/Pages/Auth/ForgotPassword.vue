<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head title="Forgot Password" />
        <div class="container fo">
            <div class="con">
                <div class="mb-4">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password reset
                    link that will allow you to choose a new one.
                </div>
        
                <div v-if="status" class="text-success">
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
        
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
        
                    <div class="d-flex gap-2 mt-4">
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Email Password Reset Link
                        </PrimaryButton>
                        <SecondaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Back to login
                        </SecondaryButton>
                    </div>
                </form>

            </div>
        </div>
    </GuestLayout>
</template>
<style scoped>
.fo{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 90vh;
}
.con{
    width:600px ;
}
</style>
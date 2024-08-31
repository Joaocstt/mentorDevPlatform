<template>

  <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
            src="https://images.unsplahttps://images.unsplash.com/photo-1583339793403-3d9b001b6008?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Office" />
          <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
            src="https://images.unsplash.com/photo-1583339793403-3d9b001b6008?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Office" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <form @submit.prevent="submitForm" method="POST" class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
              Login
            </h1>
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">E-mail</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Digite seu e-mail" 
                name="email"
                v-model="form.email"
                />
            </label>
            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Senha</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="**********" type="password"
                name="password"
                v-model="form.password"
                
                />
            </label>

            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              href="#">
              Entrar
            </button>

            <hr class="my-8" />

            <p class="mt-1">
              <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                href="https://www.mentoriadev.online" target="_blank">
                Faça sua inscrição
              </a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>

</template>

<script setup>
import { reactive } from 'vue';

import service from "../../Services/Client/index";
import ToastNotification from "../../Components/Toast/ToastNotification.vue";

const form = reactive({
  email: "", 
  password: ""
})
import { useToast } from "vue-toastification";
import { route } from '../../../../vendor/tightenco/ziggy/dist';
const toast = useToast();


const submitForm = async () => {
  try {
    await service.auth.login(form.email, form.password);
    window.location.href = route('client.dashboard')
  } catch (error) {
    toast({
      component: ToastNotification,
      props: {
        title: 'Ooops, não foi possível efetuar o login!',
        content: `${error.message}`,
        icon: 'XCircle',
        classIcon: 'text-red-400',
      },
    });

  }
};


</script>
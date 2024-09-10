<template>
  <div class="min-h-screen grid grid-cols-1 2xl-custom:grid-cols-2 bg-gray-900">
    <div class="flex items-center justify-center overflow-hidden relative">
      <img class="absolute inset-0 h-full w-full object-cover"
        src="https://images.unsplash.com/photo-1622858674121-e8cb8b5e6d9f?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt="Paisagem urbana à noite com edifícios e luzes brilhantes">
    </div>
    <div class="flex flex-col items-center justify-center p-8 md:p-3">
      <h1 class="text-3xl md:text-4xl text-center font-bold tracking-tight text-white drop-shadow-lg">Bem-vindo à
        Plataforma
        Mentor<span class="text-purple-500">Dev</span></h1>
      <p class="mt-4 text-sm md:text-md text-gray-300 drop-shadow-sm">Acesse sua conta para começar sua jornada de
        aprendizado.</p>

      <div class="flex items-center justify-center p-6 sm:p-12 w-[75%] max-w-[100%]">
        <form @submit.prevent="submitForm" method="POST" class="w-[80%]">
          <label class="block text-sm">
            <span class="text-white">E-mail</span>
            <input
              class="block w-full mt-1 text-sm border-gray-600 bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple text-gray-300 focus:shadow-outline-gray form-input rounded-md"
              placeholder="Digite seu e-mail" name="email" v-model="form.email" />
          </label>
          <label class="block mt-4 text-sm">
            <span class="text-white">Senha</span>
            <input
              class="block w-full mt-1 text-sm border-gray-600 bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple text-gray-300 focus:shadow-outline-gray form-input rounded-md"
              placeholder="**********" type="password" name="password" v-model="form.password" />
          </label>
          <button :disabled="state.isLoggin" :class="[
            'block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center transition-colors duration-150 rounded-lg focus:outline-none focus:shadow-outline-purple',
            state.isLoggin
              ? 'bg-purple-500 border-gray-400 text-white'
              : 'bg-purple-600 border-transparent text-white hover:bg-purple-700 active:bg-purple-600'
          ]" type="submit">
            Entrar
          </button>

          <div class="border my-6 border-gray-700 rounded-md">

          </div>

          <p class="mt-1">
            <a class="text-sm font-medium text-purple-600 hover:underline" href="https://www.mentoriadev.online"
              target="_blank">
              Faça sua inscrição
            </a>
          </p>
        </form>
      </div>
    </div>
  </div>

</template>

<script setup>
import { reactive, ref } from 'vue';
import service from "../../Services/Client/index";
import ToastNotification from "../../Components/Toast/ToastNotification.vue";
import { useToast } from "vue-toastification";
import { route } from '../../../../vendor/tightenco/ziggy/dist';

const form = reactive({
  email: "",
  password: ""
});

const toast = useToast();

const state = reactive({
  isLoggin: false
});


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
  } finally {
      state.isLoggin = true;
  }
};
</script>

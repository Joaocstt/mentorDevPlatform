import { defineStore } from "pinia";

export const useAuthStore = defineStore("auth", {
    state: () => ({
        user: JSON.parse(localStorage.getItem("user")), // Parseia o JSON para obter o objeto se estiver armazenado
    }),

    getters: {
        getUser: (state) => state.user, // Getter para retornar o estado do usuário

        isLoggedIn: (state) => state.user !== null, // Verifica se o usuário está logado
    },

    actions: {
        setUser(user) {
            this.user = user;
            localStorage.setItem("user", JSON.stringify(user)); // Armazena os dados do usuário no localStorage
        },

        logout() {
            this.user = null;
            localStorage.removeItem("user"); // Remove os dados do usuário do localStorage
        },
    },
});

import { route } from "../../../../../vendor/tightenco/ziggy/dist";
import { useAuthStore } from "../../../Store/Client/Auth";


export default (httpClient) => ({
    
    login: async (email, password) => {
        const authStore = useAuthStore(); // Obtém a instância do store de autenticação

        await httpClient
            .post(route("client.login.do"), {
                email,
                password,
            })
            .then((response) => {
                if (response.request.status == 200 && response.data.user) {
                    authStore.setUser(response.data.user)
                    return;
                }

                if (response.request.status === 429) {
                    throw new Error(
                        "Você não teve sucesso por 5 tentivas consecutivas. Tente novamente mais tarde!"
                    );
                }

                if (response.request.status === 422) {
                    throw new Error(
                        "Houve um erro ao fazer o login, verifique seus dados!"
                    );
                }

                throw new Error(JSON.parse(response.request.response).message);
            });
    },
    logout: () => {
        const authStore = useAuthStore(); // Obtém a instância do store de autenticação
        authStore.logout();
    }
});

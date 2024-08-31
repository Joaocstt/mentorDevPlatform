import axios from "axios";
import Auth from '../Client/Auth/index';

const httpClient = axios.create({
    baseURL: import.meta.env.VITE_APP_URL,
})

httpClient.interceptors.response.use((response) => response, async(error) => {
    if(error.request.status === 401) {
        console.log('Deu 401 no index.js no services do client')
        return;
    }

    return error;
})

export default {
    auth: Auth(httpClient)
}
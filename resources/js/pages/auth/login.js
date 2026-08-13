import { ref } from 'vue';
import { useRouter } from 'vue-router';
import api from '../../services/api';

export function useLogin() {
    const router = useRouter();

    const email = ref('');
    const password = ref('');
    const error = ref('');

    const login = async () => {
        try {
            const response = await api.post('/login', {
                email: email.value,
                password: password.value,
            });

            console.log('SUCCESS', response);

            await router.push('/dashboard');
        } catch (err) {
            console.error(err);

            error.value = 'Invalid email or password';
        }
    };

    return {
        email,
        password,
        error,
        login,
    };
}

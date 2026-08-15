import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

export function useLogin() {
    const email = ref('');
    const password = ref('');
    const error = ref('');

    const login = () => {
        router.post('/login-attempt', {
            email: email.value,
            password: password.value,
        }, {
            onError: () => {
                error.value = 'Invalid email or password';
            },
        });
    };

    return {
        email,
        password,
        error,
        login,
    };
}

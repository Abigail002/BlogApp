<x-auth-layout>
    <form action="" method="POST" class="vstack gap-4">
        @csrf

        <x-input-field name="email" type="email" placeholder="Enter Your Email">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2">
                    <path
                        d="M2.25 5.25a1.5 1.5 0 0 1 1.5-1.5h10.5a1.5 1.5 0 0 1 1.5 1.5v7.5a1.5 1.5 0 0 1-1.5 1.5H3.75a1.5 1.5 0 0 1-1.5-1.5v-7.5Z" />
                    <path d="M2.25 5.25 9 9.75l6.75-4.5" />
                </g>
            </svg>
        </x-input-field>

        <x-input-field name="password" type="password" placeholder="Enter Your Password">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path d="M12 3a12 12 0 0 0 8.5 3A12 12 0 0 1 12 21 12 12 0 0 1 3.5 6 12 12 0 0 0 12 3" />
                <circle cx="12" cy="11" r="1" />
                <path d="M12 12v2.5" />
            </svg>
        </x-input-field>

        <div class="text-start">
            <div class="form-text mt-2">
                <a href="/forgotPassword" class="text-decoration-none">Forgot Password?</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-full py-4">
                Sign In with GenAI
            </button>
        </div>
        <div class="text-center">
            <p>
                Don't have an account?
                <a href="/register" class="text-decoration-none">Sign Up for Free</a>
            </p>
        </div>
    </form>
</x-auth-layout>

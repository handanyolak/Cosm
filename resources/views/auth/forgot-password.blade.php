<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="{{ route('anasayfa') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="cosm"></a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Şifrenizi mi unuttunuz? Sorun değil. Sadece bize e-posta adresinizi bildirin ve size yeni bir tane seçmenize izin verecek bir şifre sıfırlama bağlantısı göndereceğiz.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('E-mail') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('E-mail Üzerinden Şifre Sıfırla') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="{{ route('anasayfa') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="cosm"></a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Üye olduğunuz için teşekkürler! Başlamadan önce, size az önce gönderdiğimiz bağlantıya tıklayarak e-posta adresinizi doğrulayabilir misiniz? E-postayı almadıysanız, memnuniyetle size başka bir e-posta göndereceğiz.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Kayıt sırasında verdiğiniz e-posta adresine yeni bir doğrulama bağlantısı gönderildi.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Doğrulama Postasını Yeniden Gönder') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Çıkış Yap') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

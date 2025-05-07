<x-filament-panels::page.simple>
    <div class="flex items-center justify-center min-h-screen bg-cream-50">
        <div class="w-screen max-w-md space-y-8 px-6 py-12">
            <div class="flex flex-col items-center space-y-2">
                <!-- Logo Tikar -->
                <div class="rounded-full border-4 border-primary p-2">
                    <svg viewBox="0 0 100 100" class="w-20 h-20 text-primary fill-current">
                        <g>
                            <!-- Stylized woven mat cylinder -->
                            <rect x="30" y="20" width="40" height="60" rx="3" ry="3" fill="none" stroke="currentColor" stroke-width="3" />
                            
                            <!-- Horizontal pattern lines -->
                            <line x1="30" y1="30" x2="70" y2="30" stroke="currentColor" stroke-width="2" />
                            <line x1="30" y1="40" x2="70" y2="40" stroke="currentColor" stroke-width="2" />
                            <line x1="30" y1="50" x2="70" y2="50" stroke="currentColor" stroke-width="2" />
                            <line x1="30" y1="60" x2="70" y2="60" stroke="currentColor" stroke-width="2" />
                            <line x1="30" y1="70" x2="70" y2="70" stroke="currentColor" stroke-width="2" />
                            
                            <!-- Vertical pattern lines -->
                            <line x1="40" y1="20" x2="40" y2="80" stroke="currentColor" stroke-width="2" />
                            <line x1="50" y1="20" x2="50" y2="80" stroke="currentColor" stroke-width="2" />
                            <line x1="60" y1="20" x2="60" y2="80" stroke="currentColor" stroke-width="2" />

                            <!-- Diamond pattern at top -->
                            <path d="M35,25 L38,28 L35,31 L32,28 Z" fill="currentColor" />
                            <path d="M45,25 L48,28 L45,31 L42,28 Z" fill="currentColor" />
                            <path d="M55,25 L58,28 L55,31 L52,28 Z" fill="currentColor" />
                            <path d="M65,25 L68,28 L65,31 L62,28 Z" fill="currentColor" />
                            
                            <!-- Diamond pattern at bottom -->
                            <path d="M35,69 L38,72 L35,75 L32,72 Z" fill="currentColor" />
                            <path d="M45,69 L48,72 L45,75 L42,72 Z" fill="currentColor" />
                            <path d="M55,69 L58,72 L55,75 L52,72 Z" fill="currentColor" />
                            <path d="M65,69 L68,72 L65,75 L62,72 Z" fill="currentColor" />
                        </g>
                    </svg>
                </div>

                <h1 class="text-3xl font-bold tracking-tight text-primary">
                    TIKAR LIPAT
                </h1>
                <h2 class="text-lg text-primary-600">
                    KHAS LAMONGAN
                </h2>
            </div>

            <h2 class="text-2xl font-bold tracking-tight text-center">
                Login
            </h2>

            <div>
                <form wire:submit.prevent="authenticate" class="space-y-6">
                    {{ $this->form }}

                    <x-filament::button
                        type="submit"
                        class="w-full bg-primary hover:bg-primary-600"
                        wire:loading.attr="disabled"
                    >
                        {{ __('filament-panels::pages/auth/login.form.actions.authenticate.label') }}
                    </x-filament::button>
                </form>
            </div>
        </div>
    </div>

    <!-- Hapus seluruh bagian footer -->
</x-filament-panels::page.simple>
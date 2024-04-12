<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                New Contact
                <form method="POST" action="{{ route('contact.update', $contact) }}">
                    @csrf
                    @method('PUT')
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required
                            value="{{ $contact->name }}" autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    {{-- Email --}}
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            value="{{ $contact->email }}" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    {{-- Phone --}}
                    <div>
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                            value="{{ $contact->phone }}" required autofocus />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('contact.index') }}">Cancel</a>

                        <x-primary-button class="ms-3">
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->

</x-app-layout>

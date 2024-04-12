<x-app-layout>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul class="list-inside divide-y-2">
                        <li class="py-4">Name: {{ $contact->name }}</li>
                        <li class="py-4">Email: {{ $contact->email }}</li>
                        <li class="py-4">Phone: {{ $contact->phone }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

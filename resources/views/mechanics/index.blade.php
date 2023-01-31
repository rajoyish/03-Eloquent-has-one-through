<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ __('Mechanics & Cars') }}</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Content --}}
                    <div class="relative overflow-x-auto">

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-2">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Mechanic
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Car Owner
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mechanics as $mechanic)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2">
                                            {{ $mechanic->id }}
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $mechanic->name }}
                                        </td>
                                        <td class="px-6 py-2">
                                            {{ $mechanic->carOwner->name }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- Ende of Content --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

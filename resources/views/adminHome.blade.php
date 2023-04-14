<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          {{ __("You're logged in!") }} - {{ __("Admin User") }} - {{ Auth::user()->name }}
        </div>

        <div>
          <table class="p-4">
            <thead class="bg-gray-50">
              <tr>
                <th class="p-8 text-xs text-gray-500">{{ __('ID') }}</th>
                <th class="p-8 text-xs text-gray-500">{{ __('Name') }}</th>
                <th class="p-8 text-xs text-gray-500">{{ __('Role') }}</th>
                <th class="p-8 text-xs text-gray-500">{{ __('Email') }}</th>
                <th class="p-8 text-xs text-gray-500">{{ __('Created') }}</th>
                <th class="px-6 py-2 text-xs text-gray-500">{{ __('Edit') }}</th>
                <th class="px-6 py-2 text-xs text-gray-500">{{ __('Delete') }}</th>
              </tr>
            </thead>
            <tbody class="bg-white">
              @foreach ($users as $item)
                <tr class="whitespace-nowrap">
                  <td class="px-6 py-4 text-sm text-center text-gray-500">
                    {{ $item->id }}
                  </td>
                  <td class="px-6 py-4">
                    <div class="text-sm text-gray-900">
                      {{ $item->name }}
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <div class="text-sm text-gray-900">
                      {{ $item->type}}
                    </div>
                  </td>
                  <td class="px-6 py-4">
                    <div class="text-sm text-gray-500">
                      {{ $item->email }}
                    </div>
                  </td>
                  <td class="px-6 py-4 text-sm text-center text-gray-500">
                    {{ $item->created_at }}
                  </td>
                  <td class="px-6 py-4 text-center">
                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">{{ __('Edit') }}</a>
                  </td>
                  <td class="px-6 py-4 text-center">
                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">{{ __('Delete') }}</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
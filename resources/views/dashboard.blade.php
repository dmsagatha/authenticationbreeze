@php use App\Enums\UserRole; @endphp

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
          {{ __("You're logged in!") }}
        </div>

        <div class="flex flex-col mt-8">
          <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
              <table class="min-w-full">
                <thead>
                  <tr>
                    <th class="px-2 py-3 text-xs font-semibold leading-4 tracking-wider uppercase bg-gray-50 border-b border-green-200">{{ __('ID') }}</th>
                    <th class="px-2 py-3 text-xs font-semibold leading-4 tracking-wider uppercase bg-gray-50 border-b border-green-200">{{ __('Name') }}</th>
                    <th class="px-2 py-3 text-xs font-semibold leading-4 tracking-wider uppercase bg-gray-50 border-b border-green-200">{{ __('Role') }}</th>
                    <th class="px-2 py-3 text-xs font-semibold leading-4 tracking-wider uppercase bg-gray-50 border-b border-green-200">{{ __('Email') }}</th>
                    <th class="px-2 py-3 text-xs font-semibold leading-4 tracking-wider uppercase bg-gray-50 border-b border-green-200">{{ __('Created') }}</th>
                    <th class="px-2 py-3 text-xs font-semibold leading-4 tracking-wider uppercase bg-gray-50 border-b border-green-200">{{ __('Edit') }}</th>
                    <th class="px-2 py-3 text-xs font-semibold leading-4 tracking-wider uppercase bg-gray-50 border-b border-green-200">{{ __('Delete') }}</th>
                  </tr>
                </thead>
                <tbody class="bg-white">
                  @foreach ($users as $item)
                    <tr>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-500">{{ $item->id }}</div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-500">{{ $item->name }}</div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <span @class([
                          'inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full',
                          'text-indigo-700 bg-indigo-100' => UserRole::User === $item->role,
                          'text-sky-700 bg-sky-100' => UserRole::Reviewer === $item->role,
                          'text-teal-700 bg-teal-100' => UserRole::Admin === $item->role
                        ])>
                          {{ $item->role->value }} - {{ $item->role->name }} | 
                          {{ $item->role->getLabelText() }}
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-500">{{ $item->email }}</div>
                      </td>
                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-500">{{ $item->created_at }}</div>
                      </td>
                      <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                          viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                      </td>
                      <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"
                          viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
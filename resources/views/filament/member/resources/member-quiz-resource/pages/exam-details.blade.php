<x-filament-panels::page>
    {{-- <div class="text-pink-800">{{($record->title)}}</div> --}}
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
    @livewire('exam-details',['quiz' => $record])


      
</x-filament-panels::page>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div id="app">
                        <agora-video-display></agora-video-display>
                        <agora-user-list></agora-user-list>
                        <agora-incoming-call-alert></agora-incoming-call-alert>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
</x-app-layout>

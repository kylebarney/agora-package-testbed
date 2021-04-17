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
                        <div class="flex flex-wrap overflow-hidden">
                            <div class="w-3/4 overflow-hidden">
                                <agora-video-display
                                    current-user-id="{{ Auth::id() }}"
                                    current-user-name="{{ \Tipoff\LaravelAgoraApi\Services\DisplayNameService::getDisplayName(Auth::user()) }}"
                                    echo-channel-name="{{ config('agora.channel_name') }}"
                                    agora-route-prefix="{{ config('agora.routes.prefix') }}"
                                    agora-app-id="{{ config('agora.credentials.app_id') }}"
                                ></agora-video-display>
                            </div>
                            <div class="w-1/4 overflow-hidden">
                                <agora-incoming-call-alert></agora-incoming-call-alert>
                                <agora-outgoing-call-alert></agora-outgoing-call-alert>
                                <agora-user-list></agora-user-list>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

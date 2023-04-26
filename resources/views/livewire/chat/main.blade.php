<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

            <div class="chat_container">

                <div class="chat_list_container">
        
                    @livewire('chat.chat-list')
        
                </div>
                <div class="chat_box_container">
        
                    @livewire('chat.chatbox')
        
                    @livewire('chat.send-message')
                    
                </div>
        
            </div>

        </div>

        @livewireScripts
        <script src="{{ asset('js/script.js') }}">
    </body>
</html>


{{-- 

<div>
    <div class="chat_container">

        <div class="chat_list_container">

            @livewire('chat.chat-list')

        </div>
        <div class="chat_box_container">

            @livewire('chat.chatbox')

            @livewire('chat.send-message')
            
        </div>

    </div>
</div> --}}

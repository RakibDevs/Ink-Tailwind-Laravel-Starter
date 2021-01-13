<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('content', 'Tailwind Laravel Starter') - Ink</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
   

    </head>
    <body class="bg-gray-100 font-family-nunito flex">
        @include('admin.includes.sidebar')
    	<div class="w-full flex flex-col h-screen overflow-y-hidden">
        	@include('admin.includes.header')
        	<div class="w-full overflow-x-hidden border-t flex flex-col">
        		<main class="w-full flex-grow p-6">
	    
        			@yield('content')
        		</main>
        		@include('admin.includes.footer')
        	</div>
        
    	</div>

    </body>
</html>

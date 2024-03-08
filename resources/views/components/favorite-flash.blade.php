@if (session('success-favorite'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Éxito!</strong>
        <span class="block sm:inline">{{ session('success-favorite') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.35 5.64a1 1 0 0 0-1.41 0L10 8.59 6.06 4.64a1 1 0 1 0-1.41 1.41L8.59 10l-3.95 3.95a1 1 0 0 0 1.41 1.41L10 11.41l3.95 3.95a1 1 0 0 0 1.41-1.41L11.41 10l3.95-3.95a1 1 0 0 0 0-1.41z"/></svg>
        </span>
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error:</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.35 5.64a1 1 0 0 0-1.41 0L10 8.59 6.06 4.64a1 1 0 1 0-1.41 1.41L8.59 10l-3.95 3.95a1 1 0 0 0 1.41 1.41L10 11.41l3.95 3.95a1 1 0 0 0 1.41-1.41L11.41 10l3.95-3.95a1 1 0 0 0 0-1.41z"/></svg>
        </span>
    </div>
@endif

@if(session('success-delete'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success:</strong>
        <span class="block sm:inline">{{ session('success-delete') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.35 5.64a1 1 0 0 0-1.41 0L10 8.59 6.06 4.64a1 1 0 1 0-1.41 1.41L8.59 10l-3.95 3.95a1 1 0 0 0 1.41 1.41L10 11.41l3.95 3.95a1 1 0 0 0 1.41-1.41L11.41 10l3.95-3.95a1 1 0 0 0 0-1.41z"/></svg>
        </span>
    </div>
@endif

@if(session('error-login'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error:</strong>
        <span class="block sm:inline">{{ session('error-login') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.35 5.64a1 1 0 0 0-1.41 0L10 8.59 6.06 4.64a1 1 0 1 0-1.41 1.41L8.59 10l-3.95 3.95a1 1 0 0 0 1.41 1.41L10 11.41l3.95 3.95a1 1 0 0 0 1.41-1.41L11.41 10l3.95-3.95a1 1 0 0 0 0-1.41z"/></svg>
        </span>
    </div>
@endif
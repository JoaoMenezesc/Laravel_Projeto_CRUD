@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')

<h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Editar Usuário: {{ $user->name }}</h1>

<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-700">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Campo Nome -->
        <div class="mb-6">
            <label for="name" class="block text-gray-700 dark:text-gray-200 font-medium mb-2">Nome:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600 dark:focus:ring-blue-600" 
                   required>
            @error('name')
                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Email -->
        <div class="mb-6">
            <label for="email" class="block text-gray-700 dark:text-gray-200 font-medium mb-2">E-mail:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600 dark:focus:ring-blue-600" 
                   required>
            @error('email')
                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Senha -->
        <div class="mb-6">
            <label for="password" class="block text-gray-700 dark:text-gray-200 font-medium mb-2">Senha (Deixe em branco para manter a atual):</label>
            <input type="password" id="password" name="password" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600 dark:focus:ring-blue-600">
            @error('password')
                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Botões -->
        <div class="mt-6 flex justify-end gap-4">
            <a href="{{ route('users.index') }}" 
               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 dark:bg-gray-600 dark:hover:bg-gray-700 transition duration-300">
                Cancelar
            </a>
            <button type="submit" 
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 transition duration-300">
                Salvar Alterações
            </button>
        </div>
    </form>
</div>

@endsection

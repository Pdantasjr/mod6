<x-app-layout>
    <x-slot name="header">
        <h2>Dados do usuário</h2>
    </x-slot>
    <ol>
        <li>Nome: {{ auth()->user()->name }}</li>
        <li>E-mail: {{ auth()->user()->email }}</li>
        <li>Status: {{ auth()->user()->client->signatures->first()->status->name }}</li>
        <hr>
        <li>{{ $params }}</li>
    </ol>
</x-app-layout>
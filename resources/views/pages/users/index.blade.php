@extends('layouts.app')

@section('content')
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-200 sm:rounded-lg shadow-md">
                <div class="p-6 text-base-content flex-1 overflow-y-auto">
                    <p class="items-center text-center mb-10">Users</p>
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Data Nascimento</th>
                                <th>Admin?</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->birthdate }}</td>
                                    <td>
                                        @if ($user->admin)
                                            Sim
                                        @else
                                            Não
                                        @endif
                                    </td>
                                    <td class="justify-center">
                                        <a class="btn btn-sm" onclick="my_modal_{{ $user->id }}.showModal()"><i
                                                class="fa-solid fa-user-pen"></i></a>
                                        <a class="btn btn-sm"><i class="fa-solid fa-trash"></i></a>

                                    </td>
                                </tr>
                                <dialog id="my_modal_{{ $user->id }}" class="modal">
                                    <div class="modal-box">
                                        <h3 class="font-bold text-lg">Dados do Usuário</h3>
                                        <div class="modal-action w-full flex flex-col">
                                            <form method="POST" action="{{ route('users.update', $user->id) }}">
                                                @csrf
                                                @method('PUT')
        
                                                <div class="mb-4">
                                                    <label for="name"
                                                        class="block text-gray-700 font-semibold mb-2">Nome</label>
                                                    <input id="name" type="text" class="form-input w-full rounded"
                                                        name="name" value="{{ $user->name }}" required autofocus>
                                                </div>
        
                                                <div class="mb-4">
                                                    <label for="email"
                                                        class="block text-gray-700 font-semibold mb-2">E-mail</label>
                                                    <input id="email" type="email" class="form-input w-full rounded"
                                                        name="email" value="{{ $user->email }}" required>
                                                </div>
        
                                                <div class="mb-4">
                                                    <label for="birthdate" class="block text-gray-700 font-semibold mb-2">Data
                                                        de
                                                        Nascimento</label>
                                                    <input id="birthdate" type="date" class="form-input w-full rounded"
                                                        name="birthdate" value="{{ $user->birthdate }}">
                                                </div>
        
                                                <div class="mb-4">
                                                    <label for="admin" class="ml-2 text-gray-700 font-semibold">Admin</label>
                                                    <input id="admin" type="checkbox" class="checkbox rounded ml-2"
                                                        name="admin" {{ $user->admin ? 'checked' : '' }}>
                                                </div>
                                                <div class="modal-action">
                                                    <form method="dialog">
                                                        <button class="btn btn-error">
                                                            Fechar
                                                        </button>
                                                        <button type="submit"
                                                            class="btn btn-primary text-white font-semibold py-2 px-4 rounded">Salvar</button>
                                                    </form>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <p class="mt-2">

                {{ $users->links() }}
            </p>
        </div>
    </div>

@endsection

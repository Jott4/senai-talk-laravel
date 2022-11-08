
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Aluno
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 w-full h-full bg-white rounded shadow flex rounded">
            <form class="flex flex-col py-8 w-full" href="#" method="post">
                @csrf
                <div class="mb-4 flex flex-col">
                    <label for="name" class="text-gray-700">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" value="{{$aluno->nome}}"
                           class="text-gray-800 rounded border border-gray-300 w-full">
                </div>
                <div class="mb-4 flex flex-col">
                    <label for="name" class="text-gray-700">Matricula</label>
                    <input type="text" name="matricula" id="matricula" placeholder="Nome" value="{{$aluno->matricula}}"
                           class="text-gray-800 rounded border border-gray-300 w-full">
                </div>
                <div class="mb-4 flex flex-col">
                    <label for="name" class="text-gray-700">Idade</label>
                    <input type="number" name="idade" id="idade" placeholder="Idade"  value="{{$aluno->idade}}"
                           class="text-gray-800 rounded border border-gray-300 w-full">
                </div>
                <div class="block mt-4">
                    <label for="isReprovado" class="flex items-center">
                        <input type="checkbox" id="isReprovado" name="isReprovado" {{$aluno->isReprovado ? "checked" : "" }} />
                        <span class="ml-2 text-sm text-gray-600">Reprovado?</span>
                    </label>
                </div>



                <div class="flex w-full justify-end items-center gap-4">
                    <a href="../">Voltar</a>
                    <x-jet-button type="submit" id="submit">Salvar</x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>


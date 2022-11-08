<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Aluno
            </h2>
            <a class="bg-blue-400 rounded shadow py-2 px-4 text-white" href="/aluno/create">
                Adicionar
            </a>
        </div>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto">
        <div class=" sm:px-6 lg:px-8 w-full h-full bg-white rounded shadow">
            <table class="w-full text-sm text-left text-gray-700">
                <thead class="text-xs text-gray-700 uppercase">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nome
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Matricula
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Idade
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Reprovado
                    </th>


                </tr>
                </thead>
                <tbody>
                @foreach($alunos as $aluno)
                    <tr class="border-b">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{$aluno->id}}</th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{$aluno->nome}}</th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{$aluno->matricula}}</th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{$aluno->idade}}</th>
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{$aluno->isReprovado ? "Sim" : "Não"}}</th>
                        <th scope="row"
                            class="py-4 px-6 font-medium flex items-center justify-center  whitespace-nowrap">
                            <div class="flex  items-center justify-center">
                                <a href="/aluno/edit/{{$aluno->id}}" class="underline px-1">
                                   Editar
                                </a>
                                <a href="/aluno/delete/{{$aluno->id}}"  class="underline px-1">
                                   Deletar
                                </a>
                            </div>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

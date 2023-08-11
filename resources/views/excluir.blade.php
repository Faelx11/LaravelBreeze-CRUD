<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Excluir Clientes') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900">
                    <!-- Título do container -->
                    <center>
                    <div id="sign-form-title"> {{ __("Formulário de Exclusão") }} </div>

                    <br>

                    <!-- Formulário em Tailwind -->
                    <form class="w-full max-w-lg" action="{{url("/delete/$cliente->id")}}" method="POST">
                        @csrf
                        @method('delete')

                        <span> Deseja realmente excluir os registros? </span>

                        <div id="client-data-delete">
                            <div class="w-full px-3">
                                <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nome" type="text" name="nome" value="{{$cliente->nome}}" disabled>
                            </div>
                        </div>
                        

                        <!-- Button de Cadastro -->
                        <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Excluir</button>
                        <!-- Fim do Button de Cadastro -->

                    </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

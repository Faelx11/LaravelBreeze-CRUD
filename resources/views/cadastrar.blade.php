<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900">
                    <!-- Título do container -->
                    <center>
                    <div id="sign-form-title" > {{ __("Formulário de Cadastro") }} </div>

                    <br>

                    <!-- Formulário em Tailwind -->
                    <form class="w-full max-w-lg" action="{{url('/store')}}" method="POST">
                        @csrf
                        <!-- Input: Nome -->
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nome">
                                Nome
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nome" type="text" name="nome">
                            </div>
                        </div>
                        <!-- Fim do Input Nome -->
                        <!-- Input: Endereço -->
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-endereco">
                                Endereço
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-endereco" type="text" name="endereco">
                            </div>
                        </div>
                        <!-- Fim do Input Endereço -->
                        <!-- Input: Bairro -->
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-bairro">
                                Bairro
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-bairro" type="text" name="bairro">
                            </div>
                        </div>
                        <!-- Fim do Input Bairro -->
                        <!-- Inputs: CEP, Cidade e Estado -->
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <!-- Input CEP -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-cep">
                                CEP
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-cep" type="text" name="cep">
                            </div>
                            <!-- Fim do Input CEP -->
                            <!-- Input Cidade -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-cidade">
                                Cidade
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-cidade" type="text" name="cidade">
                            </div>
                            <!-- Fim do Input Cidade -->
                            <!-- Input Estado -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-estado">
                                Estado
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-estado" type="text" name="estado" maxlength="2">
                            </div>
                            <!-- Fim do Input Estado -->
                        </div>
                        <!-- Fim dos Inputs: CEP, Cidade e Estado -->

                        <!-- Button de Cadastro -->
                        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Cadastrar</button>
                        <!-- Fim do Button de Cadastro -->

                    </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

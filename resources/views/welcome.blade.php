<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire para principiantes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
    </head>
    <body>
        <section class="flex flex-col items-center space-y-4 py-12">
            <h1 class="text-3xl font-bold underline">
                Mis tareas
            </h1>

            <form class="p-4 w-1/4">
                <div class="mb-4">
                    <input class="p-2 bg-gray-200 w-full" type="text" name="text" placeholder="Tarea...">
                </div>
                <button type="submit" class="bg-indigo-700 text-white font-bold w-full rounded shadow p-2">Guardar</button>
            </form>

            <table class="shadow-md w-1/3">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                        <th class="py-3 px-6 text-left">Hecha</th>
                        <th class="py-3 px-6 text-left">Tarea</th>
                        <th class="py-3 px-6 text-left">&nbsp;</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <tr class="border-b border-gray-200">
                        <td class="px-4 py-2"><input type="checkbox"></td>
                        <td class="px-4 py-2">Comprar pan dulce</td>
                        <td class="px-4 py-2">
                            <button type="button" class="bg-indigo-400 px-2 py-1 text-white text-xs rounded">Editar</button>
                            <button type="button" class="bg-red-500 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="px-4 py-2"><input type="checkbox"></td>
                        <td class="px-4 py-2">Planchar pantalones</td>
                        <td class="px-4 py-2">
                            <button type="button" class="bg-indigo-400 px-2 py-1 text-white text-xs rounded">Editar</button>
                            <button type="button" class="bg-red-500 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        @livewireScripts
    </body>
</html>

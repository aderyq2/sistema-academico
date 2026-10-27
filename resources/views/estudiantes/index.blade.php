<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Estudiantes</title>

    <!-- Cargar Tailwind CSS mediante Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 p-10">

    <div class="max-w-6xl mx-auto bg-white p-8 rounded-lg shadow">

        <!-- Título principal -->
        <h1 class="text-3xl font-bold text-blue-600 mb-6">
            Lista de Estudiantes
        </h1>

        <!-- Tabla de estudiantes -->
        <table class="w-full border-collapse border border-gray-300">

            <thead class="bg-blue-600 text-white">

                <tr>
                    <th class="border p-3">ID</th>
                    <th class="border p-3">DNI</th>
                    <th class="border p-3">Nombres</th>
                    <th class="border p-3">Apellidos</th>
                    <th class="border p-3">Correo</th>
                    <th class="border p-3">Estado</th>
                    <th class="border p-3">Acciones</th>
                </tr>

            </thead>
            <tbody>

                <!-- Recorrer los estudiantes enviados desde el controlador -->
                @forelse ($estudiantes as $estudiante)

                    <tr class="hover:bg-gray-100">

                        <td class="border p-3">
                            {{ $estudiante->id }}
                        </td>

                        <td class="border p-3">
                            {{ $estudiante->dni }}
                        </td>

                        <td class="border p-3">
                            {{ $estudiante->nombres }}
                        </td>

                        <td class="border p-3">
                            {{ $estudiante->apellidos }}
                        </td>

                        <td class="border p-3">
                            {{ $estudiante->correo }}
                        </td>

                        <td class="border p-3">
                            {{ $estudiante->estado }}
                        </td>

                        <td class="border p-3">

                            <a href="{{ route('estudiantes.show', $estudiante->id) }}"
                               class="bg-blue-600 text-white px-3 py-2 rounded">

                                Ver
                            </a>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="7" class="text-center p-5 text-gray-500">
                            No existen estudiantes registrados.
                        </td>
                    </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
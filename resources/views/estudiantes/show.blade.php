<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detalle del Estudiante</title>

    <!-- Cargar Tailwind CSS mediante Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen p-10">

    <div class="max-w-3xl mx-auto">

        <div class="bg-white rounded-xl shadow-lg p-8">

            <!-- Título principal -->
            <h1 class="text-3xl font-bold text-blue-600 mb-6">
                Datos del Estudiante
            </h1>

            <!-- Información del estudiante -->
            <div class="space-y-4">

                <div class="border-b pb-3">
                    <strong>ID:</strong>
                    {{ $estudiante->id }}
                </div>

                <div class="border-b pb-3">
                    <strong>DNI:</strong>
                    {{ $estudiante->dni }}
                </div>

                <div class="border-b pb-3">
                    <strong>Nombres:</strong>
                    {{ $estudiante->nombres }}
                </div>

                <div class="border-b pb-3">
                    <strong>Apellidos:</strong>
                    {{ $estudiante->apellidos }}
                </div>

                <div class="border-b pb-3">
                    <strong>Correo:</strong>
                    {{ $estudiante->correo ?? 'No registrado' }}
                </div>

                <div class="border-b pb-3">
                    <strong>Teléfono:</strong>
                    {{ $estudiante->telefono ?? 'No registrado' }}
                </div>

                <div class="border-b pb-3">
                    <strong>Fecha de nacimiento:</strong>
                    {{ $estudiante->fecha_nacimiento ?? 'No registrada' }}
                </div>

                <div class="border-b pb-3">
                    <strong>Estado:</strong>

                    <span class="px-3 py-1 rounded-full text-sm
                        {{ $estudiante->estado == 'Activo'
                            ? 'bg-green-100 text-green-700'
                            : 'bg-red-100 text-red-700' }}">

                        {{ $estudiante->estado }}

                    </span>
                </div>

            </div>

            <!-- Botón para regresar -->
            <div class="mt-8">

                <a href="{{ route('estudiantes.index') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700
                          text-white px-5 py-3 rounded-lg">

                    ← Volver a estudiantes

                </a>

            </div>

        </div>

    </div>

</body>

</html>
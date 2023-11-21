<x-app-layout>
    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Rut
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Nota
                </th>
                <th scope="col" class="px-6 py-3">
                    Asignatura
                </th>
                <th scope="col" class="px-6 py-3">
                    Promedio
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                @foreach($students as $student)
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    $student->name
                </th>
                <td class="px-6 py-4">
                    $student->rut
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    $student->grade
                </td>
                <td class="px-6 py-4">
                    
                </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>

</x-app-layout>
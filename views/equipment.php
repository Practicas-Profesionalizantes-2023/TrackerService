<?php

use \App\AutomaticForm;
use App\Http\Controllers\EquipmentController;

$nombre_pagina = 'Dispositivos';
$nombre_formulario = 'equipo';

$equipment_controller = new EquipmentController;

$equipo_form = new AutomaticForm(
    'equipo',
    '',
    '/equipment/create/',
    'POST',
    'bg-blue-700',
    [
        'equipos-modelo' => [
            'title_label' => 'Nombre del equipo',
            'id_name' => 'modelo',
            'type' => 'text',
            'height' => 3,
            'placeholder' => 'samsung #4321',
            'required' => true,
        ],
        'equipos-marca' => [
            'title_label' => 'Selecciona una marca',
            'id_name' => 'marca',
            'type' => 'select',
            'height' => 3,
            'required' => true,
            'options' => json_encode($equipment_controller->ListEquipmentBrand()),
            'options_table' => 'marca_descripcion',
        ],
        'equipos-categoria' => [
            'title_label' => 'Selecciona una categoria',
            'id_name' => 'categoria',
            'type' => 'select',
            'height' => 3,
            'required' => true,
            'options' => json_encode($equipment_controller->ListEquipmentCategories()),
            'options_table' => 'categoria_equipo_descripcion',
        ],
    ]
);

$marca_form = new AutomaticForm(
    'marca',
    '',
    '/equipment/createbrand/',
    'POST',
    'bg-blue-700',
    [
        'equipos-marca' => [
            'title_label' => 'Nueva marca',
            'id_name' => 'nueva-marca',
            'type' => 'text',
            'height' => 3,
            'placeholder' => 'samsung',
            'required' => true,
        ]
    ]
);

$categoria_form = new AutomaticForm(
    'categoria',
    'Nueva categoria',
    '/equipment/createcategory/',
    'POST',
    'bg-blue-700',
    [
        'equipos-marca' => [
            'title_label' => 'Nueva categoria',
            'id_name' => 'nueva-categoria',
            'type' => 'text',
            'height' => 3,
            'placeholder' => 'Telefonos',
            'required' => true,
        ]
    ]
);
?>

<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900 min-h-screen">
        <entities-crud type="usuarios">

            <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full mb-1">
                    <div class="mb-4">
                        <nav class="flex mb-5" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                <li class="inline-flex items-center">
                                    <a href="/" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                        </svg>
                                        Página principal
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="/crud/" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Tablas</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page"><?= $nombre_pagina ?></span>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                            Todos los <?= $nombre_pagina ?>
                        </h1>
                    </div>

                    <div class="items-center justify-between block sm:flex">

                        <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                            <a type="button" href="/equipment/" type="button" data-refresh="" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-700 focus:ring-4 focus:ring-green-300 sm:w-auto dark:bg-green-600 dark:focus:ring-green-800">
                                <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"></path>
                                </svg>
                                Refrescar
                            </a>
                            <!--Form agregar equipo -->
                            <? $marca_form->GenerateButton() ?>
                            <? $marca_form->GenerateForm() ?>
                            <!--FIN Agregar Equipo -->

                            <!--Form agregar equipo -->
                            <? $categoria_form->GenerateButton() ?>
                            <? $categoria_form->GenerateForm() ?>
                            <!--FIN Agregar Equipo -->

                            <!--Form agregar equipo -->
                            <? $equipo_form->GenerateButton() ?>
                            <? $equipo_form->GenerateForm() ?>
                            <!--FIN Agregar Equipo -->

                        </div>
                    </div>
                </div>
            </div>


            <!--Listado equipos-->
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <!--Titulos-->
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Equipo
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Modelo
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Marca
                                        </th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Categoria
                                        </th>

                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>

                                <!--clientes-->
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <?php foreach ($equipment_controller->ListEquipments() as $obj_equipo) : ?>
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                            <!--datos-->
                                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <data value="name"><?= $obj_equipo->equipo ?></data>
                                            </td>

                                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <data value="modelo"><?= $obj_equipo->modelo ?></data>
                                            </td>

                                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <data value="marca"><?= $obj_equipo->marca ?></data>
                                            </td>
                                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <data value="categoria"><?= $obj_equipo->categoria ?></data>
                                            </td>

                                            <!--botones editar y eliminar-->
                                            <td class="p-4 space-x-2 whitespace-nowrap">

                                                <button type="button" id="updateclienteButton" onclick="llenarFormulario('<?php echo $obj_equipo->equipo; ?>','<?= $obj_equipo->modelo ?>', '<?= $obj_equipo->marca ?>', '<?= $obj_equipo->categoria ?>');" data-drawer-target="drawer-update-<?= $nombre_formulario ?>-default" data-drawer-show="drawer-update-<?= $nombre_formulario ?>-default" aria-controls="drawer-update-<?= $nombre_formulario ?>-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 hover:text-white focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <svg>
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </svg>
                                                    Editar <?= $nombre_formulario ?>
                                                </button>

                                                <button type="button" id="deleteEquipmentButton" onclick="handleDeleteButtonClick('<?php echo $obj_equipo->equipo ?>')" data-drawer-target="drawer-delete-equipment-default" data-drawer-show="drawer-delete-equipment-default" aria-controls="drawer-delete-equipment-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Eliminar <?= $nombre_formulario ?>
                                                </button>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!--Fin clientes-->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin Listado equipos-->


            <!-- Edit equipo Drawer -->
            <div id="drawer-update-<?= $nombre_formulario ?>-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform bg-white dark:bg-gray-800 translate-x-full" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
                <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                    Editar <?= $nombre_formulario ?>
                </h5>
                <button type="button" data-drawer-dismiss="drawer-update-<?= $nombre_formulario ?>-default" aria-controls="drawer-update-<?= $nombre_formulario ?>-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Cerrar menu</span>
                </button>

                <form action="/equipment/edit/" method="POST">
                    <div class="space-y-4">
                        <div>
                            <label for="equipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">equipo</label>
                            <input type="text" name="equipo" id="editar-equipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="equipo" placeholder="equipo" required="">
                        </div>
                        <div>
                            <label for="modelo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">modelo</label>
                            <input type="text" name="modelo" id="editar-modelo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="modelo" placeholder="modelo" required="">
                        </div>

                        <div class="mb-4">
                            <label for="marca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una marca</label>
                            <select id="editar-marca" name="marca" class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                <?php foreach ($equipment_controller->ListEquipmentBrand() as $obj_brand) : ?>

                                    <option><?= $obj_brand->marca_descripcion ?></option>

                                <?php endforeach; ?>
                            </select>

                        </div>


                        <div class="mb-4">
                            <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una categioría</label>
                            <select id="editar-categoria" name="categoria" class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                <?php foreach ($equipment_controller->ListEquipmentCategories() as $obj_categories) : ?>

                                    <option><?= $obj_categories->categoria_equipo_descripcion ?></option>

                                <?php endforeach; ?>
                            </select>

                        </div>

                        <input type="hidden" name="id" id="id">

                    </div>

                    <div class="bottom-0 left-0 flex justify-center w-full pb-4 mt-4 space-x-4 sm:absolute sm:px-4 sm:mt-0">
                        <button type="submit" value="Editar" name="Editar" class="w-full justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Update
                        </button>
                    </div>
                </form>

            </div>
            <!-- Fin Edit equipo Drawer -->

            <!-- Delete euipo Drawer -->
            <div id="drawer-delete-equipment-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform bg-white dark:bg-gray-800 translate-x-full" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
                <h5 id="drawer-label" class="inline-flex items-center text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                    Eliminar <?= $nombre_formulario ?>
                </h5>
                <button type="button" data-drawer-dismiss="drawer-delete-equipment-default" aria-controls="drawer-delete-equipment-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <svg class="w-10 h-10 mt-8 mb-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="mb-6 text-lg text-gray-500 dark:text-gray-400">
                    ¿Estas seguro de eliminar este <?= $nombre_formulario ?>?
                </h3>
                <a href="" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-900">
                    Si, estoy seguro.
                </a>
            </div>
            <!-- Formulario Eliminar Equipo -->

        </entities-crud>

    </div>
</div>

<script>
    function handleDeleteButtonClick(equiptmentId) {
        var deleteButton = document.getElementById("deleteEquiptmentButton");
        var deleteLink = document.querySelector("#drawer-delete-equipment-default a.text-white.bg-red-600");
        deleteLink.href = "/equipment/delete/?id_equipo=" + equiptmentId;
    }
</script>

<script>
    // Función para llenar los campos del formulario con los datos del formulario
    function llenarFormulario(equipo, modelo, marca, categoria) {
        // Obtener referencias a los campos del formulario
        var equipoInput = document.getElementById("editar-equipo");
        var modeloInput = document.getElementById("editar-modelo");
        var marcaInput = document.getElementById("editar-marca");
        var categoriaInput = document.getElementById("editar-categoria");

        // Llenar los campos con los datos del formulario
        equipoInput.value = equipo;
        modeloInput.value = modelo;
        marcaInput.value = marca;
        categoriaInput.value = categoria;
    }
</script>
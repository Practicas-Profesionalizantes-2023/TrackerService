<?php

use \App\Models\TicketModel;

$model_tiket = new TicketModel;
//var_dump($model_tiket -> ListT());

$title_secction_ticket = 'Tickets';
$sub_secction_ticket = 'Esto es una lista de los últimos tickets.';

$th_title = ['Transaction', 'Date &amp; Time', 'Amount', 'Reference number', 'Payment method', 'Status'];
$th_content = [
    'Payment from Bonnie Green',
    'Apr 23 ,2021',
    '$2300',
    '0047568936',
    '••• 475',
    'completado',
];

$text_link = [
    'text' => 'Todos los Tickets',
    'link' => '/ticket/',
];

?>


<div class="p-4 my-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    <!-- Card header -->
    <div class="items-center justify-between lg:flex">
        <div class="mb-4 lg:mb-0">
            <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">
                <?=$title_secction_ticket?>
            </h3>
            <span class="text-base font-normal text-gray-500 dark:text-gray-400"><?=$sub_secction_ticket?></span>
        </div>
    </div>
    <!-- Table -->
    <div class="flex flex-col mt-6">
        <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <? foreach ($th_title as $value) : ?>
                                    <td scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                        <?= $value ?>
                                    </td>
                                <? endforeach; ?>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800">
                            <tr>
                                <? foreach ($th_content as $value) : ?>
                                    <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="font-semibold"><?= $value ?></span>
                                    </td>
                                <? endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Footer -->
    <div class="flex items-center justify-between pt-3 sm:pt-6">
        <div class="flex-shrink-0">
            <a href="<?= $text_link['link'] ?>" class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                <?= $text_link['text'] ?>
                <svg class="w-4 h-4 ml-1 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
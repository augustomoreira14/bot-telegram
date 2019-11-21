<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('/start', function ($bot) {
    $bot->reply('Olá! Tudo bem?');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');

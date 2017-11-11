<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.



quote()
{
    return Collection::make([

'When there is no desire, all things are at peace. - Laozi',
'Simplicity is the ultimate sophistication. - Leonardo da Vinci',
'Simplicity is the essence of happiness. - Cedric Bledsoe',
'Smile, breathe, and go slowly. - Thich Nhat Hanh',
'Simplicity is an acquired taste. - Katharine Gerould',
'Well begun is half done. - Aristotle',
'He who is contented is rich. - Laozi',
'Very little is needed to make a happy life. - Marcus Antoninus',
'It is quality rather than quantity that matters. - Lucius Annaeus Seneca',
'Genius is one percent inspiration and ninety-nine percent perspiration. - Thomas Edison',
'Computer science is no more about computers than astronomy is about telescopes. - Edsger Dijkstra',


])->random();
}


|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');



/*   REGISTER new console command here
      and you can SEE it by 
      php artisan list

   Artisan::command('mod', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
*/

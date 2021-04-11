<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
   
        $botman->hears('{message}', function($botman, $message) {
   
            if ($message == 'hi') {
                $this->askName($botman);
            }else{
                $botman->reply("write 'hi' for testing...");
            }
   
        });
       
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name);
        });
        
    }

    public function start() {
        $botman = app('botman');

        $botman->hears('hi|hello|hola|hey', function($botman) {
            $botman->reply('Hello there!');
        });

        $botman->hears('what\'s your name|whats your name|who are you', function($botman) {
            $botman->reply('I\'m Lucy. I\'ll be accompanying you here all the time whenever you need me.');
            $this->askName($botman);
        });

        $botman->hears('em[m]+|um[m]+|ah[h]+|ug[g]+h|oh[h]+', function($botman) {
            $botman->reply('What happened? Anyhting\'s bothering you?');
        });

        $botman->hears('yes|no', function($botman) {
            $botman->reply('Wanna tell me more?');
        });

        $botman->hears('nice to meet you too|nice to meet you', function($botman) {
            $botman->reply('Aww! You\'re such a good soul!');
        });

        $botman->hears('haha|haha|hehe', function($botman) {
            $botman->reply('LoL! It\'s funny, right?');
        });


        $botman->listen();
    }

    
}

?>
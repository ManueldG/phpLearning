<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageLearnsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_learns')->delete();
        
        \DB::table('page_learns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Prime nozioni',
                'description' => 'Un file PHP per essere interpretato dev\'essere introdotto dal tag "<?php" si può usare anche la forma abbreviata "<?" o ancora la versione  "<?=" che equivale a "<?php echo" che può essere usato per stampare il valore di una varibile o una funzione nel caso il file contenga solo codice PHP non è necessario chiudere il file con il tag "?>"
infatti il comando forse più usato è proprio echo questo primo esempio ne fa vedere il funzionamento.

Uno dei comandi di base è sicuramente "echo" lo useremo per provare i vari operatori e le varie funzioni. Esegui questo primo esempio.',
                'created_at' => '2025-04-02 20:33:56',
                'updated_at' => '2025-04-08 13:39:05',
                'example' => 'echo "Hello World";',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Variabili',
                'description' => 'possiamo utilizzare delle variabili per immagazzinare dei valori come stringhe, numeri, array e oggetti im molti casi possiamo concatenarli con l\'operatore "." a patto che i tipi delle variabili siano compatibili tra loro',
                'created_at' => '2025-04-02 20:37:24',
                'updated_at' => '2025-04-23 14:30:09',
                'example' => '$var = "Hello World";
$int = 123;
$flo = 12.4;
echo $var . " " .$int. " " .$flo  ;',
            ),
            2 => 
            array (
                'id' => 5,
                'title' => 'Operatori',
                'description' => 'Matematici

+ 	Addizione
$x += $y (Equivale a $x = $x+ $y)

- 	Sottrazione 
$x -= $y 	

* 	Moltiplicazione 
$x *= $y

/ 	Divisione 
$x /= $y 	

$x %=$y
% 	Modulo 	

$x**$y	Potenza

$x = $y 	assegnazione

++$x 	Pre-incremento 	
$x++ 	Post-incremento 	
--$x 	Pre-decremento 	
$x-- 	Post-decremento',
                'created_at' => '2025-04-08 15:40:49',
                'updated_at' => '2025-04-23 14:32:01',
                'example' => '$x = 2;
$y = 3;
echo " $x + $y = " . ($x + $y) ;
echo "\\n";
$x += 2;
echo \' $x = \' . $x  ;',
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'Operatori di confronto',
                'description' => '== 	Uguale 	
=== 	Identico 	
!= 	Diverso 	
<> 	Diverso 	
!== 	Non identico 	
> 	Maggiore 
< 	Minore 
>= 	Maggiore o uguale maggiore o uguale
<=> 	Spaceship 	

?: 	Operatore ternario 	
?? 	Operatore di coalescenza
== 	Equivalenza 	
=== 	Identità 	

!= 	Disuguaglianza 	
<> 	Disuguaglianza 	
!== 	Non identico',
                'created_at' => '2025-04-20 19:02:33',
                'updated_at' => '2025-04-21 08:41:06',
            'example' => 'echo (4<=5) ? "vero" : "falso" ;
echo "\\n";
echo (4<=>6)  ;',
            ),
            4 => 
            array (
                'id' => 17,
                'title' => 'Operatori concatenazione',
                'description' => '. 	Concatenazione 	stringhe
.= 	Operatore di assegnazione collegata alla stringa già presente nella variabile
array
+ 	Unione tra array usa gli indici per ordinare l\'array risultante nel caso di indici uguali mantiene il primo elemento',
                'created_at' => '2025-04-23 14:33:38',
                'updated_at' => '2025-04-23 15:28:59',
                'example' => '$txt = "ciao";
$txt .= " Mondo ";

echo $txt;
echo "\\n";

$arr1 = [0=>1,1=>2,2=>3];
$arr2 = [3=>4,4=>5,5=>6];

$arrTot = $arr1 + $arr2;
print_r($arrTot);',
            ),
        ));
        
        
    }
}
﻿
           <?php include ('../view/encabezado.php'); ?></br>



 <div id='juego'></div>
 <div id='Palabras'></div>
 
 <div><button id='solve'>Resolver el juego</button></div>
 <script>
 var words = ['Develoteca','cursos','ayuda','Videos','Tutoriales','Plugins'];
 var gamePuzzle = wordfindgame.create(words, '#juego', '#Palabras'); 
     
 var puzzle = wordfind.newPuzzle(words,{height: 18, width:18, fillBlanks: false});
 wordfind.print(puzzle);   
     
 $('#solve').click( function() {wordfindgame.solve(gamePuzzle, words);});
     
 </script>
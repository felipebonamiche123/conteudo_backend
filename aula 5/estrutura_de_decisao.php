<h2>Estrutura de decisão</h2>
<p>
    As estruturas de condição permitem executar 
    blocos distintos de código dado uma condição.

    <strong>Exemplo</strong>
    <pre>
    
        if(condicao){
            //instruções executadas
            //caso a condição seja verdadeira 
        }else{
            //instruções executadas, caso 
            //a condição seja falsa
        }
    
    
    </pre>
</p>
        10 < media >= 6    | aprovado 
        6 < media >= 3     | exame
        media < 3          |reprovado 

<?php
        $media = 7;

        if($media >= 6){
            echo "O aluno foi aprovado";     
        } else {
        if($media >= 3 ){
            echo "O aluno foi exame ";     
        }
      
        else {
            echo "O aluno foi reprovado";
        }}
?>
<p>
    O php faz a conveiçao de automatica de alguns tipos para veidadeiro e falso
    
    <strong>true</strong>
    <ul> 

         <li>string cokm texto</li>
         <li>numero moir que 0</li>
         <li>valor com elementos</li>
    </ul> 

    <strong>false</strong>
    <ul> 

         <li>string vazia</li>
         <li>numero igual a 0 </li>
         <li>vetor vasio</li>
    </ul> 
        
<?php
        if(0){
            echo "veidadeiro";     
        }
         else {
            echo "falso";
        }
?>

<?php
        $media = 7;
        
        

        if($media >= 6 && "Quero passar de ano"){
            echo "huhuuh, sou esperto ";     
        } 
        else {
            echo "ihh, me dei mal ";
        }
        ?>
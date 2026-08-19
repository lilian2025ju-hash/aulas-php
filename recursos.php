 <?php //recursos.PHP
    const Aluno = " Tiago";
    $curso = "Técnico em Informática para Internet";
    define("Escola", "Senac Penha");
    $curso = "tecnico em Informática para Internet";
    $tecnologias =[ "PHP", "SQL", "HTML", "CSS" , "JavaScript"];
    function verificaIdade(int $idade):string{
        return $idade >= 18 ? "maior" : "menor";
    }
public class Aplicacao {
    public static void main(String[] args) {
        Turma turma1 = new Turma();
        double mediaTurma;

        turma1.aluno1.prova1.notaTotal(4.0,2.5);
        turma1.aluno1.prova2.notaTotal(1.0,7.0);

        turma1.aluno2.prova1.notaTotal(4.0,2.5);
        turma1.aluno2.prova2.notaTotal(1.0,7.0);

        turma1.aluno3.prova1.notaTotal(4.0,2.5);
        turma1.aluno3.prova2.notaTotal(1.0,7.0);

        mediaTurma = turma1.CalcularMediaTurma();

        System.out.printf("A media da turma foi de: %.2f",mediaTurma);

    }
}

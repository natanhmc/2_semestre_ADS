public class Turma {
    Aluno aluno1 = new Aluno();
    Aluno aluno2 = new Aluno();
    Aluno aluno3 = new Aluno();
    public static double Media;


    public double CalcularMediaTurma(){
        Media = (aluno1.mediaAluno()+
                aluno2.mediaAluno()+
                aluno3.mediaAluno())/3;
        return Media;
    }

}

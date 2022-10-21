public class Aluno {
     Prova prova1 = new Prova();
     Prova prova2 = new Prova();

     public double media ;

     public double mediaAluno(){
          media = ((prova1.total)+(prova2.total))/2;
          return media;
     }













}

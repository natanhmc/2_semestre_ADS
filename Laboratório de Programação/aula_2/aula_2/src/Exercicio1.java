public class Exercicio1 {
    public static void main(String[] args){
        double nota1=8.5;
        double nota2=7.5;
        double nota3=6.0;
        double parcial1 = nota1*3;
        double parcial2 = nota2*2;
        double parcial3 = nota3*5;
        double media = (parcial1+parcial3+parcial2)/nota1+nota2+nota3;
        System.out.println("a media e "+media);
    }
}

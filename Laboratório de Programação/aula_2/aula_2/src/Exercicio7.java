import java.util.Scanner;
public class Exercicio7 {
    public static void main(String[] args) {
        String nome;
        float nota1;
        float nota2;
        float nota3;
        float media;
        Scanner scan = new Scanner(System.in);

        System.out.println("informe o nome do aluno: ");
        nome = scan.nextLine();

        System.out.printf("infome a primeira nota do aluno %s: ",nome);
        nota1 = scan.nextFloat();

        System.out.printf("informe a segunda nota do aluno %s: ",nome);
        nota2 = scan.nextFloat();

        System.out.printf("informe a terceira nota do aluno %s: ",nome);
        nota3 = scan.nextFloat();

        media = (nota1+nota2+nota3)/3;
        System.out.printf("A media do aluno %s foi de %.2f",nome,media);


    }
}

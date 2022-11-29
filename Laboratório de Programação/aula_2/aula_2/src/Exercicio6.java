import java.util.Scanner;
public class Exercicio6 {
    public static void main(String[] args) {

        float salario;
        float vendas;
        float comicao;
        float salarioFinal;
        String nome;
        Scanner scan = new Scanner(System.in);

        System.out.println("Informe o nome do vendedor: ");
        nome = scan.nextLine();

        System.out.printf("Informe o salario do vendedor %s :",nome);
        salario = scan.nextFloat();

        System.out.printf("Informe o total de vendas do vendedor %s: ",nome);
        vendas = scan.nextFloat();

        comicao = vendas*0.15f;
        salarioFinal= salario+comicao;
        System.out.printf("o vendedor %s ira receber um salario de %.2f ja com comicao",nome,salarioFinal);
    }
}

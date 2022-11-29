import java.util.Scanner;
public class Exercicio10 {
    public static void main(String[] args) {
        float preco;
        float percent;
        float percentual;
        float valorFinal;
        Scanner scan=new Scanner(System.in);
        System.out.println("informe o valor de custo do produto: ");
        preco = scan.nextFloat();

        System.out.println("informe o percentual de acrescimo: ");
        percent = scan.nextFloat();
        percentual = (percent/100)+1;
        valorFinal = preco*percentual;

        System.out.printf("o valor final fica %.2f",valorFinal);

    }
}

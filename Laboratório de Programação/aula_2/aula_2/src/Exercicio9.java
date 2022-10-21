import java.util.Scanner;
public class Exercicio9 {
    public static void main(String[] args) {
        float prod;
        float prest;
        Scanner scan=new Scanner(System.in);
        System.out.println("Informe o valor do produto: ");
        prod = scan.nextFloat();
        prest=prod/5;
        System.out.printf("o valor das prestacoes fica %.2f ",prest);



    }

}

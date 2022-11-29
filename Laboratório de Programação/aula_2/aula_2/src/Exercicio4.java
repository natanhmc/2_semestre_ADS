import java.util.Scanner;
public class Exercicio4 {
    public static void main(String[] args) {
        double num1;
        double num2;
        Scanner scan = new Scanner(System.in);
        System.out.println("Informe o primeiro numero: ");
        num1 = scan.nextDouble();

        System.out.println("Informe o segundo numero: ");
        num2 = scan.nextDouble();
        scan.close();

        System.out.println("A soma dos numeros da: "+ (num1+num2));


    }
}

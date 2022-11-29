import java.util.Scanner;
public class Exercicio8 {
    public static void main(String[] args) {
        int a;
        int b;
        int x;
        Scanner scan=new Scanner(System.in);
        System.out.println("informe um valor interio para a: ");
        a = scan.nextInt();

        System.out.println("Informe outro valor inteiro para a: ");
        b = scan.nextInt();

        x=a;
        a=b;
        b=x;
        System.out.printf("Agora o valor de a : %d \nE o valor de b: %d",a,b);

    }
}

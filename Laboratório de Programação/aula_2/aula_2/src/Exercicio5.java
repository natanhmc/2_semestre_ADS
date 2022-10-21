import java.util.Scanner;
public class Exercicio5 {
    public static void main(String[] args) {
        float gas;
        float dist;
        float medio;
        Scanner scan = new Scanner(System.in);
        System.out.println("Informe a distancia percorrida:");
        dist = scan.nextFloat();
        System.out.println("Informe a quantidade de gasolina gasta:");
        gas = scan.nextFloat();
        scan.close();
        medio=gas/dist;
        System.out.printf("o consumo medio foi de : %f",medio);



    }
}

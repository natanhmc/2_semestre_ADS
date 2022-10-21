import java.util.Scanner;
public class exer_4_raizQuadarada {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        double arrayA[] = new double[15];
        double arrayB[] = new double[15];
        for (int i = 0; i < arrayA.length; i++) {
            System.out.printf("informe o %d elemento do vetorA\n", i);
            arrayA[i] = scan.nextDouble();
            arrayB[i] = Math.sqrt(arrayA[i]);
        }
        for (int i = 0; i < arrayA.length; i++) {
            System.out.printf("o valor do indice %d do arrayB e: %.2f que e a raiz quadrada do arrayA %.0f\n", i, arrayB[i], arrayA[i]);
        }
    }
}

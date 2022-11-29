import java.util.Scanner;
public class exer_3_quadradoArray {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        double arrayA[]= new double[15];
        double arrayB[]= new double[15];
        for (int i=0;i< arrayA.length;i++){
            System.out.printf("informe o %d elemento do vetorA\n",i);
            arrayA[i] = scan.nextDouble();
            arrayB[i] = (arrayA[i]*arrayA[i]);
        }
        for (int i=0;i< arrayA.length;i++){
            System.out.printf("o valor do indice %d do arrayB e: %.0f que equivale ao quadrado do arrayA %.0f\n",i,arrayB[i],arrayA[i]);
        }

    }
}

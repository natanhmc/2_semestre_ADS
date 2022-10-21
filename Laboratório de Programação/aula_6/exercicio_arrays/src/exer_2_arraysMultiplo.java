import java.util.Scanner;

public class exer_2_arraysMultiplo {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        int arrayA[]= new int[8];
        int arrayB[]= new int[arrayA.length];

        for (int i=0;i< arrayA.length;i++){
            System.out.printf("informe %d valor para o arrayA\n",i+1);
            arrayA[i] = scan.nextInt();
            arrayB[i]= (arrayA[i]*2);
        }
        for (int i=0;i< arrayA.length;i++){
            System.out.printf("o valor do indice %d do arrayB e: %d\n",i,arrayB[i]);
        }
    }
}

import java.util.Scanner;
public class Exer5_palavraImpropria {
    public static void main(String[] args) {
        String frase;
        Scanner scan = new Scanner(System.in);
        System.out.println("insira uma frase:");
        frase = scan.nextLine();

        if ((frase.indexOf("sexo")>1) || (frase.indexOf("sexual")>1)){
            System.out.println("Texto improprio!!!");
        }else {
            System.out.println("texto liberado!!");
        }

    }
}

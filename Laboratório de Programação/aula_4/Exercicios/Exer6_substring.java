import java.util.Scanner;
public class Exer6_substring {
    public static void main(String[] args) {
        String frase;
        Scanner scan = new Scanner(System.in);

        System.out.println("informe uma frase:");
        frase = scan.nextLine();

        System.out.println(frase.substring(0,(frase.length()-1)));

    }
}

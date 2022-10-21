import java.util.Scanner;

public class Exer4_invertFrase {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String str;

        System.out.println("Insira uma frase:");
        str = scan.nextLine();
        System.out.println(str);
        StringBuilder strb = new StringBuilder(str);
        str = strb.reverse().toString().trim();
        System.out.println(str);

    }
}

import java.util.Scanner;

public class Exemplo {
    public static void main(String[] args) {
        int i;
        float f;
        char c;
        String s=new String();
        Scanner tc = new Scanner(System.in);
        System.out.println("digite um int");
        i=tc.nextInt();

        System.out.println("o inteiro digitado foi " +i);

    }
    public static void Exeption(String[] args){
        int e;
        try{
            Scanner tc = new Scanner(System.in);
            System.out.println("digite um int");
            e=tc.nextInt();
        }catch (Exception ex){
            System.out.println("Errorr");
        }
    }

}

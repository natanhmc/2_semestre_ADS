import javax.swing.*;

public class length {
    public static void main(String[] args) {
        String frase = JOptionPane.showInputDialog("digite algo:");
        int tam = frase.length();
        System.out.println(tam);
        System.out.println(frase.charAt(0));
        System.out.println(frase.toLowerCase());
        System.out.println(frase.toUpperCase());
        System.out.println(frase.substring(9));
        System.out.println(frase.substring(0,8));
        System.out.println(frase.indexOf("jkl"));
    }
}
